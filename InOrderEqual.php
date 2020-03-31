<?php
  include ('Programas/inOrderEqual.php');
  include ('Header.php');
?>

<div class="Programa ">
     <form name="formaction " action="inOrderEqual.php">
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
               <div class="form-group CentarItemsDiv">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 2
                    </label>
                    <input class="form-control" value=0 name="valor2" placeholder="Default input" type="text">
                    </input>
                  </div>
                    <div class="form-group CentarItemsDiv">
                         <label class="col-form-label" for="inputDefault">
                              Entrada de Datos 3
                         </label>
                         <input class="form-control"value=0 name="valor3" placeholder="Default input" type="text">
                         </input>
                    </div>
                    <div class="form-group CentarItemsDiv">
                         <label class="col-form-label" for="inputDefault">
                              Bandera
                         </label>
                         <input class="form-control" value='false' name="bandera" placeholder="Default input" type="text">
                         </input>

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
                    <label for="exampleTextarea">
                         Area de texto de Descripcion y Soluciones
                    </label>
                    <textarea  value='<?php echo $valor?>' class="form-control" id="exampleTextarea"  rows="3">
                    </textarea>
                    <?php
                    $problemname='inOrderEqual';
                    $valor=' ';
                      $varbuton=isset($_GET['E']);
                      if($varbuton){
                        if ($varbuton==1) {
                          $valor=$objeData->solucioes($problemname);
                        }
                        if ($varbuton==2) {
                          $valor=$objeData->descripcion($problemname);
                        }
                        }
                        ?>

                    <button class="btn btn-primary" type="post" formaction="inOrderEqual.php?E=?" value="1" id='buttonA'>
                         Soluciones
                    </button>
                    <button class="btn btn-primary" type="post" formaction="inOrderEqual.php" value="2" id='buttonA'>
                         Descripcion
                    </button>
               </div>
          </fieldset>
     </form>
</div>
<div class="Pie">
</div>
