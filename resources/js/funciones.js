/* import Swal from "sweetalert2";
import axios from "axios";

export function show_alert(mensaje,icono,foco=''){
    if(foco != ''){
        document.getElementById(foco).focus();  
    }
    Swal.fire({
        title:mensaje,
        icon:icono,
        customclass: {confirmbutton: 'btn btn-primary', popup: 'animated zoomIn'},
        buttonsStyling:false,
    });
}

export function confirmar(id, nombre){
    let url = 'api/cargos/index/' + id;
    const swalWithBootstrapButtons = Swal.mixin({
        customclass: {confirmbutton: 'btn btn-success me-3', cancelButton: 'btn btn-danger'},
            buttonsStyling:false,
    });
    swalWithBootstrapButtons.fire({
        title:'Seguro de eliminar el cargo' + " " + nombre,
        text: 'Se perderpa la informacion del cargo',
        icon: 'question',
        showCancelButton: true,
        confirmbutton: '<i class="fa-solid fa-check"></i>Si, eliminar',
        cancelButton: '<i class="fa-solid fa-ban"></i>Cancelar',
})
            .then((result) => {
                if(result.isConfirmed) {
            } else {
                show_alert('operacion cancelada', 'info');
            }
    });
}
         */

        