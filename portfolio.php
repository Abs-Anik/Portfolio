<?php session_start() ; ?>
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
                            <a class="dropdown-item" href="view.php">View Users</a>
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


    <div class="row">
        <?php
        if (isset($_SESSION['success'])){
            ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; ?>
            </div>
            <?php
        }

        ?>
        <div class="col-lg-12 mt-5 mb-4">
            <h1 class="text-center font-weight-bold mt-5">Md. Abu Bakkar Siddik (Anik)</h1>
        </div>
    </div>
    <br>
    <div class="row mt-5">
        <div class="col-lg-8">
            <p class="text-center mx-auto">B.S.C Student,Department of Computer Science & Engineering(CSE)</p>
            <p class="text-center mx-auto">Daffodil International University, Dhaka, Bangladesh</p>
            <p class="text-center mx-auto">&</p>
            <p class="text-center mx-auto">Founder and CEO at PIXEL EXPERT</p>
            <p class="text-center mx-auto">Email: abubakkarsiddik275@gmail.com</p>
            <p class="text-center mx-auto">LinkedIn: https://www.linkedin.com/in/abu-bakkar-siddik-b7b072153</p>
            <p class="text-center mx-auto">GitHub: https://github.com/Abs-Anik</p>
        </div>

        <div class="col-lg-4">
            <img src="img/a.jpg" class="img-thumbnail" style="height: 300px; width: 350px" alt="Anik">
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <p>This is the personal website of Md. Abu Bakkar Siddik.</p>

            <p>Md. Abu Bakkar Siddik lives in Gorpara, Meherpur, Bangladesh. He is a  Student at Department of Computer Science in University of Daffodil International University. Besides, He is also working as a Web Developer at PIXEL EXPERT. He has started school at Meherpur Govt High School and college Meherpur Paura College.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores assumenda ipsum modi neque quibusdam sit totam. Atque consectetur distinctio eum, libero neque nihil numquam officia quo suscipit veniam vero?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur at cumque delectus, distinctio dolorem ducimus ea esse et eveniet ipsa ipsum laboriosam magni maiores modi mollitia nisi officia pariatur perferendis perspiciatis quis quisquam quos reiciendis repellat sunt ut velit vero vitae voluptate voluptatem. A ab atque delectus, eveniet facilis illum maxime modi nihil quod tempora. Animi beatae consectetur enim fugiat quaerat quibusdam tempore temporibus. Culpa ea error in inventore, nam nihil porro, praesentium quod repellat reprehenderit temporibus voluptatibus. Aut corporis facere ipsum modi, nam nesciunt perspiciatis porro quod similique tempora, tempore ut. Adipisci amet labore nemo obcaecati placeat quasi?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias fuga hic ipsum labore laborum praesentium sequi voluptate! Amet, asperiores culpa ea est inventore ipsam laboriosam odit ratione. Ab aliquam assumenda, blanditiis consequuntur culpa, cum delectus dignissimos dolor dolorem dolores doloribus ea enim eos error explicabo harum incidunt inventore laboriosam magni nulla odit officia optio perferendis possimus praesentium quaerat repellat sed sit ullam unde. Harum iusto laudantium omnis quis sit?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolores ea eius eos ipsam iste iure similique ullam ut velit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolores ea eius eos.</p>
        </div>

    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <footer>
                <p class="text-center">&copy 2019 <span class="font-weight-bold">Md. Abu Bakkar Siddik</span></p>
            </footer>
        </div>
    </div>

</div>

<?php unset($_SESSION['success']); ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>