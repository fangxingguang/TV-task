<?php
/**
 * Created by PhpStorm.
 * User: fangxingguang
 * Date: 2017/7/12
 * Time: 11:56
 */
namespace app\common\behavior;
//开启跨域
class Cors
{
    public function run(&$params)
    {
        // 行为逻辑
        if(isset($_SERVER['HTTP_ORIGIN'])){
            header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        }
    }
}