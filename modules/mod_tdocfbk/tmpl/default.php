<?php
/**
* @package   TDOC Facebook Display
* @copyright Copyright (C) 2021. All rights reserved.
* @license   http://www.gnu.org/licenses/gpl-3.0.html
* @version   4.0.1 8-feb-21 15:22 Updated function call to en_GB/sdk.js#xfbml=1&version=v9.0
* 			 4.0.2 8-feb-21 16:03 Altered order in "joomla_sharethis", re-ordered variables 
*            4.0.3 8-feb-21 10:13 Added small_header per fb list 
*            4.1.0 8-feb-21 21:20 background and border xx'd
*            4.2.0 18-feb-21 renamed files as mod_tdoc_fbk etc
*            4.2.1 23-mar-21 removed & before JFactory call, tidied scripts etc
*            4.2.2 30-apr-21 made stable
*            4.2.3 03-may-21 sorted installer spacers
*            4.3.1 05-sep-22 upgrade facebook script
*            5.3.1 26-apr-24 upgrade to J5 new style - Modified per robbiej - https://forum.joomla.org/viewtopic.php?f=833&t=1008461
**/

// No direct access

defined('_JEXEC') or die('Restricted access'); 

/** new code **/
use Joomla\CMS\Factory;

/** updated code **/
/** $doc = JFactory::getDocument(); **/
$doc = Factory::getDocument();

/** hidden text fields passed in xml **/
/** $moduleclass_sfx = $params->get('moduleclass_sfx'); not needed **/
$apikey       = $params->get('apikey');

/** facebook settings **/
$baseurl      = $params->get('facebook_url','null');
$stream       = $params->get('stream');
$show_faces   = $params->get('show_faces',false);
$hide_cover   = $params->get('hide');
$small_header = $params->get('header',true);
$connections  = $params->get('connections');

/** dimensions **/
$width   = $params->get('width', 350);
$height  = $params->get('height',700);

?>

<!-- https://stackoverflow.com/questions/12743856/clicking-the-like-in-the-website-should-like-in-facebook -->
<!-- see facebook sample code for GB version 9.0 --> 
      <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>  

   <div class="fb-page"
          appId="<?php echo $apikey;?>"  
          data-href="<?php echo $baseurl;?>" 
          data-tabs="timeline" 
          data-hide-cover="<?php echo $hide_cover;?>"
          data-show-facepile="<?php echo $show_faces;?>"
          data-small-header="<?php echo $small_header;?>" 
          data-adapt-container-width="true" 
          data-show-posts="<?php echo $stream;?>"
          data-width="<?php echo $width;?>"
          data-height="<?php echo $height;?>"
          >
   </div>




