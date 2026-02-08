<?php
/**
 * Sermon Add-On for SP Page Builder
 * @package SP Page Builder
 * @author Your Name
 * @copyright Copyright (c) 2026 Your Name
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

// Renamed class from SPPageBuilderAddonCustom_Button to SPPageBuilderAddonSermon
class SPPageBuilderAddonSermon extends SPPageBuilderAddonBase
{
    // Render the sermon add-on (replaced button logic with sermon logic)
    public function render()
    {
        // Get add-on settings from the XML
        $settings = $this->addon->settings;
        
        // Set fallback defaults for sermon fields (prevents empty values)
        $this->addon->settings->sermon_title = isset($settings->sermon_title) ? $settings->sermon_title : "The Power of Faith";
        $this->addon->settings->preacher_name = isset($settings->preacher_name) ? $settings->preacher_name : "Pastor John Doe";
        $this->addon->settings->sermon_date = isset($settings->sermon_date) && !empty($settings->sermon_date) ? $settings->sermon_date : date('Y-m-d');
        $this->addon->settings->audio_link = isset($settings->audio_link) ? $settings->audio_link : "#";
        $this->addon->settings->sermon_excerpt = isset($settings->sermon_excerpt) ? $settings->sermon_excerpt : "A short reflection on faith.";
        $this->addon->settings->accent_color = isset($settings->accent_color) ? $settings->accent_color : "#8B4513";

        // Load the sermon template (tmpl/default.php)
        return $this->loadTemplate('default');
    }

    // Updated admin preview (shows a mock sermon card instead of a button)
    public function admin_style()
    {
        $title = $this->addon->settings->sermon_title ?? "The Power of Faith";
        $preacher = $this->addon->settings->preacher_name ?? "Pastor John Doe";
        
        return '<div class="sppb-addon-preview" style="padding: 15px; background: #f8f9fa; border-radius: 8px; border-left: 4px solid #8B4513;">
                    <h4 style="margin: 0 0 8px 0; color: #333;">' . $title . '</h4>
                    <p style="margin: 0 0 8px 0; color: #666; font-size: 14px;">By ' . $preacher . '</p>
                    <p style="margin: 0; color: #888; font-size: 12px;">Sermon Preview</p>
                </div>';
    }
}