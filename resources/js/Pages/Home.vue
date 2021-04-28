<template>
    <layout>
        <div>
            Olá, {{ user }}, eu sou a HOME
        </div>

        <div v-if="flash.success" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ flash.success }}
        </div>

         <div v-if="flash.error" class="alert alert-error alert-dismissible fade show" role="alert">
            {{ flash.success }}
        </div>

    </layout>
</template>

<script>
    import Layout from '../Layout.vue';

    export default {
        components: { Layout },
        props: {
            user: String,
            flash: Object,
        }
    }
</script>

<style>

</style>
