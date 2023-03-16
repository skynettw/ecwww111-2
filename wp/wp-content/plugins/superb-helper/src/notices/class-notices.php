<?php

namespace spbhlpr\Notices;

use spbhlpr\Notices\NoticeData;

use Exception;

if (!defined('WPINC')) {
    die;
}

class NoticeController
{
    private $db;
    private $spbhlpr_notices;
    private $disable = false;
    public function __construct()
    {
        add_action('admin_notices', array($this, 'superbhelper_notices'));
    }

    public function superbhelper_notices()
    {
        $this->recommended_notices();
    }

    private function recommended_notices()
    {
        try {
            $start = filemtime(__FILE__);
            if (strtotime("+3 days", $start) > time()) {
                return false;
            }

            $this->spbhlpr_notices = NoticeData::GetData();
        } catch (Exception $ex) {
            return false;
        }

        try {
            $current_notice_idx = 0;

            $default_link = 'https://superbthemes.com/redirect-to/?SPR=%s&SPK=%s';
            $current_notice = $this->spbhlpr_notices[$current_notice_idx];
            $current_identity = $current_notice['Identity'];
            if (isset($_COOKIE['spbhlpr-notice-never'])) {
                $never_cookie = json_decode(stripslashes($_COOKIE['spbhlpr-notice-never']));
                if (isset($never_cookie->$current_identity) && $never_cookie->$current_identity === true) {
                    return false;
                }
            }
            if (isset($_COOKIE['spbhlpr-notice-later'])) {
                $later_cookie = json_decode(stripslashes($_COOKIE['spbhlpr-notice-later']));
                if (isset($later_cookie->$current_identity) && is_numeric($later_cookie->$current_identity) && strtotime("+2 days", $later_cookie->$current_identity) > time()) {
                    return false;
                }
            }
            $slug = explode('-notice', $current_notice['Identity'])[0];
        } catch (Exception $ex) {
            return false;
        }
        $key = "helperfree";
        $current_notice['Link'] = sprintf($default_link, $slug, $key); ?>
        <div class="spbhlpr-notice-notice" id="spbhlpr-notice-notice">
            <style>
                <?php echo $current_notice['CSS']; ?>
            </style>
            <div class="spbhlpr-notice-message">
                <p>
                    <span><?php echo esc_html($current_notice['Title']); ?></span>
                    <?php echo esc_html($current_notice['Description']); ?>
                </p>
                <?php
                foreach ($current_notice['Buttons'] as &$button) { ?>
                    <a href="<?php echo esc_url($current_notice['Link']); ?>" target="_blank" rel="nofollow noopener"><?php echo esc_html($button['Title']); ?></a>
                <?php }
                unset($button); ?>
                <button type="button" id="spbhlpr_notice_later" data-element="<?php echo esc_attr($current_notice['Identity']); ?>" data-time="<?php echo esc_attr(time()); ?>">Ask me later</button>
                <button type="button" id="spbhlpr_notice_never" data-element="<?php echo esc_attr($current_notice['Identity']); ?>">Don't show me this again</button>
            </div>
        </div>
<?php
    }
}
