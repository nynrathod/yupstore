<template>
    <q-form @submit="submitForm">
        <q-input 
        v-if="tab == 'register'"
        v-model="formData.name"
        outlined 
        class="q-mb-md"
        label="Name" />

        <q-input 
        v-model="formData.email"
        outlined 
        type="email"
        class="q-mb-md"
        label="Email" />

        <q-input 
        v-model="formData.password"
        outlined 
        type="password"
        class="q-mb-md"
        label="Password" />

        <div class="row">
            <q-space />
            <q-btn 
            color="primary" 
            type="submit"
            :label="tab" />
        </div>

    </q-form>
    
</template>

<script>

    import  { mapActions } from 'vuex'

    export default {
        props: ['tab'],
        data() {
            return {
                formData: {
                    name: '',
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            ...mapActions('store',['registerUser', 'loginUser']),
            submitForm() {
                if(this.tab == 'login') {
                    this.loginUser(this.formData)
                } else {
                    this.registerUser(this.formData)
                }
            }
        }
    }
</script>

