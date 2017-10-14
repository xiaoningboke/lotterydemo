<?php

namespace Portal\Controller;
use Common\Controller\HomebaseController;
/**
 * 首页
 */
class IndexController extends HomebaseController {

	public function index() {
            $m=M("Number");
            $data=$m->select();
            $this->assign("data",$data);
            $w=M("Word");
            $name=$w->select();
            $this->assign("name",$name);
    	$this->display();
    }

}


