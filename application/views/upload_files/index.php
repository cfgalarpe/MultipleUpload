<!DOCTYPE html>
<html>
<head>
    <title>Multiple Upload</title>
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/triune.css" />
<!-- basic scripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/bootstrap.js"></script>
</head>
<body class="content">
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
            <form enctype="multipart/form-data" action="" method="post">
                <div class="form-group">
                    <label>Choose Files</label>
                    <input type="file" class="form-control" name="userFiles[]" multiple/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                </div>
            </form>
        </div>
        </div>
    <div class="row">
        <ul class="gallery">
            <?php if(!empty($files)): foreach($files as $file): ?>
            <li class="item">
                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" >
                <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
            </li>
            <?php endforeach; else: ?>
            <p>Image(s) not found.....</p>
            <?php endif; ?>
        </ul> 
    </div>
</div>
</body>
</html>