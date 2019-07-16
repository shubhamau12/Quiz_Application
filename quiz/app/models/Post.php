<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getTest()
    {
      
     //   echo $org;
      $this->db->query('SELECT  * from test where status=1');

      $results = $this->db->resultSet();

      return $results;
    }

  public function display_question($da)
  {
     $test_name=$da;
      $this->db->query('SELECT  * from questions where test_name=:test_name ');
       $this->db->bind(':test_name', $test_name);
      $results = $this->db->resultSet();

      return $results; 
  }

  public function fetch_correct_option($da)
  {
    $test_name=$da;
   $this->db->query('SELECT  * from questions where test_name=:test_name ');
       $this->db->bind(':test_name', $test_name);
      $results = $this->db->resultSet();
      return $results; 
  }

      public function  finish_test_model($data)
      {

       $this->db->query('INSERT INTO  result (user_id,user_name,test_name,score) VALUES(:user_id , :user_name ,:test_name , :score)');
      // Bind values
        $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':user_name', $data['user_name']);
      $this->db->bind(':test_name', $data['test_name']);
       $this->db->bind(':score', $data['score']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
      }

      public function fetch_question_for_update($data)
      {
        $question_id=$data;
      $this->db->query('SELECT  * from questions where question_id=:question_id ');
       $this->db->bind(':question_id', $question_id);
      $results = $this->db->resultSet();
      return $results;
      }

      public function updtae_quiz_data_in_database($data)
      {
      
$this->db->query('UPDATE questions SET question = :question, option1 = :option1 , option2 = :option2 , option3 = :option3 , option4 = :option4 , correct = :correct WHERE question_id = :question_id');
      // Bind values
      $this->db->bind(':question_id', $data['question_id']);
      $this->db->bind(':question', $data['question']);
      $this->db->bind(':option1', $data['option1']);
      $this->db->bind(':option2', $data['option2']);
      $this->db->bind(':option3', $data['option3']);
       $this->db->bind(':option4', $data['option4']);
       $this->db->bind(':correct', $data['correct']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

      }

      public function delete_quiz($data)
      {
        $question_id=$data;
         $this->db->query('DELETE FROM questions WHERE question_id = :question_id');
      // Bind values
      $this->db->bind(':question_id', $question_id);

      // Execute
      if($this->db->execute())
      {
        return true;
      } else
       {
        return false;
      }
  }
    public function addTest($data)
    {
      $this->db->query('INSERT INTO  test (test_name) VALUES(:test_name)');
      // Bind values
      $this->db->bind(':test_name', $data['test_name']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

   public function addQuestion_more($data)
   {

     $this->db->query('INSERT INTO   questions (test_name,question,option1,option2,option3,option4,correct) VALUES(:test_name,:question,:option1,:option2,:option3,:option4,:correct)');
      // Bind values
      $this->db->bind(':test_name', $data['test_name']);
      $this->db->bind(':question', $data['question']);
      $this->db->bind(':option1', $data['option1']);
       $this->db->bind(':option2', $data['option2']);
        $this->db->bind(':option3', $data['option3']);
         $this->db->bind(':option4', $data['option4']);
          $this->db->bind(':correct', $data['correct']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

   }

    public function updatePost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function deletePost($id)
    {
      $this->db->query('DELETE FROM posts WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

// done list

public function donePost($id)
{
  $this->db->query('UPDATE posts SET status = 0  WHERE id = :id');
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

  