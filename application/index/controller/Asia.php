<?php
namespace app\index\controller;
use app\config\model\asiatopicM;
use app\config\model\asiauserM;
use think\Controller;
use \think\Request;
use \think\View;


class Asia extends Controller  {

    public function index(){
        $data['name'] = Request::instance()->post('name','');
        $data['phone'] = Request::instance()->post('phone','');
        $data['bumen'] = Request::instance()->post('bumen','');
        if ($data['name']==""){
            return \view("welcome");exit();
        }
        $data['date'] = date('Y-m-d');
//        $asiauser_model = new asiauserM();
//        $id = $asiauser_model->insert_Info($data);
//        $data['id'] = $id;
//        session('user',$data);
        // 随机出10道题
        $asiatopic_model = new asiatopicM();

        $rand_topic = array();
        $num = 0;
        $all = array();
        for ($i=1;$i<=35;$i++){$all[$i]=1;}

//        num是出题个数
        while($num<10){
//            random是题库中的题数
            $random = rand(1,12);
            if ($all[$random]!=0){
                $info = $asiatopic_model->get_Info(array('id'=>$random));
                $info['num'] = $num+1;
                array_push($rand_topic,$info);
                $all[$random] = 0;
                $num++;
            }
        }
//        foreach ($rand_topic as $line){
//            var_dump($line['id']);
//        }
//        exit();
        session('topic',$rand_topic);
        return \view('index',array('topic'=>$rand_topic,'name'=>$data['name'],'phone'=>$data['phone'],'bumen'=>$data['bumen']));
    }
    public function welcome(){

        return \view('welcome');
    }

    public function think(){
        $topic = session('topic');
        $success_sum = 0;
        $data['name'] = Request::instance()->post('name','');
        $data['phone'] = Request::instance()->post('phone','');
        $data['bumen'] = Request::instance()->post('bumen','');
        $data['date'] = date('Y-m-d');

        $text = "";
        $all_text = "";
        foreach ($topic as $line ){
            $redio= '';
            if ($line['state']==1){
                $redio = Request::instance()->post('name'.$line['id'],'');
            }else{
                $checkbox = Request::instance()->post('check'.$line['id'].'/a','');
                if ($checkbox!=''){foreach ($checkbox as $str){$redio = $redio.$str;}}

            }
//            if ($redio==''){
//                return \view('index',array('topic'=>$topic));
//                exit();
//            }
//            echo $redio."<br>";
            if ($redio==$line['answer']){
                $success_sum++;
                $text = $text.$line['id'].". ".$line['title']."<br>"."  用户的选择：".$redio."    "."正确"."<br>";
            }else{
//                添加一个做题纪录，纪录下来答对和答错的题目
                $text = $text.$line['id'].". ".$line['title']."<br>"."  用户的选择：".$redio."    "."错误"."<br>";
            }


            $all_text = $all_text.$line['id'].". ".$line['title']."<br>"."正确答案".$line['answer']."<br>  您的选择：".$redio." <br>";
            $all_text = $all_text.$line['option1']."<br>";
            $all_text = $all_text.$line['option2']."<br>";
            $all_text = $all_text.$line['option3']."<br>";
            $all_text = $all_text.$line['option4']."<br>";
            $line['option5']!=null?$all_text = $all_text.$line['option5']."<br>":$all_text=$all_text;
            $line['option6']!=null?$all_text = $all_text.$line['option6']."<br>":$all_text=$all_text;

            $all_text = $all_text."<br>";
        }
        $asiauser_model = new asiauserM();
        $data['log'] = $text;
        $data['success'] = $success_sum;
        $asiauser_model->insert_Info($data);
//        $id = $asiauser_model->update_Info(array('success'=>$success_sum,'log'=>$text));
//        添加一个做题纪录，纪录下来答对和答错的题目
//        var_dump($success_sum);exit();
        return \view('think',array('success'=>$success_sum,'log'=>$all_text));
    }

}
