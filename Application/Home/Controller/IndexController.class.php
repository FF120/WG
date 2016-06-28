<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->create_static_html();
        redirect('Web/Homepage/homepage', 0, '');
    }

    private function create_static_html(){
        //配置项
        $webroot = "http://localhost/wilsongoh_v5/" ;
        $article_num = 17;


        //生成导航栏的访问地址
        $urls = array($webroot."web/researchfield/researchfield.html",
            $webroot."web/homepage/homepage.html",
            $webroot."web/researchfield/researchfield.html",
            $webroot."web/publication/publication.html",
            $webroot."web/contact/contact.html");

        //生成文章的访问地址
        for($i=1;$i<=$article_num;$i++){
            array_push($urls,$webroot."web/researchfield/godeatils/id/".$i.".html");
        }

        for($j = 0; $j < count($urls);$j++){
            $this->curl_file_get_contents($urls[$j]);
        }
        //$content = $this->curl_file_get_contents("http://localhost/wilsongoh_v5/web/researchfield/researchfield.html");
    }

    private function curl_file_get_contents($durl){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $durl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }
}