<template>
  <q-page class="items-center justify-evenly overflow-hidden">

    <div
      class="bgimg"
      style="background: url('http://demo.ishitechnolabs.com/OPC056/image/catalog/tophomebg_image.jpg')"
    >
      <div
        class=" container"
        :class="{' q-pb-md': is_lt_sm, '': is_gt_sm}"
      >

        <div class="row q-col-gutter-x-lg">
          <div class="col">

            <VueSlickCarousel v-bind="banner">
              <div>
                <q-img
                  src="https://yupstore.ga/Capture.PNG"
                  class="cover"
                />
                <!-- <q-img
                  src="https://cdn.shopify.com/s/files/1/0317/0687/3992/files/slideshow-v2-2.jpg?v=1580463539"
                  class="cover"
                /> -->
              </div>
              <q-img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/banners/slider-02-1770x900.jpg"
                class="cover"
              />
              <q-img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC06/image/cache/catalog/demo/banners/slider-01-1720x780.jpg"
                class="cover"
              />
              <q-img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC04/image/cache/catalog/demo/banners/slider-01-1730x880.jpg"
                class="cover"
              />

            </VueSlickCarousel>

          </div>

        </div>

        <h5 class=" text-center">Outdoor Plants</h5>

        <VueSlickCarousel
          v-bind="dealof"
          class="inline_carousel q-py-md q-mt-xl"
          :class="{'q-px-xl': is_gt_sm}"
        >
          <!--
          <q-img
            v-for="data in productdata"
            src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
            :key="data.id"
            width="50px"
            class="q-mr-md"
          > -->

          <q-card
            class="my-card product_card no-shadow border_light3 cursor-pointer product_card no-border-radius"
            :class="{'q-mb-md': is_lt_sm}"
            v-for="data in productdata"
            :key="data.id"
          >

            <div class="relative-position overflow-hidden">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/files/slideshow-v2-2.jpg?v=1580463539"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
              />
              <q-chip
                square
                color="light-blue-2"
                text-color="dark"
                size="sm"
                class="absolute-left"
                width="20px"
              >12% off</q-chip>
              <q-icon
                name="favorite"
                color="white"
                class="absolute-right q-mr-sm q-mt-sm card_wishlist_icon"
              />
              <q-btn
                label="Add to Cart"
                class="card_addcart font12"
                color="dark"
                square
                unelevated
                v-if="$q.platform.is.desktop"
              />

            </div>
            <q-btn
              label="Add to Cart"
              class=" font12 full-width px0"
              color="dark"
              square
              unelevated
              v-if="$q.platform.is.mobile"
            />
            <q-card-section class="product_card_header q-px-md">
              <div class="row">
                <div class="col-12">
                  <div class="text-subtitle1  product_name q-mb-xs">VPhilodendron Xanadu Plant </div>

                  <div class=" text-caption  flex">
                    <span>₹ 249.00 <small><del>₹ 300.00</del></small></span>
                    <q-space />
                    <q-chip size="sm">
                      <q-avatar
                        color="dark"
                        icon="check"
                        text-color="white"
                      ></q-avatar>
                      Verified

                      <q-tooltip
                        anchor="center right"
                        self="center left"
                        size="20px"
                        content-class="bg-dark"
                      >
                        This product is Verified by Yupstore
                      </q-tooltip>
                    </q-chip>
                  </div>
                </div>
              </div>
            </q-card-section>

          </q-card>

        </VueSlickCarousel>

        <q-btn
          unelevated
          color="dark"
          label="View All Plants"
          class="q-my-xl  q-mx-auto flex justify-center q-py-xs q-px-md   ls1 bg_hover_dark0"
        />

        <q-separator class="q-my-md bg-blue-grey-1" />

        <h5 class="mt70 text-center">Outdoor Plants</h5>

        <VueSlickCarousel
          v-bind="dealof"
          class="inline_carousel q-py-md q-mt-xl"
          :class="{'q-px-xl': is_gt_sm}"
        >
          <!--
          <q-img
            v-for="data in productdata"
            src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
            :key="data.id"
            width="50px"
            class="q-mr-md"
          > -->

          <q-card
            class="my-card product_card no-shadow border_light3 cursor-pointer product_card no-border-radius"
            :class="{'q-mb-md': is_lt_sm}"
            v-for="data in productdata"
            :key="data.id"
          >

            <div class="relative-position overflow-hidden">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/files/slideshow-v2-2.jpg?v=1580463539"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
              />
              <q-chip
                square
                color="light-blue-2"
                text-color="dark"
                size="sm"
                class="absolute-left"
                width="20px"
              >12% off</q-chip>
              <q-icon
                name="favorite"
                color="white"
                class="absolute-right q-mr-sm q-mt-sm card_wishlist_icon"
              />
              <q-btn
                label="Add to Cart"
                class="card_addcart font12"
                color="dark"
                square
                unelevated
                v-if="$q.platform.is.desktop"
              />

            </div>
            <q-btn
              label="Add to Cart"
              class=" font12 full-width px0"
              color="dark"
              square
              unelevated
              v-if="$q.platform.is.mobile"
            />
            <q-card-section class="product_card_header q-px-md">
              <div class="row">
                <div class="col-12">
                  <div class="text-subtitle1  product_name q-mb-xs">VPhilodendron Xanadu Plant </div>

                  <div class=" text-caption  flex">
                    <span>₹ 249.00 <small><del>₹ 300.00</del></small></span>
                    <q-space />
                    <q-chip size="sm">
                      <q-avatar
                        color="dark"
                        icon="check"
                        text-color="white"
                      ></q-avatar>
                      Verified

                      <q-tooltip
                        anchor="center right"
                        self="center left"
                        size="20px"
                        content-class="bg-dark"
                      >
                        This product is Verified by Yupstore
                      </q-tooltip>
                    </q-chip>
                  </div>
                </div>
              </div>
            </q-card-section>

          </q-card>

        </VueSlickCarousel>

        <q-btn
          unelevated
          color="dark"
          label="View All Plants"
          class="q-my-xl q-mx-auto flex justify-center q-py-xs q-px-md   ls1 bg_hover_dark0"
        />

        <q-separator class="q-my-md bg-blue-grey-1" />

        <h5 class="mt70 text-center">Outdoor Plants</h5>

        <VueSlickCarousel
          v-bind="dealof"
          class="inline_carousel q-py-md q-mt-xl"
          :class="{'q-px-xl': is_gt_sm}"
        >
          <!--
          <q-img
            v-for="data in productdata"
            src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
            :key="data.id"
            width="50px"
            class="q-mr-md"
          > -->

          <q-card
            class="my-card product_card no-shadow border_light3 cursor-pointer product_card no-border-radius"
            :class="{'q-mb-md': is_lt_sm}"
            v-for="data in productdata"
            :key="data.id"
          >

            <div class="relative-position overflow-hidden">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/files/slideshow-v2-2.jpg?v=1580463539"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
              />
              <q-chip
                square
                color="light-blue-2"
                text-color="dark"
                size="sm"
                class="absolute-left"
                width="20px"
              >12% off</q-chip>
              <q-icon
                name="favorite"
                color="white"
                class="absolute-right q-mr-sm q-mt-sm card_wishlist_icon"
              />
              <q-btn
                label="Add to Cart"
                class="card_addcart font12"
                color="dark"
                square
                unelevated
                v-if="$q.platform.is.desktop"
              />

            </div>
            <q-btn
              label="Add to Cart"
              class=" font12 full-width px0"
              color="dark"
              square
              unelevated
              v-if="$q.platform.is.mobile"
            />
            <q-card-section class="product_card_header q-px-md">
              <div class="row">
                <div class="col-12">
                  <div class="text-subtitle1  product_name q-mb-xs">VPhilodendron Xanadu Plant </div>

                  <div class=" text-caption  flex">
                    <span>₹ 249.00 <small><del>₹ 300.00</del></small></span>
                    <q-space />
                    <q-chip size="sm">
                      <q-avatar
                        color="dark"
                        icon="check"
                        text-color="white"
                      ></q-avatar>
                      Verified

                      <q-tooltip
                        anchor="center right"
                        self="center left"
                        size="20px"
                        content-class="bg-dark"
                      >
                        This product is Verified by Yupstore
                      </q-tooltip>
                    </q-chip>
                  </div>
                </div>
              </div>
            </q-card-section>

          </q-card>

        </VueSlickCarousel>

        <q-btn
          unelevated
          color="dark"
          label="View All Plants"
          class="q-mt-xl q-mb-xl q-mx-auto flex justify-center q-py-xs q-px-md   ls1 bg_hover_dark0"
        />

        <q-separator class="q-my-md bg-blue-grey-1" />

        <div class="q-mt-xl">
          <span class="text-h6 d-block text-center q-my-xl">Explore Our Categories</span>
          <div class="row">
            <div class="col-md-4 col-sm-6-col-xs-12 border_right_light2 border_bottom_light2 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/191-large_default.jpg?v=1580380409"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
              />
            </div>
            <div class="col-md-4 col-sm-6-col-xs-12 border_right_light2 border_bottom_light2 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/203-large_default_e7481162-2178-4227-a26c-35a745e59019.jpg?v=1580435800"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
              />
            </div>
            <div class="col-md-4 col-sm-6-col-xs-12 border_bottom_light2 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/232-large_default.jpg?v=1580435931"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
              />
            </div>
            <div class="col-md-4 col-sm-6-col-xs-12 border_right_light2 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/198-large_default_3b2e9138-0286-48ee-983f-c8fb82a3a443.jpg?v=1580438028"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
              />
            </div>
            <div class="col-md-4 col-sm-6-col-xs-12 border_right_light2 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/227-large_default_4f249d9d-af8f-413e-ac78-5058d1e20066.jpg?v=1580435902"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
              />
            </div>
            <div class="col-md-4 col-sm-6-col-xs-12 bg-light">
              <q-img
                src="https://cdn.shopify.com/s/files/1/0317/0687/3992/products/199-large_default_2b31c205-2c2b-4c57-bc62-bd9b9fdc7c91.jpg?v=1580439570"
                style="height: 500px;"
                contain
              />
              <span class="d-block text-right on-left font20 font_dark5">New Arrivals</span>
              <q-btn
                unelevated
                label="Shop Now"
                outline
                class="ls3 q-mt-md q-px-md q-py-xs on-left q-mb-lg float-right bg_hover_dark0"
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



