<?php
  class blogModel {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function login($email, $password){
        $this->db->query('SELECT * FROM bloger WHERE email = :email AND password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
  
        return $this->db->single();
  
      }
  
      // Find user by email
      public function findUserByEmail($email){
        $this->db->query('SELECT * FROM bloger WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        // Check row
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }
  
      // Get User by ID
      public function getUserById($id){
        $this->db->query('SELECT * FROM bloger WHERE id = :id');
        // Bind value
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
  
        return $row;
      }
    }












