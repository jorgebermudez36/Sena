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
        <title>Cargos</title>
    </head>

    <body>
        <div class="conteiner-lg mx-auto mt-3" id="Inventory">
            <h2 class="mb-3 text-center text-info">Inventario</h2>
            <div class="row g-3 ms-5 me-5">
                <div class="col-sm-4 text-dark">
                    <label for="item" class="form-label">Artículo</label>
                    <input type="text" class="form-control" id="item" placeholder="" value="" required>
                </div>
        
                <div class="col-sm-4 text-dark">
                    <label for="lastName" class="form-label">Cantida</label>
                    <input type="number" class="form-control" id="qty">
                </div>
        
                <div class="col-sm-4 text-dark">
                    <label for="appareance" class="form-label">Presentación</label>
                    <input type="text" class="form-control" id="appareance">
                </div>
            </div>
        
            <div class="row g-3 ms-5 me-5 mt-2">
                <div class="col-sm-4 text-dark">
                    <label for="unit" class="form-label">Unidad</label>
                    <input type="number" class="form-control" id="unit">
                </div>
        
                <div class="col-sm-4 text-dark">
                    <label for="buyPrice" class="form-label">Precio de Compra</label>
                    <input type="number" class="form-control" id="appareance">
                </div>
        
                <div class="col-sm-4 text-dark">
                    <label for="salePrice" class="form-label">Precio de Venta</label>
                    <input type="number" class="form-control" id="unit">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex mt-4 me-5 justify-content-md-end">
                <button class="btn btn-warning" type="button">Cancelar</button>
                <button class="btn btn-secondary" type="button">Adicionar</button>
                <button class="btn btn-primary me-md-2" type="button">Guardar</button>
            </div>
        </div>
    </body>
</html>

</template>

<scripts>

</scripts>