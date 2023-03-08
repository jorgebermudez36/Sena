<template>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Editar Cargos</title>
        </head>

        <body>
            <div class="container col-md-7 align-center mb-3">
                <div class="card card border-success">
                    <div class="card-header">Editar cargos</div>
                    <div class="card-body">
                        <form @submit.prevent="update" id="cargoinput">
                            <div class="mb-3">
                            <div class="form-group">
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
                                    v-model="cargo.descripcion"
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
                                <button
                                    type="submit"
                                    class="btn btn-outline-success"
                                    role="button"
                                    @click="update"
                                    
                                >
                                    Editar
                                </button>
                            </div>
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
export default {
    data() {
        return {
            cargos:[],
            cargo: "",
            desc: ""
            }
        },
    
    
    mounted() {
        this.showcarg();
        },

    methods: {
    
        async showcarg() {
        
            axios.get(`/api/cargos/update/` + id)
                /* .then(response => {this.cargos = response.data}) */
                console.log(this.cargos)
                /* .catch((error) => {
                    console.log(error);
                    this.cargos = []
                }) */;
        },
        
        async update() {
        
            axios.get(`/api/cargos/update/`)
                /* .then(response => {this.cargos = response.data}) */
                console.log(this.cargos)
                /* .catch((error) => {
                    console.log(error);
                    this.cargos = []
                }) */;
        },
    }
}
  
</script>

<style>

</style>
