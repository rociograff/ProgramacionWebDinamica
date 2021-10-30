<?php

$titulo = 'TP1 - EJ7';

include_once '../../../estructura/cabecera.php';

?>
<div class="container d-flex flex-column min-vh-100">
    <div>
        <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
            <div class="card-body p-4">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="bp-2 fs-6">
                            Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>

        <form class="mb-3" id="eje7tp1" name="eje7tp1" method="post" action="operacion.php">
            <div class="col-md-4 mb-3">
                <label for="number1" class="form-label">Número 1</label>
                <input type="number" class="form-control" id="number1" name="number1" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="number2" class="form-label">Número 2</label>
                <input type="number" class="form-control" id="number2" name="number2" required>
            </div>

            <div class="col-md-3 mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <select class="form-select" id="operacion" name="operacion" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="SUMA">SUMA</option>
                    <option value="RESTA">RESTA</option>
                    <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
                </select>
            </div>

            <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>