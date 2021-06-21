<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">
    <div
      class="container q-pa-md"
      style="max-width: 1100px;"
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

          <div
            class="q-mt-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 130px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <div
                  class="text-right text-right"
                  v-if="$q.screen.lt.sm"
                >
                  <div class="d-flex justify-between">
                    <span class="row  text-subtitle2">₹ 199.00 </span>
                    <del class=" text-grey-7 q-mr-sm">₹ 250.00</del>
                    <small class=" text-light-green-8">(45% OFF)</small>
                  </div>
                  <span class="whiteney_medium text-left d-block">Delivery in 4 days</span>

                </div>

                <div class="row q-pt-md">
                  <q-btn
                    unelevated
                    label="Buy Again"
                    outline
                    icon="bolt"
                    rounded
                    class="lightgreen"
                  />

                </div>
              </div>
              <div
                class="col-3 text-right text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mt-lg q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>
              </div>
            </div>
            <div
              class="row q-pa-md d-none"
              style="border-top: 1px solid #eee;"
            >
              <a
                href="#"
                class="text-overline"
              >REMOVE</a>
              <a
                href="#"
                class="q-ml-xl text-overline"
              >ADD TO WISHLIST</a>
            </div>
          </div>

          <div
            class="q-mt-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 130px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <div
                  class="text-right text-right"
                  v-if="$q.screen.lt.sm"
                >
                  <div class="d-flex justify-between">
                    <span class="row  text-subtitle2">₹ 199.00 </span>
                    <del class=" text-grey-7 q-mr-sm">₹ 250.00</del>
                    <small class=" text-light-green-8">(45% OFF)</small>
                  </div>
                  <span class="whiteney_medium text-left d-block">Delivery in 4 days</span>

                </div>

                <div class="row q-pt-md">
                  <q-btn
                    unelevated
                    label="Buy Again"
                    outline
                    icon="bolt"
                    rounded
                    class="lightgreen"
                  />

                </div>
              </div>
              <div
                class="col-3 text-right text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mt-lg q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>
              </div>
            </div>
            <div
              class="row q-pa-md d-none"
              style="border-top: 1px solid #eee;"
            >
              <a
                href="#"
                class="text-overline"
              >REMOVE</a>
              <a
                href="#"
                class="q-ml-xl text-overline"
              >ADD TO WISHLIST</a>
            </div>
          </div>

          <div
            class="q-mt-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 130px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <div
                  class="text-right text-right"
                  v-if="$q.screen.lt.sm"
                >
                  <div class="d-flex justify-between">
                    <span class="row  text-subtitle2">₹ 199.00 </span>
                    <del class=" text-grey-7 q-mr-sm">₹ 250.00</del>
                    <small class=" text-light-green-8">(45% OFF)</small>
                  </div>
                  <span class="whiteney_medium text-left d-block">Delivery in 4 days</span>

                </div>

                <div class="row q-pt-md">
                  <q-btn
                    unelevated
                    label="Buy Again"
                    outline
                    icon="bolt"
                    rounded
                    class="lightgreen"
                  />

                </div>
              </div>
              <div
                class="col-3 text-right text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mt-lg q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>
              </div>
            </div>
            <div
              class="row q-pa-md d-none"
              style="border-top: 1px solid #eee;"
            >
              <a
                href="#"
                class="text-overline"
              >REMOVE</a>
              <a
                href="#"
                class="q-ml-xl text-overline"
              >ADD TO WISHLIST</a>
            </div>
          </div>

          <div
            class="q-mt-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 130px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <div
                  class="text-right text-right"
                  v-if="$q.screen.lt.sm"
                >
                  <div class="d-flex justify-between">
                    <span class="row  text-subtitle2">₹ 199.00 </span>
                    <del class=" text-grey-7 q-mr-sm">₹ 250.00</del>
                    <small class=" text-light-green-8">(45% OFF)</small>
                  </div>
                  <span class="whiteney_medium text-left d-block">Delivery in 4 days</span>

                </div>

                <div class="row q-pt-md">
                  <q-btn
                    unelevated
                    label="Buy Again"
                    outline
                    icon="bolt"
                    rounded
                    class="lightgreen"
                  />

                </div>
              </div>
              <div
                class="col-3 text-right text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mt-lg q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>
              </div>
            </div>
            <div
              class="row q-pa-md d-none"
              style="border-top: 1px solid #eee;"
            >
              <a
                href="#"
                class="text-overline"
              >REMOVE</a>
              <a
                href="#"
                class="q-ml-xl text-overline"
              >ADD TO WISHLIST</a>
            </div>
          </div>

          <div
            class="q-mt-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 130px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <div
                  class="text-right text-right"
                  v-if="$q.screen.lt.sm"
                >
                  <div class="d-flex justify-between">
                    <span class="row  text-subtitle2">₹ 199.00 </span>
                    <del class=" text-grey-7 q-mr-sm">₹ 250.00</del>
                    <small class=" text-light-green-8">(45% OFF)</small>
                  </div>
                  <span class="whiteney_medium text-left d-block">Delivery in 4 days</span>

                </div>

                <div class="row q-pt-md">
                  <q-btn
                    unelevated
                    label="Buy Again"
                    outline
                    icon="bolt"
                    rounded
                    class="lightgreen"
                  />

                </div>
              </div>
              <div
                class="col-3 text-right text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mt-lg q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>
              </div>
            </div>
            <div
              class="row q-pa-md d-none"
              style="border-top: 1px solid #eee;"
            >
              <a
                href="#"
                class="text-overline"
              >REMOVE</a>
              <a
                href="#"
                class="q-ml-xl text-overline"
              >ADD TO WISHLIST</a>
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
      stars: 3,
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