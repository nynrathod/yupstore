<template>
  <div class="home col-5 mx-auto py-5 mt-5">
    <h1 class="text-center">Register</h1>
    <div class="card">
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name:</label>

           <q-input v-model="form.name" type="text" id="name" label="Standard" />

          <span class="text-danger" v-if="errors.name">
            {{ errors.name[0] }}
          </span>
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>

          <q-input v-model="form.email" type="email" id="email" label="Standard" />

          <span class="text-danger" v-if="errors.email">
            {{ errors.email[0] }}
          </span>

        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <q-input v-model="form.password" type="password" id="password" label="Standard" />
          <span class="text-danger" v-if="errors.password">
            {{ errors.password[0] }}
          </span>
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm Password:</label>

          <q-input v-model="form.password_confirmation" type="password" id="password_confirmation" label="Standard" />

          <span class="text-danger" v-if="errors.password_confirmation">
            {{ errors.password_confirmation[0] }}
          </span>
        </div>

          <q-btn label="Submit" type="submit" color="primary" @click.prevent="register" />

      </div>
    </div>

    <table>
        <tr>
          <td>Name</td>
          <td>Salary</td>
          <td>Age</td>
        </tr>
        <tr v-for="item in list" v-bind:key="item.id">
          <td>{{item.id}}</td>
          <td>{{item.dname}}</td>

        </tr>
      </table>
{{list}}
  </div>
</template>

<script>
import User from '../apis/User'

export default {
  data () {
    return {
      form: {
        name: '',
        email: '',
        password: '',
        password_confirmation: ''
      },
      list: undefined,
      errors: []
    }
  },

  methods: {
    register () {
      User.register(this.form)
      // this.$axios.get('https://flexaui.in/qusar-laravel-hybrid/laravel/api/data')

        .then((response) => {
          // this.list = response.data
          // console.warn(response.data)
          this.$router.push('/Login')
        })
        .catch(error => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors
          }
        })
    }
  }
}
</script>
