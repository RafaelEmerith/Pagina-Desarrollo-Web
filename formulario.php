<?php
include_once 'header.html';
?>
<br>
<br>

<!--- Tarjeta de bienvenida -->

<div id="tarjeta_bienvenida">
    <div class="card" style="width: 18rem;">
        <img src="Imagenes/bienvform.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">¡Iniciemos con el registro!</h5>
            <p class="card-text">Esto solo te llevara unos minutos</p>
            <div style="text-align: center;">  
                <a href="#" onclick= "formulario()" class="btn btn-primary">Comenzar</a>
            </div>
        </div>
    </div>
</div>    

<!------------------ Formulario ------------------>

<div class id= "Formulario">
    <div style="text-align: center;">
        <img src="Imagenes/form.jpg" class="img-fluid" alt="...">    
    </div>
    <br>   
    <div style="text-align: center;">     
        ¿Como te llamas?
        <input class="form-control" type="text" id="txt_nombre" name="nombre" style="text-align: center;" placeholder="Escribe tu nombre" aria-label=".default input example">
        <br>
        ¿Cuál es tu carrera?
        <input class="form-control" type="text" id="txt_carrera" name="carrera" style="text-align: center;" placeholder="Escribe tu carrera" aria-label="default input example">
        <br>
        ¿Eres usuario?
        <input type="checkbox" id="txt_tipo" name="tipo" >
        <br>
        <br>
        <button type="button" onclick = "agradecimiento()" id="guardarBtn" class="btn btn-outline-success">Entregar</button> 
        <button type="button" onclick=  "imgBienvenida()" class="btn btn-outline-danger">Cancelar</button>
    </div>
</div>

<!--- Tarjeta de agradecimiento -->
<div id="Agradecimiento">    
    <div style="text-align: center;">
        <br>
        <h1>Gracias por registrarte.</h1>
        <br>
        <h3>Tu información fue guardada correctamente.</h3>
        <br>
        <br>
        <h3>¿Quieres ver la tabla de registros?</h3>
        <a type="button" href="index.html" class="btn btn-outline-secondary">¡No!</a>
        <a type="button" onclick="Tabla()" class="btn btn-outline-success">¡Si!</a>
    </div>
</div>

<!----------------------Tabla------------------------>

<div class id="Tabla">
    <div style="text-align: center;">   
        <br>
        <br>
        <div class="container col-10" id="id_usuarios">
            <table class="table table-dark" name="tabla_usuarios" id="tabla_usuarios">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carrera</th>
                        <th scope="col"><i class="bi bi-award-fill"></i>USUARIO<i class="bi bi-award-fill"></i>
                        </th>
                    </tr>
                </thead>
                <tbody id="tablaBody">
                    <!-- Los datos ingresados aparecerán aquí -->
                </tbody>
            </table>
        </div>
        <button type="button" onclick= "imgBienvenida()" class="btn btn-outline-success">Volver al Formulario</button>
    </div>
</div>

<?php
include_once 'footer.html';
?>


<script src ="funciones.js"></script>

