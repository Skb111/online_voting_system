<?php
    include 'head.php';
?>

      <nav class="navbar navbar-expand-lg fixed-top bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <!-- <img src="imgs1/logo2.png" alt="" srcset="" id="logo-image" class="h-100 logo"> -->
              <h3 class="brand-name mx-5">Online Voting System</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="career.php">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>    

                <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav> -->

        <!--- NAV ENDS-->

        <!--HERO SECTION STARTS-->
      <section class="home hero-section" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h6 class="home-header text-align-center justify-content-center">
                            <!-- Get the <span> best</span> <br> <span>course </span>options <br> with no stress -->
                              Welcome to CareerOptions😊 We are thrilled to have you here. Browse our site to learn more about your courses,
                              and career opportunities.
                        </h6>
                         <form method="POST" id="search-form" name="myForm" class="searchform" action="search.php">
                            <div class="input-group ">
                                  <input class="form-control"  type="text" onsubmit="return validateForm()" name="search" id="s" placeholder="Search for anything" />
                                  <input class="btn go " type="submit" name="submit" id="searchsubmit" value="Go" />
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
         <div class="container">
            <div class="row">
              <h1 class="choose-header text-center">
                Choose From Our  <br>lists Of Career Choices 
              </h1>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">programming</h3>
                        <p class="p2">
                          A programming language is a system of notation for writing computer programs.
                          Most programming languages are text-based formal languages, but they may also be graphical. 
                          They are a kind of computer language.
                          The description of a programming language is usually split into the two components
                           of syntax (form) and semantics (meaning), which are usually defined by a formal language. 
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">Engineering</h3>
                        <p class="p2">Engineering is the use of scientific principles to design
                           and build machines, structures, and other items, including bridges,
                            tunnels, roads, vehicles, and buildings. The discipline of engineering
                             encompasses a broad range of more specialized fields of engineering, 
                             each with a more specific emphasis on particular areas of applied mathematics,
                           applied science, and types of application. See glossary of engineering...
                          </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">Chartered Accountancy</h3>
                        <p class="p2">Chartered accountants were the first accountants to form a 
                          professional accounting body, initially established in Scotland in 1854. 
                          The Edinburgh Society of Accountants (1854), the Glasgow Institute of 
                          Accountants and Actuaries (1854) and the Aberdeen Society of Accountants (1867) 
                          were each granted a royal charter almost from their inception. The title is
                           an internationally recognised professional designation...
                          </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Medicine</h3>
                        <p class="p2">Medicine is also a key mention among the toughest courses in the world which 
                          mainly requires patience, knowledge of medical care, a strong stomach and willing 
                          altruistic nature. It is widely known that a good gesture helps people recover from a 
                          dire situation. Nurses assist doctors, therapists, patients and their families. You need
                           to have good GPAs in Biology, Chemistry, Maths, Psychology and other important subjects...
                          </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Finance</h3>
                        <p class="p2">
                          This sought-after area of study in the Commerce stream relates to every aspect of 
                          monetary management and establishment. To build a promising career in Finance, one needs to have
                          the analytic ability, unique funding methods, etc. as well as the knowledge of financial management,
                          accounting, risk management, amongst others which makes it one of the toughest courses in the world...
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Law</h3>
                        <p class="p2">Law is a set of rules that are created and are enforceable by 
                          social or governmental institutions to regulate behavior,with its precise
                           definition a matter of longstanding debate.It has been variously 
                           described as a science and as the art of justice.State-enforced
                            laws can be made by a group legislature or by a single legislator, resulting 
                            in statutes; by the executive through decrees and regulations... 
                          </p>
                    </div>
                </div>
            </div>
          </div>
      </section>
        <!--CHOOSE SECTION ENDS-->

        <!--RANGE INDUSTRIES SECTION ENDS-->

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
  include_once 'footer.php';
  ?>
