<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row mb-3">
    <div class="col-md-12>
    ">
      <h1 class="text-center"> Tests Result</h1>
      <?php echo "<h3>User Name : " .$_SESSION['user_name']; ?>
       <?php echo "<h3>Test Taken : " .$_SESSION['test_name']; ?>
       
       <?php 
            $score=0;
            $array = array();
         // $correct=$data; 
          $question =  $_SESSION['question'];
          $len=sizeof($question);
          foreach ($data['posts'] as $post)
           {
             $array[] = $post->correct;

           }
          foreach (array_combine($question, $array) as $code => $name) 
          {
           if($code==$name)
           {
            $score++;
           }
          }
           ?>
           <?php 
                 $wrong=$len-$score;
                 $correct=$len-$wrong;
            echo "<h3>Number Of question : ".$len."</h3>" ;
            echo "<h3>correct Answer : ".$correct."</h3>" ;
             echo "<h3>Wrong Answer : ".$wrong."</h3>" ;
           echo "<h3>Test Score : ".$score."</h3>" ;
           $_SESSION['score']=$score;

           ?>
      </div>
      </div>
       <form name="form1" action="<?php echo URLROOT; ?>/posts/finish_test" method="post">
        <input type="submit" class="btn btn-success" value="Finish Test">
       </form>
  
  
  

  
<?php require APPROOT . '/views/inc/footer.php'; ?>
