<?php

  include ('Header.php');
  include ('Programas/fix34.php');

?>
<div class="Programa">

     <form name="formaction" action="fix34.php?E=1">
          <fieldset>
               <h1>
                    <legend>
                         Programa
                    </legend>
               </h1>
               <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 1
                    </label>
                    <input class="form-control" value=0 name="valor1" placeholder="Default input" type="text">
                    </input>
               </div>

              <?php
              $Result=' ';

                if(isset($_GET['valor1'])){
                  $valor1=$_GET['valor1'];
                  $Result=$objefx->profix34($valor1);
                }
              ?><button class="btn btn-primary" type="post">
                   Procesar
              </button>
               <br><legend>
                 <?php
                   $Result=implode(" ",$Result);
                   echo $Result;

                 ?>
                </legend>

          </fieldset>
     </form>
</div>
<div class="AyudaPrograma">

</div>
<div class="Pie">

</div>
