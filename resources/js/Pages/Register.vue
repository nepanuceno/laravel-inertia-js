<template>
    <layout>
        <div>
            <form @submit.prevent="handleForm">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">Name</label>
                        <input id="name" class="form-control"  v-bind:class="{ 'is-invalid': errors.name }" type="text" v-model="form.name" />
                        <div class="invalid-feedback">
                            {{ errors.name }}
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="email">E-Mail</label>
                        <input id="email" class="form-control"  v-bind:class="{ 'is-invalid': errors.email }" type="email" v-model="form.email" />
                        <div class="invalid-feedback">
                            {{ errors.email }}
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" v-bind:class="{ 'is-invalid': errors.password }" type="password" v-model="form.password" />
                        <div class="invalid-feedback">
                            {{ errors.password }}
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </layout>
</template>

<script>
import Layout from '../Layout.vue';
    export default {

        components: { Layout },

        props: { errors: Object },

        data: () => {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                },


            }
        },
        methods: {
            handleForm() {
                this.$inertia.post('/register', this.form)
                // alert("O Formulario foi enviado")
            },
        }

    }
</script>
<style>

</style>
