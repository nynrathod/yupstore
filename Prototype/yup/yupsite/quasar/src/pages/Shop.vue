<template>
  <q-page class="items-center justify-evenly overflow-hidden">

    <q-layout class="shop_container">
      <q-drawer
        v-model="filterdrawertrue"
        icon="mdi-delete"
        show-if-above
        :width="300"
        :breakpoint="1023"
      >
        <q-scroll-area
          class="fit"
          style="border-right: 1px solid #f5f5f5"
        >
          <h6 class="q-ma-xs q-pa-sm">Filter</h6>
          <q-separator />

          <div class="filter_form_container q-py-md">
            <q-expansion-item
              v-model="expanded"
              label="Brand"
              class="ext-subtitle2"
            >
              <q-separator />
              <q-form class="q-gutter-xs q-px-xs">
                <q-option-group
                  :options="filteroption"
                  label="Notifications"
                  type="checkbox"
                  v-model="checkbox"
                />
              </q-form>

            </q-expansion-item>

            <q-separator />

            <q-expansion-item
              v-model="expanded"
              label="Location"
              class="ext-subtitle2"
            >
              <q-separator />
              <q-form class="q-gutter-xs q-px-xs">
                <q-option-group
                  :options="filteroption"
                  label="Notifications"
                  type="checkbox"
                  v-model="checkbox"
                />
              </q-form>

            </q-expansion-item>

            <q-separator />

            <q-expansion-item
              v-model="expanded"
              label="Price Range"
              class="ext-subtitle2"
            >
              <q-separator />
              <q-form class="q-gutter-xs q-px-xs">
                <q-range
                  v-model="standard"
                  :min="0"
                  :max="50"
                />
              </q-form>

            </q-expansion-item>

          </div>

        </q-scroll-area>
      </q-drawer>

      <q-page-container>
        <q-page
          class="q-pt-md"
          :class="{'q-pl-md': is_gt_sm}"
        >
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
          <div class="row q-mb-md">

            <h6
              class="q-mb-md q-my-xs"
              :class="{'row': is_gt_sm}"
            >Home Decore <span
                class="col self-center m text-caption"
                :class="{'d-block': is_lt_sm, 'q-pl-s': is_gt_sm}"
              > (Showing 1 – 7 products of 7 products)</span></h6>
            <q-space />
            <q-select
              outlined
              v-model="model"
              :options="options"
              :dense="dense"
              :options-dense="denseOpts"
              style="width: 200px"
              aria-placeholder="Outlie"
              v-if="$q.screen.gt.sm"
            />
          </div>

          <div
            class="row q-pb-lg q-col-gutter-x-lg"
            :class="{'q-col-gutter-x-xs': is_lt_sm, 'q-col-gutter-x-lg q-col-gutter-y-lg': is_gt_xs}"
          >
            <div
              class="col-md-3 col-lg-3 col-sm-4 col-xs-6"
              v-for="data in productdata"
              :key="data.id"
            >
              <q-card
                class="my-card product_card no-shadow border_light3 cursor-pointer product_card no-border-radius"
                :class="{'q-mb-md': is_lt_sm}"
              >

                <div class="relative-position overflow-hidden">
                  <q-img
                    src="https://cdn.shopify.com/s/files/1/0317/0687/3992/files/slideshow-v2-2.jpg?v=1580463539"
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

            </div>

          </div>

          <q-pagination
            v-model="currentpage"
            color="black"
            size="md"
            padding="5px 15px"
            flat
            dense
            :max="10"
            :max-pages="6"
            :boundary-numbers="false"
            class="row justify-center q-mt-md q-mb-lg"
          >
          </q-pagination>

        </q-page>

      </q-page-container>

    </q-layout>

    <q-footer
      unelevated
      class="bg-white border_top_light1"
      v-if="$q.screen.lt.sm"
    >
      <q-toolbar class="shadow-1">
        <div
          class="row justify-center text-center"
          style="width: 100%"
        >
          <div class="col-6">
            <q-btn
              flat
              @click="filterdrawertrue = !filterdrawertrue"
              dense
              label="Filter"
              icon="filter_list"
              color="dark"
            />
          </div>
          <div class="col-6">
            <q-btn
              flat
              dense
              label="Sort"
              icon="sort"
              color="dark"
              @click="open('bottom')"
            />

            <q-dialog
              v-model="dialog"
              :position="position"
              class="full-width"
            >

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
export default {
  data () {
    return {
      filterdrawertrue: true,
      filterdrawerfalse: false,
      stars: 3,
      dialog: false,
      position: 'top',
      currentpage: 1,
      model: null,
      options: [
        'Google', 'Facebook', 'Twitter', 'Apple', 'Oracle'
      ],
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
        { id: 10 },
        { id: 11 },
        { id: 12 },
        { id: 13 },
        { id: 14 },
        { id: 15 },
        { id: 16 },
        { id: 17 },
        { id: 18 },
        { id: 19 },
        { id: 20 },
        { id: 21 },
        { id: 22 },
        { id: 23 },
        { id: 24 },
        { id: 25 },
        { id: 26 },
        { id: 27 },
        { id: 28 },
        { id: 29 },
        { id: 30 },
        { id: 31 },
        { id: 32 },
        { id: 33 },
        { id: 34 },
        { id: 35 },
        { id: 36 },
        { id: 37 },
        { id: 38 },
        { id: 39 },
        { id: 40 },
        { id: 41 },
        { id: 42 },
        { id: 43 },
        { id: 44 },
        { id: 45 },
        { id: 46 },
        { id: 47 },
        { id: 48 },
        { id: 49 },
        { id: 50 },
        { id: 51 },
        { id: 52 },
        { id: 53 },
        { id: 54 },
        { id: 55 },
        { id: 56 },
        { id: 57 },
        { id: 58 },
        { id: 59 },
        { id: 60 },

      ],
      dense: false,
      denseOpts: false,
      checkbox: false,
      filteroption: [
        { label: 'Battery too low', value: 'bat' },
        { label: 'Friend request', value: 'friend', color: 'green' },
        { label: 'Picture uploaded', value: 'upload', color: 'red' },
        { label: 'Picture uploaded', value: 'upload', color: 'red' },
        { label: 'Picture uploaded', value: 'upload', color: 'red' },
        { label: 'Picture uploaded', value: 'upload', color: 'red' }
      ],
      expanded: true,
      standard: {
        min: 10,
        max: 35
      }
    }
  },
  methods: {
    open (position) {
      this.position = position
      this.dialog = true
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