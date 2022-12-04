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
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Users</div>
        
                            <div class="card-body">
                                <form method="POST" action="http://127.0.0.1:8000/register">
                                    <input type="hidden" name="_token" value="gJLtcBfhxjJlrTYffiT25c1bDYMUOxHnzQcgz0AS">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right mt-1 mb-2">Nombre y
                                            Apellidos</label>
        
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control " name="name" value="" required
                                                autocomplete="name" autofocus>
        
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right mb-2 mt-1">E-Mail
                                            Address</label>
        
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control " name="email" value="" required
                                                autocomplete="email">
        
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right mb-2 mt-1">Password</label>
        
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control " name="password" required
                                                autocomplete="new-password">
        
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right mb-2 mt-1">Confirm
                                            Password</label>
        
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
        
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4 mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

</template>