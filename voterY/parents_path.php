
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "parents/chm.php">Chairman</option>
                <option value = "parents/vch.php">Vice Chairman</option>
                <option value = "parents/trs.php">Treasurer</option>
                <option value = "parents/sec.php">Secretary</option>
                <option value = "parents/pro.php">PRO</option>
                <option value = "parents/evc.php">Event Coordinator</option>
                <option value = "parents/mmc.php">Membership Coordinator</option>
                <option value = "parents/fnc.php">Fundraising Coordinator</option>
                <option value = "parents/adc.php">Advocacy Chairman</option>
                <option value = "parents/tac.php">Teacher Appreciation Coordinator</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

