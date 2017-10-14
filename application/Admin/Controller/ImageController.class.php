<?php

namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class ImageController extends AdminbaseController {
    public function index(){
        $m=M("Word");
        $data=$m->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function edit(){
        $m=M("Word");
        $m->word = "$_POST[name1]";
        $i1=$m->where('id=1')->save();
        $m->word = "$_POST[name2]";
        $i2=$m->where('id=2')->save();
        $m->word = "$_POST[name3]";
        $i3=$m->where('id=3')->save();
        if($i1>0||$i2>0||$i3>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
}
