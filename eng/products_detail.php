<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <h1 class="productsTitle">
          <div class="container">Flat bed CNC Lathe</div>
        </h1>
        <section>
          <div class="container">

            <div class="infoBox">
              <div class="titleBox wow fadeInUp" data-wow-delay="0s">
                <div class="subTitle">Flat Bed CNC Lathe</div>
                <div class="title">LA26</div>
              </div>

              <div class="picBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="pic"><img src="../images/in/products.png" alt=""></div>
              </div>

              <div class="info wow fadeInUp" data-wow-delay="0.4s">
                <div class="subTitle">Heavy duty model</div>
                <ul>
                  <li>Swing : 660 mm / 1000 mm (26” ~ 39”)</li>
                  <li>B.C. : 1520 ~ 6050 mm</li>
                </ul>
                <div class="btnBox">
                  <button class="videoBtn lightBoxBtn">VIDEO</button>
                  <button class="download">BROCHURE</button>
                  <a href="contact.php" class="inquiry">INQUIRY</a>
                </div>
              </div>
            </div>

            <div class="centerBtnBox wow fadeInUp" data-wow-delay="0s">
              <nav class="navList">
                <button type="button" class="active">Overview</button>
                <button type="button">Specification</button>
                <button type="button">Features</button>
              </nav>
            </div>

            <div class="contentBox">
              <div class="content active">Introducing the Flat Bed CNC Lathe from CNC TAKANG, a state-of-the-art machine tool designed for precision, eUiciency, and versatility in metalworking. Engineered to meet the rigorous demands of modern manufacturing, this lathe integrates advanced technology with robust construction, ensuring superior performance and reliability.<br /><br />

                Why Choose CNC TAKANG’s Flat Bed CNC Lathe?<br />
                Precision: Achieve high-accuracy machining with advanced control and stable design.<br />
                EUiciency: Increase productivity with powerful performance and easy operation.<br />
                Versatility: Adapt to a wide range of applications with flexible tooling and customizable options.<br />
                Reliability: Benefit from robust construction and dependable operation.<br /><br />

                Invest in the Flat Bed CNC Lathe from CNC TAKANG and elevate your machining capabilities to new heights. Contact us today to learn more and discover how our innovative solutions can transform your manufacturing process.
                <ul>
                  <li>a</li>
                  <li>a</li>
                  <li>a</li>
                </ul>
              </div>
              <div class="content">
                <div class="secTab">
                  <div class="conMenu">
                    <div class="now">MENU</div>
                    <div class="list"></div>
                  </div>
                  <div class="conBox">
                    <div class="specification">
                      <table>
                        <!--<thead>-->
                        <!--  <tr class="title">-->
                        <!--    <th>Description</th>-->
                        <!--    <th>LA 26</th>-->
                        <!--  </tr>-->
                        <!--</thead>-->
                        <tbody>
                          <tr class="txtBox">
                            <th>Capacity</th>
                            <th></th>
                          </tr>
                          <? for ($i = 0; $i < 5; $i++) { ?>
                            <tr>
                              <td>Swing over Bed</td>
                              <td>660 mm (26”)</td>
                            </tr>
                          <? } ?>
                          <tr class="txtBox">
                            <th>Spindle</th>
                            <th></th>
                          </tr>
                          <? for ($i = 0; $i < 15; $i++) { ?>
                            <tr>
                              <td>Spindle bore</td>
                              <td>A2-11 (4”)</td>
                            </tr>
                          <? } ?>
                          <tr class="txtBox">
                            <th>Tailstock</th>
                            <th></th>
                          </tr>
                          <? for ($i = 0; $i < 4; $i++) { ?>
                            <tr>
                              <td>Quill diameter</td>
                              <td>105 mm (4.1”), OPT Rotating quill dia. 155 mm (6.1”)</td>
                            </tr>
                          <? } ?>
                          <tr class="txtBox">
                            <th>Motor</th>
                            <th></th>
                          </tr>
                          <? for ($i = 0; $i < 5; $i++) { ?>
                            <tr>
                              <td>X axis servo motor</td>
                              <td>1.5M~4M FANUC αiF8 1.6 kw, 5M~6M FANUC αiF12 3.0 kw</td>
                            </tr>
                          <? } ?>
                          <tr class="txtBox">
                            <th>Machine weight</th>
                            <th></th>
                          </tr>
                          <? for ($i = 0; $i < 2; $i++) { ?>
                            <tr>
                              <td>1500 / 1200 mm center distance</td>
                              <td>6250 kgs</td>
                            </tr>
                          <? } ?>

                        </tbody>
                      </table>

                    </div>
                    <div class="notice">※ The Specifications are subject to change without prior notice.</div>
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="listBox">
                  <div class="item">
                    <div class="info">
                      <div class="title">Gear Box</div>
                      <div class="description">The gear box offers high torque and provides heavy cutting capability. (option)</div>
                    </div>
                    <div class="pic"><img src="../images/in/products02.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="info">
                      <div class="title">Chip Conveyor</div>
                      <div class="description">Chip conveyor device in the front side of machine removes chips efficiently (Option)</div>
                    </div>
                    <div class="pic"><img src="../images/in/products03.jpg" alt=""></div>
                  </div>
                  <div class="item">
                    <div class="info">
                      <div class="title">20 Tools Armless Type ATC</div>
                      <div class="description">The 20-Tool Armless Type ATC simplified magazine construction, safety, easy for maintenance and trouble free operation.</div>
                    </div>
                    <div class="pic"><img src="../images/in/products04.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
        </section>

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
                <span itemprop="name">Products</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name"><a href="products.php">Flat bed CNC Lathe</a></span>
                <meta itemprop="position" content="3">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">LA26</span>
                <meta itemprop="position" content="4">
            </ul>
          </div>
        </div>
      </div>

    </main>


    <?php include('include_footer.php'); ?>

  </div>

  <div class="lightBoxOut">
    <div class="lightBox">
      <button class="lightBoxClose" type="button">Close</button>
      <div class="videoBox">
        <div class="lds-ellipsis">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="listBox">
          <div class="item">
            <div class="title">Hobbing TNC-20A Series</div>
            <div class="video-container embed-player"><iframe width="560" height="315" src="https://www.youtube.com/embed/dAT3ickvh70?si=rb99ATKGQWrFGMA-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          </div>

          <div class="item">
            <div class="title">Hobbing TNC-20A Series</div>
            <div class="video-container embed-player"><iframe width="560" height="315" src="https://www.youtube.com/embed/dAT3ickvh70?si=rb99ATKGQWrFGMA-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {

      $('.centerBtnBox button').on('click', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('.contentBox .content').eq($(this).index()).addClass('active').siblings().removeClass('active');
        $('.conMenu .list button').removeClass('active').eq(0).addClass('active');
      })
      $('.secTab .tabBox button').on('click', function() {
        let scrollTop = $('.secContent').eq($(this).index()).offset().top;
      })

      let conBoxTitleTable = $('.specification table .title');

      $('.specification .txtBox').each(function(i) {
        $(this).attr('count', i)
        $('.conMenu .list').append(`<button type="button" count=${$(this).index()}>${$(this).find('th:first').html()}</button>`)
      })

      $('.conMenu .list button').each(function() {
        let thisContent = $(this).html();
        $(this).attr('content', thisContent)
      });

      $('.conMenu .list button').on('click', function() {
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        let menuNow = $(this).index();


        if ($(window).width() < 1000) {

          $('.conMenu .now').removeClass('active')
          let nowContent = $(this).attr('content')
          $('.now').html(nowContent)
          $('.conMenu .list').css('display', 'none')

          window.scrollTo({
            top: $('.txtBox').eq(menuNow).offset().top - $('.headerBox').height() - $('.conMenu .list button').length * $('.conMenu .list button').outerHeight() - 50,
            behavior: 'smooth',
          });
        } else {
          window.scrollTo({
            top: $('.txtBox').eq(menuNow).offset().top - $('.headerBox').height() - 30,
            behavior: 'smooth',
          });
        }
      });

      $(window).on('scroll', function() {
        let scrollPos = $(document).scrollTop();
        if ($(window).width() > 1000) {
          $('.specification .txtBox').each(function() {
            let currSect = $(this);

            if (currSect.offset().top - $('.headerBox').height() - 50 <= scrollPos) {
              let sectIndex = currSect.attr('count');
              $('.conMenu .list button').eq(sectIndex).addClass('active').siblings().removeClass('active');
            }
          });
        }
      })


      $('.conMenu .now').on('click', function() {
        $(this).siblings().slideToggle()
        $(this).toggleClass('active')
      });

      $(window).on('resize', function() {
        $('.conMenu .list').removeAttr()
        $('.conMenu .now').removeClass('active')
        if ($(window).width() > 1000) {
          $('.conMenu .list').css('display', 'block')
        } else {
          $('.conMenu .list').css('display', 'none')
        }
      })

      ////////////////////////////////////
      var slideWrapper = $('.videoBox .listBox'),
        iframes = slideWrapper.find('.embed-player'),
        lazyCounter = 0;

      // POST commands to YouTube or Vimeo API
      function postMessageToPlayer(player, command) {
        if (player == null || command == null) return;
        player.contentWindow.postMessage(JSON.stringify(command), '*');
      }

      // When the slide is changing
      function playPauseVideo(slick, control) {
        var currentSlide, slideType, startTime, player, video;

        currentSlide = slick.find('.slick-current');
        slideType = currentSlide.attr('class').split(' ')[1];
        player = currentSlide.find('iframe').get(0);
        startTime = currentSlide.data('video-start');

        if (slideType === 'youtube') {
          switch (control) {
            case 'play':
              postMessageToPlayer(player, {
                'event': 'command',
                'func': 'mute'
              });
              postMessageToPlayer(player, {
                'event': 'command',
                'func': 'playVideo'
              });
              break;
            case 'pause':
              postMessageToPlayer(player, {
                'event': 'command',
                'func': 'pauseVideo'
              });
              break;
          }
        }
      }

      // DOM Ready
      // Initialize
      slideWrapper.on('init', function(slick) {
        slick = $(slick.currentTarget);
        setTimeout(function() {
          playPauseVideo(slick, 'play');
        }, 1000);
      });
      slideWrapper.on('beforeChange', function(event, slick) {
        slick = $(slick.$slider);
        playPauseVideo(slick, 'pause');
      });
      slideWrapper.on('afterChange', function(event, slick) {
        slick = $(slick.$slider);
        playPauseVideo(slick, 'play');
      });

      //start the slider
      slideWrapper.slick({
        autoplay: false,
        dots: true,
        arrows: false,
        loop: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        focusOnSelect: true,
      });

      let lightBoxBtn = document.querySelector('.lightBoxBtn');
      let body = document.querySelector('body');
      let videoBox = document.querySelector('.videoBox .listBox');
      let lightBoxCloseBtn = document.querySelector('.lightBoxClose');

      lightBoxBtn.addEventListener('click', function(e) {
        e.preventDefault();
        body.classList.add('lightBoxActive');
        videoBox.slick.refresh();
      });

      lightBoxCloseBtn.addEventListener('click', function(e) {
        body.classList.remove('lightBoxActive');
        let videoGroup = $('.videoBox .listBox iframe');
        videoGroup.each(function() {
          $(this).get(0).contentWindow.postMessage(JSON.stringify({
            'event': 'command',
            'func': 'pauseVideo'
          }), '*');
        })
      });
    })
  </script>
</body>

</html>