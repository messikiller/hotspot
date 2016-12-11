<?php
namespace Index\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $model = M('hotspot');
        $data = $model->select();

        $this->assign('hotspots', $data);
        // var_dump($data);
        $this->display('index');
    }
}
