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

use think\Controller;
use think\Db;

class Order1 extends Controller
{
    public function index()
    {
        $data = Db::name('firm')->find();
        return json_encode($data);
        print_r($data);die;
        $this->assign('result', $data);
        return $this->fetch();
    }
}
