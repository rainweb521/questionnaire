<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/10/24
 * Time: 18:01
 */
namespace app\config\model;
use phpDocumentor\Reflection\Types\Null_;
use think\Model;

class asiauserM extends Model{
    /**
     * 主键默认自动识别
     */
//    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'asia_user';
    public function get_Info($where=null){
        $data = asiauserM::where($where)->find();
        if ($data!=null){
            return $data->getData();
        }else{
            return $data;
        }
    }


    public function update_Info($data,$where){
        asiauserM::save($data,$where);
    }
    public function insert_Info($data){
        asiauserM::save($data);
        $sub = $this->get_Info($data);
        return $sub['id'];
    }
    public function get_List($where=null){
        $list = asiauserM::where($where)->select();
        return $list;
    }


}