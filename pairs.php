<?php
  include ('Programas/pairs.php');
  include ('Header.php');
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

                  $Result=$objePa->proPairs($valor1);
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
  <form action="pairs.phpE=?" name='generico'>
          <fieldset>

               <div class="form-group">
                    <label for="exampleTextarea">
                         Area de texto de Descripcion y Soluciones
                    </label>

                    <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header">Descripcion</div>
                      <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <br>
                    <div class="card border-light mb-3" style="max-width: 20rem;">
                      <div class="card-header">Posibles Soluciones</div>
                      <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
               </div>
          </fieldset>
     </form>
</div>
<div class="Pie">
</div>
