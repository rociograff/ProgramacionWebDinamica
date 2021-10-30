<?php

$titulo = 'TP1 - EJ2';

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
                                Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>
            <form class="mb-3" id="form1" name="form1" method="POST" action="calcularHoras.php" data-toggle="validator" required>
                <div class="row mb-3">
                    <h5>Lunes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioLunes" name="horaInicioLunes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinLunes" name="horaFinLunes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <h5>Martes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMartes" name="horaInicioMartes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMartes" name="horaFinMartes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <h5>Miércoles</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioMiercoles" name="horaInicioMiercoles" min="08:00" max="23:59" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinMiercoles" name="horaFinMiercoles" min="08:00" max="23:59" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <h5>Jueves</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioJueves" name="horaInicioJueves" min="08:00" max="23:59" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinJueves" name="horaFinJueves" min="08:00" max="23:59" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <h5>Viernes</h5>
                    <div class="col-md-4">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" id="horaInicioViernes" name="horaInicioViernes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="horaFin" class="form-label">Hora Fin</label>
                        <input type="time" id="horaFinViernes" name="horaFinViernes" min="08:00" max="23:59" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>