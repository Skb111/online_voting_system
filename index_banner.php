<?php include_once ('head.php');?>
<?php include_once ('view_bannert.php');?>


    <!-- <nav class="nav-menue">
        <ul>
            <li>
                <a href="index.php" class="active">Home</a>
            </li>
            <li><a href="candidate_path.php">Students</a></li>
            <li><a href="teachers_path.php">Teachers</a></li>
            <li><a href="parents_path.php">Parents</a></li>
            <li><a href="register/index.php">Students Reg</a></li>
            <li><a href="register_teachers/index.php">Teachers Reg</a></li>
            <li><a href="register_parents/index.php">Parents Reg</a></li>
            <li><a href="voters.php">Students List</a></li>
            <li><a href="teachers_voters.php">Teachers List</a></li>
            <li><a href="parents_voters.php">Parents List</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav> -->
    
    <!--- NAV STARTS-->
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Online Voting System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Candidates
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="candidate_path.php">Students</a></li>
                            <li><a class="dropdown-item" href="teachers_path.php">Teachers</a></li>
                            <li><a class="dropdown-item" href="parents_path.php">Parents</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Register
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="register/index.php">Students</a></li>
                            <li><a class="dropdown-item" href="register_teachers/index.php">Teachers</a></li>
                            <li><a class="dropdown-item" href="register_parents/index.php">Parents</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin/index.php">Admin</a></li>
                        <li><a class="dropdown-item" href="login.php">Students</a></li>
                            <li><a class="dropdown-item" href="login_teachers.php">Teachers</a></li>
                            <li><a class="dropdown-item" href="login_parents.php">Parents</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>

        <!--- NAV ENDS-->
        
  