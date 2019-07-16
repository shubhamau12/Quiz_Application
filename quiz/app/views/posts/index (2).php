<html>
<script>
function search()
{
 
  $('#sea').show();
}
  
</script>
<body>

<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row mb-3">
   
    <div class="col-md-3">
   
      <input type= "button" class="btn btn-success " onclick="search()" value ="search">
             <i class="fa fa-search"></i>
      </a>
    </div>
    <div class="col-md-6">
      <h1>Maintain Your List</h1>
    </div>
    <div class="col-md-3">
    <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary ">
             <i class="fa fa-pencil"></i> Add LIST
      </a>
      </div>
    </div>
  
  <?php foreach($data['posts'] as $post) : ?>
  <div class="row">
  
      <div class="col-sm-4">
      <div class="bg-light p-2 mb-3">
       <?php echo $post->created_at;?>
       </div>
      </div>
     
      <div class="col-sm-4">
      <div class="bg-light p-2 mb-3">
      <p class="card-text"><?php echo $post->body; ?></p>
      </div>
      </div>
      <div class="col-sm-4">
      <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id; ?>" class="btn btn-dark">EDIT/DELETE/DONE</a>
    </div>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>



<div style="display:none; border:5px; border-color:black" id="sea">
<h1>Enter the date for search list</h1><input type="textbox" id='date' name='date'>

</div>
</body>
</html>

