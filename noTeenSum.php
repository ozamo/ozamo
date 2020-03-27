<?php

  include ('Header.php');
  include ('Programas/noTeenSum.php');

?>
<div class="Programa">

     <form name="formaction" action="noTeenSum.php">
          <fieldset>
               <h1>
                    <legend>
                         Programa
                    </legend>
               </h1>
               <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                         Número de Entrada 1:
                    </label>
                    <input class="form-control" value=0 name="valor1" placeholder="Default input" type="text">
                    </input>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                         Número de Entrada 2:
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="text">
                    </input>
                  </div>
                    <div class="form-group">
                         <label class="col-form-label" for="inputDefault">
                            Número de Entrada 3:
                         </label>
                         <input class="form-control"value=0 name="valor3" placeholder="Default input" type="text">
                         </input>
                    </div>
                    <div>
              <?php
              $Result=' ';

                if(isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['valor3'])){
                  $valor1=$_GET['valor1'];
                  $valor2=$_GET['valor2'];
                  $valor3=$_GET['valor3'];
                  $Result=$objeNTS -> probNoTeenSum($valor1,$valor2,$valor3);
                }
              ?>
              <button class="btn btn-primary" type="post">
                   Procesar
              </button>
               <br><legend>
                 <?php

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
