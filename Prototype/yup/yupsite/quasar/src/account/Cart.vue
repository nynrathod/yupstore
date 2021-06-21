<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">

    <div
      class="bgimg"
      style="background: url('http://demo.ishitechnolabs.com/OPC056/image/catalog/tophomebg_image.jpg')"
    >
      <div
        class="cart_container"
        :class="{' q-pb-md': is_lt_sm, '': is_gt_sm}"
      >

        <div
          class="row q-pa-md q-col-gutter-x-md"
          v-if="$q.screen.gt.sm"
        >
          <div class="col-md-1 col-sm-1 col-xs-1">
            <span class="avenir_light">Image</span>
          </div>
          <div class="col-md-4 col-sm-8 col-xs-8">
            <span class="avenir_light">Product Name</span>
          </div>

          <div class="col-md-2 col-sm-8 col-xs-8">
            <span class="avenir_light">Quantity</span>
          </div>
          <div class="col-md-3 col-sm-8 col-xs-8">
            <span class="avenir_light">Price</span>
          </div>
          <div class="col-md-2 col-sm-8 col-xs-8">
            <span class="avenir_light">Action</span>
          </div>
        </div>

        <q-separator class=" bg-blue-grey-1" />

        <div
          class="q-mt-md q-pb-md"
          :class="{'mobile-block pl0': is_lt_sm }"
        >

          <div class="row q-pa-md q-col-gutter-x-md">
            <div class="col-md-1 col-sm-3 col-xs-3">
              <router-link to="product">
                <q-img
                  src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                  class="cart_img"
                  style="height: 110px;"
                />
              </router-link>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-8">
              <router-link to="product">
                <span class="q-my-xs d-block font15 avenir_medium">Money Plant Variegated</span>
                <span
                  class="text-weight-light avenir_light"
                  v-if="$q.screen.gt.sm"
                >Lorem ipsum dolor sit amet </span>
              </router-link>
              <div
                class="text-right text-right"
                v-if="$q.screen.lt.sm"
              >
                <div class="d-flex justify-between">
                  <span class="row  text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del></span>
                </div>

              </div>
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.lt.md"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
              <span class="q-mt-md d-block"> Remove</span>

            </div>

            <div class="col-md-2 col-sm-8 col-xs-8">
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.gt.sm"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
            </div>
            <div
              class="col-md-3 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="row q-mt-md q-mb-xs text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del> </span>
            </div>

            <div
              class="col-md-2 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="q-mt-md d-block"> Remove</span>
            </div>
          </div>

        </div>

        <q-separator class=" bg-blue-grey-1" />

        <div
          class="q-mt-md q-pb-md"
          :class="{'mobile-block pl0': is_lt_sm }"
        >

          <div class="row q-pa-md q-col-gutter-x-md">
            <div class="col-md-1 col-sm-3 col-xs-3">
              <router-link to="product">
                <q-img
                  src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                  class="cart_img"
                  style="height: 110px;"
                />
              </router-link>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-8">
              <router-link to="product">
                <span class="q-my-xs d-block font15 avenir_medium">Money Plant Variegated</span>
                <span
                  class="text-weight-light avenir_light"
                  v-if="$q.screen.gt.sm"
                >Lorem ipsum dolor sit amet </span>
              </router-link>
              <div
                class="text-right text-right"
                v-if="$q.screen.lt.sm"
              >
                <div class="d-flex justify-between">
                  <span class="row  text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del></span>
                </div>

              </div>
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.lt.md"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
              <span class="q-mt-md d-block"> Remove</span>

            </div>

            <div class="col-md-2 col-sm-8 col-xs-8">
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.gt.sm"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
            </div>
            <div
              class="col-md-3 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="row q-mt-md q-mb-xs text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del> </span>
            </div>

            <div
              class="col-md-2 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="q-mt-md d-block"> Remove</span>
            </div>
          </div>

        </div>

        <q-separator class=" bg-blue-grey-1" />

        <div
          class="q-mt-md q-pb-md"
          :class="{'mobile-block pl0': is_lt_sm }"
        >

          <div class="row q-pa-md q-col-gutter-x-md">
            <div class="col-md-1 col-sm-3 col-xs-3">
              <router-link to="product">
                <q-img
                  src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
                  class="cart_img"
                  style="height: 110px;"
                />
              </router-link>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-8">
              <router-link to="product">
                <span class="q-my-xs d-block font15 avenir_medium">Money Plant Variegated</span>
                <span
                  class="text-weight-light avenir_light"
                  v-if="$q.screen.gt.sm"
                >Lorem ipsum dolor sit amet </span>
              </router-link>
              <div
                class="text-right text-right"
                v-if="$q.screen.lt.sm"
              >
                <div class="d-flex justify-between">
                  <span class="row  text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del></span>
                </div>

              </div>
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.lt.md"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
              <span class="q-mt-md d-block"> Remove</span>

            </div>

            <div class="col-md-2 col-sm-8 col-xs-8">
              <q-btn-group
                class="no-shadow q-mt-md"
                v-if="$q.screen.gt.sm"
              >
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="xs"
                  square
                  class="q-pa-xs  quantity_btn quantity_btn_left bg_dark0"
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
                  square
                  class="quantity_btn quantity_btn_right dark"
                  size="xs"
                />
              </q-btn-group>
            </div>
            <div
              class="col-md-3 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="row q-mt-md q-mb-xs text-subtitle2">₹ 199.00 <del class="q-pl-md text-grey-7 q-mr-sm">₹ 250.00</del> </span>
            </div>

            <div
              class="col-md-2 col-sm-8 col-xs-8"
              v-if="$q.screen.gt.sm"
            >
              <span class="q-mt-md d-block"> Remove</span>
            </div>
          </div>

        </div>

        <q-separator class=" bg-blue-grey-1" />

        <div class="row q-mt-xl justify-end">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}">
              <span class="text-subtitle2 d-block q-mb-md avenir_medium">PRODUCTS DETAILS(1 ITEMS)</span>
              <div class="row q-mb-sm">
                <span class=" avenir_light">Total MRP</span>
                <q-space />
                <span class="text-caption avenir_light">249.00</span>
              </div>
              <div class="row q-mb-sm">
                <span class="avenir_light">Discount</span>
                <q-space />
                <span class="text-caption  avenir_light">-49.00</span>
              </div>
              <div class="row q-mb-sm">
                <span class="avenir_light">Delivery Charge</span>
                <q-space />
                <span class="text-caption avenir_light">49.00</span>
              </div>
              <div
                class="row q-pt-md"
                style="border-top: 1px solid #eee;"
              >
                <span class="text-subtitle2 avenir_medium">Total Amount</span>
                <q-space />
                <span class="text-subtitle2 avenir_medium">249.00</span>
              </div>
              <q-btn
                color="dark"
                square
                class="full-width q-mt-md avenir_medium lsp7 font16"
                label="PLACE ORDER"
                unelevated
              />
            </div>
          </div>
        </div>

      </div>

    </div>

  </q-page>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'

export default {
  name: 'MyComponent',
  components: { VueSlickCarousel },
  data () {
    return {
      lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.',
      slide: 1,
      slide2: 1,
      slide3: 1,
      stars: 3,
      expanded: false,
      quantity: 0,
      banner: {
        "focusOnSelect": true,
        "infinite": true,
        "speed": 500,
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "touchThreshold": 5
      },
      productdata: [
        { id: 1 },
        { id: 2 },
        { id: 3 },
        { id: 4 },
        { id: 5 },
        { id: 6 },
        { id: 7 },
        { id: 8 },
        { id: 9 },

      ],
      dealof: {
        "arrows": true,
        "infinite": false,
        "speed": 500,
        "infinite": true,
        "slidesToShow": 5,
        "slidesToScroll": 1,
        "initialSlide": 0,
        "responsive": [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 3,
              "infinite": true,
              "dots": true,
            }
          },
          {
            "breakpoint": 600,
            "settings": {
              "slidesToShow": 2,
              "slidesToScroll": 2,
              "initialSlide": 2,
              "arrows": false,
              "dots": true
            }
          },
          {
            "breakpoint": 480,
            "settings": {
              "slidesToShow": 2,
              "rows": 2,
              "slidesToScroll": 2,
              "arrows": false,
              "dots": true
            }
          }
        ]
      }
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



