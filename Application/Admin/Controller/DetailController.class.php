<?php
namespace Admin\Controller;
use Think\Controller;
class DetailController extends Controller {
	function __construct() {
		parent::__construct();
		$isLogin = cookie("isLogin");
		if($isLogin == "true"){

		}else{
			$this->redirect("Login/login");
		}
	}
    public function index(){
    	
    }
	public function detail(){
		$this->display();
	}
	
}