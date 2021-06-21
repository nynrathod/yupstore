<template>
  <q-page class="items-center justify-evenly overflow-hidden">
    <div class="product_container q-pt-lg">

      <q-breadcrumbs
        style="color: #282c3f;"
        active-color="text-grey-6"
        gutter="sm"
        class="q-pb-md"
        :class="{'q-px-sm': is_lt_sm}"
      >
        <q-breadcrumbs-el label="Home" />
        <q-breadcrumbs-el label="Components" />
        <q-breadcrumbs-el
          label="Breadcrumbs"
          class="text-weight-bold"
        />
      </q-breadcrumbs>

      <div
        class="row"
        :class="{'q-col-gutter-x-lg': is_gt_sm}"
      >
        <div class="col-md-6 col-sm-7 col-xs-12 q-mx-auto">

          <VueSlickCarousel
            v-bind="sidegallery"
            class="main_product_image"
            ref="c1"
            :asNavFor="$refs.c2"
            :focusOnSelect="true"
          >
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid "
              style="width: 1200px; height:1200px;"
            >
            </image-zoom>
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid"
            >
            </image-zoom>
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid"
            >
            </image-zoom>
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid"
            >
            </image-zoom>
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid"
            >
            </image-zoom>

          </VueSlickCarousel>

          <VueSlickCarousel
            v-bind="sidegallerynav"
            class="side_carousel_nav q-py-sm"
            ref="c2"
            :asNavFor="$refs.c1"
            :slidesToShow="4"
            :focusOnSelect="true"
            v-if="$q.screen.gt.sm"
          >
            <q-img
              src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              style="width: 60px;"
            />
            <q-img
              src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              style="width: 60px;"
            />
            <q-img
              src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              style="width: 60px;"
            />
            <q-img
              src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              style="width: 60px;"
            />
            <q-img
              src="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              style="width: 60px;"
            />
          </VueSlickCarousel>

        </div>
        <div
          class="col-md-6 col-sm-12 mobile-block"
          :class="{'q-px-sm': is_lt_sm }"
        >
          <h1 class="q-my-xs text-h4 font30 text-weight-medium avenirsemi_bold">Money Plant Variegated</h1>

          <div class=" d-inline-block q-py-xs q-px-xs q-mt-sm">
            <q-rating
              size="18px"
              v-model="stars"
              max="5"
              class="myred"
            />
            <span class=" q-ml-sm font16"> <span class="font_nunito font12">1 Review | Add Your Review</span></span>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-4"
          />
          <h5 class="row q-mt-md q-mb-xs avenirsemi_bold">₹ 199.00 <del class="d-block  q-pt-xstext-grey-7
 q-pl-md font18 avenir_regular">₹ 250.00</del> <span class="font18 q-pl-md myred">(45% OFF)</span></h5>

          <div class="row q-mt-lg q-mb-lg">
            <div class="col-md-4 col-sm-6">
              <span class="font600 d-block q-mb-xs">Quantity</span>
              <q-btn-group class="no-shadow">
                <q-input
                  v-model.number="quantity"
                  type="number"
                  dense
                  outlined
                  placeholder="Quantity"
                  value="1"
                  style="max-width: 100px"
                />
              </q-btn-group>
            </div>
            <!-- <div class="col-md-4 col-sm-6">
              <q-btn
                color="primary"
                label="Add to Cart"
                class="full-width"
                outline
              />
            </div> -->
          </div>

          <div class="row q-mt-md q-col-gutter-x-md">
            <div class="col-md-6 col-sm-10 col-xs-10">
              <q-btn
                color="primary"
                label="Add to Cart"
                class="full-width"
                outline
              />
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
              <q-btn
                color="primary"
                icon="favorite_border"
                outline
                square
                class="full-width"
              />
            </div>
          </div>

          <div class="row q-mt-sm q-mb-lg q-col-gutter-x-md">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <q-btn
                color="primary"
                label="Buy Now"
                dense
                class="q-py-xs full-width"
                unelevated
              />
            </div>
          </div>

          <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
              <q-list class="rounded-borders">
                <q-expansion-item default-opened>
                  <template v-slot:header>
                    <q-item-section>
                      Product Info
                    </q-item-section>

                  </template>

                  <q-card>
                    <q-card-section>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eius reprehenderit eos corrupti
                      commodi magni quaerat ex numquam, dolorum officiis modi facere maiores architecto suscipit iste
                      eveniet doloribus ullam aliquid.
                    </q-card-section>
                  </q-card>
                </q-expansion-item>

                <q-separator />

                <q-expansion-item default-opened>
                  <template v-slot:header>
                    <q-item-section>
                      Return & Refund
                    </q-item-section>
                  </template>

                  <q-card>
                    <q-card-section>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eius reprehenderit eos corrupti
                      commodi magni quaerat ex numquam, dolorum officiis modi facere maiores architecto suscipit iste
                      eveniet doloribus ullam aliquid.
                    </q-card-section>
                  </q-card>
                </q-expansion-item>

                <q-separator />

                <q-expansion-item default-opened>
                  <template v-slot:header>
                    <q-item-section>
                      Shipping Info
                    </q-item-section>
                  </template>

                  <q-card>
                    <q-card-section>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eius reprehenderit eos corrupti
                      commodi magni quaerat ex numquam, dolorum officiis modi facere maiores architecto suscipit iste
                      eveniet doloribus ullam aliquid.
                    </q-card-section>
                  </q-card>
                </q-expansion-item>
              </q-list>
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

import imageZoom from 'vue-image-zoomer';

export default {
  components: { VueSlickCarousel, imageZoom },
  data () {
    return {
      stars: 3,
      quantity: 1,
      onerating: 0.1,
      tworating: 0.2,
      threerating: 0.5,
      fourrating: 0.7,
      fiverating: .8,
      sidegallery: {
        "speed": 500,
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "asNavFor": '.side_carousel_nav',
        "focusOnSelect": true,
        "responsive": [
          {
            "breakpoint": 1024,
            "settings": {
            }
          },
        ],
      },
      sidegallerynav: {
        "focusOnSelect": true,
        "slidesToShow": 3,
        "slidesToScroll": 1,
        "padding": "120px",
        "asNavFor": '.main_product_image'
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
  mounted () {
    setTimeout(() => this.quantity++, 500);
    setTimeout(() => this.quantity--, 501);
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
</style>