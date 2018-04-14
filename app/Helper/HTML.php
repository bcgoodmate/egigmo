<?php

namespace App\Helpers;

class HTML
{
    public static function sanitize($html)
    {
        $config = \HTMLPurifier_Config::createDefault();

        // Set up cache
        $cache_path = storage_path('htmlpurifier/cache');
        if ( ! is_dir($cache_path)) {
            mkdir($cache_path, 755, true);
        }
        $config->set('Cache.SerializerPath', $cache_path);

        // Allow whitelisted embeds
        $config->set('HTML.SafeIframe', true);

        // Whitelist YouTube, Vimeo, Google Docs, and Microsoft Office Online
        $config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video|docs\.google\.com/.*/embed|onedrive\.live\.com/embed)%');

        // Allow fullscreen embeds
        $def = $config->getHTMLDefinition(true);
        $def->addAttribute('iframe', 'allowfullscreen', 'Bool');
        $def->addAttribute('iframe', 'mozallowfullscreen', 'Bool');
        $def->addAttribute('iframe', 'webkitallowfullscreen', 'Bool');

        $purifier = new \HTMLPurifier($config);
        return $purifier->purify($html);
    }
}