<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="mainBox hasNav">
        <nav class="insideTopNav">
          <ul>
            <li class="active"><a href="#">LATHE MACHINE</a></li>
            <li><a href="#">MILLING MACHINE</a></li>
            <li><a href="#">CUSTOMIZED MODEL</a></li>
          </ul>
        </nav>
        <section>
          <div class="container hasSide">
            <aside class="sideBox">
              <div class="pic"><img src="../images/in/side.png" alt=""></div>
              <button type="button"><span>Filter</span></button>
              <ul>
                <li><a href="#">Flat bed CNC Lathe</a></li>
                <li><a href="#">Slant bed CNC Lathe</a></li>
                <li><a href="#">Conventional Lathes</a></li>
                <li><a href="#">CNC Vertical Lathe</a></li>
                <li><a href="#">Swiss Turn CNC Lathe</a></li>
                <li><a href="#">Twin-spindle Twin-gang CNC lathe</a></li>
              </ul>
            </aside>
            <div class="contentBox">
              <div class="content">
                <h1 class="pageTitle">Flat bed CNC Lathe</h1>
                <div class="selectBox">
                  <div class="select">
                    <select name="" id="">
                      <option value="">ALL</option>
                      <option value="">LA Series</option>
                      <option value="">LB Series</option>
                      <option value="">LC Series</option>
                      <option value="">LD Series</option>
                    </select>
                  </div>
                </div>
                <div class="tableUse">
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">Model</th>
                        <th>Spindle Bore</th>
                        <th>Spindle Bore</th>
                        <th>Spindle Bore</th>
                        <th>Spindle Bore</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for ($i = 0; $i < 6; $i++) { ?>
                        <tr>
                          <td><a href="products_detail.php"></a><img src="../images/in/products.png" alt=""></td>
                          <td><a href="products_detail.php"></a>LA26</td>
                          <td>4”~9”</td>
                          <td>660~1000 mm</td>
                          <td>370~700 mm</td>
                          <td>1520~6050 mm</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
                <div class="notice">The specifications are subject to change without prior notice.</div>
                <div class="description">Introducing the Flat Bed CNC Lathe from CNC TAKANG, a state-of-the-art machine tool designed for precision, eUiciency, and versatility in metalworking. Engineered to meet the rigorous demands of modern manufacturing, this lathe integrates advanced technology with robust construction, ensuring superior performance and reliability.<br /><br />
                  Why Choose CNC TAKANG’s Flat Bed CNC Lathe?<br />
                  Precision: Achieve high-accuracy machining with advanced control and stable design.<br />
                  EUiciency: Increase productivity with powerful performance and easy operation.<br />
                  Versatility: Adapt to a wide range of applications with flexible tooling and customizable options.<br />
                  Reliability: Benefit from robust construction and dependable operation.<br /><br />
                  Invest in the Flat Bed CNC Lathe from CNC TAKANG and elevate your machining capabilities to new heights. Contact us today to learn more and discover how our innovative solutions can
                  transform your manufacturing process.</div>
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
                      <span itemprop="name">Products</span>
                      <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">Lathe Machine</span>
                      <meta itemprop="position" content="3">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">Flat bed CNC Lathe</span>
                      <meta itemprop="position" content="4">
                    </li>
                  </ul>
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
      $('.sideBox li').eq(0).addClass('active');
    })
  </script>
</body>

</html>