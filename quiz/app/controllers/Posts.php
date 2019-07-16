<?php
  class Posts extends Controller 
  {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

     $this->postModel = $this->model('Post');
     // $this->userModel = $this->model('User');
    }

    public function index(){
      // Get posts
   //  $posts = $this->postModel->getPosts();

      $data = [
      //  'posts' => $posts
      ];

     // $this->view('posts/index', $data);
       $this->view('posts/index');
    }
  
   public function display_quiz()
   {
      $da=$_POST['sel1'];
      $posts = $this->postModel->display_question($da);
      $data = [
        'posts' => $posts
      ];
     // $posts = $this->postModel->display_question($data);
     $this->view('posts/display_quiz',$data);
  
   }

   public function edit_quiz()
   {
   
   $_SESSION['data'] = $da=$_POST['sel1'];
      $posts = $this->postModel->display_question($da);
      $data = [
        'posts' => $posts
      ];
     // $posts = $this->postModel->display_question($data);
     $this->view('posts/edit_quiz',$data);

   }

  public function quiz_display()
   {
      
     $posts = $this->postModel->getTest();
      $data = [
        'posts' => $posts
      ];
     // $posts = $this->postModel->display_question($data);
     $this->view('posts/quiz_display',$data);
  
   }

   public function quiz_result()
   {  
         $da=$_SESSION['test_name'];
         $posts = $this->postModel->fetch_correct_option($da);
        $_SESSION['question']=$_POST['question'];
        $data = [
        'posts' => $posts
        ]; 
        $this->view('posts/quiz_result',$data);
       
      //$this->view('posts/quiz_result');    
   }

   public function update_quiz_here()
   {
     $data = $_POST['question_id'];
      $posts = $this->postModel->fetch_question_for_update($data);

      $da = [
        'posts' => $posts
        ]; 
        $this->view('posts/update_quiz_here',$da);
   }
   public function delete_quiz_here()
   {
     $data = $_POST['question_id'];
     $this->postModel->delete_quiz($data);
      
        $d=$_SESSION['data'];
       $posts = $this->postModel->display_question($d);

      $da = [
        'posts' => $posts
        ]; 
      $this->view('posts/edit_quiz',$da);
   }

   public function update_quiz_data()
      {
         $data =[
          'question_id' => $_POST['question_id'],
          'question' => $_POST['question'],
          'option1' => $_POST['option1'],
          'option2' => $_POST['option2'],
          'option3' => $_POST['option3'],
          'option4' => $_POST['option4'],
          'correct' => $_POST['correct'],
          
        ];

       $this->postModel->updtae_quiz_data_in_database($data);
       $d=$_SESSION['data'];
       $posts = $this->postModel->display_question($d);

      $da = [
        'posts' => $posts
        ]; 
      $this->view('posts/edit_quiz',$da);


      }

    public function finish_test()
    {
      $data =[
          'score' => $_SESSION['score'],
          'test_name' =>$_SESSION['test_name'],
          'user_name' => $_SESSION['user_name'],
          'user_id' => $_SESSION['user_id'],
     ];
       
      $this->postModel->finish_test_model($data);
       $this->view('posts/finish_test');
    }

    public function add()
    {

       if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
         $_SESSION['testname']=$_POST['test_name'];
        $data = [
          'test_name' => trim($_POST['test_name']),
          
        ];
        $this->postModel->addTest($data);

        redirect('posts/addQuestion');
      }
        else
        {
          $this->view('posts/add');
        }     
      
    }

 public function addQuestion()
 {
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
            $data = [
          'question' => trim($_POST['question']),
          'option1' => trim($_POST['option1']),
          'option2' => trim($_POST['option2']),
          'option3' => trim($_POST['option3']),
          'option4' => trim($_POST['option4']),
          'correct' => trim($_POST['correct']),
          'test_name' => $_SESSION['testname']
        ];

      $this->postModel->addQuestion_more($data);

       if (isset($_POST['btnSubmit']))
          {
     redirect('posts/addQuestion');
          }
          else if(isset($_POST['btnEnd']))
          {
      unset($_SESSION['testname']);
    redirect('posts/add');
          }
      }
     else
      {
    $this->view('posts/addQuestion');
      }

 }
       public function addquestion_and_finish()
       {


      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
            $data = [
          'question' => trim($_POST['question']),
          'option1' => trim($_POST['option1']),
          'option2' => trim($_POST['option2']),
          'option3' => trim($_POST['option3']),
          'option4' => trim($_POST['option4']),
          'correct' => trim($_POST['correct']),
          'test_name' => $_SESSION['testname']
        ];

      $this->postModel->addQuestion_more($data);

      if (isset($_POST['btnSubmit']))
          {
     redirect('posts/addQuestion');
          }
          else if(isset($_POST['btnEnd']))
          {
    redirect('posts/add');
          }
        
      }
     else
      {
    $this->view('posts/addQuestion');
      }


       }

   public function user_home()
      {
      $posts = $this->postModel->getTest();

      $data = [
        'posts' => $posts
      ];

     // $this->view('posts/index', $data);   
    $this->view('posts/user_home',$data);
      }

    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'id' => $id,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => ''
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->postModel->updatePost($data)){
            flash('post_message', 'Post Updated');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/edit', $data);
        }

      } else {
        // Get existing post from model
        $post = $this->postModel->getPostById($id);

        // Check for owner
        if($post->user_id != $_SESSION['user_id']){
          redirect('posts');
        }

        $data = [
          'id' => $id,
          'title' => $post->title,
          'body' => $post->body
        ];
  
        $this->view('posts/edit', $data);
      }
    }

    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];

      $this->view('posts/show', $data);
    }

    public function delete($id)
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get existing post from model
        $post = $this->postModel->getPostById($id);
        
        // Check for owner
        if($post->user_id != $_SESSION['user_id']){
          redirect('posts');
        }

        if($this->postModel->deletePost($id)){
          flash('post_message', 'Post Removed');
          redirect('posts');
        } else {
          die('Something went wrong');
        }
      } else {
        redirect('posts');
      }
    }

    public function done($id)
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get existing post from model
        $post = $this->postModel->getPostById($id);
        
        // Check for owner
        if($post->user_id != $_SESSION['user_id']){
          redirect('posts');
        }

        if($this->postModel->donePost($id)){
          flash('post_message', 'Post Removed');
          redirect('posts');
        } else {
          die('Something went wrong');
        }
      } else {
        redirect('posts');
      }
    }
  
    // search
    
    public function search()
    {
     
  
        $this->view('posts/search', $data);
      
    

    }
  }
