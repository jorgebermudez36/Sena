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
                <table class="table table-bordered" id="cargTable">
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
                            <td id="carg">{{ cargo.id }}</td>
                            <td>{{ cargo.cargo }}</td>
                            <td>{{ cargo.descripcion }}</td>
                            <td>
                                <a href="editcarg#carg" class="btn btn-warning"
                                    ><i class="fas fa-pencil"></i>
                                </a>
                                &nbsp;
                                <a
                                    type="buttopn"
                                    @click="eliminar(cargo.id)"
                                    class="btn btn-danger"
                                >
                                    <i class="fas fa-trash"></i>
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
    name: "cargos",

    data() {
        return {
            cargos: [],
            message: "",
        };
    },

    mounted() {
        this.show();
    },

    methods: {
        async show() {
            await axios
                .get(`/api/cargos/select/`)
                .then((response) => (this.cargos = response.data.data))
                .catch((error) => {
                    console.log(error);
                    this.cargos = [];
                });
        },
        async eliminar(id) {
            await axios
                .delete(`/api/cargos/borrar/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    console.warn(response);
                    this.show();
                })
                .catch((error) => error);
        },
    },
};
</script>
