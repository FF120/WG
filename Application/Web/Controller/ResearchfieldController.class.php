<?php
namespace Web\Controller;
use Think\Controller;
class ResearchfieldController extends Controller {
    public function index(){
		$this->redirect("Researchfield/researchfield");
    }
	public function researchfield(){
		$data = array(
				'image' => 'profile.jpg', //简历上的照片
		);
		$user = M('user');
		$user = $user->find(1);
		$this->assign('user',$user);

		$Article = M('article');
		$count      = $Article->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$Page->lastSuffix=false;
		$Page->setConfig('prev','Prev');
		$Page->setConfig('next','Next');
		$Page->setConfig('last','EndPage');
		$Page->setConfig('first','HomePage');
		//$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$Page->parameter=I('get.');
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $Article->order('update_at desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		$info = M('information');
		$basic_information = $info->find(6)['content'];
		$this->assign('basic_information',htmlspecialchars_decode($basic_information));
		$this->buildHtml("researchfield/researchfield.html",'',"");
		$this->display();
	}

	public function goDeatils(){
			$id = I('get.id');
			$article = M('article');
			$article = $article->find($id);
			$this->assign('article',$article);
			//----------生成静态文件------------------
			$static_filename = "researchfield/godeatils/id/".$id.".html";
			$this->buildHtml($static_filename,'',"detail");
			//----------end--------------------------------
			$this->display('detail');
	}

}