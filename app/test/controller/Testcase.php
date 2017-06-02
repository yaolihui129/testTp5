<?php
namespace app\test\controller;

class Testcase  extends Common{
    
    public function index(){
        $name=12;
        $this->assign("name",$name);
        return $this->fetch();       
    }
}
