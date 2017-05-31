<?php
namespace app\xiuli\controller;
use \think\View;
class Index
{
    public function index()
    {
        $data=db('user')->where('id',1)->find();
        dump($data);
        $view = new View();
        return $view->display();
    }
}
