<?php require APPROOT . '/views/inc/header.php'; ?>
 
   <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" >
      
       <?php $count=1;?>
       
      <?php foreach($data['posts'] as $post) : ?>
       <form name="form1" action="<?php echo URLROOT; ?>/posts/update_quiz_here" method="post">  
        <input type="text" name="text1" style="display:none;" value="<?php $_SESSION['test_name']= $post->test_name ;  ?>" >
        <?php
           if($count==1)
           {
           echo "<h1 class=text-center>Start:".$post->test_name.'<br><br>'; 
           }
         ?>
         <input type="text" name="question_id" value="<?php echo $post->question_id;?>" style="display:none;">
        <br>
        <?php echo "<h6>Question:". $count."<span>".">". $post->question."</span>".'<br>';?><br>
        (a):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option1;?>" ><?php echo  $post->option1.'<br>';?><br>
        (b):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option2;?>" ><?php echo  $post->option2.'<br>';?><br>
        (c):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option3;?>" ><?php echo  $post->option3.'<br>';?><br>
        (d):<input type="radio" name="question[ <?php echo $count-1;?> ]" value="<?php echo  $post->option4;?>" ><?php echo  $post->option4.'<br>';?><br><br>
                <div class="row">

           <div class="col-md-3">
               
               <input type="submit" class="btn btn-success" value="Edit Here">
            
           <?php $count++;?>
           </form>
           </div>

           <div class="col-md-3">
           <form name="form1" action="<?php echo URLROOT; ?>/posts/delete_quiz_here" method="post">
          
            <input type="text" name="question_id" value="<?php echo $post->question_id;?>" style="display:none;">
            <input type="submit" class="btn btn-danger" value="Delete Here" style="">
           </div>
           <div class="col-md-6">
                  </div>
         </div>
         
           </form>
        <?php endforeach; ?>  
    
      </div></div>
      <div class="col-md-3">
    </div>
  </div>
      
<?php require APPROOT . '/views/inc/footer.php'; ?>
