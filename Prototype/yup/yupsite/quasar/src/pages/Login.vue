<template>
  <q-page class="window-height row justify-center items-center q-px-sm">
    <div
      class="column"
      style="width: 430px"
    >

      <h5 class="q-pl-sm q-mb-xs text-center q-mb-lg">Login</h5>
      <span class="q-pl-sm avenir_regular d-block text-center">Please enter your e-mail and password:</span>

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
                color="dark"
                class="full-width q-py-xs ls2"
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
            <p class="text-grey-8 avenir_regular">Not reigistered? Created an Account</p>
            <p class="text-grey-8 avenir_regular">Forgot Password</p>
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

  // optional!, for example below
  // with custom spinner
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
  methods: {
    simulateProgress () {
      this.loading = true
    },
    resetfield () {
      // alert('asdf')
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
            LocalStorage.set("auth", true);
            this.emailerror = false
            this.passerror = false
            this.loading = false
            this.$router.push('/dashboard')
          }
          console.log(response)
          // if (response.data.errors.email) {
          //   alert('asd')
          // }
          if (response.status == 422) {
            if (response.data.errors.email) {
              this.emailerror = true
            }
            if (response.data.errors.password) {
              this.passerror = true
            }
            this.loading = false
          }
          // alert('res')
          // console.log(response.data)
          // this.$root.$emit("login", true);
          // LocalStorage.set("auth", true);
          // this.emailerror = false
          // this.passerror = false
          // this.loading = false
          // this.$router.push('/dashboard')
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

      // Yup.login(this.form)
      //   .then(() => {
      //     this.$root.$emit("login", true);
      //     LocalStorage.set("auth", true);
      //     // LocalStorage.set(key, value)
      //     // localStorage.setItem('myCat', 'Tom');
      //     // if (response.data.success) {
      //     // }
      //     this.emailerror = false
      //     this.passerror = false
      //     this.loading = false
      //     this.$router.push('/dashboard')

      //   })
      //   .catch(error => {
      //     if (error.response.status === 422) {
      //       this.errors = error.response.data.errors;
      //       if (error.response.data.errors.email) {
      //         this.emailerror = true
      //       }
      //       if (error.response.data.errors.password) {
      //         this.passerror = true
      //       }
      //       this.loading = false
      //     }
      //   });

    }
  },
  created () {
    // Loading.hide()
  }
}
</script>

<style>
</style>