<?php
session_start();
?>
<!-- Bootstrap 4 uses HTML elements and CSS properties that require the HTML5 doctype. -->
<!DOCTYPE html>
<!-- Always include the HTML5 doctype at the beginning of the page, along with the lang attribute and the correct character set -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- To ensure proper rendering and touch zooming for all devices, add the responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>eshop</title>

    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!-- Owl-carousel CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw="
      crossorigin="anonymous"
    />

    <!-- font awesome icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
      crossorigin="anonymous"
    />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css" />

    <style>
        body{
            background-color: whitesmoke;
        }
    </style>
  </head>
<body>
    <!-- start #header -->
    <header id="header" class="color-yellow-bg">
      <!-- Primary Navigation -->
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark color-yellow-bg">
            <a class="navbar-brand font-weight-bolder text-danger" href="#">eshop</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item px-3 active">
                  <a class="nav-link text-secondary font-weight-bold" href="admin.php">Admin panel</a>
                </li>
                <li class="nav-item px-3 active">
                  <a class="nav-link text-secondary font-weight-bold" href="../logout.php">Log Out</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
      <!-- !Primary Navigation -->
    </header>
    <!-- !start #header -->
<div class="container">
    <div class="my-2 mx-3" id="insert">
        <div class="row justify-content-center bg-white">
            <div class="col-auto my-5">

                <form action="crud.php" method="post" class="form">
                    <div class="form-group p-2 pb-4">
                        <h3 style="color: steelblue; text-align: center">Product</h3>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary">Id :</span>
                        </div>
                        <input class="form-control" type="text" name="studentId" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary">Type :</span>
                        </div>
                        <input class="form-control" type="text" name="courseId" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name :</span>
                        </div>
                        <input class="form-control" type="number" step="any" min="0" name="attendance">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Price :</span>
                        </div>
                        <input class="form-control" type="number" step="any" min="0" name="assignment">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Image:</span>
                        </div>
                        <input class="form-control" type="number" step="any" min="0" name="project">
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-outline-primary" name="insert_mark" href="crud.php">Insert</button>
                        <button type="submit" class="btn btn-outline-info" name="update_mark" href="crud.php">Update</button>
                        <button type="submit" class="btn btn-outline-danger" name="delete_mark" href="crud.php">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>

    <!-- start #footer -->
    <footer id="footer" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4 class="font-rubik font-size-20">eshop</h4>
            <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
          </div>
          <div class="col-lg-4 col-12">
            <h4 class="font-rubik font-size-20">Newslatter</h4>
            <form class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email *" />
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Information</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubik font-size-20">Account</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
              <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
      <p class="font-rale font-size-14">&copy; Copyrights 2022. Designed & Developed By <a href="#" class="color-second">Nasim Bahadur</a></p>
    </div>
    <!-- !start #footer -->

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <!-- Owl Carousel Js file -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0="
      crossorigin="anonymous"
    ></script>

    <!--  isotope plugin cdn  -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
      integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI="
      crossorigin="anonymous"
    ></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>
  </body>
</html>
