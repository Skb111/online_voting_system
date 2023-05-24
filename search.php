
<?php
    include_once 'headt.php';
    include_once 'admin/dbcon.php';
?>

<?php
      
    
      $query = $_POST['search'];
      
      // Server-side validation
      if (strlen($query) < 3) {
          echo "<script>
                    document.location.href='index.php';
                </script>";
          exit;
      }
      
      if (isset($_POST['submit'])) {
          $search = mysqli_real_escape_string($conn, $_POST['search']);
          $sql = "SELECT * FROM candidate WHERE candidate_id LIKE '%$search%' OR position LIKE '%$search%' OR firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR year_level LIKE '%$search%' OR gender LIKE '%$search%'";
          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);
          echo "<h4 class='text-center mt-4'>There are $queryResult found!</h4>";
          if ($queryResult > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  $card = new stdClass();
                  $card->image = $row['img'];
                  $card->firstname = $row['firstname'];
                  $card->lastname = $row['lastname'];
                  $card->position = $row['position'];
      
                  echo "<div class='card mx-3 my-4 ' style=' display: flex; flex-wrap: wrap; width:20rem; height:30rem; align-items:center; gap: 7rem; margin-left: 20rem !important;'>
                      
                      <img src='admin/$card->image' style='border-radius: 15px;' class='img-fluid'>
                              <div class='card-body'>
                                <h6 class='card-title text-capitalize'style='color:; font-weight:bold;'>$card->firstname  $card->lastname </h6>
                                <p class='card-text' style='color:; font-weight:bold;'>Position: <span style='color:blue; font-weight:bold;'>$card->position</span> </p>
                              </div>
                            </div>";
              }
          } else {
              echo "<h4 class='text-dark mt-4'>There are no result found!<h4/>";
          }
      }
          
      
    ?>

     <!--QUOTE SECTION STARTS-->
     <section class="quote quote-section mt-5" id="quote">
          <div class="container-fluid text-white ">
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
include_once  'footert.php';
?>
