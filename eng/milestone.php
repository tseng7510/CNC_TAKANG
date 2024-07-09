<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages historyPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
      </div>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <div class="titleBox">
            <h1 class="title">MILESTONE</h1>
            <div class="slogan">Learn about the background of CNC-TAKANG and branding, and social responsibility.</div>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Milestone</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="history">
            <div class="container">
              <div class="outer">
                <div class="timeLine">
                  <div class="swiper" data-swiper="reviews">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="year">2023</div>
                      </div>
                      <div class="swiper-slide">
                        <div class="year">2015</div>
                      </div>
                      <div class="swiper-slide">
                        <div class="year">2013</div>
                      </div>
                      <div class="swiper-slide">
                        <div class="year">2011</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="content">
                  <div class="control">
                    <div class="swiperArrow swiper-button-prev"></div>
                    <div class="swiperArrow swiper-button-next"></div>
                  </div>
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="info">
                          <div class="description">CNC Lathe with auto loading / unloading + auto measuring system. Heavy duty CNC lathe with milling attachment + Y axis + B axis and grinding (customized), Industrial 4.0 R & D</div>
                          <div class="listBox">
                            <div class="pic"><img src="../images/in/milestone01.jpg" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="info">
                          <div class="description">CNC Lathe with auto loading / unloading + auto measuring system. Heavy duty CNC lathe with milling attachment + Y axis + B axis and grinding (customized), Industrial 4.0 R & D</div>
                          <div class="listBox">
                            <div class="pic"><img src="../images/in/milestone01.jpg" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="info">
                          <div class="description">CNC Lathe with auto loading / unloading + auto measuring system. Heavy duty CNC lathe with milling attachment + Y axis + B axis and grinding (customized), Industrial 4.0 R & D</div>
                          <div class="listBox">
                            <div class="pic"><img src="../images/in/milestone01.jpg" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="info">
                          <div class="description">CNC Lathe with auto loading / unloading + auto measuring system. Heavy duty CNC lathe with milling attachment + Y axis + B axis and grinding (customized), Industrial 4.0 R & D</div>
                          <div class="listBox">
                            <div class="pic"><img src="../images/in/milestone01.jpg" alt=""></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
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
    (function() {
      const headHeight = document.querySelector('header');
      const timeLineHeight = document.querySelector('.timeLine');
      const contentHeight = document.querySelector('.content');
      const swiperBox = document.querySelector('.content .swiper');

      const checkHeight = () => {
        // if (window.innerWidth > 1000) {
        // contentHeight.style.height = `${((window.innerHeight - headHeight.offsetHeight - timeLineHeight.offsetHeight)/3)*2.5}px`;
        // } else {
        // contentHeight.style.height = `${((window.innerHeight - headHeight.offsetHeight - timeLineHeight.offsetHeight)/3)*1.5}px`;
        // }
        contentHeight.style.height = `${swiperBox.offsetHeight}px`;
      }

      checkHeight()
      window.addEventListener('resize', checkHeight);


      let swiper2 = new Swiper('.history .content .swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        direction: "vertical",
        allowTouchMove: true,
        breakpoints: {
          1001: {
            allowTouchMove: false,
          },
        }
      });
      let swiper1 = new Swiper('.timeLine .swiper', {
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 30,
        allowTouchMove: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          1001: {
            spaceBetween: 100,
            allowTouchMove: false,
          },
        },
      });
      swiper1.controller.control = swiper2;
      swiper2.controller.control = swiper1;

      // const swiperBox = document.querySelector('section');
      // const count = document.querySelectorAll('.timeLine .swiper-slide').length;
      // const blockHeight = 80 * count;

      // let fn = () => {
      //   if (window.innerWidth <= 1000) {
      //     swiper1.slideTo(0, 0);
      //     swiper2.slideTo(0, 0);
      //     swiperBox.removeAttribute('style');
      //   } else {
      //     swiperBox.style.height = blockHeight + 'vh';
      //   }
      //   swiper1.controller.control = swiper2;
      //   swiper2.controller.control = swiper1;
      // };

      // fn();
      // window.addEventListener('resize', fn);
      // console.log(swiperBox, swiperBox.offsetHeight);
      // const heightCheck = [];
      // for (let i = 0; i < count; i++) {
      //   heightCheck.push({
      //     min: Math.round((swiperBox.offsetHeight / (count + 1)) * i),
      //     max: Math.round((swiperBox.offsetHeight / (count + 1)) * (i + 1))
      //   });
      // };

      // $(window).scroll(function() {
      //   if (window.innerWidth >= 1000) {
      //     let timeBoxOffset = swiperBox.getBoundingClientRect();
      //     let check = timeBoxOffset.top - headHeight.offsetHeight;
      //     if (check < 0 && timeBoxOffset.bottom - window.innerHeight > 0) {

      //       heightCheck.forEach((item, i) => {
      //         if (check * -1 > item.min && check * -1 < item.max) {
      //           swiper1.slideTo(i, 1000);
      //         }
      //       })
      //     }
      //   }
      // });
    })();
  </script>
</body>

</html>