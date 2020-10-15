<template>
    <div class="card mb-1">
        <div id="productosCards" class="card-body d-flex flex-row">
            <p class="idCol col-auto">{{tarifa.id}}</p>
            <span></span>
            <p class="idCol col-auto">{{tarifa.id_prod}}</p>
            <span></span>
            <p class="fechaCol col-auto">{{tarifa.fecha_inicio}}</p>
            <span></span>
            <p class="fechaCol col-auto">{{tarifa.fecha_fin}}</p>
            <span></span>
            <p class="col-md-1">{{tarifa.precio}}</p>
            <span></span>
            <div class="w-100 d-flex justify-content-between">
                <p class="ml-4">E</p>
                <p class="mr-3">B</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            tarifa: String,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
