<?php
namespace Common\Controller;

use Think\Controller;

class BaseController extends Controller
{
    //控制层上下文环境
    protected $context = array();

    public function _initialize()
    {
        $ip   = get_client_ip();
        $base = APP_DEBUG ? "http://www.passccie.net" : "http://www.passccie.cn"; //线上及本地访问域名

        $context['base']      = $base;
        $context['ip']        = $ip;
        $context['APP_DEBUG'] = APP_DEBUG;

        $this->assign('context', $context);
    }

    public function indexAction()
    {

    }
}
