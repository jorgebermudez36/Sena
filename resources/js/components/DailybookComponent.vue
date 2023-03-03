<template>
<!DOCTYPE html>
<html lang="es">

<head>
   <title>Libro Diario</title>
</head>

<body>
<main id="register">
    <section class="container col-6 py-3">
        <div class="col card">
            <div class="card-header ">
                <h3 class="card-tittle text-center">Libro Diario</h3>
            </div>
            <div class="card-body">
                <form class="row">

                    <div class="input-group mb-1 ">
                        <span class="input-group-text" id="inputGroup-sizing-default">Consecutivo</span>
                        <input type="texto" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="#">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text">Valor Compras</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="$$$$">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text">Valor Gastos</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="$$$$">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text">Rango Facturas</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="$$$$">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Total Facturas</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="$$$$">
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