<?php

namespace  app\index\controller;

use think\Controller;

class Order extends Controller
{
	public function order()
	{
		return $this->fetch();
	}	

	public function t_list()
	{
		return $this->fetch('list');
	}

	public function details()
	{
		return $this->fetch();
	}

	public function rent()
	{
		return $this->fetch();
	}

	public function assess()
	{
		return $this->fetch();
	}
}