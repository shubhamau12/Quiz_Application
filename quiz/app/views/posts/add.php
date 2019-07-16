<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
  <div class="card card-body bg-light mt-5">
    <h2>Create Test</h2>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">
      <div class="form-group">
        <label for="test_name">Test Name: <sup>*</sup></label>
        <input type="text" name="test_name" class="form-control form-control-lg" placeholder="Enter Test Name">
      </div>
      <center><input type="submit" class="btn btn-success" value="Submit"></center>
    </form>
  </div>
  <div class="col-sm-3">
  </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>