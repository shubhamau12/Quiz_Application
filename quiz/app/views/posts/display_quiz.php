<?php require APPROOT . '/views/inc/header.php'; ?>
 
   <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" >
      <form name="form1" action="<?php echo URLROOT; ?>/posts/quiz_result" method="post">
       <?php $count=1;?>
       
      <?php foreach($data['posts'] as $post) : ?>
        
        <input type="text" name="text1" style="display:none;" value="<?php $_SESSION['test_name']= $post->test_name ;  ?>" >
        <?php
           if($count==1)
           {
           echo "<h1 class=text-center>Start:".$post->test_name.'<br><br>'; 
           }
         ?>
        
        <?php echo "<h6>Question:". $count."<span>".">". $post->question."</span>".'<br>';?><br>
        (a):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option1;?>" ><?php echo  $post->option1.'<br>';?><br>
         (b):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option2;?>" ><?php echo  $post->option2.'<br>';?><br>
          (c):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option3;?>" ><?php echo  $post->option3.'<br>';?><br>
           (d):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option4;?>" ><?php echo  $post->option4.'<br>';?><br><br>
       
           <?php $count++;?>
        <?php endforeach; ?>
      <input type="submit" class="btn btn-success" value="submit Test">
    </form>
      </div></div>
      <div class="col-md-3">
    </div>
  </div>
      
<?php require APPROOT . '/views/inc/footer.php'; ?>
