<?php
require_once "functions/pdo_connection.php";
require_once "functions/helpers.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php include_once('layouts/head.php'); ?>
<!-- Head End -->

<body>

  <!-- Navbar Start -->
  <?php include_once('layouts/navbar.php'); ?>
  <!-- Navbar End -->

  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?php

          if (isset($_GET['cat_id']) && $_GET['cat_id'] !== '') {
            global $pdo;
            $query = "SELECT * FROM categories WHERE id = ? ;";
            $statement = $pdo->prepare($query);
            $statement->execute([$_GET['cat_id']]);
            $category = $statement->fetch();
            if ($category !== false) {
          ?>
              <div class="blog-section-title">
                <h2><?php echo $category->name; ?></h2>
                <p>View the latest news on <?php echo $category->name; ?></p>
              </div>
          <?php
            }
          }
          ?>
          <?php
          if (isset($_GET['cat_id']) && $_GET['cat_id'] !== '') {
            $query = "SELECT * FROM posts WHERE cat_id = ? AND status = 1 ORDER BY created_at DESC;";
            $statement = $pdo->prepare($query);
            $statement->execute([$_GET['cat_id']]);
            $posts = $statement->fetchAll();
            foreach ($posts as $post) {
          ?>
              <article class="blog-post">
                <div class="blog-post-thumb">
                  <img src="<?php echo asset($post->image); ?>" alt="<?php echo $post->title; ?>" />
                </div>
                <div class="blog-post-content">
                  <div class="blog-post-title">
                    <a href="<?= url('/single-blog.php?post_id=' . $post->id) ?>"><?php echo $post->title; ?></a>
                  </div>
                  <div class="blog-post-meta">
                    <ul>
                      <li>By <a href="about.php">Farzam Asban</a></li>
                      <li>
                        <i class="fa fa-clock-o"></i>
                        <?php echo date("F d, Y", strtotime($post->created_at)); ?>
                      </li>
                    </ul>
                  </div>
                  <p>
                    <?= substr($post->body, 0, 80) ?>
                  </p>
                  <a href="<?= url('/single-blog.php?post_id=' . $post->id) ?>" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
                </div>
              </article>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Instagram Start -->
  <?php include_once('layouts/instagram.php'); ?>
  <!-- Instagram End -->

  <!-- Footer Start -->
  <?php include_once('layouts/footer.php'); ?>
  <!-- Footer End -->

  <!-- Script Start -->
  <?php include_once('layouts/script.php'); ?>
  <!-- Script End -->
</body>

</html>