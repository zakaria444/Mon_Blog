<?php
class Admin extends Controller{
    // if(!isLoggedIn()){
    //     redirect('users/login');
    //   }
public function __construct(){


      $this->articleModel = $this->model('articleModel');
    //   $this->userModel = $this->model('blogModel');
    }

    public function index(){
        
        $articl = $this->articleModel->getArticle();

        // $data = [
        //   'articel' => $articl
        // ];
  
        $this->view('article/admin', $articl);
      }
    }
