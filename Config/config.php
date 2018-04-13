<?php
/**
 * @package
 * @author      Fisher BRINK.
 * @date        5/3/17
 * @time        5:37 AM
 * @copyright   (c) 2014 - 2015, G-Corp
 * @link        http://www.hachther.com
 * @email       fisher.brink@gmail.com
 */

return array(
	'name' => 'Sitemap',
	'description' => 'Plugin for sitemap generation of landing pages',
	'version' => '1.0',
	'author' => 'Hachther Co.',

	'routes' => [
        'public' => [
            'mautic_sitemap_index' => [
                'path'         => '/sitemap.{_format}',
                'controller'   => 'MauticSitemapBundle:Public:sitemap',
                'defaults'     => [
                    '_format' => 'xml'
                ]
            ],
        ]
	],
);