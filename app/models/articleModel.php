<?php
  class articleModel {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getArticle(){
      $this->db->query('SELECT * FROM blog');

      $results = $this->db->resultSet();

      return $results;
    }
    public function getContactById($id){
      $this->db->query('SELECT * FROM blog WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
    public function editBlog($data){
      $this->db->query('UPDATE blog SET name_blog = :name_blog, chapiter_blog = :chapiter_blog, description = :description  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name_blog', $data['name_blog']);
      $this->db->bind(':chapiter_blog', $data['chapiter_blog']);
      $this->db->bind(':description', $data['description']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function addblog($data)
    {
        $this->db->query("INSERT INTO `blog`( `name_blog`, `chapiter_blog`, `description`) VALUES (:name_blog,:chapiter_blog,:description)");
        //bind the valeus with placholder
        $this->db->bind(':name_blog', $data['name_blog']);
        $this->db->bind(':chapiter_blog', $data['chapiter_blog']);
        $this->db->bind(':description', $data['description']);

        //execution 
        $this->db->execute();




    }
   

    public function deleteContact($id){
      $this->db->query('DELETE FROM blog WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
}