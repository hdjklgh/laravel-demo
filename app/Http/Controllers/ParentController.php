<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class ParentController extends Controller
{
    /**
     * µ±Ç°¸¸Ä¿Â¼
     *
     * @var $prefix
     */
    protected $prefix;

    public function __construct()
    {
    }

    /**
     * @desc:
     * @author:Gavin
     * @param null $view_path
     * @param array $params
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function view($view_path = null, $params = [])
    {
        $route = \Route::current()->getActionName();
        $route_arr = explode("\\", $route);
        $controller_action = end($route_arr);
        list($controller, $action) = explode('@', $controller_action);
        $controller = str_ireplace('controller', '', $controller);
        $view_path = isset($view_path) ? $view_path : strtolower($this->prefix.'.'.$controller.'.'.$action);
        return view($view_path, $params);
    }
}
