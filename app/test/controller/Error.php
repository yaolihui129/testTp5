<?php
namespace app\test\controller;

class Error  extends Common{
    public function index(){
        //空控制器跳转404
        return $this->fetch('public/404');
    }
}
