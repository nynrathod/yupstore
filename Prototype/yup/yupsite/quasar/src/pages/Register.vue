<template>
  <q-page class="window-height row justify-center items-center q-px-sm">
    <div
      class="column"
      style="width: 430px;"
    >

      <h5 class="q-pl-sm q-mb-xs text-center q-mb-lg">Register</h5>
      <span class="q-pl-sm avenir_regular d-block text-center q-mb-md">Please fill in the information below:</span>

      <div class="row">
        <q-card
          square
          class=" no-shadow full-width"
        >
          <q-card-section>
            <form @submit.prevent.stop="onSubmit">
              <q-input
                v-model="form.mdfname"
                ref="fname"
                dense
                outlined
                placeholder="First Name"
                class="q-mb-sm"
                :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Enter Valid Name'),
                ]"
              />
              <q-input
                v-model="form.mdlname"
                ref="lname"
                dense
                outlined
                placeholder="Last Name"
                class="q-mb-sm"
                :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Enter Valid Name'),
                ]"
              />

              <q-input
                v-model="form.email"
                type="email"
                ref="email"
                @input="checkemail()"
                :error="emailerror"
                outlined
                placeholder="Email Address"
                dense
                class="q-mb-sm"
                :rules="[
                  $rules.required('Field is Required'),
                  $rules.email('Enter Valid Email'),
                ]"
              >
                <template v-slot:error>
                  Email already exists
                </template>
              </q-input>
              <q-input
                v-model="form.password"
                ref="pass"
                :type="isPwd ? 'password' : 'text'"
                placeholder="Enter Account Password"
                outlined
                dense
                class="q-mb-sm"
                :rules="[
                  $rules.required('This Field Required'),
                  $rules.alphaNum('alphanumeric'),
                  $rules.minLength(8, 'Password should have at least 8 letters'),
                  $rules.maxLength(16, 'Passwordshould not be larger than 16 letters')
                ]"
              >
                <template v-slot:append>
                  <q-icon
                    :name="isPwd ? 'visibility_off' : 'visibility'"
                    class="cursor-pointer"
                    @click="isPwd = !isPwd"
                    size="xs"
                  />
                </template>
              </q-input>

              <q-input
                v-model="form.mdcpass"
                ref="cpass"
                type="password"
                outlined
                dense
                placeholder="Confirm Password"
                class="q-mb-lg"
                :rules="[
                  $rules.required('This Field Required'),
                  $rules.sameAs(form.password,'Enter Same As Password'),
                ]"
              />

              <q-btn
                unelevated
                color="dark"
                class="full-width q-py-xs ls2"
                :loading="loading"
                type="submit"
                label="CREATE MY ACCOUNT"
              >
                <template v-slot:loading>
                  <q-spinner-facebook />
                </template>
              </q-btn>
            </form>

          </q-card-section>

          <q-card-section class="text-center q-pa-none">
            <p class="text-grey-6">Already reigistered? Login Here </p>
          </q-card-section>

        </q-card>
      </div>
    </div>
  </q-page>
</template>

<script>
import Yup from '../apis/Yup'


export default {
  name: 'Login',
  data () {
    return {
      form: {
        mdfname: '',
        email: '',
        mddomain: '',
        password: '',
        mdcpass: '',
      },
      mddomain: '',
      emailValid: false,
      isPwd: true,
      text: '',
      loading: false,
      progress: false,
      loadingdomain: false,
      domainerror: false,
      emailerror: 'false',
      domainhint: 'Must Be Unique',
    }
  },

  computed: {
    // isdomainavailable () { return this.$store.state.example.isdomainavailable }
    // isdomainavailable: {
    //   get () {
    //     return this.$store.state.example.isdomainavailable.status
    //   },
    //   set (val) {
    //     this.$store.commit('example/isdomainavailable', val)
    //   }
    // }
  },
  methods: {

    checkdomain () {
      // console.log(this.$store.state.user);

      this.loadingdomain = true
      this.$store.dispatch('example/checkdomain', this.form)
        .then((response) => {
          console.log(response.data);
          this.loadingdomain = false
          if (this.$store.state.example.isdomainavailable.status != true) {
            this.domainerror = true
          } else {
            this.domainerror = false
            this.domainhint = 'available'
          }
          // if (response.data.error) {
          //   this.domainerror = true
          // } else {
          //   this.domainerror = false
          // }
          // if (response.data.success) {
          //   this.domainerror = false
          //   this.domainhint = response.data.success
          // }
        })
        .catch(error => {
          // if (error.response.status === 422) {
          //   this.errors = error.response.data.errors
          // }
        })

      //   // this.loadingdomain = true
      //   // Yup.checkdomain(this.form)
      //   //   .then((response) => {
      //   //     this.loadingdomain = false
      //   //     if (response.data.error) {
      //   //       this.domainerror = true
      //   //     } else {
      //   //       this.domainerror = false
      //   //     }
      //   //     if (response.data.success) {
      //   //       this.domainerror = false
      //   //       this.domainhint = response.data.success
      //   //     }
      //   //   })
      //   //   .catch(error => {
      //   //     if (error.response.status === 422) {
      //   //       this.errors = error.response.data.errors
      //   //     }
      //   //   })
    },
    checkemail () {
      this.$store.dispatch('example/checkemail', this.form)
        .then((response) => {
          console.log(response.data);

          if (this.$store.state.example.isemailavailable.status != true) {
            this.emailerror = true
          } else {
            this.emailerror = false
            // this.emailhint = 'available'
          }
        })
        .catch(error => {
          // if (error.response.status === 422) {
          //   this.errors = error.response.data.errors
          // }
        })


      // Yup.checkemail(this.form)
      //   .then((response) => {
      //     // this.emailhint = response.data
      //     if (response.data.error) {
      //       this.emailerror = true
      //     } else {
      //       this.emailerror = false
      //     }
      //     if (response.data.success) {
      //       this.emailerror = false
      //       this.emailhint = response.data.success
      //     }
      //   })
      //   .catch(error => {
      //     if (error.response.status === 422) {
      //       this.errors = error.response.data.errors
      //     }
      //   })
    },
    isValidEmail (val) {
      const emailPattern = /^(?=[a-zA-Z0-9@._%+-]{6,254}$)[a-zA-Z0-9._%+-]{1,64}@(?:[a-zA-Z0-9-]{1,63}\.){1,8}[a-zA-Z]{2,63}$/;
      return emailPattern.test(val) || 'Invalid email'
    },
    onSubmit (e) {
      this.simulateProgress()
      this.$refs.fname.validate()
      this.$refs.lname.validate()
      this.$refs.email.validate()
      this.$refs.pass.validate()
      this.$refs.cpass.validate()

      if (this.$refs.fname.hasError || this.$refs.email.hasError || this.$refs.lname.hasError || this.$refs.pass.hasError || this.$refs.cpass.hasError) {
        this.formHasError = true
        this.loading = false
        e.preventDefault()
      } else {
        this.registerseller()
      }

    },
    simulateProgress () {
      // we set loading state
      this.loading = true
    },
    registerseller () {
      this.$store.dispatch('example/registerseller', this.form)
        .then((response) => {
          if (response) {
            this.loading = false
            this.$q.notify({
              icon: 'done',
              color: 'positive',
              message: 'Submitted'
            })
            this.$router.push('/Login')
          }
        })
        .catch(error => {
          // if (error.response.status === 422) {
          //   this.errors = error.response.data.errors
          // }
        })


      //   Yup.registerseller(this.form)
      //     // this.$axios.get('https://flexaui.in/qusar-laravel-hybrid/laravel/api/data')

      //     .then((response) => {
      //       // this.list = response.data
      //       // console.warn(response.data)
      //       // this.$router.push('/Login')
      //       if (response.data.success) {
      //         this.loading = false
      //         this.$q.notify({
      //           icon: 'done',
      //           color: 'positive',
      //           message: 'Submitted'
      //         })
      //         this.$router.push('/Login')
      //       }
      //     })
      //     .catch(error => {
      //       if (error.response.status === 422) {
      //         this.errors = error.response.data.errors
      //       }
      //     })
    },
  }
}
</script>

<style>
</style>