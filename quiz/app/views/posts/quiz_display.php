<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row mb-3">
   
    <div class="col-md-12">
      <h1 class="text-center">Available Tests are</h1>
      </div>
  </div>
     <form name="form1" action="<?php echo URLROOT; ?>/posts/edit_quiz" method="post">
     	<div class="row">
     		 <div class="col-sm-12">
         <select class="form-control" name="sel1"
     <?php foreach($data['posts'] as $post) : ?>
          
    <option><?php echo $post->test_name.'<br>';?></option> 
                 
        <?php endforeach; ?>  
        <input type="submit" value="Edit a test" class="btn btn-danger"/>
        </select>
            </form>

    </div>
    
    </div>
  

  
<?php require APPROOT . '/views/inc/footer.php'; ?>
