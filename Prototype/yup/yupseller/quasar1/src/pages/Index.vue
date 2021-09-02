<template>
  <q-page class="window-height window-width row justify-center items-center q-px-sm">
    <div class="column">
      <div class="row justify-center text-center">
        <q-btn
          flat
          rounded
          class="q-py-sm q-mr-md"
          style="color:#014e37"
          to="/"
          size="30px"
          label="YUP STORE"
          icon="o_local_mall"
        >
        </q-btn>
      </div>

      <h5 class="q-pl-sm q-mb-xs">Let's get started</h5>
      <span class="q-pl-sm text-body2 d-block q-mb-xl">Lorem ipsum dolor sit amet, consectetur dolor sit amet, <br>
        consectetur adipisicing elit.<br></span>

      <div class="row">
        <q-card
          square
          class=" no-shadow full-width"
        >
          <q-card-section>
            <form @submit.prevent.stop="onSubmit">
              <q-input
                v-model="form.email"
                ref="email"
                type="email"
                :error="emailerror"
                bottom-slots
                @input="resetfield()"
                outlined
                dense
                placeholder="Enter Your Email"
                hint=""
                class="q-mb-sm"
                :rules="[
                  $rules.required('Field is Required'),
                  $rules.email('Enter Valid Email'),
                ]"
              >
                <template v-slot:error>
                  Wrong Email
                </template>
              </q-input>

              <q-input
                v-model="form.password"
                ref="password"
                type="password"
                :error="passerror"
                bottom-slots
                @input="resetfield()"
                outlined
                dense
                placeholder="Enter Your Password"
                class="q-mb-sm"
                :rules="[
                  $rules.required('Field is Required'),
                ]"
              >
                <template v-slot:error>
                  Wrong Password
                </template>
              </q-input>

              <q-btn
                unelevated
                color="light-green-7"
                size="lg"
                class="full-width"
                :loading="loading"
                type="submit"
                label="Login"
              >
                <template v-slot:loading>
                  <q-spinner-facebook />
                </template>
              </q-btn>
            </form>

          </q-card-section>
          <q-card-section class="text-center q-pa-none">
            <p class="text-grey-6">Not reigistered? Created an Account</p>
          </q-card-section>

        </q-card>
      </div>
    </div>
  </q-page>
</template>

<script>
import Yup from '../apis/Yup'
import { LocalStorage, SessionStorage } from 'quasar'
import {
  Loading,
  QSpinnerGears
} from 'quasar'


export default {
  name: 'Login',
  data () {
    return {
      form: {
        email: 'zaso@mailinator.com',
        password: '12345678',
      },
      text: '',
      errors: [],
      loading: false,
      progress: false,
      emailerror: false,
      passerror: false,
    }
  },
  mounted () {

  },

  methods: {
    simulateProgress () {
      this.loading = true
    },
    resetfield () {
      this.emailerror = false
      this.passerror = false
    },
    onSubmit (e) {
      this.simulateProgress()
      this.$refs.email.validate()
      this.$refs.password.validate()
      if (this.$refs.email.hasError || this.$refs.password.hasError) {
        this.formHasError = true
        this.loading = false
        e.preventDefault()
      } else {
        this.login()
      }
    },
    login () {
      this.$store.dispatch('example/login', this.form)
        .then((response) => {
          if (response.status == 200) {
            this.$root.$emit("login", true);
            LocalStorage.set("auth", response.data);
            console.log(response);
            this.emailerror = false
            this.passerror = false
            this.loading = false
            // console.log(this.$store.state.example.userdata);
            this.$router.push('/dashboard')
          }
          if (response.status == 422) {
            if (response.data.errors.email) {
              this.emailerror = true
            }
            if (response.data.errors.password) {
              this.passerror = true
            }
            this.loading = false
          }
        })
        .catch(error => {
          // alert('resss')
          // if (error.response.data.errors.email) {
          //   this.emailerror = true
          // }
          // if (error.response.status === 422) {
          //   this.errors = error.response.data.errors;
          //   if (error.response.data.errors.email) {
          //     this.emailerror = true
          //   }
          //   if (error.response.data.errors.password) {
          //     this.passerror = true
          //   }
          //   this.loading = false
          // }
        });
    }
  },
  created () {
    // Loading.hide()
  }
}
</script>

<style>
</style>