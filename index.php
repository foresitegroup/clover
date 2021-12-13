<?php
function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Clover Distribution<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="Clover Distribution, Inc. is a locally-owned, locally-run specialty food distributor. Truly fresh, truly local.">
    <meta name="keywords" content="Spices, wholesale spices, clover spices, food distributors, wholesale chocolate, wholesale food distributors, food service, chef supplies, commercial food service, wholesale groceries, bulk foods wholesale, wholesale snacks, wholesale food distributors wisconsin, fresh spices, bob’s red mill, guittard chocolate, conway dressing, roland specialty foods">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Dosis:700,800|Open+Sans:600,700" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        
        $('#supplier-wrap').slick({
          mobileFirst: true,
          autoplay: true,
          appendArrows: $('#supplier-wrap'),
          prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-chevron-left"></i></a>',
          nextArrow: '<a href="#" class="slick-next"><i class="fa fa-chevron-right"></i></a>',
          responsive: [{ breakpoint: 750, settings: "unslick" }]
        });

        $(window).on('resize', function() { $('#supplier-wrap').slick('resize'); });
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109674611-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109674611-1');
    </script>
  </head>
  <body>

    <div id="banner"></div>

    <div id="header">
      <div class="site-width">
        <img src="images/logo.png" alt="Clover Distribution" id="logo">

        <div>
          <a href="tel:4144823636" class="phone"></a>
          <a href="pdf/Clover_Distribution_Product_List.pdf" class="button">Product List</a>
        </div>
      </div>
    </div>

    <div id="header-content">
      <div>
        <img src="images/badge-white.png" alt="">

        <h3>Truly fresh.</h3>
        <h2>Truly local.</h2>
      </div>
    </div>

    <div id="content-wrap">
      <div id="content">
        <div>
          <h1>Working with you &amp; for you.</h1>

          Clover Distribution, Inc. is a locally-owned, locally-run specialty food distributor that works with you and for you, providing excellent quality and service. Our spices are milled, packaged and distributed in small batches throughout Wisconsin, providing freshness and quality while remaining "truly local".<br>
          <br>

          Let us put our 30 years of experience to work for you. Give us a call for all of your food service needs.
        </div>
      </div>

      <div id="leaf-top"></div>
      <div id="leaf-bottom"></div>

      <div id="products">
        <div>
          See our<br>full line<br>of products

          <a href="pdf/Clover_Distribution_Product_List.pdf">Get Product List</a>
        </div>
      </div>
    </div>

    <div id="spices"></div>

    <div id="suppliers">
      <div class="site-width">
        Our Key Suppliers
        
        <div id="supplier-wrap">
          <div class="supplier" style="background-image: url(images/supplier-bobs.jpg);"></div>
          <div class="supplier" style="background-image: url(images/supplier-guittard.jpg);"></div>
          <div class="supplier" style="background-image: url(images/supplier-conway.jpg);"></div>
          <div class="supplier" style="background-image: url(images/supplier-roland.jpg);"></div>
          <div class="supplier" style="background-image: url(images/supplier-karlsburger.jpg);"></div>
        </div>
      </div>
    </div>

    <div id="contact">
      <div class="site-width">
        <div class="title">
          <div>Get In Touch</div>
        </div>

        <div class="person">
          Andrew Fisher

          <table>
            <tr>
              <td colspan="2" class="email"><?php email("andrewfisher@cloverdistribution.com"); ?></td>
            </tr>
            <tr>
              <td>Office</td>
              <td>414-482-3636</td>
            </tr>
            <tr>
              <td>Fax</td>
              <td>414-482-3644</td>
            </tr>
            <tr>
              <td>Cell</td>
              <td>414-418-7782</td>
            </tr>
          </table>
        </div>

        <div class="person">
          Stephanie Fisher

          <table>
            <tr>
              <td colspan="2" class="email"><?php email("stephaniefisher@cloverdistribution.com"); ?></td>
            </tr>
            <tr>
              <td>Office</td>
              <td>414-482-3636</td>
            </tr>
            <tr>
              <td>Fax</td>
              <td>414-482-3644</td>
            </tr>
            <tr>
              <td>Cell</td>
              <td>262-510-9217</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div id="footer">
      Clover Distribution, Inc.<span> </span>2018 S 1st Street Milwaukee, WI 53207

      <div>
        &copy; <?php echo date("Y"); ?> Fisher & Bloom LLC. All Rights Reserved.
      </div>
    </div>
  </body>
</html>