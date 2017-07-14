<?php
namespace app\common\controller;

use think\Controller;

class Base extends Controller
{

    //成功返回
    protected function suc($data='',$code=200){
        $this->result($data,$code);
    }

    //失败返回
    protected function err($msg,$code=400){
         $this->result('',$code,$msg);
    }

    //参数验证
    protected function valid($rules){
        $data = [];
        $rules = rulesToArr($rules);
        foreach ($rules as $key => $rule) {
            $default = null;
            if(isset($rule['default'])){
                $default = $rule['default'];
                unset($rules[$key]['default']);
            }
            $value = input($key,$default);
            if($value!==null){
                $data[$key] = $value;
            }
        }
        $validate = new \app\common\service\Validate($rules);
        $result = $validate->check($data);
        if(!$result){
            $this->err($validate->getError());
        }
        return $data;
    }

}