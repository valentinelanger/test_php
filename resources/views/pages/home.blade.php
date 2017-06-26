@extends ('layouts.app')

@section('content')
<div class="wrapper">
  <!-- first part with image + call-to-action -->
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <!-- text and call-to-action -->
      <div class="text-header">
        <h2>Getting paid has never been so easy.</h2>
        <p>Yes, a one-fit-all solution for paiements exists.</p>
        <div class="button">Try it now</div>
      </div>
    </div>

    <!-- image -->
    <div class="col-xs-12 col-sm-6">
      <div class="img-header">

        <img class="iphone" src="images/iphone_white.png" alt="">
        <img class="card" src="images/card_header.png" alt="">
        <video autoplay loop class="video-home" src="video/test_video_lydia3.mov"></video>
      </div>
    </div>

  </div>
</div>

<!-- second part with 2 columns-->
<div class="second-part">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="content2">
        <h1>Banking systems are painful.</h1>
      </div>
    </div>


    <div class="col-xs-12 col-sm-6">
      <div class="content2">
      <p>Our aim is to simplify your paiement system whatever paiement device you are using: credit card system, online shopping or mobile paiement. Open your account in less than 10 min and start pay in.</p>
      </div>
    </div>

  </div>
</div>

<!-- 3rd part with 3 icons -->
<div class="icons-part container">
  <h2 class="text-center">Fast, safe and transparent.</h2>

  <div class="row">
    <div class="marged">

      <div class="col-xs-12 col-sm-4">
        <div class="text-center space">
          <img class="icon" src="images/icon_fast.png" alt="">
          <p>5 minutes to open an account and you can receive your first paiements.</p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4">
        <div class="text-center space">
          <img class="icon" src="images/icon_safe2.png" alt="">
          <p>We are so confident in our security that we garantee all your Lydia paiements.</p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4">
        <div class="text-center space">
          <img class="icon" src="images/icon_transparent.png" alt="">
          <p>0.7% / transaction with mobile or 1.5% + 0.10 € / transaction for online and credit card paiements.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 4th part with banner -->
<div class="row">
  <div class="col-xs-12">
    <div class="final-banner" style="background-image: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 50%), url('images/banner5.jpg');">
    <h2>Mobile First</h2>
    <p>Because your bank should be in your phone.</p>
    </div>
  </div>
</div>
@endsection
