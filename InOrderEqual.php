<?php

  include ('Header.php');
  include ('Programas/inOrderEqual.php');

?>
<div class="Programa">

     <form name="formaction" action="inOrderEqual.php?E=1">
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
               <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 2
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="text">
                    </input>
                    <div class="form-group">
                         <label class="col-form-label" for="inputDefault">
                              Entrada de Datos 3
                         </label>
                         <input class="form-control"value=0 name="valor3" placeholder="Default input" type="text">
                         </input>
                    </div>
                    <div class="form-group">
                         <label class="col-form-label" for="inputDefault">
                              Bandera
                         </label>
                         <input class="form-control" value='false' name="bandera" placeholder="Default input" type="text">
                         </input>

              </div>
              <?php
              $Result=' ';

                if(isset($_GET['valor1'])){
                  $valor1=$_GET['valor1'];
                  $valor2=$_GET['valor2'];
                  $valor3=$_GET['valor3'];
                  $bandera=$_GET['bandera'];
                  $Result=$objeIOE->probInOrderEqual($valor1,$valor2,$valor3,$bandera);
                }
              ?><button class="btn btn-primary" type="post">
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
