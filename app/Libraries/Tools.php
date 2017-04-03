<?php

/**
 * 工具类
 */

namespace App\Libraries;

class Tools
{
    /**
     * @author:greg
     * @desc:用于ajax请求的数据返回格式
     * @param bool|true $flag 请求状态，true表示接受并完成处理
     * @param string $msg   文字信息，默认为空
     * @param array $data   附加数据，默认为空数组
     * @return array
     */
    public static function ajaxReturn($flag = true, $msg = '', $data = [])
    {
        return ['flag' => $flag, 'msg' => $msg, 'data' => $data];
    }
    
    //获取4~8位随机字符
    private static function getRandChar(){
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $length =5;
        $max = strlen($strPol)-1;

        for($i=0;$i<$length;$i++){
            $str.=$strPol[mt_rand(0,$max)];
        }

        return $str;
    }
}