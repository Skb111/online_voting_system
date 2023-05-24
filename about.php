<?php
    require 'admin/dbcon.php';
    include_once 'headt.php';
    include_once 'view_bannert.php';
?>

    <!---CONTACT FORM SECTION STARTS--->
      <section class="contacts contacts-section" id="contacts">
                <div class="container text-black ">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="contact-header  text-capitalize text-center">Contact Us</h1>
                            <p class="contact-info text-center col-md-12 align-items-center justify-content-center">
                              we value your feedback and are always here to help. If you have any questions or concerns<br/> please don't hesitate to reach out.
                            </p> 
                            <!-- <form class="row g-3 py-4  align-items-center justify-content-center" method="POST" action="send.php">
                                <div class="col-md-10">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control form-control-1" id="name" placeholder="Please Enter Your Name" name="name">
                                  </div>
                                <div class="col-md-10">
                                    <label class="labels">Email</label>
                                    <input type="email" class="form-control form-control-1" id="email" placeholder="Please Enter Your Name" name="email">
                                  </div>
                                <div class="col-md-10">
                                 <label class="labels">Subject</label>
                                  <input type="text" class="form-control form-control-2" id="subject" placeholder="Please Enter The Subject Of Your Mail" name="subject">
                                </div>
                                <div class="col-md-10">
                                  <label class="labels">Message</label>
                                   <textarea name="body" id="body" cols="60" rows="10" class="textarea1 form-control" placeholder="Please Enter Your Message"></textarea>
                                 </div>
                                  <button type="submit" class="cont-btn col-md-10 mb-3" id="cont-btn"  name="submit">Submit</button>
                                 
                              </form> -->
                              <?php
                                // date_default_timezone_set('Africa/Lagos'); // Set the Nigeria time zone

                                // $currentTime = date('H'); // Get the current hour

                                // if ($currentTime < 12) {
                                //     $greeting = 'Good morning';
                                // } elseif ($currentTime < 18) {
                                //     $greeting = 'Good afternoon';
                                // } else {
                                //     $greeting = 'Good evening';
                                // }

                                // echo $greeting;
                                ?>

                        </div>
                    </div>
                </div>
      </section> 
      <!--- CONTACT FORM SECTION ENDS--->
      

      

<?php
  include_once 'footert.php';
  ?>
