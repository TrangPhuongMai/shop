<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Add Product
      </a>
    </div>
  </div>
  <?php foreach($data['products'] as $post) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $post->name; ?></h4>
      <div class="bg-light p-2 mb-3">
        <?php echo $post->price; ?>
      </div>
      <p class="card-text"><?php echo $post->descripton; ?></p>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>