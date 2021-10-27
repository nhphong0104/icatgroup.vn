<?php

namespace Theme\Icatgroup\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Theme\Http\Controllers\PublicController;

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
}
