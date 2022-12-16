<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Dealers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CopyCI/public/index.css" rel="stylesheet">
 </head>
<body>
<div class = "bg">
<div class="container">
      <div class ="row d-flex justify-content-center align-items-center">
      <div class="col-md-6 mt-5">
      <div class="card cardclr">
      <div class="card-header">
      <h4 style="color:white";>Update Details
      <a href="<?= base_url('dealers/second') ?>" class="btn btn-danger float-end">Back</a>
      </h4>
      
      </div>
      <div class="card-body">
      <form action = "<?php echo base_url('dealers/update/'.$dealers['id']);?>" method="get">
      <div class="row">
      <div class="col-md-12">
      <div class="form-group mb-3">
      <input type = "text" name ="name" value="<?= $dealers['name'] ?>" placeholder=" Enter Name" class ="form-control">
      
      
      </div>
      </div>
      <div class="col-md-12">
      <div class="form-group mb-3">
      <input type = "number" name ="phone" value="<?= $dealers['phone'] ?>" placeholder=" Enter Phone Number" class ="form-control">
      </div></div>
      <div class="col-md-12">
      <div class="form-group mb-3">
      <input type = "text" name ="company" value="<?= $dealers['company'] ?>" placeholder=" Enter cab" class ="form-control">
      </div>
      
      </div>
      <div class="col-md-12">
      <div class="form-group mb-3">
      <button type = "submit" class ="btn btn-success px-4">Update </button>
      </div>
      
      </div> </form>
      </div>
     
      </div>
      
      </div>
      </div></div>
      </body>
