<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/admin/assets/img/frieght-imgs/frieghtlogo.png') }}" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/admin/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- freightlink  Main CSS File -->
  <link href="{{ asset('public/web/assets/css/style.css') }}" rel="stylesheet">


  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link href="font/Mont-Black.otf" rel="stylesheet"> -->
  <script src="{{ asset('public/admin/assets/js/jquery.slim.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('public/admin/assets/js/popper.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('public/admin/assets/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

  <!--you can put this line anywhere in the site-->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body style="background: #344153;" class="login-pg">
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="index.html"><img src="{{ asset('public/admin/assets/img/frieght-imgs/portal-logo.png') }}" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li class="link_d"><a href="#">
            <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- #main -->
  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/admin/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/admin/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/admin/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('public/admin/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('public/admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/admin/assets/js/main.js') }}"></script>

<script>
    (function ($) {
      $.fn.honeycombs = function (options) {
        // Establish our default settings
        var settings = $.extend({
          combWidth: 180,
          margin: 20,
        }, options);

        function initialise(element) {
          var width = 0;
          var combWidth = 0;
          var combHeight = 0;
          var num = 0;
          var $wrapper = null;

          console.log(element);

          /**
           * Build the dom
           */
          function buildHtml() {
            // add the 2 other boxes
            $wrapper = $(element).find('.honeycombs-inner-wrapper');
            num = 0;

            $(element).find('.comb').each(function () {
              num = num + 1;

              if ($(this).find('span.comb-title').length > 0) {
                $(this)
                  .find('.inner_span .inner-text-title')
                  .html($(this).find('span.comb-title').html());
              }

              if ($(this).find('span.comb-description-short').length > 0) {
                $(this)
                  .find('.inner_span .inner-text-description-short')
                  .html($(this).find('span.comb-description-short').html());
              }
            });
          }

          /**
           * Update all scale values
           */
          function updateScales() {
            combWidth = settings.combWidth;
            combHeight = (Math.sqrt(3) * combWidth) / 2;
            edgeWidth = combWidth / 2;

            $(element).find('.comb').width(combWidth).height(combHeight);
            $(element).find('.hex_l, .hex_r').width(combWidth).height(combHeight);
            $(element).find('.hex_inner').width(combWidth).height(combHeight);
          }

          /**
           * update css classes
           */
          function reorder(animate) {

            updateScales();
            width = $(element).width();

            newWidth = (num / 1.5) * settings.combWidth;

            if (newWidth < width) {
              width = newWidth;
            }

            $wrapper.width(width);

            var row = 0; // current row
            var upDown = 1; // 1 is down
            var left = 0; // pos left
            var top = 0; // pos top
            var cols = 0;

            $(element).find('.comb').each(function (index) {
              top = (row * (combHeight + settings.margin)) + (upDown * (combHeight / 2 + (settings.margin / 2)));

              if (animate === true) {
                $(this).stop(true, false);
                $(this).animate({
                  'left': left,
                  'top': top
                });
              } else {
                $(this).css('left', left).css('top', top);
              }

              left = left + (combWidth - combWidth / 4 + settings.margin);
              upDown = (upDown + 1) % 2;

              if (row === 0) {
                cols = cols + 1;
              }

              if (left + combWidth > width) {
                left = 0;
                row = row + 1;
                upDown = 1;
              }
            });

            $wrapper
              .width(cols * (combWidth / 4 * 3 + settings.margin) + combWidth / 4)
              .innerHeight((row + 1) * (combHeight + settings.margin) + combHeight / 2);
          }

          function getTopInfoBlock(el) {
            return $(el).css('top');
          }

          /*
           * Return the left value as a number without the string 'px'
           */
          function getLeftInfoBlock(el) {
            return parseInt($(el).css('left').slice(0, -2), 10);
          }

          function calculateTopInfoBlock(top) {
            return 'calc(155px + ' + top + ')';
          }

          function setLeftInfoBlock(el, target) {
            var $infoBlock = $(el).find('.inner-text-description-long');
            var combWidth = parseInt(target.width(), 10);
            var infoBlockWidth = parseInt($infoBlock.width(), 10);
            var leftCalculated = getLeftInfoBlock(target) - (infoBlockWidth / 2) + (combWidth / 2) + 'px';

            $infoBlock.css('left', leftCalculated);
          }

          function setTopInfoBlock(el, target) {
            $(el).find('.inner-text-description-long').css('top', calculateTopInfoBlock(getTopInfoBlock(target)));
          }

          // Show info block with long description
          function setCurrElementActive(el) {
            $(el).find('.inner-text-description-long').addClass('active');
          }

          /*
           * Check if the currently active info block has a negative left position
           *
           */
          function CheckInfoBlockOutsideViewport(el) {
            var $infoBlock = $(el).find('.inner-text-description-long');
            var left = getLeftInfoBlock($infoBlock);

            // Get the left position of the parent relative to the document
            var $parentLeft = $(el).parent().offset().left;

            // Determine the position of the right side of the bouding box of the Info Block
            var right = Math.round($parentLeft + left + $infoBlock.outerWidth());
            var $viewport = $(window).width();

            if (left < 0) {
              $infoBlock.css('left', '0');
            }

            // Check if the info block is outisde the viewport
            if (right > $viewport) {
              var delta = right - $viewport;
              $infoBlock.css('left', (left - delta - 10) + 'px');
            }
          }

          // Remove all classes '.active'
          function removeActiveElements() {
            $('.comb-container .active').each(function () {
              $(this).removeClass('active');
            });
          }

          function clickInfoBlockHandler(event) {
            event.preventDefault();

            var comb = $(this).find('.comb');
            var $dataLink = $(this).find('.inner-text-description-long').attr('data-link');

            // If long description is empty and data-link attribute is available, then follow the link directly
            if (!$dataLink) {
              setLeftInfoBlock('.comb-container', comb);
              CheckInfoBlockOutsideViewport('.comb-container');
              setTopInfoBlock('.comb-container', comb);
              removeActiveElements();
              setCurrElementActive(event.currentTarget);
            } else {
              window.location = $dataLink;
            }
          }

          function closeBtnHandler(event) {
            event.stopImmediatePropagation();
            $(this).closest('.active').removeClass('active');
          }

          function infoBlockReadMoreHandler(event) {
            var $link = $(event.target).attr('href');
            window.location = $link;
          }

          function addEvents() {
            $('.honeycombs').on('click', '.comb-container', clickInfoBlockHandler);
            $('.close').on('click', closeBtnHandler);

            // TOFIX: don't let javascript hijack the click event, but that it can be opened in a new tab with keyboard/mouse
            $(".inner-text-description-long").on('click', 'a', infoBlockReadMoreHandler);
          }

          $(window).resize(function () {
            reorder(true);
          });

          buildHtml();
          reorder(false);
          addEvents();
        }

        return this.each(function () {
          console.log('test in each function');
          initialise(this);
        });
      };
    }(jQuery));

    jQuery(document).ready(function ($) {
      $('.honeycombs').honeycombs();
    });

</script>

</body>

</html>