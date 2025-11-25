<?php
require_once "functions/pdo_connection.php";
require_once "functions/helpers.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Head Start -->
<?php include_once('layouts/head.php'); ?>
<!-- Head End -->

<body>

  <!-- Navbar Start -->
  <?php include_once('layouts/navbar.php'); ?>
  <!-- Navbar End -->

  <section class="blog-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 order-2 order-lg-1">
          <div class="share-now">
            <a href="#" class="scrol">Share</a>
            <div class="sociel-icon">
              <ul>
                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-10 order-1 order-lg-2">
          <?php

          global $pdo;
          if (isset($_GET['post_id'])) {
            $query = "SELECT posts.*,categories.name AS category_name FROM posts JOIN categories ON posts.cat_id=categories.id WHERE posts.id = ?  AND posts.status = 1 ;";
            $statement = $pdo->prepare($query);
            $statement->execute([$_GET['post_id']]);
            $post = $statement->fetch();
          } else {
            $post = false;
          }
          if ($post !== false) {
          ?>
            <article class="single-blog">
              <a href="<?= url('/category.php?cat_id=' . $post->cat_id) ?>" class="tag"><?php echo $post->category_name; ?></a>
              <p class="title"><?php echo $post->title; ?></p>
              <ul class="meta">
                <li>By <a href="about.php">Farzam Asban</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  <?php echo date("F d, Y", strtotime($post->created_at)); ?>
                </li>
              </ul>
              <img src="<?= asset($post->image) ?>" alt="<?php echo $post->title; ?>">

              <p>
                <?php echo $post->body; ?>
              </p>
            </article>
          <?php } else { ?>
            <h1>Post not found</h1>
          <?php } ?>
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