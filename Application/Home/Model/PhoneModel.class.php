<?php
namespace Home\model;

use Think\Model;

class PhoneModel extends Model
{
    // protected $tablePrefix = 'kd_';
    // protected $tableName = 'phone';
    protected $fields    = array('id', 'phone', 'create_time', '_pk' => 'id');
    protected $_validate = array(
        array('phone', '', '手机号已经存在', 0, 'unique', 3),
    );
}
