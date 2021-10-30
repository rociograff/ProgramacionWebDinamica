<?php

$titulo = 'TP1 - EJ5';

include_once '../../../estructura/cabecera.php';

?>
<div class="container d-flex flex-column min-vh-100">
    <div>
        <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
            <div class="card-body p-4">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p class="bp-2 fs-6">
                            Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>

        <form class="mb-3" id="eje5tp1" name="eje5tp1" method="post" action="mostrarDatos.php">
            <div class="col-md-4 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba todos sus apellidos" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" min="1" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Escriba su dirección" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="estudio">Nivel de estudio</label>
                <select class="form-select" id="estudio" name="estudio" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="No tiene estudios">No tiene estudios</option>
                    <option value="Estudios primarios">Estudios primarios</option>
                    <option value="Estudios secundarios">Estudios secundarios</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="sexo">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
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