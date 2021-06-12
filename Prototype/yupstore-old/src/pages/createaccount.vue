<template>
  <div class="q-pa-md">
    <div class="row justify-center" style="margin-top: 200px">
        <div class="shadow-15 q-px-xl q-py-lg">
            <q-btn flat rounded class="q-py-sm q-mb-lg" style="color: rgb(26 127 226)">
            <q-icon name="o_local_mall" size="md" />

            <q-toolbar-title shrink class="text-weight-bold">
              Yup Store - <span class="text-capitalize">Create account</span>
            </q-toolbar-title>
          </q-btn>  
        <q-form style="width: 600px">
            <q-input
            filled
            placeholder="Your Name"
            type="text"
            class="q-mb-lg"
            />

            <q-input
            filled
            placeholder="Your Email"
            type="text"
            class="q-mb-lg"
            />

            <q-input
            filled
            placeholder="Mobile No"
            type="tel"
            class="q-mb-lg"
            />

            <q-input
            filled
            placeholder="Password"
            type="password"
            class="q-mb-lg"
            />

            <div class="row justify-center">
                <q-btn label="Submit" type="button" color="primary" @click="alert = true" />
            </div>
        </q-form>
        </div>
    </div>

    <q-dialog v-model="alert">
      <q-card>
        <q-card-section>
          <div class="text-h6">Enter OTP sent on you mobile phone</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-input label="OTP" />
        </q-card-section>

        <q-card-actions align="right">
          <q-btn flat label="VERIFY" color="primary" v-close-popup @click="alert = false, create=true" />
        </q-card-actions>
      </q-card>
    </q-dialog>

<q-dialog v-model="create">
      <q-card class="bg-primary text-white" style="width: 500px">
        <q-card-section>
          <div class="text-h6 text-center verticle-middle"><q-icon name="o_check" size="sm" class="q-pr-sm" />Congretulation</div>
        </q-card-section>

         <q-card-section class="q-py-xl q-px-xl text-center bg-white text-blue-grey-9">
          You have successfully created account. Now you are ready to make and publish your store.
        </q-card-section>

        <q-card-actions align="right" class="bg-white text-primary row justify-center">
          <q-btn flat label="Create My Store" v-close-popup @click="redirect" />
        </q-card-actions>
      </q-card>
    </q-dialog>

  </div>
</template>

<script>
export default {
    data () {
    return {
      alert: false,
      create: false,

      address: ''
    }
  },
  methods: {
      redirect() {
          this.$router.push("/registershop")
      }
  }
};
</script>


<style>
</style>