<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetail">
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
            <h2 class="title">EXHIBITION</h2>
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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Exhibition</span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">TIMTOS 2023</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">

            <div class="contentBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">TIMTOS 2023</h1>
              <div class="editor detail wow fadeInUp" data-wow-delay="0.2s">Taipei Int’l Machine Tool Show (TIMTOS 2023)<br />
                Venues：Taipei Nangang Exhibition Center, Hall 1, 1F<br />
                Booth No.：J1317<br /><br />
                <img src="../images/in/news.jpg" alt="">
              </div>
              <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.4s">
                <a href="exhibition.php" class="back">BACK TO LIST</a>
              </div>
            </div>

            <div class="pic"><img src="../images/index/n01.jpg" alt=""></div>
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

      $('.hasSide').append($('.changePage').clone());
    })
  </script>
</body>

</html>