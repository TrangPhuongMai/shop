<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $data['product']->name; ?></h1>

<p><?php echo $data['product']->descripton; ?></p>
<p><?php echo $data['product']->price; ?></p>

<!--<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>-->
<a href="<?php echo URLROOT; ?>/cart" class="btn btn-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i> buy now</a>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>