<template>
  <div class="q-pa-md" style="max-width: 400px">

    <q-form
      @submit="onSubmit"
      @reset="onReset"
      class="q-gutter-md"
    >
      


      <div>
        <q-btn label="Submit" type="submit" color="primary"/>
        <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm" />
      </div>
    </q-form>

 <div>
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
      </div>

    

  </div>
</template>



<script>




export default {
  data () {
    return {
      
      list: undefined,

    
    }
  },

  mounted () {
    this.$axios.get('http://127.0.0.1:8000/api/data')
    // this.$axios.get('https://flexaui.in/qusar-laravel-hybrid/laravel/api/data')
      .then((response) => {
        this.list = response.data
        console.warn(response.data)
      })
    },

  methods: {

    loadData () {
    this.$axios.get('https://flexaui.in/qusar-laravel-hybrid/laravel/api/data')
      .then((response) => {
        this.list = response.data.data
        console.warn(response.data.data)
      })
    },

    onSubmit () {
      if (this.accept !== true) {
        this.$q.notify({
          color: 'red-5',
          textColor: 'white',
          icon: 'warning',
          message: 'You need to accept the license and terms first'
        })
      }
      else {
        this.$q.notify({
          color: 'green-4',
          textColor: 'white',
          icon: 'cloud_done',
          message: 'Submitted'
        })
      }
    },

    onReset () {
      this.name = null
      this.age = null
      this.accept = false
    }
  }
}
</script>