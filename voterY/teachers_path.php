
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "teachers/hod.php">HOD</option>
                <option value = "teachers/exm.php">Exam Director</option>
                <option value = "teachers/cons.php">Counsellor</option>
                <option value = "teachers/msd.php">Music Director</option>
                <option value = "teachers/dis.php">Disciplinarian</option>
                <option value = "teachers/dac.php">Drama and Chorography</option>
                <option value = "teachers/spd.php">Sport Director</option>
                <option value = "teachers/hoc.php">Heads Of Clubs</option>
                <option value = "teachers/ht.php">Head Teachers</option>
                <option value = "teachers/sg.php">Social Girl</option>
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

