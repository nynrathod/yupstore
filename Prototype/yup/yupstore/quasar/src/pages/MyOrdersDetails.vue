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

          <div class="border_light2">
            <div
              class="row q-pa-md q-col-gutter-x-md justify-between"
              :class="{'mobile-block q-mb-md': is_lt_sm}"
            >
              <div class="">
                <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ORDER NO</span>
                <span class="whiteney_medium lsp7">19423742354</span>
              </div>
              <div class="">
                <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">STATUS</span>
                <span class="whiteney_medium lsp7 lightgreen">DELIVERED</span>
              </div>
              <div class="">
                <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">PRICE</span>
                <span class="whiteney_medium lsp7">₹ 547</span>
              </div>
              <div class="">
                <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ITEMS</span>
                <span class="whiteney_medium lsp7">4 ITEMS</span>
              </div>
            </div>
            <q-separator
              v-if="$q.screen.gt.sm"
              class="q-mx-md q-my-xs"
              color="grey-4"
            />

            <div
              class="row q-pa-md q-col-gutter-x-md"
              :class="{'mobile-block q-mb-md': is_lt_sm}"
            >
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 170px;"
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
            </div>
            <q-separator
              v-if="$q.screen.gt.sm"
              class="q-ma-md"
              color="grey-4"
            />
            <div
              class="row q-px-md q-pt-md q-col-gutter-x-md justify-between"
              :class="{'mobile-block q-mb-md': is_lt_sm}"
            >
              <div class="col-md-4 col-sm-8 col-xs-12">
                <q-timeline color="secondary">

                  <q-timeline-entry
                    title="Ordered"
                    subtitle="February 21, 1986"
                  >
                  </q-timeline-entry>

                  <q-timeline-entry
                    title="Event Title"
                    subtitle="February 21, 1986"
                  />

                  <q-timeline-entry
                    title="Event Title"
                    subtitle="February 21, 1986"
                    icon="done_all"
                  />

                </q-timeline>

              </div>
              <div class="col-md-4 col-sm-8 col-xs-12">
                <span class="d-block q-mb-sm whiteney_medium font20">Delivery Address</span>
                <q-item-label class="d-block q-mb-sm whiteney_medium">Nayan Rathod</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12">Spring Filed, Waghodia road, 171</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12 q-mb-sm">Baroda, Gujarat, 390019</q-item-label>
                <q-item-label class="whiteney_light font13 q-mb-md">Mobile: <b>9662007745</b></q-item-label>
              </div>
              <div
                class="col-md-3 col-sm-8 col-xs-12 text-right"
                v-if="$q.screen.gt.sm"
              >
                <span class="row q-mb-xs text-subtitle2">₹ 199.00 </span>
                <div class="row align_center text-right">
                  <del class="q-pt-xs text-grey-7 q-mr-sm">₹ 250.00</del>
                  <small class=" text-light-green-8">(45% OFF)</small>
                  <span class="whiteney_medium">Delivery in 4 days</span>
                </div>

              </div>
            </div>
            <q-separator
              v-if="$q.screen.gt.sm"
              class="q-mx-md q-mb-md"
              color="grey-4"
            />
            <div
              class="row q-px-md q-pb-md justify-between"
              :class="{'mobile-block q-mb-md q-py-md': is_lt_sm}"
            >
              <div class="col-md-4 col-sm-5 col-xs-5">
                <span class="font16  whiteney_medium d-block">Give Rating</span>
                <q-rating
                  size="18px"
                  v-model="stars"
                  max="5"
                  class="lightgreen"
                />
              </div>
              <div class="col-md-4 col-sm-7 col-xs-7 text-center">
                <q-btn
                  unelevated
                  outline
                  label="Write A Review"
                  color="primary"
                  icon="rate_review"
                  class="whiteney_medium"
                  :class="{'q-mb-lg': is_lt_sm}"
                />
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12 text-right">
                <q-btn
                  unelevated
                  outline
                  label="Download Invoice"
                  color="primary"
                  icon="download"
                  class="whiteney_medium"
                  :class="{'full-width': is_lt_sm}"
                />

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