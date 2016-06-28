<?php
namespace Admin\Controller;
use Think\Controller;
class ResearchfieldController extends Controller {
	function __construct() {
		parent::__construct();
		$isLogin = cookie("isLogin");
		if($isLogin == "true"){

		}else{
			$this->redirect("Login/login");
		}
	}
    public function index(){
    	$this->redirect("Researchfield/researchfield");
    }
	public function researchfield(){
		$user = M("User");
		$user = $user->find(1);
		$this->assign($user);

		$Article = M('article');
		$count      = $Article->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$Page->lastSuffix=false;
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','末页');
		$Page->setConfig('first','首页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$Page->parameter=I('get.');
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $Article->order('update_at desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		$info = M('information');
		$basic_information = $info->find(6)['content'];
		$this->assign('basic_information',$basic_information);
		$this->display(); // 输出模板
	}

	public function saveBasicInformation(){
		$post = I('post.');
		$Basic_Information = $post['Basic_Information'];

		$info = M('information');
		$data['category'] = 6 ; //用类别6表示基本信息
		$data['description'] = "basic_information";
		$data['content'] = $Basic_Information;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=6')->save($data); // 根据条件更新记录
		if($re){$this->success("successfully!!");}
		else {$this->error('fail!!');}
	}

	public function saveArticle(){
		$article_title = I('post.article_title');
		$article_body = I('post.article_body');
		$article_id = I('post.article_id');
		$article = M('article');
		$data['title'] = $article_title;
		$data['content'] = $article_body;
		$data['created_at'] = date("Y-m-d H:i:s",time());
		$where['id'] = $article_id;
		$re = $article->where($where)->save($data);
		if($re){$this->success("successfully!!");}
		else {$this->error('fail!!');}
	}

	public function goDeatils(){
		$id = I('get.id');
		$article = M('article');
		$article = $article->find($id);
		$this->assign('article',$article);
		$this->display('detail');
	}
}