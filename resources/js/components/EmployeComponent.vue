<template>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style1.css" rel="stylesheet">
    <title>Employes</title>
</head>
<body>
<main id="register">
    <section class="container col-6 py-3">
        <div class="col card">
            <div class="card-header ">
                <h3 class="card-tittle text-center">Registro Empleados</h3>
            </div>

            <div class="card-body">
                <form class="row">
                    <div class="input-group mb-1">
                        <span class="input-group-text">Nombre y Apellidos</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="Name">
                        <input type="text" aria-label="Last name" class="form-control" placeholder="Surname">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Documento Id</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="email@example.com">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Dirección</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Dirección">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Telefono">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cargo</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Dirección">
                    </div>

                    <div class="text-center mt-3">
                        <button class="btn btn-light btn-outline-dark" type="button">Buscar</button>
                        <button class="btn btn-warning" type="button">Borrar</button>
                        <button class="btn btn-primary" type="button">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>
</body>
</html>
</template>

<scripts>

</scripts>
