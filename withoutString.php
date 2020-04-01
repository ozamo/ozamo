<?php
  include_once ('mongoDatos.php');
  include ('Header.php');
  include ('Programas/withoutString.php');

?>
<div class="Programa">

     <form name="formaction" action="withoutString.php">
          <fieldset>
               <h1 class="CentrarItems">
                    <legend>
                         withoutString
                    </legend>
               </h1>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Cadena Base:
                    </label>
                    <input class="form-control" value=0 name="valor1" placeholder="Default input" type="text">
                    </input>
               </div>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Cadena a remover:
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="text">
                    </input>
                  </div>
              <div>
              <?php
              $Result=' ';

                if(isset($_GET['valor1']) && isset($_GET['valor2'])){
                  $valor1=$_GET['valor1'];
                  $valor2=$_GET['valor2'];
                  $Result=$objeWS->probWithoutString($valor1,$valor2);
                }
              ?>
              <div class="entarItemsDiv">
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
     <form action="withoutString.phpE=?" name='generico'>
             <fieldset>

                  <div class="form-group">
                       <div class="card border-light mb-3" style="max-width: 20rem;">
                         <div class="card-header"><h4 class="card-title">Descripcion</h4>
                         <p class="card-text">
                           <?php
                           $nombreProblema='withoutString';
                           $mongoField='_descripcion';
                           $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                           echo $Descripcion;
                            ?>
                         </p>
                       </div>

                       </div>
                       <br>
                       <div class="card border-light mb-3" style="max-width: 25rem;">
                         <div class="card-header"><h4 class="card-title">Posibles Soluciones</h4>
                         <p class="card-text">
                           <?php
                           $nombreProblema='withoutString';
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
                           $nombreProblema='withoutString';
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
