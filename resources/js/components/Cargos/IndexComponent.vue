<template>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Cargos</title>
        </head>

        <body>
            <div class="container col-md-7 align-center mb-3">
                <div class="card card border-success">
                    <div class="card-header">Crear cargos</div>
                    <div class="card-body">
                        <form @submit.prevent="load">
                            <div class="mb-3">
                                <label for="cargoname" class="form-label"
                                    >Nombre</label
                                >
                                <input
                                    v-model="cargo"
                                    type="text"
                                    class="form-control"
                                    name="cargoname"
                                    id="cargoname"
                                    aria-describedby="helpId"
                                    placeholder="Cargo"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label"
                                    >Descripcion</label
                                >
                                <input
                                    v-model="desc"
                                    type="text"
                                    class="form-control"
                                    name="descripcion"
                                    id="descripcion"
                                    aria-describedby="helpId"
                                    placeholder="Descripcion"
                                />
                            </div>
                            <div
                                class="d-grid gap-2 d-md-flex justify-content-center"
                            >
                                <a
                                    type="submit"
                                    class="btn btn-outline-success"
                                    role="button"
                                    @click="load"
                                    href="showcarg"
                                >
                                    Cargar/Editar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            cargo: "",
            desc: "",
        };
    },

    mounted() {
        this.load();
    },

    methods: {
        load() {
            let json = {
                cargo: this.cargo,
                desc: this.desc,
            };

            axios.post("api/cargos/createcargos", json)
            .then((data) => {
                if (data.status == 200)
                    alert("Guardado correctamente")              
            });
        },
    },
};
</script>

<style></style>
