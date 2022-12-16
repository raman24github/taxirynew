<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="index.css" rel="stylesheet">
 
  <script src="js/bootstrap.bundle.min.js">
   </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-custom  navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://cdn-icons-png.flaticon.com/512/3028/3028631.png" alt="Logo" style="width:45px ;" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span class="navbar-text">STATIONARY HOUSE</span>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  ms-auto list">
                <li class="nav-item nvitems">
                    <a class="nav-link" href="About.html">Product Inventory</a>
                  </li>
                  <li class="nav-item nvitems">
                    <a class="nav-link" href="">Product List</a>
                  </li>
                  <li class="nav-item nvitems">
                    <a class="nav-link" href="">Dealers</a>
                  </li>
                  <button class="btn btn-secondary btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal2">Add Dealers </button>
                  <button class="btn btn-danger btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add Products </button>
            </ul>
          
          </div>
        </div>
      </nav>
<div class="bg">
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

      <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modalsign">
            <div class="modal-header">
              <h4 class="modal-title">Add the Dealers Here !</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" style="color: black; background-color: white;"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name of the Dealer" required>
                </div>
                <div class="mb-3">
                <input type="number" class="form-control" placeholder="Phone Number " required>
            </div>
            <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Company's Name" required>
            </div>
            <div class="mb-3">
                <select class="form-control" name="Product" required>
                    <option disabled selected hidden>Products</option>
                    <option>Pens</option>
                    <option>Registers</option>
                    <option>Files</option>
                    <option>Sheets</option>
                </select>
        </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Add</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>
