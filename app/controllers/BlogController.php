<?php
class BlogController extends Controller{
    public function __construct(){
        $this->userModel = $this->model('blogModel');
      }
      public function login(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Process form
          // Sanitize POST data
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
          // Init data
          $data =[
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',      
          ];
  
          // Validate Email
          if(empty($data['email'])){
            $data['email_err'] = 'Pleae enter email';
          }
  
          // Validate Password
          if(empty($data['password'])){
            $data['password_err'] = 'Please enter password';
          }
  
          // Check for bloger/email
          if($this->userModel->findUserByEmail($data['email'])){
            // bloger found
          } else {
            // bloger not found
            $data['email_err'] = 'No user found';
          }
  
          // Make sure errors are empty
          if(empty($data['email_err']) && empty($data['password_err'])){
            // Validated
            // Check and set logged in user
            $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            
            if($loggedInUser){
              // Create Session
              $this->createUserSession($loggedInUser);
              // $this->view('');
            } else {
              $data['password_err'] = 'Password incorrect';
  
              $this->view('', $data);
            }
          } else {
            // Load view with errors
            $this->view('users/login', $data);
          }
  
  
        } else {
          // Init data
          $data =[    
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',        
          ];
  
          // Load view
          $this->view('users/login', $data);
        }
      }
  
      public function createUserSession($bloger){
        $_SESSION['id'] = $bloger->id;
        $_SESSION['name'] = $bloger->name;
        $_SESSION['email'] =$bloger->email;
        redirect('Admin');
      }





}
