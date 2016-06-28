<?php
namespace Admin\Controller;
use Think\Controller;
class ContactController extends Controller {
	function __construct() {
		parent::__construct();
		$isLogin = cookie("isLogin");
		if($isLogin == "true"){

		}else{
			$this->redirect("/Admin/Login/login");
		}
	}
    public function index(){
		$this->redirect("Contact/contact");
	}
	public function contact(){
		$user = M('user');
		$user = $user->find(1);
		$this->assign($user);
		$this->display();
	}

	public function sendEmail(){
		$user = M('user');
		$user = $user->find(1);
		$admin_email = $user['email']; //作者的邮箱

		$post = I('post.');
		$name = $post['name'];
		$email = $post['email'];
		$subject = $post['subject'];
		$message = $post['message'];
		$message = $message."\r\n from ：".$admin_email;

		$result = false;
		if($name!="Name"  && $email!="Email" && $subject!="Subject"){
			$result = $this->think_send_mail($admin_email,$name,$subject,$message);
		}else{
			$this->error("NO EMPTY !!");
		}

		//$result = $this->think_send_mail($email,$name,$subject,$message);
		if($result == true){
			$this->success("send successfully !!");
		}else{
			$this->error($result);
		}
	}

	/**
	 * 系统邮件发送函数
	 * @param string $to    接收邮件者邮箱
	 * @param string $name  接收邮件者名称
	 * @param string $subject 邮件主题
	 * @param string $body    邮件内容
	 * @param string $attachment 附件列表
	 * @return boolean
	 */
	private function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){
		$config = C('THINK_EMAIL');
		vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
		vendor('PHPMailer.class#smtp'); //
		$mail             = new \PHPMailer(); //PHPMailer对象
		$mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
		$mail->IsSMTP();  // 设定使用SMTP服务
		$mail->SMTPDebug  = 0;                     // 关闭SMTP调试功能
		// 1 = errors and messages
		// 2 = messages only
		$mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
		$mail->SMTPSecure = 'ssl';                 // 使用安全协议
		$mail->Host       = $config['SMTP_HOST'];  // SMTP 服务器
		$mail->Port       = $config['SMTP_PORT'];  // SMTP服务器的端口号
		$mail->Username   = $config['SMTP_USER'];  // SMTP服务器用户名
		$mail->Password   = $config['SMTP_PASS'];  // SMTP服务器密码
		$mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
		$replyEmail       = $config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];
		$replyName        = $config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];
		$mail->AddReplyTo($replyEmail, $replyName);
		$mail->Subject    = $subject;
		$mail->MsgHTML($body);
		$mail->AddAddress($to, $name);
		if(is_array($attachment)){ // 添加附件
			foreach ($attachment as $file){
				is_file($file) && $mail->AddAttachment($file);
			}
		}
		return $mail->Send() ? true : $mail->ErrorInfo;
	}
}