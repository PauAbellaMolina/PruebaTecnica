<template>
    <div class="card mb-1">
        <div id="productosCards" class="card-body d-flex flex-row">
            <p class="idCol col-auto">{{product.id}}</p>
            <span></span>
            <p class="col-md-1">{{product.codigo_producto}}</p>
            <span></span>
            <p class="col-md-2">{{product.nombre}}</p>
            <span></span>
            <p class="col-md-4">{{product.descripcion}}</p>
            <span></span>
            <p class="col-md-2">{{product.url_foto}}</p>
            <span></span>
            <div class="col-md-2 d-flex flex-column justify-content-between">
                <div class="col-md-12 d-flex flex-row justify-content-between">
                    <p class="ml-1"><a class="customLink" title="Editar" :href="'/productos/edit/'+product.id">E</a></p>
                    <p class="mr-1"><a class="customLink borrar" title="Borrar" :href="'/productos/delete/'+product.id">B</a></p>
                </div>
                <div class="col-md-12 d-flex flex-row justify-content-between p-0">
                    <a class="customLink" title="Categorias del producto" :href="'/categorias/filter/prod/'+product.id">Categs</a>
                    <a class="customLink" title="Tarifas del producto" :href="'/tarifas/filter/prod/'+product.id">Tarifas</a>
                </div>
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
