<?php
namespace Topic\Controller;

use Common\Controller\HomebaseController; 

class PortalController extends HomebaseController{


    public function index(){
        //帖子列表
        $this->display();
    }

    public function hot(){
        //热门帖子列表
        $this->display();
    }

    public function last(){
        //最新发布列表
        $this->display();
    }

    public function note(){
        //帖子详情页
        $this->display();
    }
}