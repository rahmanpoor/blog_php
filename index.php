<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
              <img src="assets/site/images/author.png" alt="author" />
              <p>By <span>Farzam Asban</span></p>
            </div>
            <a href="single-blog.php" class="featured-post-title">
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
            <img src="assets/site/images/featured-post.jpg" alt="feature-post-thumb" />
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
        <article class="blog-post">
          <div class="blog-post-thumb">
            <img src="assets/site/images/blog/blog-thum-1.png" alt="blog-thum" />
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-2.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>

            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-3.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>

            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-4.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>

            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-5.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>

            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-6.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>

            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <article class="blog-post">
          <div class="blog-post-thumb">
            <a href="single-blog.php">
              <img src="assets/site/images/blog/blog-thum-7.png" alt="blog-thum" /></a>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-tag">
              <a href="category.php">Travel</a>
            </div>
            <div class="blog-post-title">
              <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
            </div>
            <div class="blog-post-meta">
              <ul>
                <li>By <a href="about.php">Mary Astor</a></li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  October 19, 2020 - 2 min
                </li>
              </ul>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy.
            </p>
            <a href="single-blog.php" class="blog-post-action">read more <i class="fa fa-angle-right"></i></a>
          </div>
        </article>
        <div class="blog-post-pagination">
          <nav aria-label="Page navigation example" class="nav-bg">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link active" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-post-widget">
          <div class="latest-widget-title">
            <h2>Trending post</h2>
          </div>
          <div class="latest-widget">
            <div class="latest-widget-thum">
              <a href="single-blog.php">
                <img src="assets/site/images/blog/blog-thum-8.png" alt="blog-thum" /></a>
              <div class="icon">
                <a href="single-blog.php">
                  <img src="assets/site/images/blog/icon.svg" alt="icon" /></a>
              </div>
            </div>
            <div class="latest-widget-content">
              <div class="content-title">
                <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
              </div>
              <div class="content-meta">
                <ul>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    October 19, 2020 - 2 min
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="latest-widget">
            <div class="latest-widget-thum">
              <a href="single-blog.php">
                <img src="assets/site/images/blog/blog-thum-9.png" alt="blog-thum" /></a>
              <div class="icon">
                <a href="single-blog.php">
                  <img src="assets/site/images/blog/icon.svg" alt="icon" /></a>
              </div>
            </div>
            <div class="latest-widget-content">
              <div class="content-title">
                <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
              </div>
              <div class="content-meta">
                <ul>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    October 19, 2020 - 2 min
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="latest-widget">
            <div class="latest-widget-thum">
              <a href="single-blog.php">
                <img src="assets/site/images/blog/blog-thum-10.png" alt="blog-thum" /></a>
              <div class="icon">
                <a href="single-blog.php">
                  <img src="assets/site/images/blog/icon.svg" alt="icon" /></a>
              </div>
            </div>
            <div class="latest-widget-content">
              <div class="content-title">
                <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
              </div>
              <div class="content-meta">
                <ul>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    October 19, 2020 - 2 min
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="latest-widget">
            <div class="latest-widget-thum">
              <a href="single-blog.php">
                <img src="assets/site/images/blog/blog-thum-11.png" alt="blog-thum" /></a>
              <div class="icon">
                <a href="single-blog.php">
                  <img src="assets/site/images/blog/icon.svg" alt="icon" /></a>
              </div>
            </div>
            <div class="latest-widget-content">
              <div class="content-title">
                <a href="single-blog.php">Five Things You Need to Know to Start Your Day</a>
              </div>
              <div class="content-meta">
                <ul>
                  <li>
                    <i class="fa fa-clock-o"></i>
                    October 19, 2020 - 2 min
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="instagram">
  <a href="#">
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <span>@Mary_Astor</span>
  </a>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="instagram-item">

          <div class="instagram-item-thum">
            <img src="assets/site/images/blog/case-studies-1.png" alt="image">
          </div>
          <div class="instagram-item-thum">
            <img src="assets/site/images/blog/case-studies-2.png" alt="image">
          </div>
          <div class="instagram-item-thum">
            <img src="assets/site/images/blog/case-studies-3.png" alt="image">
          </div>
          <div class="instagram-item-thum">
            <img src="assets/site/images/blog/case-studies-4.png" alt="image">
          </div>
          <div class="instagram-item-thum">
            <img src="assets/site/images/blog/case-studies-5.png" alt="image">
          </div>
          <div class="instagram-item-thum">
            <img src="<?= asset('assets/site/images/blog/case-studies-6.png') ?>" alt="image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Start -->
<?php include_once('layouts/footer.php'); ?>
<!-- Footer End -->

<!-- Script Start -->
<?php include_once('layouts/script.php'); ?>
<!-- Script End -->
</body>

</html>