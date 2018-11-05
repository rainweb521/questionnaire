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

class asiatopicM extends Model{
    /**
     * 主键默认自动识别
     */
//    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'asia_topic';
    public function get_Info($where=null){
        $data = asiatopicM::where($where)->find();
        if ($data!=null){
            return $data->getData();
        }else{
            return $data;
        }
    }


    public function update_Info($data,$where){
        asiatopicM::save($data,$where);
    }
    public function insert_Info($data){
        asiatopicM::save($data);
    }
    public function get_List($where=null){
        $list = asiatopicM::where($where)->select();
        return $list;
    }


}