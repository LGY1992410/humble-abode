<?php

namespace app\admin\controller;

class Admin
{
	//管理员登录
    public function login()
    {
   	    return view('index/index');
    }

    //管理员信息
    public function edit()
    {
        return view('index/index'); 
    }

    //管理员退出
    public function quit()
    {
    	return view('login');
    }
}