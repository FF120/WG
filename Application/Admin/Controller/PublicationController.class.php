<?php
namespace Admin\Controller;
use Think\Controller;
class PublicationController extends Controller {
	function __construct() {
		parent::__construct();
		$isLogin = cookie("isLogin");
		if($isLogin == "true"){

		}else{
			$this->redirect("Login/login");
		}
	}
    public function index(){
		$this->redirect("Publication/publication");
    }
	public function publication(){
		$user = M("User");
		$user = $user->find(1);
		$this->assign($user);

		$info = M('information');
		$courses_taugh = $info->find(7)['content'];
		$journal_papers = $info->find(8)['content'];
		$technical_papers = $info->find(9)['content'];
		$this->assign("courses_taugh",html_entity_decode($courses_taugh));
		$this->assign("journal_papers",html_entity_decode($journal_papers));
		$this->assign("technical_papers",html_entity_decode($technical_papers));

		$this->display();
	}

	public function saveCoursesTaught(){
		$Courses_Taugh = I('post.Courses_Taugh');
		$info = M('information');
		$data['category'] = 7 ; //
		$data['description'] = "courses_taugh";
		$data['content'] = $Courses_Taugh;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=7')->save($data); // 根据条件更新记录
		if($re) $this->success("successfully！");
		else $this->error('fail!!');
	}

	public function saveJournalPapers(){
		$Journal_Papers = I('post.Journal_Papers');
		$info = M('information');
		$data['category'] = 8 ; //
		$data['description'] = "journal_papers";
		$data['content'] = $Journal_Papers;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=8')->save($data); // 根据条件更新记录
		if($re) $this->success("successfully！");
		else $this->error('fail!!');
	}

	public  function saveTechnicalPapers(){
		$Technical_Papers = I('post.Technical_Papers');
		$info = M('information');
		$data['category'] = 9 ; //
		$data['description'] = "technical_papers";
		$data['content'] = $Technical_Papers;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=9')->save($data); // 根据条件更新记录
		if($re) $this->success("successfully！");
		else $this->error('fail!!');
	}
	
}