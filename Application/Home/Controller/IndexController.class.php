<?php
namespace Home\Controller;

use Common\Controller\BaseController;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $title       = "酷盾";
        $keywords    = "酷盾，培训，通过";
        $description = "酷盾ccie通过考试";

        $this->assign("title", $title);
        $this->assign("keywords", $keywords);
        $this->assign("description", $description);
        $this->display();
    }
    //记录手机号
    public function recordPhoneAction()
    {
        $phone = D('Phone');
        $rs    = $phone->create();
        if (!$rs) {
            //手机号验证已经存在
            $result['isSuccess'] = true;
            $result['msg']       = "已经收到您的手机号，我们会尽快与您取得联系！";
            $result['data']      = $phone->phone;
        } else {
            if ($this->validPhoneNumber($phone->phone)) {
                $phone->create_time = date("Y-m-d H:i:s");
                $phone->add();
                $result['isSuccess'] = true;
                $result['msg']       = "成功！我们的客服会尽快联系您！谢谢！";
                $result['data']      = $phone->phone;
            } else {
                $result['isSuccess'] = false;
                $result['msg']       = "error please input right phone number!";
                $result['data']      = $phone->phone;
            }
        }
        $this->ajaxReturn($result);
    }
    //查看手机号页面
    public function phoneEntranceAction()
    {
        $msg = I('msg');
        $this->assign('msg', $msg);
        $this->display();
    }
    //查看手机号
    public function showPhoneAction()
    {
        $password  = I('password');
        $_password = 'xiaochengeshuaibi';
        if (md5($password) == md5($_password)) {
            $phone  = D('Phone');
            $phones = $phone->distinct(true)->field('phone')->select();
            $this->assign('data', $phones);
            $this->display();
        } else {
            $this->redirect('Home:Index/phoneEntrance', array('msg' => '密码错误'), 1, '密码错误,页面跳转中...');
        }
    }
    //校验手机号是否合法
    //有效号段 130-139 , 150-153, 153-159, 180-189
    protected function validPhoneNumber($phone)
    {
        $isMathc = preg_match("/^((13[0-9])|(15[^4,\D])|(18[0-9]))\d{8}$/", $phone);
        return $isMathc;
    }
}
