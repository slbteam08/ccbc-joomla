<?php
/**
 * Event Blog Item - Keeps all original params/config
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Administrator\Extension\ContentComponent;
use Joomla\Component\Content\Site\Helper\RouteHelper;

$params = $this->item->params;
$canEdit = $params->get('access-edit');
$info = $params->get('info_block_position', 0);
$assocParam = (Associations::isEnabled() && $params->get('show_associations'));

$currentDate = Factory::getDate()->format('Y-m-d H:i:s');
$isUnpublished = ($this->item->state == ContentComponent::CONDITION_UNPUBLISHED || $this->item->publish_up > $currentDate)
    || ($this->item->publish_down < $currentDate && $this->item->publish_down !== null);

// === CUSTOM FIELDS LOGIC ===
$youtubeUrl = ''; $coverImage = ''; 
if (!empty($this->item->jcfields)) {
    foreach ($this->item->jcfields as $field) {
        switch ($field->name) {
            //case 'speaker': $speaker = $field->value ?? ''; break;
           //case 'sermon-title': $sermontitle = $field->value ?? ''; break;
            case 'event-link': $youtubeUrl = $field->value ?? ''; break;
            case 'event-cover-image': $coverImage = $field->value ?? ''; break;
            //case 'mp4-link': $mp4Url = $field->value ?? ''; break;
            //case 'mp3-link': $mp3Url = $field->value ?? ''; break;
        }
    }
}

// SAFE FUNCTION - Prevents redeclare
if (!function_exists('extractSermonImgSrc')) {
    function extractSermonImgSrc($html) {
        if (empty($html)) return '';
        $dom = new DOMDocument(); 
        libxml_use_internal_errors(true);
        $html = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $html;
        $dom->loadHTML($html); 
        libxml_clear_errors();
        $img = $dom->getElementsByTagName('img')->item(0);
        return $img ? $img->getAttribute('src') : '';
    }
}

$pureImagePath = extractSermonImgSrc($coverImage);
$fullYoutubeUrl = $youtubeUrl ? (strpos($youtubeUrl, 'youtube.com/embed/') === false ? "https://www.youtube.com/embed/{$youtubeUrl}?rel=0&autoplay=1" : $youtubeUrl) : '';
$fullCoverImageUrl = $pureImagePath ? Uri::root() . ltrim($pureImagePath, '/') : '';


?>

<?php echo LayoutHelper::render('joomla.content.intro_image', $this->item); ?>

<div class="item-content">
    <?php if ($isUnpublished) : ?><div class="system-unpublished"><?php endif; ?>

    <?php echo LayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>

    <?php if ($canEdit) : ?>
        <?php echo LayoutHelper::render('joomla.content.icons', ['params' => $params, 'item' => $this->item]); ?>
    <?php endif; ?>

    <?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
        || $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') || $assocParam); ?>

    <?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
        <?php echo LayoutHelper::render('joomla.content.info_block', ['item' => $this->item, 'params' => $params, 'position' => 'above']); ?>
    <?php endif; ?>

    <?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
        <?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
    <?php endif; ?>

    <!-- === YOUR CUSTOM Event CONTENT (replaces introtext) === -->
    <?php if ($fullYoutubeUrl || $fullCoverImageUrl) : ?>
    <div class="event">
        <?php if ($fullYoutubeUrl && $fullCoverImageUrl) : ?>
        <a class="jcemediabox" href="<?php echo htmlspecialchars($fullYoutubeUrl); ?>" data-mediabox="youtube" data-mediabox-width="900" data-mediabox-height="506">
            <img src="<?php echo htmlspecialchars($fullCoverImageUrl); ?>" alt="<?php echo htmlspecialchars($sermontitle); ?>" class="event-thumb" />
        </a>
        <?php endif; ?>

    </div>
    <?php endif; ?>

    <!-- Keep original introtext as fallback -->
    <?php if ($params->get('show_intro')) : ?>
        <?php echo $this->item->introtext; ?>
    <?php endif; ?>

    <?php if ($info == 1 || $info == 2) : ?>
        <?php if ($useDefList) : ?>
            <?php echo LayoutHelper::render('joomla.content.info_block', ['item' => $this->item, 'params' => $params, 'position' => 'below']); ?>
        <?php endif; ?>
        <?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
            <?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($params->get('show_readmore') && $this->item->readmore) :
        if ($params->get('access-view')) :
            $link = Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
        else :
            $menu = Factory::getApplication()->getMenu();
            $active = $menu->getActive();
            $itemId = $active->id;
            $link = new Uri(Route::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false));
            $link->setVar('return', base64_encode(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)));
        endif;
        echo LayoutHelper::render('joomla.content.readmore', ['item' => $this->item, 'params' => $params, 'link' => $link]);
    endif; ?>

    <?php if ($isUnpublished) : ?></div><?php endif; ?>

    <?php echo $this->item->event->afterDisplayContent; ?>
</div>
