<?php
/**
 * ProjectName:  oa2
 * Description:  绩效项目管理 - 订单量删除
 * FileName   :  DeleteController.class.php
 * User       :  刘瑞
 * Date       :  2017/9/12
 * Time       :  14 : 11
 **/

namespace app\demo\controller;

//use Common\Service\OrderService;
use think\Controller; // 渲染页面类
use think\Db;   // db操作数据库类

class Order
{
    public function index()
    {
        echo 33;die;
        $data = Db::name('data')->find();
        print_r($data);die;
//        $this->assign('list', $data);
//        return $this->fetch();
    }
}
