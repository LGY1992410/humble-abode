<?php
#房源管理控制器

namespace app\admin\controller;

class Apartment
{
   //房源展示页面
   public function index()
   {
      return view();
    }
   //添加表单页面
   public function set()
   {
      return view('add');
   }
   //执行添加操作
   public function add()
   {
      return view('index/index');
   }
   //修改表单页面
   public function save()
   {
      return view('edit');
   }
   //执行修改操作
   public function edit()
   {
      return view('index/index');
   }
   //放入回收站操作
   public function del()
   {
      return view('index/index')
   }
}