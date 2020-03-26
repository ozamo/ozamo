<?php
  
  include ('Header.php');

?>
<div class="Programa">
     <form>
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
                    <input class="form-control" id="inputDefault" placeholder="Default input" type="text">
                    </input>
               </div>
               <div class="form-group">
                    <label class="col-form-label" for="inputDefault">
                         Entrada de Datos 2
                    </label>
                    <input class="form-control" id="inputDefault" placeholder="Default input" type="text">
                    </input>
               </div>
               <button class="btn btn-primary" type="submit">
                    Procesar
               </button>
          </fieldset>
     </form>
</div>
<div class="AyudaPrograma">
     <form>
          <fieldset>
               <button class="btn btn-primary" type="submit">
                    Soluciones
               </button>
               <button class="btn btn-primary" type="submit">
                    Descripcion
               </button>
               <div class="form-group">
                    <label for="exampleTextarea">
                         Area de texto de Descripcion y Soluciones
                    </label>
                    <textarea class="form-control" id="exampleTextarea" rows="3">
                    </textarea>
               </div>
          </fieldset>
     </form>
</div>
<div class="Pie">
     ?
</div>
