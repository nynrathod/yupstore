<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">
    <div
      class="container q-pa-md"
      style="max-width: 1000px;"
    >
      <div class="row">
        <div
          class="col-md-3 col-sm-12 col-xs-12 "
          :class="{'q-pr-md': is_gt_sm}"
        >
          <UserSidebar v-if="$q.screen.gt.sm" />
        </div>
        <div
          class="col-md-9 col-sm-12 col-xs-12"
          :class="{'q-pr-md q-pl-md': is_gt_sm}"
          style="border-left: 1px solid #eee;"
        >

          <div :class="{'q-px-md q-py-md q-mt-md mobile-block': is_lt_sm}">
            <span class="d-block text-h6 whiteney_medium text-center">Password Reset</span>
            <q-separator
              class="q-my-lg"
              color="grey-4"
            />

            <div
              class="row q-mx-auto"
              :class="{'q-mb-md': is_gt_sm, '':is_lt_sm}"
              style="max-width: 400px;"
            >
              <div class="col">
                <q-input
                  v-model="form.mdopass"
                  outlined
                  standout
                  type="password"
                  dense
                  label="Old Password"
                  :rules="[
                    $rules.required('This Field Required'),
                    $rules.alphaNum('alphanumeric'),
                    $rules.minLength(8, 'Password should have at least 8 letters'),
                    $rules.maxLength(16, 'Passwordshould not be larger than 16 letters')
                  ]"
                />
              </div>
            </div>

            <div
              class="row q-mx-auto"
              :class="{'q-mb-md': is_gt_sm, '':is_lt_sm}"
              style="max-width: 400px;"
            >
              <div class="col">
                <q-input
                  v-model="form.mdopass"
                  outlined
                  standout
                  type="password"
                  dense
                  label="Old Password"
                  :rules="[
                    $rules.required('This Field Required'),
                    $rules.alphaNum('alphanumeric'),
                    $rules.minLength(8, 'Password should have at least 8 letters'),
                    $rules.maxLength(16, 'Passwordshould not be larger than 16 letters')
                  ]"
                />
              </div>
            </div>

            <div
              class="row q-mx-auto"
              :class="{'q-mb-md': is_gt_sm, '':is_lt_sm}"
              style="max-width: 400px;"
            >
              <div class="col">
                <q-input
                  v-model="form.mdopass"
                  outlined
                  standout
                  type="password"
                  dense
                  label="Old Password"
                  :rules="[
                    $rules.required('This Field Required'),
                    $rules.alphaNum('alphanumeric'),
                    $rules.minLength(8, 'Password should have at least 8 letters'),
                    $rules.maxLength(16, 'Passwordshould not be larger than 16 letters')
                  ]"
                />
              </div>
            </div>

            <div
              class="row q-mx-auto"
              style="max-width: 400px;"
            >
              <div class="col">
                <q-btn
                  label="Save Details"
                  unelevated
                  class="full-width q-py-sm whiteney_medium ls1 bglightgreen"
                />
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </q-page>
</template>


<script>
import UserSidebar from "src/components/UserSidebar.vue";
// import UserSidebar from "src/components/UserSidebar.vue";

export default {
  components: { UserSidebar },
  data () {
    return {
      quantity: 1,
      offerexpanded: false,
      couponexpanded: true,
      pincodeexpanded: true,
      mdcoupon: '',
      form: {
        mdname: '',
        mdphone: '',
        mdpincode: '',
        mdaddress: '',
        mdtown: '',
        mddistrict: 'Vadodara',
      },
    }
  },
  methods: {
    increment () {
      this.quantity++
    },
    decrement () {
      if (this.quantity === 1) {
      } else {
        this.quantity--
      }
    }
  },
  computed: {
    is_xs () {
      const isMobile = window.matchMedia("only screen and (max-width: 599px)")
      return isMobile.matches ? true : false
    },
    is_sm () {
      const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
      return isMobile.matches ? true : false
    },
    is_lt_xs () {
      const isMobile = window.matchMedia("only screen and (max-width: 599px)")
      return isMobile.matches ? true : false
    },
    is_lt_sm () {
      const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
      return isMobile.matches ? true : false
    },
    is_lt_md () {
      const isMobile = window.matchMedia("only screen and (max-width: 1439px)")
      return isMobile.matches ? true : false
    },
    is_lt_lg () {
      const isMobile = window.matchMedia("only screen and (max-width: 1919px)")
      return isMobile.matches ? true : false
    },
    is_gt_xs () {
      const isMobile = window.matchMedia("only screen and (min-width: 600px)")
      return isMobile.matches ? true : false
    },
    is_gt_sm () {
      const isMobile = window.matchMedia("only screen and (min-width: 1024px)")
      return isMobile.matches ? true : false
    },
    is_gt_md () {
      const isMobile = window.matchMedia("only screen and (min-width: 1440px)")
      return isMobile.matches ? true : false
    },
    is_gt_lg () {
      const isMobile = window.matchMedia("only screen and (min-width: 1920px)")
      return isMobile.matches ? true : false
    },
  }
}
</script>


<style lang="scss">
@import "../css/typography.scss";
@import "../css/app.scss";
</style>