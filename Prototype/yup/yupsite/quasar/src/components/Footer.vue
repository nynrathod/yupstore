<template>
  <div style="background: #f7f7f7;">
    <div
      class="container q-mt-xl q-pt-xl q-pb-lg"
      :class="{'q-px-md': is_lt_md, 'q-px-xl' : is_gt_sm}"
    >

      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-12">
          <h6 class="q-my-xs footer_heading">Categories</h6>
          <ul class="footer_ul">
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Air Purifier Plants</a></li>
            <li><a href="">Indoor Plants</a></li>
            <li><a href="">Flowering Plants</a></li>
            <li><a href="">Pet-Friendly Plants</a></li>
            <li><a href="">Office Plants</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-12">
          <h6 class="q-my-xs footer_heading">Explore</h6>
          <ul class="footer_ul">
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Explore all plants</a></li>
          </ul>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-12">
          <h6 class="q-my-xs footer_heading">Links</h6>
          <ul class="footer_ul">
            <li><a href="">Cart</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">My Orders</a></li>
            <li><a href="">Wishlist</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-12">
          <h6 class="q-my-xs footer_heading q-mb-md">Contact Us</h6>
          <div class="footer_text_div">
            <p><strong>Email:&nbsp;</strong>care@cottonsjaipur.com</p>
            <p><strong>Mob: </strong>+91 73579 96444, +91 98297 45762</p>
            <p>(Mon - Sat 9:30AM - 11:00PM)</p>
          </div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-12">
          <h6 class="q-my-xs footer_heading q-mb-md">Contact Us</h6>
          <div class="footer_text_div">
            <p>Subscribe to receive updates, access to exclusive deals, and more.</p>
            <q-input
              outlined
              v-model="text"
              :dense="dense"
            />
            <q-btn
              unelevated
              label="SUBSCRIBE"
              color="dark "
              class="ls3 q-mt-md q-px-md q-py-xs"
            />
          </div>
        </div>

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