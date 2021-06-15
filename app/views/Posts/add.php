<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add Product</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">
      <div class="form-group">
        <label for="title">name: <sup>*</sup></label>
        <input type="text" name="name" class="form-control form-control-lg 
               <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="body">Category: <sup>*</sup></label>
        <textarea name="catid" class="form-control form-control-lg 
                  <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['catid']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="body">Price: <sup>*</sup></label>
        <textarea name="price" class="form-control form-control-lg 
                  <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['price']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>

       <div class="form-group">
        <label for="body">descripton: <sup>*</sup></label>
        <textarea name="descripton" class="form-control form-control-lg 
                  <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['descripton']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>