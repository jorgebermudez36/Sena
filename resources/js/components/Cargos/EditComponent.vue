<template>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Cargos</title>
        </head>

        <body>
            <div class="container col-md-7 align-center mb-3">
                <div class="card card border-success">
                    <div class="card-header">Editar cargos</div>
                    <div class="card-body">
                        <form @submit.prevent="update">
                            <div class="mb-3">
                                <label for="cargoname" class="form-label"
                                    >Nombre</label
                                >
                                <input
                                    v-model="cargo.cargo"
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
                                    v-model="cargo.desc"
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
                                    @click="update"
                                    
                                >
                                    Editar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
</template>

</template>

<script>
import axios from "axios"
export default {
    data() {
       return {
        cargo:{},
        }
    },
    
    mounted() {
        this.show();
    },
    
    methods: {
         async show(id){
            await axios
                .get("/api/cargos/index/" + id)
                .then(response=>{
                    this.cargo = response.data.cargo;
                    this.desc = response.data.desc;
                })
        },
        
        async update() {
            await axios
                .put("/api/cargos/update/" + id)
                .then(response => {
                    this.$router.put('/api/cargos/update')
                })
                .catch(error => {
                console.log(error.response.data);
                })   
        }
    }
}
</script>

<style>

</style>
