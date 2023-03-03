<template>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Mostrar Cargos</title>
        </head>
        <body>
            <div id="table" class="container align-center col-8">
                <div class="alert alert-danger" role="alert" v-if="message">
                    {{ message }}
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">id</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cargo in cargos" :key="cargo.id">
                            <td>{{ cargo.id }}</td>
                            <td>{{ cargo.cargo }}</td>
                            <td>{{ cargo.descripcion }}</td>
                            <td>
                                <a
                                    :to="(name = 'editcarg')"
                                    type="submit"
                                    class="btn btn-warning fas fa-pencil"
                                    v-on:click="edit"
                                >
                                </a
                                >&nbsp;
                                <a
                                    type="submit"
                                    class="btn btn-danger fas fa-trash"
                                    @click="eliminar(cargo.id)"
                                >
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
    </html>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            cargos: [],
            message: "",
        };
    },
    methods: {
        async show(id) {
            await axios
                .get("/api/cargos/index/" + id)
                .then((response) => (this.cargos = response.data));
        },
        async eliminar(id) {
            await axios
                .delete("/api/cargos/borrar/" + id)
                .then((response) => {
                    this.message = response.data.message;
                        console.warn(response);
                        this.show();
                })
                .catch((error) => error);
        },

        async edit() {
            await axios
                .get("api/cargos/select/" + id)
                .then((response) => console.log(response.data));
        },
    },
    mounted() {
        this.show();
    },
};
</script>
