<?php
/**
 * Created by PhpStorm.
 * User: susunsheng
 * Date: 16/6/11
 * Time: 下午11:41
 */

namespace Home\Controller;

use Think\Controller;

define(CONTROLLER, __CONTROLLER__);

class  DoctorController extends Controller{




    function myPatient(){
        //获取系统常量, 并分组
        //var_dump(get_defined_constants(true));
        $this -> display();
    }

    function myStudy(){
        $this -> display();
    }


    function dataImport(){
        $this -> display();
    }

    function register(){
        $this -> display();
    }
}