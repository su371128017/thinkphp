<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/9/19
 * Time: 上午1:34
 */

namespace Admin\Controller;

use Think\Controller;

define(CONTROLLER, __CONTROLLER__);

class  PatientController extends Controller{


    function table($page=1,$pagesize=10){
        $db=M("patient");
        $recordnum = $db->count();
        //计算分页
        $pagenum = $recordnum / $pagesize;
        //如果不能整除，则自动加1页
        if($pagenum % 1 !== $pagenum){
            $pagenum = (int) $pagenum+1;
        }
        \Think\Log::record('login record');
        \Think\Log::write('login write','WARN');
        //利用page函数。来进行自动的分页
        $data = $db->page($page,$pagesize)->select();
        \Think\Log::write('login write','WARN');
//        $this->assign('data',$data);
        $this->data = $data;
        $this->pagenum = $pagenum;
        $this->page = $page;
        $this->pagesize = $pagesize;
        $this->recordnum = $recordnum;
        $this->display();
    }


    function form(){
        $db=M("patient");

        \Think\Log::record('login record');
        \Think\Log::write('login write','WARN');
        //利用page函数。来进行自动的分页

        if(isset($_GET['id'])){
            $this->data = $db -> find($_GET('id'));
            $this->retCode = "00";
            $this->msg = "查找成功";

        }
        else{
            $this->retCode = "01";
            $this->msg = "未找到该信息";

        }
        \Think\Log::write('login write','WARN');
//        $this->assign('data',$data);
        $this->display();
    }

   /* function table($page=1,$pagesize=20){
        $db=M("user");
        $recordnum = $db->count();
        //计算分页
        $pagenum = $recordnum / $pagesize;
        //如果不能整除，则自动加1页
        if($pagenum % 1 !== $pagenum){
            $pagenum = (int) $pagenum+1;
        }
        \Think\Log::record('login record');
        \Think\Log::write('login write','WARN');
        //利用page函数。来进行自动的分页
        $data = $db->page($page,$pagesize)->select();
        \Think\Log::write('login write','WARN');
//        $this->assign('data',$data);
        $this->data = $data;
        $this->pagenum = $pagenum;
        $this->page = $page;
        $this->pagesize = $pagesize;
        $this->display();
    }*/

}