<?php
//Base de datos//
  $autos = [
            0=>["acti"=>"active",
                "imagen"=>"Hennessey-venom-gt-spyder.jpg",
                "descripcion"=>"Hennessey Venom GT",
                "precio"=>"US$ 1.100.000"],
            1=>["acti"=>"",
                "imagen"=>"Pagani-Huayra.jpg",
                "descripcion"=>"Pagani Huayra",
                "precio"=>"US$ 1.300.000"],
            2=>["acti"=>"",
                "imagen"=>"McLaren-P1.jpg",
                "descripcion"=>"McLaren P1",
                "precio"=>"US$ 1.350.000"],
            3=>["acti"=>"",
                "imagen"=>"Koenigsegg-Agera-R.jpg",
                "descripcion"=>"Koenigsegg Agera R",
                "precio"=>"1.600.000"],
            4=>["acti"=>"",
                "imagen"=>"Zenvo-ST1.jpg",
                "descripcion"=>"Zenvo ST1",
                "precio"=>"US$ 1.225.000"],
            5=>["acti"=>"",
                "imagen"=>"Pagani-Zonda-Cinque-Roadster.jpg",
                "descripcion"=>"Pagani Zonda Cinque Roadster",
                "precio"=>"US$ 1.850.000"],
            6=>["acti"=>"",
                "imagen"=>"Aston-Martin-One-77.jpg",
                "descripcion"=>"Aston Martin One-77",
                "precio"=>"US$ 1.850.000 "],
            7=>["acti"=>"",
                "imagen"=>"Bugatti-Veyron.jpg",
                "descripcion"=>"Bugatti Veyron",
                "precio"=>"US$ 2.400.000"],
            8=>["acti"=>"",
                "imagen"=>"Lykan-Hypersport.jpg",
                "descripcion"=>"Lykan Hypersport",
                "precio"=>"US$ 3.400.000"],
            9=>["acti"=>"",
                "imagen"=>"Lamborghini-Veneno.jpg",
                "descripcion"=>"Lamborghini Veneno",
                "precio"=>"US$ 4.500.000"],
          ];

//Footer de la pagina//
  function footer(){
    ?>
<footer class="page-footer font-small stylish-color-dark pt-4">
  <div class="container bg_azul_os mt-2 pt-2">
    <div class="row">
      <div class="col-lg-2 col-md-12 mb-4">
        <!--Image-->
        <div class="view overlay z-depth-1-half position-relative">
          <img src="img/carousel/Pagani-Zonda-Cinque-Roadster.jpg" class="img-fluid" width="100%">
          <img src="img/descuento-50.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="img/carousel/Lamborghini-Veneno.jpg" class="img-fluid"  width="100%">
          <img src="img/oferta.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
      <!--Image-->
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="view overlay z-depth-1-half">
          <img src="img/carousel/McLaren-P1.jpg" class="img-fluid"  width="100%">
          <img src="img/nuevo.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
      <!--Image-->
      <div class="col-lg-2 col-md-12 mb-4">
        <div class="view overlay z-depth-1-half">
          <img src="img/carousel/Hennessey-venom-gt-spyder.jpg" class="img-fluid" width="100%">
          <img src="img/descuento-50.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
      <!--Image-->
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="view overlay z-depth-1-half">
          <img src="img/carousel/Pagani-Zonda-Cinque-Roadster.jpg" class="img-fluid" width="100%">
          <img src="img/oferta.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
      <!--Image-->
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="view overlay z-depth-1-half">
          <img src="img/carousel/Lykan-Hypersport.jpg" class="img-fluid" width="100%">
          <img src="img/nuevo.png" class="c_position_abs" width="30%">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>
      </div>
    </div>
    <!-- - redes sociales y demas - -->
    <div class="container-fluid bg-dark social-icon">
      <span><i class="fab fa-facebook-square"></i></span>
      <span><i class="fab fa-google-plus-square"></i></span>
      <span><i class="fab fa-twitter-square"></i></span>
    </div>
  </div>
</footer>
    <?php
  }
 ?>

 <!-- header -->
 <?php
  function nav(){
  ?>
  <header class="container-fluid u_bg-azul">
    <div class="navbar">
      <div class="u_logo ml-0 mr-0">
        <img src="img/logo1.png" alt="Logo de hotwheels">
      </div>
      <nav class="nav ml-0 mr-0">
        <ul class="nav d-flex col-3 col-md-12">
                  <div class="page">
                    <div class="page__demo">
                      <label class="field a-field a-field_a1 page__field">
                        <input class="field__input a-field__input" placeholder="Buscar" required>
                        <span class="a-field__label-wrap">
                          <span class="a-field__label">Buscador</span>
                        </span>
                      </label>
                    </div>
                  </div>
          <div class="dropdown m-0">
            <button class="dropbtn"> Autos</button>
            <div class="dropdown-content">
            <a href="#"> Lamborghini </a>
            <a href="#"> McLaren </a>
            <a href="#"> Bugatti </a>
            </div>
          </div>
          <div class="dropdown m-0">
            <button class="dropbtn"> Motos </button>
            <div class="dropdown-content">
            <a href="#"> Lamborghini </a>
            <a href="#"> McLaren </a>
            <a href="#"> Bugatti </a>
            </div>
          </div>
        </ul>
      </nav>
      <nav class="nav m-0">
        <div class="nav-item m-0"><a href="index.php" class="nav-link active"><i class="fas fa-home"></i></a></div>
        <div class="nav-item m-0"><a href="login.php" class="nav-link active"><i class="fas fa-sign-in-alt"></i></a></div>
        <div class="nav-item m-0"><a href="preguntas.php" class="nav-link active"><i class="fas fa-question"></i></a></div>
      </nav>
    </div>
  </header>

  <?php
  }
  ?>
