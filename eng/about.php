<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages about">
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
            <h1 class="title">COMPANY</h1>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <section>
          <div class="block01">
            <div class="container">
              <div class="blockTitle wow fadeInUp" data-wow-delay="0s">CNC-TAKANG (group) is one of the leading machine tools manufacturers in Taiwan.</div>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">The company is efficiently organized with top engineers with more than 20 years of manufacturing experience. Mostly of our machines are well inspected before delivery.</div>
              <div class="picBox wow fadeInUp" data-wow-delay="0.4s">
                <div class="since"><span>SINCE</span>1973</div>
                <div class="pic"><img src="../images/in/about01.png" alt=""></div>
              </div>
            </div>
          </div>

          <div class="block02">
            <div class="container">
              <div class="blockTitle wow fadeInUp" data-wow-delay="0s">Main Products</div>
              <div class="listBox">
                <div class="item wow fadeInLeft" data-wow-delay="0.2s">Heavy duty CNC lathes (Slant & Flat bed)</div>
                <div class="item wow fadeInLeft" data-wow-delay="0.4s">Precision CNC lathes</div>
                <div class="item wow fadeInLeft" data-wow-delay="0.6s">Conventional lathes</div>
                <div class="item wow fadeInLeft" data-wow-delay="0.8s">Machining centers (Vertical, Horizontal, Double column & High speed)</div>
                <div class="item wow fadeInLeft" data-wow-delay="1s">Vertical CNC lathes</div>
              </div>
            </div>
          </div>

          <div class="block03">
            <div class="infoBox">
              <div class="blockTitle wow fadeInUp" data-wow-delay="0s">Market Distribution</div>
              <div class="listBox">
                <div class="item wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="info">
                    <div class="count"><span>60</span>%</div>
                    <div class="title">Europe & Russia</div>
                  </div>
                </div>
                <div class="item wow fadeInLeft" data-wow-delay="0.4s">
                  <div class="info">
                    <div class="count"><span>10</span>%</div>
                    <div class="title">India and Middle-east<br />
                      South-east Asia</div>
                  </div>
                </div>
                <div class="item wow fadeInLeft" data-wow-delay="0.6s">
                  <div class="info">
                    <div class="count"><span>5</span>%</div>
                    <div class="title">Taiwan<br />
                      China<br />
                      USA & Canada<br />
                      Other</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pic"><img src="../images/in/about03.gif" alt=""></div>
          </div>

          <div class="block04">
            <div class="picBox wow fadeInUp" data-wow-delay="0s">
              <div class="listBox">
                <div class="item"><a href="../images/in/about04.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about04.jpg" alt=""></div>
                  </a></div>
                <div class="item"><a href="../images/in/about05.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about05.jpg" alt=""></div>
                  </a></div>
                <div class="item"><a href="../images/in/about06.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about06.jpg" alt=""></div>
                  </a></div>
                <div class="item"><a href="../images/in/about04.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about04.jpg" alt=""></div>
                  </a></div>
                <div class="item"><a href="../images/in/about05.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about05.jpg" alt=""></div>
                  </a></div>
                <div class="item"><a href="../images/in/about06.jpg" class="lightBoxBtn">
                    <div class="pic"><img src="../images/in/about06.jpg" alt=""></div>
                  </a></div>
              </div>
            </div>
          </div>
        </section>

      </div>

    </main>


    <?php include('include_footer.php'); ?>

  </div>

  <div class="lightBoxOut">
    <div class="lightBox">
      <button class="lightBoxClose" type="button">Close</button>
      <div class="picBox">
        <button type="button" class="lightArrow prev"></button>
        <div class="pic"><img src="../images/in/about06.jpg" alt=""></div>
        <button type="button" class="lightArrow next"></button>
      </div>
    </div>
  </div>

  <?php include('include_body_bottom.php'); ?>

  <script>
    (function() {

      $('.block04 .listBox').slick({
        slidesToShow: 4,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        // autoplay: true,
        // autoplaySpeed: 4000,
        prevArrow: '<button type="button" class="slick-prev slick-arrow" style=""></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow" style=""></button>',
        infinite: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 550,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });

      let srcArray = [];
      let now = 0;

      let lightBoxBtn = document.querySelectorAll('.lightBoxBtn');
      let lightBoxBtnPrev = document.querySelector('.lightArrow.prev');
      let lightBoxBtnNext = document.querySelector('.lightArrow.next');
      let body = document.querySelector('body');
      let lightBoxCloseBtn = document.querySelector('.lightBoxClose');
      let lightImg = document.querySelector('.lightBox .pic img');


      lightBoxBtn.forEach((value, index, array) => {
        srcArray.push(value.getAttribute('href'));
        value.addEventListener('click', function(e) {
          e.preventDefault();
          lightImg.setAttribute('src', srcArray[index]);
          now = index;
          console.log(now);
          body.classList.add('lightBoxActive');
        });
      })

      lightBoxBtnPrev.addEventListener('click', function() {
        if (now > 0) {
          lightImg.setAttribute('src', srcArray[now - 1]);
          now--;
          console.log(now);
        }
      });

      lightBoxBtnNext.addEventListener('click', function() {
        if (now < srcArray.length - 1) {
          lightImg.setAttribute('src', srcArray[now + 1]);
          now++;
          console.log(now);
        }
      });

      lightBoxCloseBtn.addEventListener('click', function(e) {
        body.classList.remove('lightBoxActive');
      });

    })()
  </script>
</body>

</html>