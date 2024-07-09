<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner">
          <div class="control"></div>
          <div class="listBox">
            <div class="item">
              <div class="pic">
                <picture>
                  <source srcset="../images/index/banner_s.jpg" media="(max-width: 550px)" />
                  <img src="../images/index/banner.jpg" alt="">
                </picture>
              </div>
              <a href="#" class="more">Read More</a>
            </div>

            <div class="item">
              <div class="pic">
                <picture>
                  <source srcset="../images/index/banner_s.jpg" media="(max-width: 550px)" />
                  <img src="../images/index/banner.jpg" alt="">
                </picture>
              </div>
              <a href="#" class="more">Read More</a>
            </div>
          </div>
        </div>

        <section class="productBox">
          <div class="container">
            <div class="listBox">
              <div class="item wow fadeInLeft" data-wow-delay="0s">
                <a href="#">
                  <div class="pic"><img src="../images/index/p01.png" alt=""></div>
                  <div class="info">
                    <h3 class="title">Lathe Machine</h3>
                    <div class="description">Compared with the slant bed CNC lathe, the multi-speed spindle box provides a larger gear ratio output, bigger</div>
                  </div>
                </a>
              </div>
              <div class="item wow fadeInLeft" data-wow-delay="0s">
                <a href="#">
                  <div class="pic"><img src="../images/index/p02.png" alt=""></div>
                  <div class="info">
                    <h3 class="title">Milling Machine</h3>
                    <div class="description">Compared with the slant bed CNC lathe, the multi-speed spindle box provides a larger gear ratio output, bigger</div>
                  </div>
                </a>
              </div>
              <div class="item wow fadeInLeft" data-wow-delay="0s">
                <a href="#">
                  <div class="pic"><img src="../images/index/p03.png" alt=""></div>
                  <div class="info">
                    <h3 class="title">Customized model</h3>
                    <div class="description">Compared with the slant bed CNC lathe, the multi-speed spindle box provides a larger gear ratio output, bigger</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>


        <section class="newsBox">
          <div class="container">
            <div class="infoBox">
              <div class="info">
                <h2 class="title">NEWS & EVENT</h2>
                <div class="description">CNC-TAKANG is always your best partner to meet competitive edge today</div>
                <div class="more">Discover More</div>
              </div>
            </div>
            <div class="out">
              <div class="listBox">
                <div class="item">
                  <a href="#">
                    <div class="info">
                      <h3 class="title">TIMTOS 2023</h3>
                      <div class="description">Taipei Int’l Machine Tool Show (TIMTOS 2023)<br />
                        Venues：Taipei Nangang Exhibition Center, Hall 1, 1F<br />
                        Booth No.：J1317</div>
                    </div>
                    <div class="pic"><img src="../images/index/n01.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="info">
                      <h3 class="title">Intelligent automated production line for tubing joints</h3>
                      <div class="description">Customized and combined with intelligent information integration.</div>
                    </div>
                    <div class="pic"><img src="../images/index/n02.jpg" alt=""></div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="info">
                      <h3 class="title">CNC lathe 70bar high pressure coolant system</h3>
                      <div class="description">Increase the processing efficiency by 30%.</div>
                    </div>
                    <div class="pic"><img src="../images/index/n03.jpg" alt=""></div>
                  </a>
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
      $('.banner .listBox').slick({
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        autoplay: true,
        infinite: true,
        appendDots: $('.banner .control'),
      });

      $('.newsBox .listBox').slick({
        slidesToShow: 1,
        arrows: true,
        dots: false,
        speed: 900,
        // autoplay: true,
        // autoplaySpeed: 4000,
        infinite: true,
      });
    })
  </script>
</body>

</html>