<?php

   session_start();
   require_once 'connection.php';  //Include Our Database connections

   if (isset($_POST['submit'])){

       function validation($data){
           $data = htmlentities($data);
           $data = htmlspecialchars($data);
           $data = trim($data);
           $data = stripcslashes($data);
           return $data;
       }

       $username = validation($_POST['username']);
       $email = validation($_POST['email']);
       $password = validation($_POST['password']);
       $gender = validation($_POST['gender']);
       $role = validation($_POST['role']);
       $message = validation($_POST['message']);


        $errors = [];
        if (strlen($username)<4){
          $errors['username'] = 'Username is too short';
        }
        if (strlen($username)>50){
            $errors['username'] = 'Username is Too long';
        }

       if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $errors['email'] = 'Please Enter the Valid Email';
       }

       if (strlen($email) > 80){
           $errors['email'] = 'Email length is too long';
       }

       if (strlen($password)<5){
           $errors['password'] = 'Password Must be at least 6 characters';
       }
       if (strlen($password)>80){
           $errors['password'] = 'Password is too long';
       }
       if (strlen($message)<3){
           $errors['message'] = 'Message is too short';
       }
      if (strlen($message)>500){
          $errors['message'] = 'Message length is too long';
      }


      if (empty($errors)){
           if ($connection){
               $password = password_hash($password,PASSWORD_BCRYPT);
               $sql = "INSERT INTO users (username,email,password,gender,role,message) VALUES ('$username','$email','$password','$gender','$role','$message')";
               $stmt = mysqli_query($connection,$sql);
               if ($stmt == false){

                   echo mysqli_error($connection);
               }else{
                   $_SESSION['success'] = 'User Registration Successfully';
                   header('Location:portfolio.php');
               }

           }
      }









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
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="card mx-auto w-75 mt-5 bg-info ">
        <div class="card-header">
            <h1 class="text-center">Get Touch</h1>
        </div>
        <div class="card-body">

                <div class="form-group">
                    <?php
                    if (isset($_SESSION['success'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                        <?php
                    }

                    ?>

                    <label for="name">Name</label>
                    <input type="text" class="form-control" required id="name" name="username" placeholder="Enter your name">
                    <?php
                       if (isset($errors['username'])){
                           ?>
                           <div class="alert alert-danger">
                                <?php echo $errors['username']; ?>
                           </div>
                    <?php
                       }

                    ?>
                </div>

                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">

                    <?php
                    if (isset($errors['email'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $errors['email']; ?>
                        </div>
                        <?php
                    }

                    ?>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" required id="pass" name="password" placeholder="Enter your password">
                    <?php
                    if (isset($errors['password'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $errors['password']; ?>
                        </div>
                        <?php
                    }

                    ?>
                </div>

                 <br>

            <div class="form-group" >
                    <h3>Gender</h3>
                    <label for="m">Male</label>
                    <input type="radio" id="m" name="gender" value="male" required>

                    <label for="f">Female</label>
                    <input type="radio" id="f" name="gender" value="female " required>

                <?php
                if (isset($errors['gender'])){
                    ?>
                    <div class="alert alert-danger">
                        <?php echo $errors['gender']; ?>
                    </div>
                    <?php
                }

                ?>

            </div>


                <br>

                <select name="role" id="" required>
                    <option>--Select option--</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Student">Student</option>
                    <option value="Staff">Staff</option>
                    <?php
                    if (isset($errors['role'])){
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $errors['role']; ?>
                        </div>
                        <?php
                    }

                    ?>
                </select><br><br>

            <div class="form-group">
                <label for="mes">Message</label>
                <textarea class="form-control" name="message" id="mes" required></textarea>
                <?php
                if (isset($errors['message'])){
                    ?>
                    <div class="alert alert-danger">
                        <?php echo $errors['message']; ?>
                    </div>
                    <?php
                }

                ?>
            </div>



        </div>
        <div class="card-footer">

            <input type="submit" value="Submit" class="btn btn-success btn-block" name="submit">
        </div>
    </div>
    </form>


</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

