<?php
namespace Web\Controller;
use Think\Controller;
class DetailController extends Controller {
    public function index(){
		$this->redirect("Detail/detail");
    }
	public function detail(){
		$this->buildHtml("detail.html",'',"");
		$this->display();
	}
	
}