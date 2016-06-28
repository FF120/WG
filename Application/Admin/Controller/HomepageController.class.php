<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class HomepageController extends Controller {

	function __construct() {
		parent::__construct();
		$isLogin = cookie("isLogin");
		if($isLogin == "true"){

		}else{
			$this->redirect("Login/login");
		}
	}
    public function index(){
		$this->redirect('Homepage/homepage');
    }
	public function homepage(){
		$user = M("User");
		$user = $user->find(1);
		$this->assign($user);

		$image = M("images");
		$aa = $image->order("id desc")->find();
		$bb = $image->find((int)$aa['id'] - 1);
		$apath = $aa['random_name'];
		$bpath = $bb['random_name'];
		$this->assign('apath',$apath);
		$this->assign('bpath',$bpath);

		$info = M('information');
		$personal_information = $info->find(1)['content'];
		$research_information = $info->find(2)['content'];
		$experience_information = $info->find(3)['content'];
		$honors_information = $info->find(4)['content'];
		$achievements_information = $info->find(5)['content'];
		$this->assign('personal_information',html_entity_decode($personal_information));
		$this->assign('experience_information',html_entity_decode($experience_information));
		$this->assign('honors_information',html_entity_decode($honors_information));
		$this->assign('research_information',html_entity_decode($research_information));
		$this->assign('achievements_information',html_entity_decode($achievements_information));

		$this->display();
	}

	public function saveSlide(){
		$upload_file = $_FILES['slide']['name'];
		//如果选择的上传文件，则上传，否则什么也不做
		if($upload_file) {
			$upload = new Upload();// 实例化上传类
			$upload->maxSize = 314572800;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->replace = true;
			$upload->autoSub = false;
			$upload->rootPath = C('public_path') . '/images/'; // 设置附件上传根目录
			$upload->savePath = ''; // 设置附件上传（子）目录
			// 上传文件
			$info = $upload->upload();
			if (!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
			} else {// 上传成功
				//$this->success('上传成功！');
				//上传成功，保存上传的图片的信息
				foreach($info as $item){
					//将上传的图片保存到数据库中
					unset($data);
					$data['origin_name'] = $item["name"];
					$data['random_name'] = $item["savename"];
					$data['path'] = $item["savepath"];
					$image = M("images");
					$r = $image->create($data);
					if($r) $image->add(); // 把用户对象写入数据库
				}
				$this->success("upload successfully !!");
			}
		}
	}

	public function savePersonalInfo(){
		$post = I('post.');
		$data['name'] = $post['name'];
		$data['title'] = $post['title'];
		$data['address'] = $post['address'];
		$data['phone'] = $post['phone'];
		$data['email'] = $post['email'];
		$data['updated_at'] = date('Y-m-d H:i:s',time());
		$User = M("User"); // 实例化User对象
		// 要修改的数据对象属性赋值
		$result = $User->where('id=1')->save($data); // 根据条件更新记录
		if($result){
			$this->success("successfully!!");
		}
		$upload_file = $_FILES['myPhoto']['name'];
		//如果选择的上传文件，则上传，否则什么也不做
		if($upload_file){
			$upload = new Upload();// 实例化上传类
			$upload->maxSize   =     314572800 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->saveName = 'profile';
			$upload->replace = true;
			$upload->autoSub = false;
			$upload->rootPath  =     C('public_path').'/images/'; // 设置附件上传根目录
			$upload->savePath  =     ''; // 设置附件上传（子）目录
			// 上传文件
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
			}else{// 上传成功
				$this->success('successfully!!');
			}
		}
	}

	public function savePersonalInformation(){
		$post = I("post.");
		$person = $post['Personal_Information'];
		$info = M('information');
		$data['category'] = 1 ; //用类别1表示个人信息
		$data['description'] = "personal_information";
		$data['content'] = $person;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=1')->save($data); // 根据条件更新记录
		if($re) { $this->success('successfully!!');}
		else {$this->error('fail!!');}
	}

	public function saveResearch(){
		$post = I("post.");
		$research  = $post['research222'];
		$info = M('information');
		$data['category'] = 2 ; //用类别2表示研究信息
		$data['description'] = "research_information";
		$data['content'] = $research;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=2')->save($data); // 根据条件更新记录
		if($re) { $this->success('successfully!!');}
		else {$this->error('fail!!');}

	}

	public function saveExperience(){
		$post = I('post.');
		$experience = $post['experience222'];
		$info = M('information');
		$data['category'] = 3 ; //用类别3表示个人经历
		$data['description'] = "experience_information";
		$data['content'] = $experience;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=3')->save($data); // 根据条件更新记录
		if($re) { $this->success('successfully!!');}
		else {$this->error('fail!!');}
	}

	public function saveHonors(){
		$post = I('post.');
		$honors = $post['honors222'];
		$info = M('information');
		$data['category'] = 4 ; //用类别3表示荣誉信息
		$data['description'] = "honors_information";
		$data['content'] = $honors;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=4')->save($data); // 根据条件更新记录
		if($re) { $this->success('successfully!!');}
		else {$this->error('fail!!');}
	}

	public function saveAchievements(){
		$post = I('post.');
		$achievements = $post['achievements222'];
		$info = M('information');
		$data['category'] = 5 ; //用类别5表示成就信息
		$data['description'] = "achievements_information";
		$data['content'] = $achievements;
		$data['update-at'] = date("Y-m-d H:i:s",time());
		$re = $info->where('id=5')->save($data); // 根据条件更新记录
		if($re) { $this->success('successfully!!');}
		else {$this->error('fail!!');}

	}

	public function manage(){
		$this->display('manage');
	}

	public function pdo(){
		$pass1 = I("post.pass1");
		$pass2 = I("post.pass2");
		if($pass1 == $pass2){
			$User = M("user");
			$User->find(1); // 查找主键为1的数据
			$User->password = $pass1; // 修改数据对象
			$User->save(); // 保存当前数据对象
			$this->success("edited sucessfully !!",'/Admin/Homepage/homepage');
		}else{
			$this->error("two password no match !!");
		}
	}

	public function logout(){
		cookie("isLogin",'false');
	}
}