<?php
// Joomla 核心安全验证：禁止直接访问文件
defined('_JEXEC') or die('Restricted access');

// 初始化所有自定义字段值（默认空字符串）
$speaker = '';
$sermontitle = '';
$youtubeUrl = '';
$coverImage = '';
$mp4Url = '';
$mp3Url = '';

// 遍历Joomla自定义字段数组，匹配字段name取值
if (!empty($this->item->jcfields)) {
    foreach ($this->item->jcfields as $field) {
        // 匹配講員字段（name=speaker）
        if ($field->name === 'speaker') {
            $speaker = $field->value ?? '';
        }
        // 匹配講道標題字段（name=sermon-title）
        if ($field->name === 'sermon-title') {
            $sermontitle = $field->value ?? '';
        }
        // 匹配YouTube链接/ID字段（name=youtube-link）
        if ($field->name === 'youtube-link') {
            $youtubeUrl = $field->value ?? '';
        }
        // 匹配封面图字段（name=cover-image）- 处理HTML标签问题
        if ($field->name === 'cover-image') {
            $coverImage = $field->value ?? '';
        }
        // 匹配MP4下载链接字段（name=mp4-link）
        if ($field->name === 'mp4-link') {
            $mp4Url = $field->value ?? '';
        }
        // 匹配MP3下载链接字段（name=mp3-link）
        if ($field->name === 'mp3-link') {
            $mp3Url = $field->value ?? '';
        }
    }
}

// 核心修复：移除弃用的mb_convert_encoding，兼容PHP 8.2+
function extractImgSrc($html) {
    if (empty($html)) return '';
    
    // 创建DOM对象解析HTML
    $dom = new DOMDocument();
    // 抑制HTML解析警告（兼容不规范的标签）
    libxml_use_internal_errors(true);
    
    // 修复点1：移除mb_convert_encoding，改用UTF-8头声明 + 直接加载HTML
    $html = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $html;
    $dom->loadHTML($html);
    
    libxml_clear_errors();
    
    // 查找第一个img标签
    $img = $dom->getElementsByTagName('img')->item(0);
    // 返回src属性值（无则返回空）
    return $img ? $img->getAttribute('src') : '';
}

// 提取纯图片路径
$pureImagePath = extractImgSrc($coverImage);

// 处理字段数据：拼接完整链接/路径
// 1. YouTube链接：兼容ID或完整链接
$fullYoutubeUrl = '';
if ($youtubeUrl) {
    if (strpos($youtubeUrl, 'youtube.com/embed/') === false) {
        $fullYoutubeUrl = "https://www.youtube.com/embed/{$youtubeUrl}?rel=0&autoplay=1";
    } else {
        $fullYoutubeUrl = $youtubeUrl;
    }
}

// 2. 封面图路径：拼接网站根域名（使用提取后的纯路径）
$fullCoverImageUrl = $pureImagePath ? JUri::root() . ltrim($pureImagePath, '/') : '';

// 渲染动态模板（仅当核心信息存在时显示）
if ($speaker || $sermontitle || $fullYoutubeUrl || $fullCoverImageUrl || $mp4Url || $mp3Url) :
?>
<div class="astroid-article-pageheading" id="ph-61d41c0e94d0d065251307"><h1>網上聽道</h1></div>
  <div class="astroid-article-title" id="t-61b9bb50c0a7c455878112"><h2><?php if ($sermontitle) echo htmlspecialchars($sermontitle); ?></h2></div>

<div class="sermon">

  <span class="sermon-title"><?php if ($speaker) echo '講員：' . htmlspecialchars($speaker); ?></span>


    <!-- YouTube视频链接 + 封面图 -->
    <?php if ($fullYoutubeUrl && $fullCoverImageUrl) : ?>
    <br><a class="jcemediabox" 
       href="<?php echo htmlspecialchars($fullYoutubeUrl); ?>" 
       data-mediabox="youtube" 
       data-mediabox-width="900" 
       data-mediabox-height="506">
        <img class="videoimg" 
             src="<?php echo htmlspecialchars($fullCoverImageUrl); ?>" 
             alt="<?php echo htmlspecialchars($sermontitle ?: $speaker ?: '講道視頻'); ?>" 
             width="100%" height="100%">
    </a><br>
    <?php endif; ?>

    <!-- MP4/MP3下载链接 -->
    <?php if ($mp4Url || $mp3Url) : ?>
    <small>下載講道 
        <?php if ($mp4Url) : ?>
        <a href="<?php echo htmlspecialchars($mp4Url); ?>" target="_blank" rel="noopener noreferrer">MP4</a>
        <?php endif; ?>
        <?php if ($mp4Url && $mp3Url) : ?>/<?php endif; ?>
        <?php if ($mp3Url) : ?>
        <a href="<?php echo htmlspecialchars($mp3Url); ?>" target="_blank" rel="noopener noreferrer">MP3</a>
        <?php endif; ?>
    </small>
    <?php endif; ?>
</div>
<?php endif; ?>