<?php

namespace  app\index\controller;

use think\Request;
use think\Controller;
use think\Db;
use think\Session;

class Sign extends Controller
{
	//会员登录
	public function sign()
	{
		//判断传值方式  如果是post方式就进行登录操作
		if(Request::instance()->isPost()) {
			//手机号
			$phone = $_POST['phone'];
			//密码
			$pwd = md5($_POST['pwd']);
			//根据手机号查询数据库数据
			$data = Db::table('tenant')->where('phone',$phone)->find();
			//print_r($data);die;
			if($pwd == $data['pwd']) {
				Session::set('name',$data['username']);
				$this->success('登录成功','sign/center');
			} else {
				$this->error('账号或密码不正确','sign/sign');
			}
		} else {
			return view();
		}		
	}
	//会员注册
	public function register()
	{
		//判断传值方式 如果是post方式就进行注册操作
		if(Request::instance()->isPost()) {
			//echo 1;die;
			//姓名
			$name = $_POST['username'];
			//手机号
			$phone = $_POST['phone'];
			//密码
			$pwd = md5($_POST['pwd']);
			//TP5内置添加方法
			$data = ['username'=>$name, 'pwd' => $pwd, 'phone' => $phone];
			//执行添加
			$res = Db::table('tenant')->insert($data);
			//print_r($res);die;
			//如果注册成功跳转到登录页面
			if($res) {
				$this->success('会员注册成功','Sign/sign');
				//否则注册失败
			} else {
				$this->error('注册失败');
			}
			//如果是get方式就指向html页面
		} else {
			return view();
		}
		
	}
	//个人中心
	public function center()
	{
		if(empty(Session::get('name'))) {
			$this->error('请登录','sign/sign');
		} else {
			$name = Session::get('name');
			return $this->fetch('p-center',['name'=>$name]);
		}		
	}

	//修改密码
	public function modify()
	{
		return view();
	}

	//输入新密码
	public function lose()
	{
		return view();
	}

	//修改成功
	public function complete()
	{
		return view();
	}

	//余额
	public function profit()
	{
		return view();
	}

	//优惠券
	public function coupon()
	{
		return view();
	}

	//我的收藏
	public function collection()
	{
		return view();
	}

	//我的合同
	public function contract()
	{
		return view();
	}

	//我的委托管理
	public function entrust()
	{
		return view();
	}

	//我要推广
	public function extension()
	{
		return view();
	}

	//关于我们
	public function about()
	{
		return view();
	}

	//公司介绍
	public function detail()
	{
		return view('about-detail');
	}
}