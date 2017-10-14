<?php
/**
 * 后台首页
 */
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class NumberController extends AdminbaseController {
    public function index(){
        $m=M("Number");
        $data=$m->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function edit(){
       $t=0;
        for ($i=1;$i<=50;$i+=1){
             $m=M("Number");
            $data['Id'] = $i;
            $data['number'] = $_POST[num.$i];
            $r=$m->save($data);
            $t=$t+$r;
        } 
        if($t>0){
            $this->success("成功");
        }else{
            $this->error("失败");
        }
    }
}
