<!-- Include Head -->
<?php include "assest/head.php"; ?>

<!-- Gvoogle font -->
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

<!-- Custom CSS -->
<!-- <link href="css/home.css" rel="stylesheet"> -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style>
    .bg-div {
        background: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)), url("./img/slider/pexels-marc-mueller.jpg");
        /* Full height */
        height: 680px;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<title>Admin Panel</title>
</head>


<header class="blog-header border-bottom shadow-sm bg-white">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="main.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/flogo.png" alt="MyBlog" style="width: 80%;height: auto;">
            </a>

       

                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="main.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                    <a class="p-2 px-5 text-muted" href="article.php">Article</a>
                    <a class="p-2 px-5 text-muted" href="author.php">Author</a>
                </nav> 

           <!--
                <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 px-5 text-muted" href="main.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="articleOfCategory.php">Articles</a>
                </nav>
                -->

           

            <a class="btn btn-outline-success" href="<?= ($loggedin) ? 'Logout.php' : 'login.php'; ?>">
              <?= ($loggedin) ? 'Logout' : 'Log out'; ?>
            </a>

        </div>
    </div>
</header>
<body>
<main class="main">

        <!-- Jumbotron -->
        <div class="jumbotron text-center p-0 mb-0">
            <div class="bg-div px-5 d-flex align-items-center">

                <div class="text-left w-50">
                    <h1 class="display-4 text-white">Admin Panel</h1>
                    <h2 class="display-5 text-white"></h2>

                </div>


            </div>
        </div><!-- /Jumbotron -->
</body>