<?php
  if(Route::current()->getName() != 'marketplace'){
?>

<footer class="footer static-bottom footer-dark footer-custom-class" data-midnight="white"><div class="container">
<div class="footer-wrapper">
<div class="row">
  <div class="col-md-5 col-lg-5">&nbsp;</div>
  <div class="col-md-2 col-lg-2" style="text-align:center">
    <div class="about">
      <div class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width:100%;height:100%;border-radius:50%">
      </div>

    </div>
  </div>

    <div class="col-md-5 col-lg-5">&nbsp;</div>
</div>
<div class="copy-right mx-auto text-center">
  <span class="copyright" style="color:green">Copyright &copy; 2023, SHIBA KING COIN.</span>
</div>
</div>
</div>
</footer>

<?php } ?>

<script src="{{ asset('/js/vendors.min.js') }}"></script>

<script src="{{ asset('/js/flipclock.min.js') }}"></script>

<script src="{{ asset('/js/swiper.min.js') }}"></script>

<script src="{{ asset('/js/particles.min.js') }}"></script>

<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>

<script src="{{ asset('/js/theme.min.js') }}"></script>

<script src="{{ asset('/js/particles-type1.min.js') }}"></script>
