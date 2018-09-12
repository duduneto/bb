<?php wp_footer(); ?>

<style>
  .my-main-footer{
    background-color: black;
    height: auto;
    color: #ffffff;
}
</style>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark my-main-footer">

    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="container text-center">

          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Fale Conosco!</h5>
            <p><i class='fa fa-phone mr-2'  ></i>  85 9 9999-9999</p>
            <p><i class='fa fa-envelope mr-2' ></i>  gl_borges@icloud.com</p>
            <!-- <p>A Barros & Borges tem o melhor seguro para você. Venha solicitar conosco! Temos certeza que você achará a melhor opção para o que realmente importa para você!</p> -->
            <!-- <i class='fab fa-whatsapp' style='font-size: 36px;' ></i> -->
        </div>

      </div>
      <div class="col-md-4 mx-auto">
        <!-- Copyright -->
        <div class="container text-center">
          
          <div class="footer-copyright text-centerpy-3">© 2018 Copyright:
            <a href="#home"> Barros & Borges</a>
          </div>
        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-4 mx-auto">
        <div class="container">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center">Redes Sociais</h5>
          <ul class="list-unstyled list-inline text-center" id='social-media'>
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1" href=''>
                <i class="fab fa-whatsapp" style="font-size:36px;" > </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1" href=''>
                <i class="fab fa-facebook-square" style="font-size:36px;" > </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1" href='https://www.instagram.com/barroseborgesseguros/'>
                <i class="fab fa-instagram" style="font-size:36px;"> </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Social buttons -->

    

</footer>
<!-- Footer -->


</body>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.1.0.js" ></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/smooth-scrolling.js" ></script>
<script src='<?php echo(get_template_directory_uri()) ?>/js/adjustVideo.js' ></script>
<script>
//       $(function() {

//   var $body = $(document);
//   $body.bind('scroll', function() {
//       // "Disable" the horizontal scroll.
//       if ($body.scrollLeft() !== 0) {
//           $body.scrollLeft(0);
//       }
//   });

// })(); 
</script>
</html>