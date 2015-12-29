<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>{{ Theme::getTitle() }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! Theme::asset()->styles() !!}
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
        {!! Theme::asset()->scripts() !!}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
<body id="start_nicdark_framework">
<div class="nicdark_preloader">
  <i class="icon-cog green"></i>
</div>
  <div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">
    {!! Theme::partial('header') !!}
    <div class="nicdark_space90"></div>
    <div class="nicdark_section">

        <div class="tp-banner-container">
          <div class="nicdark_slide1">

            <ul>

              <!--start first-->
              <li data-masterspeed="1000" data-saveperformance="on" data-slotamount="7" data-title="Tent" data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazyload="{!! Theme::asset()->url('img/slide/img9.jpg'); !!}" src="{!! Theme::asset()->url('img/slide/img9.jpg'); !!}">
              </li>
              <!--end first-->

              <!--start second-->
              <li data-masterspeed="500" data-saveperformance="on" data-slotamount="7" data-title="Camping" data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" data-lazyload="{!! Theme::asset()->url('img/slide/img1.jpg'); !!}" src="{!! Theme::asset()->url('img/slide/img1.jpg'); !!}">
              </li>
              <!--end second-->

              <!--start second-->
              <li data-masterspeed="1000" data-saveperformance="on" data-slotamount="7" data-title="Campground" data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazyload="{!! Theme::asset()->url('img/parallax/img1.jpg'); !!}" src="{!! Theme::asset()->url('img/parallax/img1.jpg'); !!}">
              </li>
              <!--end second-->

            </ul>

          </div>
        </div>

      </div>
    {!! Theme::content() !!}
    {!! Theme::partial('footer') !!}
  </div>
  </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>
</html>
