<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests;
use App\Libraries\Tools;

class SiteController extends AdminController
{
    /**
     * @desc: 加载首页左侧菜单以及整体模板
     * @author:Gavin
     */
    public function index()
    {
        return $this->view();
    }

    /**
     * @desc: 获取菜单列表
     * @author:Gavin
     * @return array
     */
    public function getMenu()
    {

        $navs = [
            [
                'title' => '房源查询',
                'icon' => '&#xe606;',
                'href' => 'site/t1',
                'spread' => false
            ],
            [
                'title' => '招商入驻',
                'icon' => '&#xe614;',
                'spread' => false,
                'children' => [
                    [
                        'title' => '约定入驻',
                        'icon' => '',
                        'href' => 'business/reserve.html'
	                ]
                ]
            ]
        ];
        return Tools::ajaxReturn(true, 'success', $navs);
    }

    /**
     * @desc:首页
     * @author:Gavin
     */
    public function home()
    {
        return $this->view();
    }

    public function t1()
    {
        return $this->view();
    }

    public function t2()
    {
        return $this->view();
    }
}
