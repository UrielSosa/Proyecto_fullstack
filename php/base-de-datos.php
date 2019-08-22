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
      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item"><h5 class="mb-1">Iniciar sesión</h5></li>
        <li class="list-inline-item"><a href="login.php" class="btn btn-danger btn-rounded">Iniciar sesión</a></li>
        <hr>
        <li class="list-inline-item"><h5 class="mb-1">Registrate</h5></li>
        <li class="list-inline-item"><a href="register.php" class="btn btn-danger btn-rounded"><i class="fas fa-file-export">  Registrate ahora</i></a></li>      </ul>
        <hr>
      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center d-flex ">
          <li class="list-inline-item"><a href="#" class="btn-floating btn-fb mx-1"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="btn-floating btn-fb mx-1"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="btn-floating btn-gplus mx-1"><i class="fab fa-google-plus-g"></i></a></li>
          <li class="list-inline-item"><a href="#" class="btn-floating btn-li mx-1"><i class="fab fa-linkedin-in"></i></a></li>
          <li class="list-inline-item"><a href="#" class="btn-floating btn-dribbble mx-1"><i class="fab fa-dribbble"></i></a></li></ul>
    </footer>
    <?php
  }
 ?>
