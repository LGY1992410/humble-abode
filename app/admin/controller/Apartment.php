<?php
#��Դ���������

namespace app\admin\controller;

class Apartment
{
   //��Դչʾҳ��
   public function index()
   {
      return view();
    }
   //��ӱ�ҳ��
   public function set()
   {
      return view('add');
   }
   //ִ����Ӳ���
   public function add()
   {
      return view('index/index');
   }
   //�޸ı�ҳ��
   public function save()
   {
      return view('edit');
   }
   //ִ���޸Ĳ���
   public function edit()
   {
      return view('index/index');
   }
   //�������վ����
   public function del()
   {
      return view('index/index')
   }
}