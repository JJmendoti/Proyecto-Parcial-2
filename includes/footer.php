</div>

<!-- Footer -->

<footer class="page-footer font-small cyan darken-3 text-center footer-animation">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" style="color: #3b5999;">
            <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x text-info"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" style="color: #55acee;">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x text-info"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic" style="color: #dd4b39;">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic" style="color: #0e76a8;">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" style="color: #e4405f;">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x text-warning"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic" style="color: #bd081c">
            <i class="fab fa-pinterest fa-lg white-text fa-2x text-danger"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 font-weight-bold text-light bg-info">© 2020 Copyright:
    <a>Jmendoti</a>
  </div>
  <!-- Copyright -->

</footer>


<!-- Script personalizados y validación de form -->

<script src="JS/validate.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


<script>
  $(document).ready(function() {
    $('body').bootstrapMaterialDesign();
  });
</script>


<script>
  window.sr = ScrollReveal();

  sr.reveal('.navbar', {
    duration: 2500,
    origin: 'bottom'
  });

  sr.reveal('.header-content-left', {
    duration: 2000,
    origin: 'top',
    distance: '300px'
  });

  sr.reveal('.header-content-right', {
    duration: 2500,
    origin: 'right',
    distance: '300px'
  });
  sr.reveal('.btn-1', {
    duration: 2500,
    origin: 'bottom',
    delay: '1500'
  });

  sr.reveal('.lorende3', {
    duration: 2000,
    origin: 'bottom',
    distance: '3000px'
  });


  sr.reveal('.footer-animation', {
    duration: 2000,
    origin: 'bottom',
    distance: '3000px'
  });

  //deslizar entre secciones

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>

</body>

</html>