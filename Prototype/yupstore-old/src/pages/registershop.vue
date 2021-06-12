<template>
  <div class="q-pa-md">
    <div class="row justify-center" style="margin-top: 200px">
        <div class="shadow-15 q-px-xl q-py-lg">
            <q-btn flat rounded class="q-py-sm q-mb-lg" style="color: rgb(26 127 226)">
            <q-icon name="o_local_mall" size="md" />

            <q-toolbar-title shrink class="text-weight-bold">
              Yup Store - <span class="text-capitalize">Enter Your Business Details</span>
            </q-toolbar-title>
          </q-btn>  
        <q-form style="width: 600px">
            <q-input
            filled
            placeholder="Business name"
            type="text"
            v-model="text1"
            class="q-mb-lg"
            />

            <q-input
            filled
            placeholder="Your webiste name"
            type="text"
            v-model="text2"
            class="q-mb-lg" prefix="https://yupstore.com/">
            
           </q-input>

            <q-input
            filled
            placeholder="Your Business Address"
            type="textarea"
            v-model="text3"
            class="q-mb-lg"
            />

            <q-select
        filled
        v-model="multiple"
        multiple
        :options="options"
        label="Multiple"
         behavior="dialog"
         class="q-mb-lg"
      />

            <div class="row justify-center">
                <q-btn label="Create" type="button" color="primary" @click="redirect" />
            </div>
        </q-form>
        </div>
    </div>

  </div>
</template>

<script>
export default {
  data () {
    return {
      text1: '',
      text2: '',
      text3: '',
      text4: '',  
      options: [
        'Fashion', 'Mobiles and Tablets', 'Consumer Electronics', 'Books', 'Movie Tickets', 'Baby Products', 'Groceries', 'Groceries', 'Home Furnishings',
      ],
      multiple: null,
    }
  },
  methods: {
      redirect() {
          this.$router.push("/attrect")
      }
  }
};
</script>


<style>
</style>