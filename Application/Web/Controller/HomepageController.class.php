<?php
namespace Web\Controller;
use Think\Controller;
class HomepageController extends Controller {
    public function index(){

		$this->redirect('Homepage/homepage');
    }
	public function homepage(){
		$data = array(
				'image' => 'profile.jpg', //简历上的照片
		);
		$user = M('user');
		$user = $user->find(1);
		$this->assign('user',$user);


		$image = M("images");
		$aa = $image->order("id desc")->find();
		$bb = $image->find((int)$aa['id'] - 1);
		$apath = $aa['random_name'];
		$bpath = $bb['random_name'];
		$this->assign('data',$data);
		$this->assign('apath',$apath);
		$this->assign('bpath',$bpath);

		$info = M('information');
		$personal_information = $info->find(1)['content'];
		$research_projects = $info->find(2)['content'];
		$work_experience = $info->find(3)['content'];
		$qualifications_and_honors = $info->find(4)['content'];
		$achievements = $info->find(5)['content'];

		$this->assign('personal_information',htmlspecialchars_decode($personal_information));
		$this->assign('research_projects',htmlspecialchars_decode($research_projects));
		$this->assign('qualifications_and_honors',htmlspecialchars_decode($qualifications_and_honors));
		$this->assign('work_experience',htmlspecialchars_decode($work_experience));
		$this->assign('achievements',htmlspecialchars_decode($achievements));
		$this->buildHtml("homepage/homepage.html",'',"");
		$this->display();
	}
	
}