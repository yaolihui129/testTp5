<?php
namespace app\test\controller;

class Index
{
    public function index()
    {
        dump(input('id'));
    }
}
