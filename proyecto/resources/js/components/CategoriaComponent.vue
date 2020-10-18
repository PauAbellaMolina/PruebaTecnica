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
                <p class="ml-4"><a class="customLink" title="Editar" :href="'/categorias/edit/'+categoria.id">E</a></p>
                <p v-if="categoria.id_prod > 0" class="mr-3"><a class="customLink borrar" title="Borrar" :href="'/categorias/delete/'+categoria.id+'/'+categoria.id_prod">B</a></p>
                <p v-else class="mr-3"><a class="customLink borrar" title="Borrar" :href="'/categorias/delete/'+categoria.id">B</a></p>
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
