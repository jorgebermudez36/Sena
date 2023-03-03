<template>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Empleados</title>
</head>

    <body>
        <main id="register">
            <section class="container col-6 py-3">
                <div class="col card">
                    <div class="card-header">
                        <h3 class="card-tittle text-center">
                            Registro Clientes
                        </h3>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="input-group mb-1 mt-2">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-default"
                                    >Id</span
                                >
                                <input
                                    id="id"
                                    v-model="ident"
                                    type="number"
                                    class="form-control"
                                    placeholder="Identification"
                                    value=""
                                />
                            </div>

                            <div class="input-group mb-1 mt-2">
                                <span class="input-group-text">Cliente</span>
                                <input
                                    id="name"
                                    v-model="name"
                                    type="text"
                                    class="form-control"
                                    placeholder="Nombre y Aprellido"
                                    value=""
                                />
                            </div>

                            <div class="input-group mb-1 mt-2">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-default"
                                    >email</span
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    aria-label="Sizing example input"
                                    v-model="mail"
                                    placeholder="email@example.com"
                                    aria-describedby="inputGroup-sizing-default"
                                    value=""
                                />
                            </div>

                            <div class="input-group mb-1 mt-2">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-default"
                                    >Dirección</span
                                >
                                <input
                                    type="text"
                                    v-model="address"
                                    class="form-control"
                                    aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    placeholder="Dirección"
                                />
                            </div>

                            <div class="input-group mb-1 mt-2">
                                <span
                                    class="input-group-text"
                                    id="inputGroup-sizing-default"
                                    >Telefono</span
                                >
                                <input
                                    type="text"
                                    v-model="phone"
                                    class="form-control"
                                    aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default"
                                    placeholder="Telefono"
                                />
                            </div>

                            <div class="text-center mt-3">
                                <button
                                    class="btn btn-light btn-outline-dark"
                                    type="button"
                                >
                                    Buscar
                                </button>
                                <button class="btn btn-warning" type="button">
                                    Borrar
                                </button>
                                <button
                                    class="btn btn-primary"
                                    @click="load"
                                    type="button"
                                >
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            ident: " ",
            name: " ",
            mail: " ",
            phone: " ",
            address: " ",
        };
    },

    methods: {
        load() {
            let json = {
                ident: this.ident,
                name: this.name,
                mail: this.mail,
                phone: this.phone,
                address: this.address,
            };

            axios.post("/api/customer/cargar", json).then((data) => {
                if (data.status == 200)
                    console
                        .log("Se guardó correctamente")
                        .catch((error) => console.log(error));
            });
        },
    },
};
</script>
