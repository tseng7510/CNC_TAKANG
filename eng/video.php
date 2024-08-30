<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages videoList">
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
            <h1 class="title">VIDEO</h1>
            <div class="slogan">Watch the video to let you know more about CNC-TAKANG products and processes</div>
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
              <span itemprop="name">Video</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="container">
            <?php include('include_news.php'); ?>

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s">
                    <button class="lightBoxBtn">
                      <div class="pic"><img src="../images/in/video.jpg" alt=""></div>
                      <div class="info">
                        <h2 class="title">DCM AHC</h2>
                        <div class="more">VIEW VIDEO</div>
                      </div>
                    </button>
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


  <div class="lightBoxOut videoLightBox">
    <div class="lightBox">
      <button class="lightBoxClose" type="button">Close</button>
      <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="videoBox">
          <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/KJAFT9dNr3U?si=tkv1M7OfrFFxMAB3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
        </div>
        <div class="videoBox">
          <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/KJAFT9dNr3U?si=tkv1M7OfrFFxMAB3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include('include_body_bottom.php'); ?>


  <script>
    $(function() {
      $('.navBox li').eq(2).addClass('active');

      let lightBoxBtn = document.querySelectorAll('.lightBoxBtn');
      let body = document.querySelector('body');
      let lightBoxCloseBtn = document.querySelector('.lightBoxClose');
      let lightContent = document.querySelectorAll('.lightBox .videoBox');

      lightBoxBtn.forEach((value, index) => {
        value.addEventListener('click', function(e) {
          e.preventDefault();
          body.classList.add('lightBoxActive');
          lightContent[index].classList.add('active');
        });
      })

      lightBoxCloseBtn.addEventListener('click', function(e) {
        body.classList.remove('lightBoxActive');
        lightContent.forEach((value, index) => {
          value.classList.remove('active');
        })
      });
    })
  </script>
</body>

</html>