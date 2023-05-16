<?php
require 'admin/dbcon.php';
include ('headt.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_bannert.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)" style="margin-top:5rem; width:20rem;">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/hdb.php">Head Boy</option>
                <option value = "candidates/hdg.php">Head Girl</option>
                <option value = "candidates/lb.php">Labour Boy</option>
                <option value = "candidates/lg.php">Labour Girl</option>
                <option value = "candidates/ab.php">Assembly Boy</option>
                <option value = "candidates/ag.php">Assembly Girl</option>
                <option value = "candidates/pb.php">Punctuality Boy</option>
                <option value = "candidates/pg.php">Punctuality Girl</option>
                <option value = "candidates/sb.php">Social Boy</option>
                <option value = "candidates/sg.php">Social Girl</option>
                <option value = "candidates/fb.php">Food Boy</option>
                <option value = "candidates/fg.php">Food Girl</option>
                <option value = "candidates/hb.php">Health Boy</option>
                <option value = "candidates/hg.php">Health Girl</option>
                <option value = "candidates/lib.php">Library Boy</option>
                <option value = "candidates/lig.php">Library Girl</option>
                <option value = "candidates/spb.php">Sport Boy</option>
                <option value = "candidates/spg.php">Sport Girl</option>
                <option value = "candidates/tk.php">Time Keeper</option>
                <option value = "candidates/jn.php">Janitor</option>
                <option value = "candidates/fm.php">Fellowship Muslim</option>
                <option value = "candidates/fc.php">Fellowship Christian</option>
                <option value = "candidates/ht.php">Hostel</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <script>
    function page (src){
        window.location=src;
    }
    </script>
<?php
include_once 'footert.php';
?>
</body>

</html>

