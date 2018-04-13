<?php
/**
 * @author      Hachther Co.
 * @date        12/04/2018
 * @time        20:48
 * @copyright   (c) 2018, Hachther Co.
 * @link        https://www.hachther.com
 * @email       contact@hachther.com
 */

echo '<?xml version="1.0" encoding="UTF-8" ?>';

/** @var \Mautic\PageBundle\Model\PageModel $model */
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
         xmlns:xhtml="http://www.w3.org/1999/xhtml">

    <?php
    foreach ($pages as $page):
        /** @var \Mautic\PageBundle\Entity\Page $entity */
        $entity = $model->getEntity($page['id']);
        if ($entity->isPublished()): ?>
        <url>
            <loc><?php echo $model->generateUrl($entity)?></loc>
            <?php if (!is_null($entity->getDateModified()) || !is_null($entity->getDateAdded())) : ?>
                <lastmod><?php echo (($entity->getDateModified() != null) ? $entity->getDateModified() : $entity->getDateAdded())->format('Y-m-d')?></lastmod>
            <?php endif; ?>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endif; endforeach; ?>
</urlset>