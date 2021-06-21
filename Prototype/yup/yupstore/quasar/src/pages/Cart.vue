<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">
    <div
      class="container q-pa-md"
      style="max-width: 1100px;"
    >
      <div class="row">
        <div
          class="col-md-9 col-sm-12 col-xs-12"
          :class="{'q-pr-md': is_gt_sm}"
        >
          <div
            class="q-pt-md q-px-md q-pb-md border_light2"
            :class="{'mobile-block': is_lt_sm}"
          >
            <div class="row align_center q-mb-md">
              <span class="text-subtitle2 whiteney_medium">Have a Coupon code? Apply Now</span>
              <q-space />
              <q-btn
                outline
                label="Apply"
                color=""
                no-caps
                class="whiteney_medium lightgreen"
                @click="couponexpanded = !couponexpanded"
              />

            </div>

            <q-slide-transition style="max-width: 400px; ">
              <div v-show="couponexpanded">
                <q-input
                  v-model="mdcoupon"
                  outlined
                  placeholder="Enter Copon Code Here"
                  dense
                >
                  <template v-slot:after>
                    <q-btn
                      label="Apply"
                      unelevated
                      class="bglightgreen"
                      style="height: 3.5em"
                    />
                  </template>
                </q-input>
              </div>
            </q-slide-transition>
          </div>
          <div
            class="row q-mt-md border_light2"
            :class="{'mobile-block': is_lt_sm}"
          >

            <q-expansion-item
              v-model="offerexpanded"
              expand-icon-toggle
              icon="local_offer"
              label="Offers Applied"
              class="full-width q-py-md whiteney_medium"
            >
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
              <span class="d-block text-body2 q-pl-lg text-weight-light font12 q-mt-sm">10% Instant Discount with HDFC Bank Credit Cards on a min spend of Rs 3,000. TCA</span>
            </q-expansion-item>

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
                    style="height: 150px;"
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
                <q-btn-group class="no-shadow q-mt-md">
                  <q-btn
                    icon="remove"
                    outline
                    @click="decrement()"
                    size="xs"
                    class="quantity_btn quantity_btn_left lightgreen"
                  />
                  <q-input
                    outlined
                    placeholder="Placeholder"
                    :value="quantity"
                    dense
                    square
                    style="max-width: 50px;"
                    class="quantity_input "
                  />
                  <q-btn
                    icon="add"
                    outline
                    @click="increment()"
                    class="quantity_btn quantity_btn_right lightgreen"
                    size="xs"
                  />
                </q-btn-group>
                <div class="row q-pt-md">
                  <a
                    href="#"
                    class="whiteney_light"
                  >Remove</a>
                  <a
                    href="#"
                    class="q-ml-md whiteney_light"
                  >Add to Wishlist</a>
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
                    style="height: 150px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <q-btn-group class="no-shadow q-mt-md">
                  <q-btn
                    icon="remove"
                    outline
                    @click="decrement()"
                    size="xs"
                    class="quantity_btn quantity_btn_left lightgreen"
                  />
                  <q-input
                    outlined
                    placeholder="Placeholder"
                    :value="quantity"
                    dense
                    square
                    style="max-width: 50px;"
                    class="quantity_input "
                  />
                  <q-btn
                    icon="add"
                    outline
                    @click="increment()"
                    class="quantity_btn quantity_btn_right lightgreen"
                    size="xs"
                  />
                </q-btn-group>
                <div class="row q-pt-md">
                  <a
                    href="#"
                    class="whiteney_light"
                  >Remove</a>
                  <a
                    href="#"
                    class="q-ml-md whiteney_light"
                  >Add to Wishlist</a>
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
                    style="height: 150px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <q-btn-group class="no-shadow q-mt-md">
                  <q-btn
                    icon="remove"
                    outline
                    @click="decrement()"
                    size="xs"
                    class="quantity_btn quantity_btn_left lightgreen"
                  />
                  <q-input
                    outlined
                    placeholder="Placeholder"
                    :value="quantity"
                    dense
                    square
                    style="max-width: 50px;"
                    class="quantity_input "
                  />
                  <q-btn
                    icon="add"
                    outline
                    @click="increment()"
                    class="quantity_btn quantity_btn_right lightgreen"
                    size="xs"
                  />
                </q-btn-group>
                <div class="row q-pt-md">
                  <a
                    href="#"
                    class="whiteney_light"
                  >Remove</a>
                  <a
                    href="#"
                    class="q-ml-md whiteney_light"
                  >Add to Wishlist</a>
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
            class="q-mt-md q-mb-md border_light2"
            :class="{'mobile-block pl0': is_lt_sm}"
          >
            <div class="row q-pa-md q-col-gutter-x-md">
              <div class="col-md-2 col-sm-4 col-xs-4">
                <router-link to="product">
                  <q-img
                    src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                    style="height: 150px;"
                  />
                </router-link>
              </div>
              <div class="col-md-7 col-sm-8 col-xs-8">
                <router-link to="product">
                  <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                  <span class="text-weight-light whiteney_light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                </router-link>
                <router-link to="product">
                  <span class="text-weight-light font_nunito font12 d-block">Seller: Bluefarm</span>
                </router-link>
                <q-btn-group class="no-shadow q-mt-md">
                  <q-btn
                    icon="remove"
                    outline
                    @click="decrement()"
                    size="xs"
                    class="quantity_btn quantity_btn_left lightgreen"
                  />
                  <q-input
                    outlined
                    placeholder="Placeholder"
                    :value="quantity"
                    dense
                    square
                    style="max-width: 50px;"
                    class="quantity_input "
                  />
                  <q-btn
                    icon="add"
                    outline
                    @click="increment()"
                    class="quantity_btn quantity_btn_right lightgreen"
                    size="xs"
                  />
                </q-btn-group>
                <div class="row q-pt-md">
                  <a
                    href="#"
                    class="whiteney_light"
                  >Remove</a>
                  <a
                    href="#"
                    class="q-ml-md whiteney_light"
                  >Add to Wishlist</a>
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
        <div
          class="col-md-3 col-sm-12 col-xs-12 "
          style="border-left: 1px solid #eee;"
          :class="{'q-pl-md': is_gt_sm}"
        >
          <div
            class="q-pb-xs"
            :class="{'mobile-block q-px-md q-py-md': is_lt_sm}"
          >
            <div class="row align_center">

              <span class="text-subtitle2 whiteney_medium">Check Availability</span>
              <q-space />
              <q-btn
                outline
                label="Enter Pincode"
                color=""
                no-caps
                class="whiteney_medium lightgreen"
                @click="pincodeexpanded = !pincodeexpanded"
              />
            </div>
            &nbsp;
            <q-slide-transition>
              <div v-show="pincodeexpanded">
                <q-input
                  v-model="mdcoupon"
                  outlined
                  placeholder="Enter Copon Code Here"
                  dense
                  class="mydense_input d-flex flex-center align-center"
                >
                  <template v-slot:after>
                    <q-btn
                      label="Apply"
                      unelevated
                      class="bglightgreen"
                    />
                  </template>
                </q-input>
              </div>
            </q-slide-transition>
          </div>
          <q-separator class="q-mb-md" />
          <div :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}">
            <span class="text-subtitle2 d-block q-mb-md whiteney_medium">PRODUCTS DETAILS(1 ITEMS)</span>
            <div class="row q-mb-sm">
              <span class=" whiteney_light">Total MRP</span>
              <q-space />
              <span class="text-caption whiteney_light">249.00</span>
            </div>
            <div class="row q-mb-sm">
              <span class="whiteney_light">Discount</span>
              <q-space />
              <span class="text-caption  whiteney_light">-49.00</span>
            </div>
            <div class="row q-mb-sm">
              <span class="whiteney_light">Delivery Charge</span>
              <q-space />
              <span class="text-caption whiteney_light">49.00</span>
            </div>
            <div
              class="row q-pt-md"
              style="border-top: 1px solid #eee;"
            >
              <span class="text-subtitle2 whiteney_medium">Total Amount</span>
              <q-space />
              <span class="text-subtitle2 whiteney_medium">249.00</span>
              </div>
              <q-btn
              class="full-width q-mt-md bglightgreen whiteney_medium lsp7 font16"
              :class="{'fixed-bottom full-width place-button': is_lt_sm}"
              label="PLACE ORDER"
              unelevated
            />
          </div>
        </div>
      </div>
    </div>
  </q-page>
</template>


<script>
export default {
  data () {
    return {
      quantity: 1,
      offerexpanded: false,
      couponexpanded: true,
      pincodeexpanded: true,
      mdcoupon: ''
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