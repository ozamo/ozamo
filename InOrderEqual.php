<?php
  include_once ('Programas/inOrderEqual.php');
  include_once ('mongoDatos.php');
  include_once ('Header.php');
?>

<div class="Programa ">
     <form name="formaction " action="inOrderEqual.php">
          <fieldset>
               <h1 class="CentrarItems">
                    <legend>
                         inOrderEqual
                    </legend>
               </h1>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 1
                    </label>

                    <input class="form-control " value=0 name="valor1" placeholder="Default input" type="number">
                    </input>
               </div>
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 2
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="number">
                    </input>
                  </div>
                    <div class="form-group CentarItemsDiv">
                         <label class="col-form-label" for="inputDefault">
                              Entrada de Datos 3
                         </label>
                         <input class="form-control"value=0 name="valor3" placeholder="Default input" type="number">
                         </input>
                    </div>
                    <div class="form-group CentarItemsDiv">
                         <label class="col-form-label" for="inputDefault">
                              Bandera
                         </label><br/>

                         <select class="form-control" name="bandera" >
                           <option value="false">false</option>
                           <option value="true">true</option>
                         </select>
                  </div>
              <div>
              <?php
              $Result=' ';

                if(isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['valor3']) && isset($_GET['bandera'])){
                  $valor1=$_GET['valor1'];
                  $valor2=$_GET['valor2'];
                  $valor3=$_GET['valor3'];
                  $bandera=$_GET['bandera'];
                  $Result=$objeIOE->probInOrderEqual($valor1,$valor2,$valor3,$bandera);
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
  <form action="inOrderEqual.phpE=?" name='generico'>
          <fieldset>

               <div class="form-group">
                    <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header"><h4 class="card-title">Descripcion</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='inOrderEqual';
                        $mongoField='_descripcion';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                    </div>

                    </div>
                    <br>
                    <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header"><h4 class="card-title">Posibles Soluciones</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='inOrderEqual';
                        $mongoField='_PosiblesSoluciones';
                        $Descripcion=$objeData->recuDatos($nombreProblema,$mongoField);
                        echo $Descripcion;
                         ?>
                      </p>
                      <br><a href ="Programas/impinOrderEqual.php" target="_blank">Ver Codigo</a>
                    </div>
                  </div>
                  <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header"><h4 class="card-title">Clase</h4>
                      <p class="card-text">
                        <?php
                        $nombreProblema='inOrderEqual';
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
