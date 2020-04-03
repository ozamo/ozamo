<?php
  include_once ('Programas/noTeenSum.php');
  include_once ('mongoDatos.php');
  include_once ('Header.php');
?>
<div class="Programa">

     <form name="formaction" action="noTeenSum.php">
          <fieldset>
               <h1 class="CentrarItems">
                    <legend>
                         noTeenSum
                    </legend>
               </h1>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Número de Entrada 1:
                    </label>
                    <input class="form-control" value=0 name="valor1" placeholder="Default input" type="text">
                    </input>
               </div>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Número de Entrada 2:
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="text">
                    </input>
                  </div>
                    <div class="form-group CentarItemsDiv">
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
              <div class="CentarItemsDiv">
                <button class="btn btn-primary" type="post">
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
  <form action="noTeenSum.phpE=?" name='generico'>
          <fieldset>

               <div class="form-group">
                    <div class="card border-light mb-3" style="max-width: 40rem;">
                      <div class="card-header"><h4 class="card-title">Descripcion</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='noTeenSum';
                        $mongoField='_descripcion';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                    </div>

                    </div>
                    <br>
                    <div class="card border-light mb-3" style="max-width: 15rem;">
                      <div class="card-header"><h4 class="card-title">Posibles Soluciones</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='noTeenSum';
                        $mongoField='_PosiblesSoluciones';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                      <br><a href ="Programas/impnoTeenSum.php" target="_blank">Ver Codigo</a>
                    </div>
                  </div>
                  <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header"><h4 class="card-title">Clase</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='noTeenSum';
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
