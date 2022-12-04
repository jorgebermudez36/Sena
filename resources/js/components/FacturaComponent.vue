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
    <main id="check">
        <section class="container d-flex flex-wrap py-3">
            <div class="col card">
                <div class="card-header ">
                    <h3 class="card-tittle">Factura</h3>
                </div>
    
                <div class="card-body">
                    <form class="row">
                        <div class="form-group col-md-4"><label for="">Id</label>
                            <input type="text" class="form-control" placeholder="Number" id="inputRut">
                        </div>
                        <div class="form-group col-md-8"><label for="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Empleado" id="inputName">
                        </div>
                        <div class="form-group col-md-4"><label for="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre / Razón Social" id="inputName">
                        </div>
                        <div class="form-group col-md-4"><label for="">Apellido</label>
                            <input type="text" class="form-control" placeholder="Apellido" id="inputSurname">
                        </div>
                        <div class="form-group col-md-3"><label for="">Id-RUT</label>
                            <input type="text" class="form-control" placeholder="# RUT / Id" id="inputRut">
                        </div>
                        <div class="form-group col-md-1"><label for="">Nro:</label>
                            <input type="text" class="form-control" placeholder="001" id="inputConsecutive">
                        </div>
                        <div class="form-group col-md-8"><label for="">Dirección:</label>
                            <input type="text" class="form-control" placeholder="742 Evergreen Terrace" id="inputAdress">
                        </div>
                        <div class="form-group col-md-4"><label for="">Fecha:</label>
                            <input type="date" class="form-control" id="inputFecha">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
        <section class="container d-flex px-3 py-2">
            <div class="col card">
                <div class="card-body">
                    <form class="row justify-content-center" id="formDeatail">
                        <div class="form-group col-md-2">
                            <label for="">Cantidad</label>
                            <input type="text" class="form-control" id="inpuntQty">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="">Descripción</label>
                            <select id="selectDescription" class="form-control">
                                <option value="0">Seleccione</option>
                                <option value="1">Producto1</option>
                                <option value="2">Producto2</option>
                                <option value="3">Producto3</option>
                                <option value="4">Producto4</option>
                                <option value="5">Producto5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">P.Unit</label>
                            <input type="number" class="form-control" id="inputPunit">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">P.total</label>
                            <input type="number" class="form-control" id="inputPtotal">
                        </div>
                        <div class="form-group col-md-1 py-4 px-1">
                            <button class="btn btn-warning me-md-2 btn-outline-dark" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Agregar</button>
                        </div>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button class="btn btn-dark" type="button">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
        <section class="container d-flex px-3 py-2">
            <div class="col">
    
                <table class="table text-center text-light">
                    <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>P.Unitario</th>
                            <th>P.Total</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>
    </main>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buscar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Cantidad</label>
                                <input type="text" class="form-control" id="inpuntQty">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="">Descripción</label>
                                <select id="selectDescription" class="form-control">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Producto1</option>
                                    <option value="2">Producto2</option>
                                    <option value="3">Producto3</option>
                                    <option value="4">Producto4</option>
                                    <option value="5">Producto5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">P.Unit</label>
                                <input type="number" class="form-control" id="inputPunit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Agregar</button>
                    <button type="button" class="btn btn-dark">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
</template>

<scripts>

</scripts>