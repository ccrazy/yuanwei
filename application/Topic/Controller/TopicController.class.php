<?php
namespace Topic\Controller;

use Common\Controller\MemberbaseController;

class TopicController extends MemberbaseController{
	
	protected $comments_model;
	
	public function _initialize() {
		parent::_initialize();
		$this->comments_model=D("Common/Comments");
	}
	
	
	public function index(){
        // 主题发布页
        $this->display();
    }
	
    public function release(){
        //主题发布
    }
}