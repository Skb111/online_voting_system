<?php
    require 'admin/dbcon.php';
    include_once 'head.php';
    include_once 'view_bannert.php';
?>

        <!--HERO SECTION STARTS-->
      <section class="home hero-section" id="home" style="margin-top:10rem; max-width:100v;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto ">
                        <h6 class="home-header text-align-center justify-content-center">
                            <!-- Get the <span> best</span> <br> <span>course </span>options <br> with no stress -->
                             Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                              Cum minima iure voluptas porro autem modi velit enim suscipit voluptatum in!
                        </h6>
                         <form method="POST" id="search-form" name="myForm" class="searchform" action="search.php">
                            <div class="input-group ">
                                  <input class="form-control"  type="text" onsubmit="return validateForm()" name="search" id="s" placeholder="Search for anything" />
                                  <input class="btn go bg-primary" type="submit" name="submit" id="searchsubmit" value="Go" />
                                  <!-- <button type="submit" name="submit">submit</button> -->
                              </div>
                          </form>
                          
                          
                    </div>
                </div>
            </div>
      </section>
        <!--HERO SECTION ENDS-->
        <script>
           function validateForm() {
          var query = document.getElementsByName("search")[0].value.trim();
          if (query.length < 3) {
            alert("Please enter at least 3 characters.");
            return;
          }
          return false;
        }
        </script>
        
        <!--CHOOSE SECTION STARTS-->
      <section class="choose choose-section" id="choose">
         <div class="container justify">
            <div class="row">
              
              <!-- Modal -->

              <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Login <span style="color:blue;">STUDENT</span></h1>
                      &nbsp;&nbsp;&nbsp;
                      <h4 class="modal-title fs-5" id="exampleModalLabel">New Here?<span style="color:blue;">Create Account</span></h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form role="form" method = "post"  class="index-form">
                        <div class="mb-3">
                          <label for="idz" class="col-form-label">ID</label>
                          <input type="text" class="form-control" id="idz">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="col-form-label">Password</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <a href="register/index.php" class="btn btn-primary">Register</a>
                      <a class="btn btn-primary" name="login">Login</a>
                      <a class="btn btn-danger" data-bs-dismiss="modal">Close</a>
                    </div>
                  </div>
                </div>
              </div> -->

                    <?php  
                    $sql = "SELECT * FROM candidate ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                              </div>
                            </div>';
                    }

          ?>
   
            </div>
          </div>
      </section>
        <!--CHOOSE SECTION ENDS-->
        

            <!--QUOTE SECTION STARTS-->
      <section class="quote quote-section" id="quote">
            <div class="container-fluid text-dark ">
                <div class="row">
                    <div class="col quote1">
                        <div class="card text-center border-0">
                        <div class="card-body quote2 py-5 border-0">
                            <h3 class="card-title card-title1 text-capitalize ">what are you waiting for?</h3>
                            <p class="card-text text-white p4">we value your feedback and are always here to help!</p>
                            <a href="contact.php" class="req-btn py-3">Request a quote</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
      </section>
            <!--QUOTE SECTION ENDS-->

  <?php
  include_once 'footert.php';
  ?>


