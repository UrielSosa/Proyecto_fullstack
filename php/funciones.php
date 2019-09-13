<?php
function isEmail($email){
  return filter_validate($email,FILTER_VALIDATE_EMAIL);
}

//Base de datos de autos//
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
                "precio"=>"US$ 1.600.000"],
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
/* <<---Base de datos de motos--->>*/

?>
