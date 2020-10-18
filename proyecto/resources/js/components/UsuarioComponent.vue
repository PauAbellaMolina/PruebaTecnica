<template>
    <div class="card mb-1">
        <div id="usuariosCards" class="card-body d-flex flex-row">
            <p class="idCol col-auto">{{user.id}}</p>
            <span></span>
            <p class="col-md-2">{{user.nombre}}</p>
            <span></span>
            <p class="col-md-2">{{user.apellidos}}</p>
            <span></span>
            <p class="col-md-4">{{user.email}}</p>
            <span></span>
            <p class="fechaCol col-auto">{{user.fecha_nacimiento}}</p>
            <span></span>
            <div class="w-100 d-flex justify-content-between">
                <p class="ml-4"><a :href="'/usuarios/edit/'+user.id">E</a></p>
                <p class="mr-3"><a :href="'/usuarios/delete/'+user.id">B</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            user: String,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
