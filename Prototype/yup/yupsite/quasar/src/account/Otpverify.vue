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
            <q-form class="q-gutter-md">
              <span class="text-caption">Enter 6 Digit OTP Sent on Your Mobile</span>
              <q-input
                outlined
                v-model="text"
                placeholder="x-x-x-x-x-x"
                dense
                mask="#-#-#-#-#-#"
              />
            </q-form>
          </q-card-section>
          <q-card-actions class="">
            <q-btn
              unelevated
              color="light-green-7"
              size="lg"
              class="full-width"
              :loading="loading"
              @click="simulateProgress"
              label="SEND OTP"
            >
              <template v-slot:loading>
                <q-spinner-facebook />
              </template>
            </q-btn>

          </q-card-actions>
          <q-card-section class="text-center q-pa-none">
            <p class="text-grey-6">Not reigistered? Created an Account</p>
          </q-card-section>
        </q-card>
      </div>
    </div>
  </q-page>
</template>

<script>
export default {
  name: 'Login',
  data () {
    return {
      email: '',
      password: '',
      text: '',
      loading: false,
      progress: false
    }
  },
  methods: {
    simulateProgress () {
      // we set loading state
      this[`loading`] = true
      // simulate a delay
      setTimeout(() => {
        // we're done, we reset loading state
        this[`loading`] = false
        this.$router.push({ path: '/shopdetail' })
      }, 3000)
    }
  }
}
</script>

<style>
</style>