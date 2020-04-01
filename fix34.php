<?php
  include ('Programas/fix34.php');
  include ('Header.php');
  include_once ('mongoDatos.php');
?>

<div class="Programaa">
     <form name="formaction " action="fix34.php">
          <fieldset>
               <h1 class="CentrarItems">
                    <legend>
                         Programa
                    </legend>
               </h1>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 1
                    </label>

                    <input class="form-control " value=0 name="valor1" placeholder="Default input" type="text">
                    </input>
               </div>

              <div>
              <?php
              $Result=' ';

                if(isset($_GET['valor1']) ){
                  $valor1=$_GET['valor1'];

                  $Result=$objefx->profix34($valor1);
                }
              ?>
              <div class="CentarItemsDiv">
                <button class="btn btn-primary CentarItems" type="post">
                     Procesar
                </button>
              </div>
               <br>
               <div class="CentarItemsDiv2">
                 <div class="card border-light mb-3 " style="max-width: 20rem;">
                    <div class="card-header">Resultados</div>
                      <div class="card-body">
                          <h4 class="card-title"> <?php echo $Result;?></h4>
                      </div>
                </div>
               </div>

          </fieldset>
     </form>
</div>
<div class="AyudaPrograma">
  <form action="fix34.phpE=?" name='generico'>
          <fieldset>

               <div class="form-group">
                    <div class="card border-light mb-3" style="max-width: 25rem;">
                      <div class="card-header"><h4 class="card-title">Descripcion</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='fix34';
                        $mongoField='_descripcion';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                    </div>

                    </div>
                    <br>
                    <div class="card border-light mb-3" style="max-width: 18rem;">
                      <div class="card-header"><h4 class="card-title">Posibles Soluciones</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='fix34';
                        $mongoField='_PosiblesSoluciones';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                    </div>
                  </div>
                  <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header"><h4 class="card-title">Clase</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='fix34';
                        $mongoField='_clase';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                    </div>
                    </div>
               </div>
          </fieldset>
     </form>
</div>
<div class="Pie">
</div>
