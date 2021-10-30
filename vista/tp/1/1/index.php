<?php

$titulo = 'TP1 - EJ1';

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
                                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>

            <form class="row g-3 needs-validation" novalidate id="eje1tp1" name="eje1tp1" method="post" action="verNumero.php">
                <div class="col-md-4 mb-3">
                    <input id="enteredNumber" name="enteredNumber" type="number" class="form-control" placeholder="Ingrese un número" aria-label="Ingrese un número" aria-describedby="enteredNumber" required>
                </div>
                <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit">Consultar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once '../../../estructura/pie.php';

?>