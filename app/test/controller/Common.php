<?php
namespace app\test\controller;
use think\Controller;
use think\Request;


class Common  extends Controller{
    public function _empty(){        
        //空操作跳转404
        return $this->fetch('public/404');
    }
    
    function web_info(){
        session('ip',request()->ip());
        $_SESSION['browser']=GetBrowser();
        $_SESSION['os']=GetOs();
    }
}