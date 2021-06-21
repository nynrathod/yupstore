<template>
  <div style="background: #d9e5e1;">
    <div
      class="container q-pt-xl q-pb-lg"
      :class="{'q-px-sm': is_lt_sm}"
    >

      <q-btn
        flat
        rounded
        class="q-py-sm q-mr-md q-mb-lg"
        style="color:#000; margin-left: -17px; font-family: 'Montserrat', sans-serif;"
      >
        <q-icon
          name="o_local_mall"
          size="md"
          color="primary"
        />
        <q-toolbar-title
          shrink
          class="text-weight-bold"
        >
          Yup Store
        </q-toolbar-title>
      </q-btn>

      <div
        class="row q-pb-xl"
        style="border-bottom: 1px solid #aec7bf;"
      >
        <div class="col-md-3 col-sm-6 col-xs-6 footer_ul">
          <div class="text-h6">Information</div>
          <a href="#">About Us</a>
          <a href="#">Delivery Information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Newsletter</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer_ul">
          <div class="text-h6">MY ACCOUNT</div>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Specials</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer_ul">
          <div class="text-h6">CUSTOMER SERVICE</div>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Returns</a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 footer_ul">
          <div class="text-h6">About</div>
          <a href="#">About Us</a>
          <a href="#">Delivery Information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Newsletter</a>
        </div>

      </div>
      <div
        class="row q-py-lg"
        :class="{'justify-center': is_gt_sm}"
        style="border-bottom: 1px solid #aec7bf;"
      >
        <div class="footer_bottom_link col-md-7 col-sm-12 col-xs-12 text-center">
          <a href="#">Snack Plants</a>
          <a href="#">Garden Plants</a>
          <a href="#">House Plants</a>
          <a href="#">Indoor Plants</a>
          <a href="#">Small Plants</a>
          <a href="#">Office Plants</a>
          <a href="#">Crenate Plants</a>
          <a href="#">Vascular Plants</a>
          <a href="#">Indian Plants</a>
          <a href="#">Natural Plants</a>
          <a href="#">Small Plants</a>
        </div>
      </div>

      <div class="row q-py-md justify-center">
        <div class="text-center rightstext">© 2021 www.yupstore.com. All rights reserved.</div>
      </div>
    </div>
  </div>

</template>

<style>
</style>


<script>
export default {
  data () {
    return {

    }
  },
  methods: {

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