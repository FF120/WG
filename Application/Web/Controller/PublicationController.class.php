<?php
namespace Web\Controller;
use Think\Controller;
class PublicationController extends Controller {
    public function index(){
		$this->redirect("Publication/publication");
    }
	public function publication(){
		$user = M('user');
		$user = $user->find(1);
		$this->assign('user',$user);

		$info = M('information');
		$courses_taugh = $info->find(7)['content'];
		$journal_papers = $info->find(8)['content'];
		$technical_papers = $info->find(9)['content'];
		$this->assign("courses_taugh",html_entity_decode($courses_taugh));
		$this->assign("journal_papers",html_entity_decode($journal_papers));
		$this->assign("technical_papers",html_entity_decode($technical_papers));
		$this->buildHtml("publication/publication.html",'',"");
		$this->display();
	}
	
}