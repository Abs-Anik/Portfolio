<?php
session_start();
 require_once 'connection.php';
 if ($connection){
     $sql = "SELECT id,username,email,gender,role,message FROM users";
     $stmt = mysqli_query($connection,$sql);
     if ($stmt){
        $result = mysqli_fetch_all($stmt,1);
     }else{
      echo mysqli_error($connection);
     }
 }else{
    mysqli_connect_errno($connection);
     die();
 }


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

    <title>Abs Anik</title>
    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
            background-color: #007BFF;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
                <a class="navbar-brand text-white" href="#" style="font-size: 30px">Me!</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white font-weight-bold" href="portfolio.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="carrer.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Career
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="teaching.php">Education</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="education.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Education
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="jsc.php">Junior School Certificate (JSC)</a>
                                <a class="dropdown-item" href="ssc.php">Secondary School Certificate (SSC)</a>
                                <a class="dropdown-item" href="hsc.php">Higher Secondary School Certificate (HSC)</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold" href="#">Publication</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Research
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Multi-Factor Authentication</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Association
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Volunteer Exprience</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Teaching
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Web Dsign</a>
                                <a class="dropdown-item" href="#">Web Development</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold" href="#">Project Exprience</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Training</a>
                                <a class="dropdown-item" href="#">Remembernace</a>
                                <a class="dropdown-item" href="#">Photos</a>
                                <a class="dropdown-item" href="#">Award</a>
                                <a class="dropdown-item" href="contact.php">Contact</a>
                                <a class="dropdown-item" href="#">Curriculum Vitae</a>
                                <a class="dropdown-item" href="#">Download</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
                    </form>
                </div>

            </nav>
        </div>
    </div>
    <br>



    <div class="card">
        <div class="form-group">

        <div class="card-header">
            <h4 class="card-title">List of the Users</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                foreach ($result as $value){

                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['gender']; ?></td>
                        <td><?php echo $value['role']; ?></td>
                        <td><a class="btn btn-info btn-sm" href="details.php?id=<?php echo $value['id']; ?>">Details</a></td>
                    </tr>
                    <?php
                    $i++;
                }

                ?>
                </tbody>

            </table>
        </div>
    </div>



</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

