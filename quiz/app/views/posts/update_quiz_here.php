<?php require APPROOT . '/views/inc/header.php'; ?>
 
   <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" >
      <h3 class="text-center"> Edit Question</h3>
      <form name="form1" action="<?php echo URLROOT; ?>/posts/update_quiz_data" method="post">
       <?php $count=1;?>
       
      <?php foreach($data['posts'] as $post) : ?>
        
      
        Question:<input type="text" name="question_id" class="form-control"  value="<?php echo $post->question_id;?>" style="display:none "><br>
         Question:<input type="text" name="question" class="form-control"  value="<?php echo $post->question;?>" style=""><br>
          Option (a):<input type="text" class="form-control"  name="option1" value="<?php echo $post->option1;?>" style=""><br>
          Option (b):<input type="text" class="form-control"  name="option2" value="<?php echo $post->option2;?>" style=""><br>
          Option (c):<input type="text" class="form-control"  name="option3" value="<?php echo $post->option3;?>" style=""><br>
          Option (d):<input type="text" class="form-control"  name="option4" value="<?php echo $post->option4;?>" style=""><br>
          Correct Option:<input type="text" class="form-control"  name="correct" value="<?php echo $post->correct;?>" style=""><br>
            
        <?php endforeach; ?>
         <center> <input type="submit" class="btn btn-success" value="Update"></center>  
    </form>
      </div></div>
      <div class="col-md-3">
    </div>
  </div>
      
<?php require APPROOT . '/views/inc/footer.php'; ?>
