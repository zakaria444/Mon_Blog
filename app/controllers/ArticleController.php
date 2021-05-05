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
        }
      }

      public function show(){
        $articl = $this->articleModel->getArticle();
        $this->view('article/show', $articl);


      }
      public function delete($id){
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //   // Get existing post from model
        //   $contact = $this->articlModel->getContactById($id);
          
        //   // Check for owner
        //   if($contact->id != $_SESSION['id']){
        //     redirect('admin');
        //   }
  
          if($this->articleModel->deleteContact($id)){
            redirect('admin');
          } else {
            die('Something went wrong');
          }
        } 
      }
    







