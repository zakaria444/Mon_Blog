<?php
class ArticleController extends Controller{
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
  
        $this->view('article/index', $articl);
      }
      public function add(){
        if(!isset($_POST['add'])){
          $this->view('article/add');
        }else{
          $data =[
              'name_blog' => $_POST['name_blog'],
              'chapiter_blog' => $_POST['chapiter_blog'],
              'description' => $_POST['description'],
              
             
            ];
            $useradd=$this->articleModel->addBlog($data);
          //   $this->view('users/insert',$data);
            header('location:'. URLROOT . '/' . 'admin');
           
  }
      }

      public function show($id){
        $articl = $this->articleModel->getContactById($id);
        $this->view('article/show', $articl);


      }
      public function edit($id){
        $articl = $this->articleModel->getContactById($id);
        $this->view('article/edit', $articl);
        
      }
      public function delete($id){
          if($this->articleModel->deleteContact($id)){
            redirect('admin');
          } else {
            die('Something went wrong');
          }
        } 
      }
    







