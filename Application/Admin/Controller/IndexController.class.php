<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $model = M('hotspot');
        $list = $model->select();

        $this->assign('hotspots', $list);
        $this->display('index');
    }

    public function add()
    {
        $this->display('add');
    }

    public function addHandle()
    {
        if (! IS_POST) {
            $this->redirect('admin/index/index');
        }

        $data = array();

        $data['title']        = I('post.title');
        $data['x']            = I('post.x');
        $data['y']            = I('post.y');
        $data['pos']          = I('post.pos');
        $data['detail_pos']   = I('post.detail_pos');
        $data['scale']        = I('post.scale');
        $data['arrow']        = I('post.arrow');
        $data['content']      = I('post.content');
        $data['show_title']   = I('post.show_title');
        $data['show_content'] = I('post.show_content');

        $model = M('hotspot');
        $model->add($data);

        $this->redirect('admin/index/index');
    }

    public function edit()
    {
        $id = I('get.Id');

        $model = M('hotspot');
        $data = $model->where(array('Id' => $id))->find();

        $this->assign('hotspot', $data);
        $this->display('edit');
    }

    public function editHandle()
    {
        if (! IS_POST) {
            $this->redirect('admin/index/index');
        }

        $id = I('get.Id');

        $data = array();

        $data['title']        = I('post.title');
        $data['x']            = I('post.x');
        $data['y']            = I('post.y');
        $data['pos']          = I('post.pos');
        $data['detail_pos']   = I('post.detail_pos');
        $data['scale']        = I('post.scale');
        $data['arrow']        = I('post.arrow');
        $data['content']      = I('post.content');
        $data['show_title']   = I('post.show_title');
        $data['show_content'] = I('post.show_content');
// var_dump($data);die();
        $model = M('hotspot');
        $res = $model->where(array('Id' => $id))->save($data);
// var_dump($res);die();
        $this->redirect('admin/index/index');
    }

    public function delete()
    {
        $id = I('get.Id');

        $model = M('hotspot');
        $data = $model->where(array('Id' => $id))->delete();

        echo '<script>window.alert("删除成功！");window.location.href="'.U('admin/index/index').'"</script>';
    }
}
