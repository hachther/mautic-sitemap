<?php
/**
 * @author      Hachther Co.
 * @date        12/04/2018
 * @time        20:04
 * @copyright   (c) 2018, Hachther Co.
 * @link        https://www.hachther.com
 * @email       contact@hachther.com
 */

namespace MauticPlugin\MauticSitemapBundle\Controller;


use Mautic\CoreBundle\Controller\CommonController;
use Mautic\PageBundle\Model\PageModel;
use Symfony\Component\HttpFoundation\Request;

class PublicController extends CommonController
{
    public function sitemapAction(Request $request)
    {
        $format = $request->getRequestFormat();
        /** @var PageModel $model */
        $model = $this->getModel('page');
        $pages = $model->getRepository()->getPageList('', 0, 0, true, 'variant', []);

        return $this->render("MauticSitemapBundle:Public:sitemap.$format.php", ['pages' => $pages, 'model' => $model]);
    }
}