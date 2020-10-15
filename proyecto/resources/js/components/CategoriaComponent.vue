<template>
    <div class="card mb-1">
        <div id="productosCards" class="card-body d-flex flex-row">
            <p class="idCol col-auto">{{categoria.id}}</p>
            <span></span>
            <p class="col-md-1">{{categoria.codigo_categoria}}</p>
            <span></span>
            <p class="col-md-3">{{categoria.nombre}}</p>
            <span></span>
            <p class="col-md-6">{{categoria.descripcion}}</p>
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
            categoria: String,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
