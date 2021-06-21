<template>
  <q-page class="items-center justify-evenly overflow-hidden">
    <div class="container q-pt-lg">

      <q-breadcrumbs
        style="color: #282c3f;"
        active-color="text-grey-6"
        gutter="sm"
        class="q-pb-md"
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
        <div
          class="col-1"
          v-if="$q.screen.gt.sm"
        >
          <VueSlickCarousel
            v-bind="sidegallerynav"
            class="side_carousel_nav q-py-sm"
            ref="c2"
            :asNavFor="$refs.c1"
            :slidesToShow="4"
            :focusOnSelect="true"
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
        <div class="col-md-6 col-sm-6 col-xs-12 q-mx-auto">

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
            <image-zoom
              regular="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              zoom="https://image.freepik.com/free-photo/pepper-face-plant-small-pot_53876-94408.jpg"
              :zoom-amount="3"
              img-class="img-fluid"
            >
            </image-zoom>

          </VueSlickCarousel>
        </div>
        <div
          class="col-md-5 col-sm-12 mobile-block"
          :class="{'q-px-sm': is_lt_sm }"
        >
          <h1 class="q-my-xs text-h4 font30 text-weight-medium whiteney_semi_bold">Money Plant Variegated</h1>
          <span class="font19 d-block text-weight-light text-grey-7 whiteney_book">Men Grey Mesh Running Shoes</span>
          <div class="border_light2 d-inline-block q-py-xs q-px-xs q-mt-sm">
            <q-rating
              size="18px"
              v-model="stars"
              max="5"
              class="lightgreen"
            />
            <span
              class=" q-ml-sm font16"
              v-if="$q.screen.gt.xs"
            ><b class="whiteney_medium">4.2</b> <span class="whiteney_light"> | 551 Ratings</span></span>
          </div>
          <q-separator
            class="q-my-lg"
            color="grey-4"
          />
          <h5 class="row q-mt-md q-mb-xs whiteney_semi_bold">₹ 199.00 <del class="d-block  q-pt-xstext-grey-7
 q-pl-md font18 whiteney_book">₹ 250.00</del> <span class="font18 q-pl-md lightgreen">(45% OFF)</span></h5>
          <span class="whiteney_medium font16 lightgreen">Inclusive of all taxes</span>
          <ul class="my-list-item whiteney_book lsp5">
            <li>100% Original Products</li>
            <li>Free Delivery on order above Rs. 799</li>
            <li>Pay on delivery might be available</li>
            <li>Easy 30 days returns and exchanges</li>
            <li>Try & Buy might be available</li>
          </ul>

          <div
            class="row q-mt-lg q-mb-lg"
            v-if="$q.screen.gt.sm"
          >
            <div class="col-md-4 col-sm-6">

              <q-btn-group class="no-shadow">
                <q-btn
                  icon="remove"
                  outline
                  @click="decrement()"
                  size="md"
                  class="quantity_btn quantity_btn_left lightgreen"
                />
                <q-input
                  outlined
                  placeholder="Placeholder"
                  :value="quantity"
                  dense
                  square
                  style="max-width: 70px;"
                  class="quantity_input single_quantity_input"
                />
                <q-btn
                  icon="add"
                  outline
                  @click="increment()"
                  class="quantity_btn quantity_btn_right lightgreen"
                  size="md"
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

          <div
            class="row q-mt-md q-mb-lg q-col-gutter-x-md"
            v-if="$q.screen.gt.sm"
          >
            <div class="col-md-5 col-sm-12 col-xs-12">
              <q-btn
                color="primary"
                label="Buy Now"
                class="q-py-sm full-width"
                icon="flash_on"
                square
                unelevated
              />
            </div>

            <div class="col-md-5 col-sm-6">
              <q-btn
                color="primary"
                label="Add to Cart"
                icon="local_mall"
                class="q-py-sm full-width"
                outline
              />
            </div>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-4"
          />
          <div :class="{'q-my-md mobile-block': is_lt_sm}">

            <div
              class="d-flex align_Center q-mb-md"
              style="align-items: center;"
            >
              <span
                class="font_nunito d-block"
                style="min-width: 80px"
              >Category: </span>
              <q-btn
                unelevated
                rounded
                outline
                class="row cat_card lightgreen"
                size="sm"
              >
                <img
                  src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
                  style="width: 20px; height: 20px; margin: auto;"
                >
                <span class="font12 q-pl-sm whiteney_medium">Home Decor</span>
              </q-btn>

            </div>

            <div
              class="d-flex align_Center q-mb-md"
              style="align-items: center;"
            >
              <span
                class="font_nunito d-block"
                style="min-width: 70px"
              >Tags: </span>
              <q-btn
                unelevated
                class="row cat_card lightgreen whiteney_medium"
                size="sm"
                label="Tag1"
              />
              <q-btn
                unelevated
                class="row cat_card lightgreen whiteney_medium"
                size="sm"
                label="Tag1"
              />
              <q-btn
                unelevated
                class="row cat_card lightgreen whiteney_medium"
                size="sm"
                label="Tag1"
              />
            </div>

            <div
              class="d-flex align_Center"
              style="align-items: center;"
            >
              <span
                class="font_nunito d-block"
                style="min-width: 90px"
              >Seller: </span>
              <router-link
                to="/"
                class="whiteney_medium lightgreen"
              >
                Vue Seller
              </router-link>

            </div>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-4"
          />

          <span class="q-mt-md q-mb-sm whiteney_medium font18">RATINGS</span>

          <div class="d-flex align_center">
            <div class="q-pr-lg">
              <span class="font45 whiteney_medium">4.5</span>
              <q-icon
                name="star"
                size="sm"
                style="margin-top: -15px;"
                class="q-ml-sm lightgreen"
              />
              <span class="d-block whiteney_book text-grey-7">1.7k Verified Buyer</span>
            </div>
            <div class="border_left_light3 q-pl-lg">
              <div class="d-flex align_center 5star_link">
                <span class="text-grey-5 q-mr-xs">5</span>
                <q-icon
                  name="star"
                  size="12px"
                  class="text-grey-5 q-mr-xs"
                />
                <q-linear-progress
                  :value="fiverating"
                  style="min-width: 100px;"
                  class="q-mr-xs"
                />
                <span class="whiteney_book text-grey-7">984</span>
              </div>
              <div class="d-flex align_center 5star_link">
                <span class="text-grey-5 q-mr-xs">5</span>
                <q-icon
                  name="star"
                  size="12px"
                  class="text-grey-5 q-mr-xs"
                />
                <q-linear-progress
                  :value="fourrating"
                  style="min-width: 100px;"
                  class="q-mr-xs"
                />
                <span class="whiteney_book text-grey-7">460</span>
              </div>
              <div class="d-flex align_center 5star_link">
                <span class="text-grey-5 q-mr-xs">5</span>
                <q-icon
                  name="star"
                  size="12px"
                  class="text-grey-5 q-mr-xs"
                />
                <q-linear-progress
                  :value="threerating"
                  style="min-width: 100px;"
                  class="q-mr-xs"
                />
                <span class="whiteney_book text-grey-7">137</span>
              </div>
              <div class="d-flex align_center 5star_link">
                <span class="text-grey-5 q-mr-xs">5</span>
                <q-icon
                  name="star"
                  size="12px"
                  class="text-grey-5 q-mr-xs"
                />
                <q-linear-progress
                  :value="tworating"
                  style="min-width: 100px;"
                  class="q-mr-xs"
                />
                <span class="whiteney_book text-grey-7">10</span>
              </div>
              <div class="d-flex align_center 5star_link">
                <span class="text-grey-5 q-mr-xs">5</span>
                <q-icon
                  name="star"
                  size="12px"
                  class="text-grey-5 q-mr-xs"
                />
                <q-linear-progress
                  :value="onerating"
                  style="min-width: 100px;"
                  class="q-mr-xs"
                />
                <span class="whiteney_book text-grey-7">3</span>
              </div>
            </div>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-4"
          />

          <span class="q-mt-md q-mb-sm whiteney_medium font18 d-block">REVIEWS</span>

          <div :class="{'d-flex align_baseline mobile-block': is_gt_sm, 'mobile-block' : is_lt_sm}">
            <q-badge
              color="primary"
              class="q-mr-md q-py-xs"
              :class="{'q-mb-sm' : is_lt_sm}"
            >
              <span class="q-pr-xs">4</span>
              <q-icon
                name="star"
                color="white"
              />
            </q-badge>
            <div>
              <span
                class="q-mt-md whiteney_book font16"
                style="color: #555;"
              >Product is comfortable and stylish. Fishing can be better in my opinion. Im satisfied Fishing can be better</span>
              <div :class="{'d-flex align_center justify-between': is_lt_sm }">
                <span class="d-block font_nunito q-mt-sm text-grey-7">John Doe | 21 dec, 2020</span>
                <div
                  v-if="$q.screen.lt.md"
                  class="d-flex q-ml-md"
                >
                  <div class="d-flex align_center q-mr-lg">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_up_alt"
                    />
                    <span>15</span>
                  </div>
                  <div class="d-flex align_center">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_down_alt"
                    />
                    <span>4</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="d-flex q-ml-md"
              v-if="$q.screen.gt.md"
            >
              <div class="d-flex align_center q-mr-lg">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_up_alt"
                />
                <span>15</span>
              </div>
              <div class="d-flex align_center">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_down_alt"
                />
                <span>4</span>
              </div>
            </div>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-3"
          />

          <div :class="{'d-flex align_baseline mobile-block': is_gt_sm, 'mobile-block' : is_lt_sm}">
            <q-badge
              color="primary"
              class="q-mr-md q-py-xs"
              :class="{'q-mb-sm' : is_lt_sm}"
            >
              <span class="q-pr-xs">4</span>
              <q-icon
                name="star"
                color="white"
              />
            </q-badge>
            <div>
              <span
                class="q-mt-md whiteney_book font16"
                style="color: #555;"
              >Product is comfortable and stylish. Fishing can be better in my opinion. Im satisfied Fishing can be better</span>
              <div :class="{'d-flex align_center justify-between': is_lt_sm }">
                <span class="d-block font_nunito q-mt-sm text-grey-7">John Doe | 21 dec, 2020</span>
                <div
                  v-if="$q.screen.lt.md"
                  class="d-flex q-ml-md"
                >
                  <div class="d-flex align_center q-mr-lg">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_up_alt"
                    />
                    <span>15</span>
                  </div>
                  <div class="d-flex align_center">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_down_alt"
                    />
                    <span>4</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="d-flex q-ml-md"
              v-if="$q.screen.gt.md"
            >
              <div class="d-flex align_center q-mr-lg">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_up_alt"
                />
                <span>15</span>
              </div>
              <div class="d-flex align_center">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_down_alt"
                />
                <span>4</span>
              </div>
            </div>
          </div>

          <q-separator
            class="q-my-lg"
            color="grey-3"
          />

          <div :class="{'d-flex align_baseline mobile-block': is_gt_sm, 'mobile-block' : is_lt_sm}">
            <q-badge
              color="primary"
              class="q-mr-md q-py-xs"
              :class="{'q-mb-sm' : is_lt_sm}"
            >
              <span class="q-pr-xs">4</span>
              <q-icon
                name="star"
                color="white"
              />
            </q-badge>
            <div>
              <span
                class="q-mt-md whiteney_book font16"
                style="color: #555;"
              >Product is comfortable and stylish. Fishing can be better in my opinion. Im satisfied Fishing can be better</span>
              <div :class="{'d-flex align_center justify-between': is_lt_sm }">
                <span class="d-block font_nunito q-mt-sm text-grey-7">John Doe | 21 dec, 2020</span>
                <div
                  v-if="$q.screen.lt.md"
                  class="d-flex q-ml-md"
                >
                  <div class="d-flex align_center q-mr-lg">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_up_alt"
                    />
                    <span>15</span>
                  </div>
                  <div class="d-flex align_center">
                    <q-rating
                      size="22px"
                      v-model="stars"
                      max="1"
                      class="lightgreen q-pr-sm"
                      icon="thumb_down_alt"
                    />
                    <span>4</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="d-flex q-ml-md"
              v-if="$q.screen.gt.md"
            >
              <div class="d-flex align_center q-mr-lg">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_up_alt"
                />
                <span>15</span>
              </div>
              <div class="d-flex align_center">
                <q-rating
                  size="22px"
                  v-model="stars"
                  max="1"
                  class="lightgreen q-pr-sm"
                  icon="thumb_down_alt"
                />
                <span>4</span>
              </div>
            </div>
          </div>

          <q-separator
            class="q-mt-lg q-mb-sm"
            color="grey-3"
          />

          <router-link
            to="#"
            class="whiteney_medium lightgreen"
          >View all 1251 Reviews</router-link>

        </div>
      </div>
    </div>

    <q-footer
      elevated
      v-if="$q.screen.lt.md"
      class="shadow-1"
    >
      <q-toolbar
        class=""
        style="padding: 0 !important;"
      >
        <div
          class="row justify-center text-center"
          style="width: 100%"
        >
          <div class="col-6">
            <q-btn
              flat
              label="Add to Cart"
              icon="shopping_cart"
              color="dark"
              class="bg-light full-width"
              style="padding: 7px 0; border-radius: 0;"
            />
          </div>
          <div class="col-6">
            <q-btn
              flat
              label="Buy Now"
              icon="bolt"
              color="dark"
              class="bg-primary full-width text-white"
              style="padding: 7px 0; border-radius: 0;"
            />

            <q-dialog class="full-width">

              <q-list class="bg-white full-width">
                <q-item-label header>Sort By</q-item-label>
                <q-separator />
                <q-item
                  clickable
                  v-ripple
                >
                  <q-item-section avatar>
                    <q-icon
                      name="o_beenhere"
                      style="color: #282C3F; opacity: .7;"
                    />
                  </q-item-section>
                  <q-item-section>Relevance</q-item-section>
                </q-item>

                <q-item
                  clickable
                  v-ripple
                  active-class="
                      text-orange"
                >
                  <q-item-section avatar>
                    <q-icon
                      name="o_offline_bolt  "
                      style="color: #282C3F; opacity: .7;"
                    />
                  </q-item-section>
                  <q-item-section>Latest</q-item-section>
                </q-item>

                <q-item
                  clickable
                  v-ripple
                  active-class="bg-teal-1 text-grey-8"
                >
                  <q-item-section avatar>
                    <svg
                      width="28"
                      height="28"
                      viewBox="0 0 24 24"
                      class="SortModalIcon"
                    >
                      <g
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <path
                          d="M0 0h24v24H0z"
                          opacity="0.05"
                        ></path>
                        <path
                          d="M4 6.136h4.637v2.272H4.472l-.351 1.135h4.45a2.855 2.855 0 01-.772 1.44c-.51.514-1.177.81-1.888.836H5.91l-1.272-.002c-.25-.001-.377.305-.2.484l6.276 6.338 1.586-.002-5.706-5.76a3.92 3.92 0 002-1.092 3.984 3.984 0 001.119-2.242h2.311l.352-1.135H9.76V6.136h3.267V5H4v1.136zm12.626.733l1.249 1.265h-1.25V6.869zm-1.09-1.333v8.35c0 .3.232.557.548.557a.534.534 0 00.542-.547V9.184h2.414a.586.586 0 00.537-.143.53.53 0 00-.001-.773L16.48 5.161a.585.585 0 00-.62-.12.508.508 0 00-.326.495z"
                          fill="#282C3F"
                        ></path>
                      </g>
                    </svg>
                  </q-item-section>
                  <q-item-section>Price: Low to High</q-item-section>
                </q-item>
                <q-item
                  clickable
                  v-ripple
                  active-class="bg-teal-1 text-grey-8"
                >
                  <q-item-section avatar>
                    <svg
                      width="28"
                      height="28"
                      viewBox="0 0 24 24"
                      class="SortModalIcon"
                    >
                      <g
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <path
                          d="M0 0h24v24H0z"
                          opacity="0.05"
                        ></path>
                        <path
                          d="M4 6.215h4.962v2.43H4.505L4.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H4v1.215zm12.389 10.028h1.337l-1.337 1.354v-1.354zm-.818 3.309c.23.09.488.04.663-.127l3.312-3.326a.567.567 0 000-.828.627.627 0 00-.574-.152H16.39v-5.043a.571.571 0 00-.58-.585.587.587 0 00-.587.597v8.935c0 .237.12.439.35.529z"
                          fill="#282C3F"
                        ></path>
                      </g>
                    </svg>
                  </q-item-section>
                  <q-item-section>Price: Hight to Low</q-item-section>
                </q-item>
              </q-list>

            </q-dialog>

          </div>
        </div>
      </q-toolbar>
    </q-footer>

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
              "dots": true
            }
          },
        ],
      },
      sidegallerynav: {
        "focusOnSelect": true,
        "slidesToShow": 3,
        "slidesToScroll": 1,
        "vertical": true,
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