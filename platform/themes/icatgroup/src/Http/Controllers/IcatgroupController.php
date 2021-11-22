<?php

namespace Theme\Icatgroup\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\SeoHelper\SeoOpenGraph;
use Botble\Theme\Http\Controllers\PublicController;
use SeoHelper;

class IcatgroupController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex(BaseHttpResponse $response)
    {
        return parent::getIndex($response);
    }

    /**
     * {@inheritDoc}
     */
    public function getView(BaseHttpResponse $response, $key = null)
    {
        return parent::getView($response, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }
    public function getRecruitment(){

        return \Theme::scope('rescuitment')->render();
    }

    public function goMarkets(){
        //return \Theme::scope('rescuitment')->render();

        SeoHelper::setTitle('GO Markets')
            ->setDescription('GO Markets đối tác giao dịch quỹ hàng đầu tại Úc');

        $meta = new SeoOpenGraph;
        $meta->setImage('https://icatgroup.vn/storage/chelsea.png');
        $meta->setDescription('GO Markets đối tác giao dịch quỹ hàng đầu tại Úc');
        $meta->setUrl('https://icatgroup.vn/go-markets');
        $meta->setTitle('GO Markets');
        $meta->setType('article');

        SeoHelper::setSeoOpenGraph($meta);


        return \Theme::layout('landing_go')->scope('landing.gomarkets')->render();
    }
}
