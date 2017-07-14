<?php
namespace app\home\controller;

use think\Controller;

class Index extends Controller
{

    public function index(){
        $rules = [
            'id' => 'require'
        ];
        $params = $this->valid($rules);
        //逻辑代码

        $this->suc();
    }


}
