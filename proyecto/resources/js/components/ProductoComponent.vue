<template>
    <div class="card mb-1">
        <div id="productosCards" class="card-body d-flex flex-row">
            <p class="idCol col-auto">{{product.id}}</p>
            <span></span>
            <p class="col-md-1">{{product.codigo_producto}}</p>
            <span></span>
            <p class="col-md-2">{{product.nombre}}</p>
            <span></span>
            <p class="col-md-5">{{product.descripcion}}</p>
            <span></span>
            <p class="col-md-2">{{product.url_foto}}</p>
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
            product: String,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
