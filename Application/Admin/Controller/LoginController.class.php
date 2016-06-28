<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		$this->redirect('Login/login');
	}
	public function login(){
		$this->display();
	}
	public function plogin(){
		$username = I("post.username");
		$password = I("post.password");
		$user = M('user');
		$user = $user->find(1);
		if(($user['phone'] == $username)&&($user['password'] == $password)){
			cookie('isLogin','true',24*60*60); // 指定cookie保存时间
			$this->success("login sucessfully !!",'../Homepage/homepage');
		}else{
			$this->error("phone or password error !!");
		}
	}
}