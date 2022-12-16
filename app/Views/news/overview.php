<!DOCTYPE html>
<html lang="en">
<head>
  <title>TAXIRY...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CopyCI/public/index.css" rel="stylesheet">
 
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
  <style>
  body,html{
    margin: 0px;
    padding: 0px;
}
.bg 
{
    width: auto;
    height: 110vh;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
     background: linear-gradient(to top, rgba(6, 7, 64, 0.4) , rgba(14, 14, 15, 0.4)),url('cab.jpg'); 
     background-repeat: no-repeat;
     background-size: cover;


}  
.navbar-custom{
    background-color: light-grey ;
}

.navbar-brand:hover{
cursor: zoom-in;
transform: scale(1.3);
}
.navbar-text{
    font-size: 50px;
    color:#FFFF99!important;
    text-shadow: 1px 2px 2px black;
}
.btnls{
    margin: 8px 20px;
}
.signin{
   margin-top: 150px !important;
    background-color: light-grey;
}
.modal-title
{
    color: #FFFF99 ;
    text-align: center !important;
}
.modalsign{
    background-color: black !important;
}
.lgbtn a{
    color: black !important;
    text-decoration: none !important;
}
.lgbtn a:hover{
    color: black !important;
}
.nvitems{
    font-size: 20px !important;
    color: white !important;
    text-shadow: 1px 1px 2px rgb(16, 26, 0);
}
</style>
</head>
<body >
    
      <nav class="navbar navbar-expand-sm navbar-custom navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://www.shutterstock.com/image-illustration/flat-taxi-driver-uniform-hat-260nw-506647411.jpg" alt="Logo" style="width:45px ;" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span style="font-family: cursive" class="navbar-text">TAXIRY</span>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  ms-auto list">
            </ul>
            
            <button class="btn btn-dark btnls"  type="button" onclick="foc()">SIGN IN</button>
            <button class="btn btn-dark btnls" type="button" onclick="hide()" data-bs-toggle="modal" data-bs-target="#modalForm">SIGN UP</button>

    
          
          
          </div>
        </div>
      </nav>
     
    <div class="bg" onclick="show()" >
            <div class="container py-5 h-100" id="mdlgin">
              <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                  <div class="signin mt-5 text-white" id="signin" style="border-radius: 3rem;">
                    <div class="card-body p-3 text-center">
                        <h3 style="font-family: cursive " class="fw-bold mb-2 text-uppercase">LOGIN</h3>
                        <p style="font-family: cursive"  class="text-white-50 ">Please enter your name and password!</p>
                        <form action="<?php echo base_url();?>/news/nav" method="post">
    <?= csrf_field() ?>
                        <div class="form-outline form-white mb-4">
                          <input type="email" placeholder="Username" style="font-family: cursive"  class="form-control form-control-lg" />
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" placeholder="Password"style="font-family: cursive"  class="form-control form-control-lg" />
                          
                        </div>
                        
                        <a href=""><button class="btn btn-outline-light btn-lg px-5 lgbtn"style="font-family: cursive"  type="submit">Login</button></a><br><br>
                        
                     
                      <div>
                        <p style="font-family: cursive" class="">Don't have an account? <a href="" class="text-white-50 fw-bold" data-bs-toggle="modal" data-bs-target="#modalForm" onclick="hide()">Sign Up</a>
                        </p>
                      </div> </form></div>
                </div>
              </div>
        
        </div>
                 
                </div>
         
              <div class="modal fade " id="modalForm"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content modalsign">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"> SIGN UP</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="show()" aria-label="Close" style="color: black; background-color: white;"></button>
                          </div>
                          <div class="modal-body">
                              <?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>
<?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

<form action="<?php echo base_url();?>/news/create" method="post">
    <?= csrf_field() ?>
   
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
              </div>
</body>
</html>







