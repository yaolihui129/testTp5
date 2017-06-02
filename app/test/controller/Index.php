<?php
namespace app\test\controller;

class Index  extends Common{
    public function index(){

        return $this->fetch();
    }
}
