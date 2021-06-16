<header class="blog-header border-bottom shadow-sm bg-white">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="main.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/flogo.png" alt="MyBlog" style="width: 80%;height: auto;">
            </a>

       

               <!-- <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="main.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                    <a class="p-2 px-5 text-muted" href="article.php">Article</a>
                    <a class="p-2 px-5 text-muted" href="author.php">Author</a>
                </nav> -->

           
                <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 px-5 text-muted" href="main.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="articleOfCategory.php">Articles</a>
                </nav>

           

            <a class="btn btn-outline-success" href="<?= ($loggedin) ? 'Logout.php' : 'login.php'; ?>">
              <?= ($loggedin) ? 'Logout' : 'Log out'; ?>
            </a>

        </div>
    </div>
</header>