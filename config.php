<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'The Curse of Strahd',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',

    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    'session_04' => require_once('navigation/session_04.php'),
    'session_05' => require_once('navigation/session_05.php'),

    'tser_pool_encampment' => require_once('navigation/tser-pool-encampment.php'),
    'vallaki' => require_once('navigation/vallaki.php'),

    'characters' => require_once('navigation/characters.php'),
    'nav_travel' => require_once('navigation/travel.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    'collections' => [
        'sessions',
        'pages',
        'locations',
        'recaps'
    ]
];
