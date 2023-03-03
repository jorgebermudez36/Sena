<template>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Empleados</title>
</head>

<body>
<main id="register">
    <section class="container col-6 py-3">
        <div class="col card">
            <div class="card-header ">
                <h3 class="card-tittle text-center">Registro Empleados</h3>
            </div>

            <div class="card-body">
                <form class="row">
                    <div class="input-group mb-1">
                        <span class="input-group-text">Nombre y Apellidos</span>
                        <input type="text" v-model="name" aria-label="First name" class="form-control" placeholder="Name">
                        <input type="text" v-model="surname" aria-label="Last name" class="form-control" placeholder="Surname">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Documento Id</span>
                        <input type="text" v-model="ident" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                        <input type="text" v-model="mail" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="email@example.com">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Dirección</span>
                        <input type="text" v-model="addres" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Dirección">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                        <input type="text" v-model="phone" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Telefono">
                    </div>

                    <div class="input-group mb-1 mt-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cargo</span>
                        <input type="text" v-model="cargo" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Dirección">
                    </div>

                    <div class="text-center mt-3">
                        <button class="btn btn-light btn-outline-dark" type="button">Buscar</button>
                        <button class="btn btn-warning" type="button">Borrar</button>
                        <button class="btn btn-primary" @click="load" type="submit">Guardar</button>
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
import axios from "axios"
export default {
    data(){
        return {
            "ident":" ",
            "name":" ",
            "surname":" ",
            "addres":" ",
            "mail":" ",
            "phone":" ",
            "cargo":" "            
        }
    },
           
    methods: {
        load(){
            let json = {
                "ident": this.ident,
                "name": this.name,
                "surname": this.surname,
                "addres": this.addres,
                "mail": this.mail,
                "phone": this.phone,
                "cargo": this.cargo,
            };
            
            axios.post('api/employe/cargar', json)
                .then(console.log('success'))
        }      
    }
}

</script>
