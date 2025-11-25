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

  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <article class="featured-post">
            <div class="featured-post-content">
              <div class="featured-post-author">
                <img src="<?= asset('assets/site/images/author.png') ?>?v=<?= time() ?>" alt="author" />
                <p>By <span>Farzam Asban</span></p>
              </div>
              <a href="#" class="featured-post-title">
                Welcome to My Blogger! We're glad to have you here.
              </a>
              <ul class="featured-post-meta">
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2025 - 3 min read
                </li>
              </ul>
            </div>
            <div class="featured-post-thumb">
              <img src="<?= asset('assets/site/images/featured-post.jpg') ?>?v=<?= time() ?>" alt="feature-post-thumb" />
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-section-title">
            <h2>Articles</h2>
            <p>View the latest news on Blogger</p>
          </div>
          <?php
          global $pdo;
          $query = "SELECT posts.*,categories.name AS category_name FROM posts JOIN categories ON posts.cat_id = categories.id WHERE status = 1;";
          $statement = $pdo->prepare($query);
          $statement->execute();
          $posts = $statement->fetchAll();
          foreach ($posts as $post) {
          ?>
            <article class="blog-post">
              <div class="blog-post-thumb">
                <img src="<?php echo asset($post->image); ?>" alt="<?php echo $post->title; ?>" />
              </div>
              <div class="blog-post-content">
                <div class="blog-post-tag">
                  <a href="<?= url('/category.php?cat_id=' . $post->cat_id) ?>"><?php echo $post->category_name; ?></a>
                </div>
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
          <?php } ?>
        </div>
        <div class="col-lg-4">
          <div class="blog-post-widget">
            <div class="latest-widget-title">
              <h2>Trending post</h2>
            </div>
            <?php
            $query = "SELECT * FROM posts WHERE status = 1 ORDER BY created_at DESC;";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $posts = $statement->fetchAll();
            foreach ($posts as $post) {
            ?>
              <div class="latest-widget">
                <div class="latest-widget-thum">
                  <a href="single-blog.php">
                    <img src="<?php echo asset($post->image); ?>" alt="<?php echo $post->title; ?>" /></a>
                  <div class="icon">
                    <a href="<?= url('/single-blog.php?post_id=' . $post->id) ?>">
                      <img src="assets/site/images/blog/icon.svg" alt="icon" /></a>
                  </div>
                </div>
                <div class="latest-widget-content">
                  <div class="content-title">
                    <a href="<?= url('/single-blog.php?post_id=' . $post->id) ?>"><?php echo $post->title; ?></a>
                  </div>
                  <div class="content-meta">
                    <ul>
                      <li>
                        <i class="fa fa-clock-o"></i>
                       <?php echo date("F d, Y", strtotime($post->created_at)); ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
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