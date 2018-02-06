<?php

namespace app\index\controller;

class  Service
{
	//生活服务
	public function service()
	{
		return view('life-service');
	}

	//生活服务详情
	public function details()
	{
		return view('service-details');
	}
}