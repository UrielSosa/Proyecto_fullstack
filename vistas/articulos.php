<?php

?>
<!-- articulo card -->
<div class="card-group ">
  <div class="row">
    <?php foreach ($autos as $key => $value):?>
      <div class="card index col-12 col-md-3 mt-2 mb-2 p-0 _ma">
        <img src="img/carousel/<?=$value["imagen"];?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$value["descripcion"];?></h5>
        <p class="card-text"><small class="text-muted"><?=$value["precio"];?></small></p>
        <center>
        <span class="btn btn-outline-success">Añadir al carrito <i class="carrito fas fa-cart-plus"></i></span>
      </div>
    </div>
  <?php endforeach ?>
  </div>
</div>
</div>
</div>
