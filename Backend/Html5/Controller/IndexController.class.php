<?php
namespace Html5\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function test()
    {
        echo 'Html5';
    }

    public function setTimeOut()
    {
        $this->display();
    }

}