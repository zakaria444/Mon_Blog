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
}