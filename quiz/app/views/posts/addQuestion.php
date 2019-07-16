<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
  <div class="card card-body bg-light mt-5">
    <h2 class="text-center">Create Test For <?php echo $_SESSION['testname']; ?></h2>
    <form action="<?php echo URLROOT; ?>/posts/addquestion" method="post" name="addmore">
     <div class="form-group">
        <label for="question">Question Name: <sup>*</sup></label>
        <input type="text" name="question" class="form-control form-control-lg" placeholder="Enter question">
      </div>
      <div class="form-group">
        <label for="option1">Option 1: <sup>*</sup></label>
        <input type="text" name="option1" class="form-control form-control-lg" placeholder="Enter Option One">
      </div>
      <div class="form-group">
        <label for="option1">Option 2: <sup>*</sup></label>
        <input type="text" name="option2" class="form-control form-control-lg" placeholder="Enter Option Two">
      </div>
      <div class="form-group">
        <label for="option3">Option 3: <sup>*</sup></label>
        <input type="text" name="option3" class="form-control form-control-lg" placeholder="Enter Option Three">
      </div>
      <div class="form-group">
        <label for="option4">Option 4: <sup>*</sup></label>
        <input type="text" name="option4" class="form-control form-control-lg" placeholder="Enter Option Four">
      </div>
      <div class="form-group">
        <label for="correct">Correct Option: <sup>*</sup></label>
        <input type="text" name="correct" class="form-control form-control-lg" placeholder="Enter Correct Option">
      </div>
      <center><input type="submit" class="btn btn-success" name="btnSubmit" value="ADD Question More"></center>
       <center>  <input type="submit" class="btn btn-light" name="btnEnd" value="Finish Adding"></center>
      
 </form>
  </div>
  <div class="col-sm-3">
  </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>