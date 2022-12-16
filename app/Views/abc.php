<!DOCTYPE html>
<html lang="en">
<head>
  <title>MINI INVENTORY SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CI/public/index.css" rel="stylesheet">
 
  <script src="js/bootstrap.bundle.min.js">
   </script>
   <script>
    function show()
{
document.getElementById('mdlgin').style.display = 'block';
}

function hide()
    {
      document.getElementById('mdlgin').style.display = 'none';
    }

    function foc()
    {
      document.getElementById('signin').style.transform = "scale(1.1)";
    }
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
            <ul class="navbar-nav  ms-auto list">
            </ul>
            
            <button class="btn btn-success btnls"  type="button" onclick="foc()">Log In</button>
            <button class="btn btn-warning btnls" type="button" onclick="hide()" data-bs-toggle="modal" data-bs-target="#modalForm">Sign Up</button>
          
          
          </div>
        </div>
      </nav>
     
    <div class="bg" onclick="show()" >
            <div class="container py-5 h-100" id="mdlgin">
              <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                  <div class="signin mt-5 text-white" id="signin" style="border-radius: 3rem;">
                    <div class="card-body p-3 text-center">
                        <h3 class="fw-bold mb-2 text-uppercase">Admin Login</h3>
                        <p class="text-white-50 ">Please enter your name and password!</p>
                        <div class="form-outline form-white mb-4">
                          <input type="email" placeholder="Username"  class="form-control form-control-lg" />
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" placeholder="Password" class="form-control form-control-lg" />
                          
                        </div>
                        
                        <a href="About.html"><button class="btn btn-outline-light btn-lg px-5 lgbtn" type="submit">Login</button></a><br><br>
                        
                     
                      <div>
                        <p class="">Don't have an account? <a href="" class="text-white-50 fw-bold" data-bs-toggle="modal" data-bs-target="#modalForm" onclick="hide()">Sign Up</a>
                        </p>
                      </div> </div>
                </div>
              </div>
        
        </div>
                 
                </div>
         
              <div class="modal fade " id="modalForm"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content modalsign">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Admin Sign Up</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="show()" aria-label="Close" style="color: black; background-color: white;"></button>
                          </div>
                          <div class="modal-body">
                              <form>
                                  <div class="mb-3">
                                      <label class="form-label" style="color: white;">Email Address</label>
                                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label" style="color: white;">Password</label>
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                  </div>

                                  <div class="mb-3">
                                    <label class="form-label" style="color: white;">Confirm Password</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" />
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
              </div>
</body>
</html>
