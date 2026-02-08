<?php
/**
 * Frontend Template for Sermon Add-On
 * Prevent direct access
 */
defined('_JEXEC') or die;

// Get sermon settings from the PHP class
$sermon_title = $this->addon->settings->sermon_title;
$preacher_name = $this->addon->settings->preacher_name;
$sermon_date = $this->addon->settings->sermon_date;
$audio_link = $this->addon->settings->audio_link;
$sermon_excerpt = $this->addon->settings->sermon_excerpt;
$accent_color = $this->addon->settings->accent_color;

// Format date to be more readable (e.g., "January 15, 2026")
$formatted_date = date('F j, Y', strtotime($sermon_date));
?>

<!-- Sermon Card Layout (replaces button HTML) -->
<div class="sppb-sermon-card" style="
    max-width: 400px; 
    margin: 10px 0; 
    border: 1px solid #e0e0e0; 
    border-radius: 8px; 
    overflow: hidden; 
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
">
    <!-- Sermon Card Header (with accent color) -->
    <div class="sppb-sermon-header" style="
        background-color: <?php echo $accent_color; ?>; 
        color: white; 
        padding: 15px;
    ">
        <h3 style="margin: 0; font-size: 18px; font-weight: 600;"><?php echo $sermon_title; ?></h3>
        <p style="margin: 5px 0 0 0; font-size: 14px; opacity: 0.9;">
            By <?php echo $preacher_name; ?> | <?php echo $formatted_date; ?>
        </p>
    </div>

    <!-- Sermon Card Body -->
    <div class="sppb-sermon-body" style="padding: 15px;">
        <p style="margin: 0 0 15px 0; color: #555; line-height: 1.5;"><?php echo $sermon_excerpt; ?></p>
        
        <!-- Audio Player (if audio link is provided) -->
        <?php if ($audio_link && $audio_link !== "#"): ?>
            <audio controls style="width: 100%; border-radius: 4px;">
                <source src="<?php echo $audio_link; ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        <?php else: ?>
            <p style="color: #777; font-size: 14px; font-style: italic;">No audio link provided</p>
        <?php endif; ?>
    </div>
</div>

<!-- Optional: Responsive styling for mobile -->
<style>
    @media (max-width: 480px) {
        .sppb-sermon-card {
            max-width: 100% !important;
        }
    }
</style>