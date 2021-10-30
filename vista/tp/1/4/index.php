<?php

$titulo = 'TP1 - EJ4';

include_once '../../../estructura/cabecera.php';

?>
<div class="container d-flex flex-column min-vh-100">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
                <div class="card-body p-4">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                            <p class="bp-2 fs-6">
                                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18). Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>

            <form class="mb-3" id="eje4tp1" name="eje4tp1" method="post" action="mostrarDatos.php">
                <div class="col-md-4 mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" size="50" placeholder="Escriba su nombre completo" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" size="50" placeholder="Escriba todos sus apellidos" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" name="edad" size="50" min="1" placeholder="Ingrese su edad" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input name="direccion" id="direccion" size="50" placeholder="Escriba su dirección completa" class="form-control" required>
                </div>

                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>