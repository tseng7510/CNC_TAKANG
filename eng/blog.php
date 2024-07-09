<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_media.jpg" alt=""></div>
      </div>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <div class="titleBox">
            <h1 class="title">BLOG</h1>
            <div class="slogan">Stay tuned for the latest product news and announcements on our next show near you.</div>
          </div>
        </div>
      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Blog</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <a href="blog_detail.php">
                      <div class="info">
                        <h2 class="title">TIMTOS 2023</h2>
                        <div class="description">Taipei Int’l Machine Tool Show (TIMTOS 2023)<br />
                          Venues：Taipei Nangang Exhibition Center, Hall 1, 1F<br />
                          Booth No.：J1317</div>
                      </div>
                      <div class="pic"><img src="../images/index/n01.jpg" alt=""></div>
                      <div class="more">VIEW MORE</div>
                    </a>
                  </div>
                <?php } ?>

              </div>
              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">01</a></li>
                  <li><a href="#">02</a></li>
                  <li class="active"><a href="#">03</a></li>
                  <li><a href="#">04</a></li>
                  <li><a href="#">05</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
              </div>

            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>


  <script>
    $(function() {
      $('.sideBox li').eq(0).addClass('active');
    })
  </script>
</body>

</html>