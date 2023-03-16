<?php

namespace spbhlpr\Notices;

if (!defined('WPINC')) {
    die;
}

class NoticeData
{
    public static function GetData()
    {
        return self::$NOTICE_DATA;
    }

    private static $NOTICE_DATA = array(
        array(
            "Identity" => "superbpagespeed-notice",
            "Title" => "Run a free website speed test and learn how to make your website faster.",
            "Description" => "Take a free speed test to see how fast & SEO-optimized your WordPress website is, and get simple tips on how to improve it easily.",
            "Buttons" => array(
                array(
                    "Title" => "Check Page Speed",
                ),
                array(
                    "Title" => "Read More",
                )
            ),
            "CSS" => "div#screen-meta-links ~ div#spbhlpr-notice-notice { margin:50px 0 20px; } #spbhlprpro-notice-notice {display:none;} .spbhlpr-notice-notice { box-sizing: border-box; width: 100%; padding: 20px; background: white; box-shadow: 0 2px 4px rgba(20, 40, 80, 0.2); border-radius: 3px; font-size: 15px; line-height: 1.5; transform: translate3d(0, 0, 0); margin: 20px 0 20px; width:100%; width: -webkit-calc(100% - 20px); width: -moz-calc(100% - 20px); width: calc(100% - 20px); } .spbhlpr-notice-message { align-items:center; } @keyframes superb-notice-fadein { 0% { transform: translate3d(0, 128px, 0); opacity: 0; } 100% { transform: translate3d(0, 0, 0); opacity: 100; } } .spbhlpr-notice-message > p { margin: 0; padding: 0; width: 100%; font-size: 16px; color: #424242; max-width: 870px; } .spbhlpr-notice-message > p:before { content: ' '; display: block; background: url(https://superbthemes.com/wp-content/uploads/2023/01/speed-icon.png); height: 75px; width: 75px; background-size: 100%; float: left; margin: 0px 20px 10px 0px; } .spbhlpr-notice-message > p span { display: block; font-weight: bold; font-size: 19px; } .spbhlpr-notice-message a, .spbhlpr-notice-message button { background: #eee; margin: 20px 20px 0px 0; border: 0px; color: #333; padding: 11px 20px; text-align: center; outline: none; white-space: nowrap; border-radius: 3px; text-decoration: none; font-size: 13px; min-height: 42px; font-weight: 500; border: 2px solid #eee; line-height: 1; letter-spacing: 0; } .spbhlpr-notice-message a:first-of-type { color: #fff; background:#65d49a; border:2px solid #65d49a; } .spbhlpr-notice-message a:nth-of-type(2) { color: #65d49a; background:#fff; border:2px solid #65d49a; } .spbhlpr-notice-message button:last-of-type { background: rgba(0,0,0,0); border: 0px; border-bottom: 1px solid #e0e0e0; border-radius:0px; width: auto; padding: 0px 0px 3px 0px; min-height:0; color: #c71f1f; margin-left:10px; } @media screen and (max-width: 985px) { .spbhlpr-notice-message button:first-of-type { margin-right:30px; } .spbhlpr-notice-message button:last-of-type { margin-left:0; } } @media screen and (max-width: 600px) { .spbhlpr-notice-message a, .spbhlpr-notice-message button { display: block; height: auto; min-height: 0; width: 100%; text-align: center; box-sizing: border-box; margin-left: auto !important; margin-right: auto; } .spbhlpr-notice-message > p:before { margin:0px auto 20px auto; float:none; } }"
        ),
    );
}
