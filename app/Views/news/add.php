<!DOCTYPE html>
<html lang="en">
<head>
  <title>MINI INVENTORY SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CopyCI/public/index.css" rel="stylesheet">
 
  <script src="js/bootstrap.bundle.min.js">
   </script>
   
  
</head>
<body >
    
      <nav class="navbar navbar-expand-sm navbar-custom navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://cdn-icons-png.flaticon.com/512/3028/3028631.png" alt="Logo" style="width:45px ;" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span class="navbar-text">STATIONARY HOUSE</span>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  ms-auto ">
            </ul>
            
            <button class="btn btn-success btnls"  type="button" data-bs-toggle="modal" data-bs-target="#modalForm">Add Dealers</button>
            <button class="btn btn-warning btnls" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add Products</button>

    
          
          
          </div>
        </div>
      </nav>
     
    <div class="bg">
            
         
              <div class="modal fade " id="modalForm"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content modalsign">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Admin Sign Up</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="show()" aria-label="Close" style="color: black; background-color: white;"></button>
                          </div>
                          <div class="modal-body">
                              

<form action="" method="post">
    
   
                                  <div class="mb-3">
                                      <label class="form-label" style="color: white;">Email Address</label>
                                      <input type="text" class="form-control" id="username" name='email' placeholder="Username" required />
                                      
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label" style="color: white;">Password</label>
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label" style="color: white;">Confirm Password</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required/>
                                </div>

                                  <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="rememberMe" />
                                      <label class="form-check-label" for="rememberMe" style="color: white;">Remember me</label>
                                  </div>
                                  <div class="modal-footer d-block">
                                      <p class="float-start" style="color: white;">Already have an Account? <a href="<?php echo base_url();?>" style="color: white;">Login</a></p>
                                      <button type="submit" class="btn btn-success float-end">Submit</button>
                                  </div>
                             </form>
                          </div> 
                      </div>
                  </div>
                  <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modalsign">
            <div class="modal-header">
              <h4 class="modal-title">Add The Products Here !</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" style="color: black; background-color: white;"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name of the Product" required>
                </div>
                <div class="mb-3">
                <input type="number" class="form-control" placeholder="Price" required>
            </div>
            <div class="mb-3">
                    <input type="number" class="form-control" placeholder="Quantity" required>
            </div></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Add</button>
            </div>
      
          </div>
        </div>
      </div>
              </div>
</body>
</html>







