<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        redirect('Web/Homepage/homepage', 0, '');
    }


}