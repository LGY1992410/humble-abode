<?php
#房东管理控制器

namespace app\admin\controller;

class Landlord
{
    //房东列表
    public function index()
    {
      return view();
    }
    //添加表单
    public function set()
    {
      return view('add');
    }
    //执行添加动作
    public function add()
   {
      return view('index/index');
   }
   //修改表单
   public function save()
   {
     return view('edit');
   }
   //执行修改动作
   public function edit()
   {
     return view('index/index');
   }
   //放入回收站
   public function del()
   {
     return view('index/index');
   }
}
