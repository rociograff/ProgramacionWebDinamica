<?php

$titulo = 'TP1 - EJ6';

include_once '../../../estructura/cabecera.php';

?>
<div class="container d-flex flex-column min-vh-100">
    <div>
        <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
            <div class="card-body p-4">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="bp-2 fs-6">
                            Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página que procesa el formulario la cantidad de deportes que practica.
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>

        <form class="mb-3" id="eje6tp1" name="eje6tp1" method="post" action="mostrarDatos.php">
            <div class="col-md-4 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su nombre completo" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escriba todos sus apellidos" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" name="edad" id="edad" placeholder="Escriba su edad" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Escriba su dirección" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="dep[]">Deporte(s) que practica</label>
                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="futbol" id="futbol">
                    <label class="form-check-label" for="futbol">Futbol</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="basket" id="basket">
                    <label class="form-check-label" for="basket">Basket</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="tennis" id="tennis">
                    <label class="form-check-label" for="tennis">Tennis</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="dep[]" type="checkbox" value="voley" id="voley">
                    <label class="form-check-label" for="voley">Voley</label>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <button class="btn btn-primary" name="eje5" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>