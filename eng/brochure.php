<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages brochureList">
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
            <h1 class="title">BROCHURE</h1>
            <div class="slogan">Browse through our latest catalog in a paperless, eco-friendly manner</div>
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
              <span itemprop="name">Brochure</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <div class="content">
              <div class="tableUse">
                <div class="listBox">
                  <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item">
                      <a href="#">
                        <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                        <h2 class="title">Heavy Duty CNC Lathe (LC/LD)</h2>
                      </a>
                    </div>
                  <?php } ?>
                </div>
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
      // $('.navBox li').eq(3).addClass('active');

      // $('.tabBox aside ul li').eq(0).addClass('active');
      // $('.contentBox .content').eq(0).addClass('active');
      // $('.tabBox aside > button').on('click', function() {
      //   $(this).siblings('ul').slideToggle('fast');
      // })
      // $('.tabBox aside ul button').on('click', function() {
      //   $(this).parent('li').addClass('active').siblings('li').removeClass('active');
      //   $('.contentBox .content').eq($(this).parent('li').index()).addClass('active').siblings('.content').removeClass('active');
      // })

      // $('.mainBox .contentBox .listBox').slick({
      //   slidesToShow: 3,
      //   arrows: false,
      //   dots: false,
      //   speed: 900,
      //   infinite: true,
      // });
    })
  </script>
</body>

</html>