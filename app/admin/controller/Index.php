<?php
#后台首页

namespace app\admin\controller;

class Index
{
	//首页
   public function index()
   {
      return view();
   }
   public function introduce()
   {
      return view('introduce');
   }
}