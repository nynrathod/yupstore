<template>
  <q-page class="items-center justify-evenly overflow-hidden">
    <div
      class="header_boxes q-pt-md q-pb-sm"
      style=" background: #fff;"
    >
      <div
        class="row justify-center q-col-gutter-x-md"
        v-if="$q.screen.gt.sm"
      >
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/17-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/10-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/01-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/11-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/17-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
        <div class="col-1">
          <router-link to="#">
            <q-card class="my-card no-box-shadow transparent">
              <img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/10-385x501.jpg"
                style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
              >

              <q-card-section>
                <div class="text-subtitle2 text-center">Plant Name</div>
              </q-card-section>
            </q-card>
          </router-link>
        </div>
      </div>

      <div
        class="q-col-gutter-x-md header_category_mobile"
        :class="{'justify-center': is_gt_sm}"
        v-if="$q.screen.lt.md"
      >

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/17-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/10-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/01-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/11-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/17-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

        <router-link to="#">
          <q-card class="my-card no-box-shadow transparent">
            <img
              src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/10-385x501.jpg"
              style="    width: 50px; height: 50px; margin: auto; border-radius: 50%;"
            >

            <q-card-section>
              <div class="text-subtitle2 text-center">Plant Name</div>
            </q-card-section>
          </q-card>
        </router-link>

      </div>

    </div>

    <div
      class="bgimg"
      style="background: url('http://demo.ishitechnolabs.com/OPC056/image/catalog/tophomebg_image.jpg')"
    >
      <div
        class=" container"
        :class="{'q-pt-sm q-pb-md': is_lt_sm, 'q-py-lg': is_gt_sm}"
      >

        <div class="row q-col-gutter-x-lg">
          <div
            class="col-md-9 col-sm-12 col-xs-12"
            :class="{'q-pb-sm': is_lt_sm}"
          >

            <VueSlickCarousel v-bind="banner">

              <q-img
                src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/banners/slider-01-1770x900.jpg"
                class="cover"
              />
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
          <div
            class="col-md-3 col-sm-12 col-xs-12 discount_card"
            ::style="{'height: 500px': is_gt_sm}"
          >
            <q-card
              class="my-card  img_hover_animation"
              :class="{'q-mr-xs': is_lt_sm, 'q-mb-lg' : is_gt_sm}"
              flat
              bordered
            >
              <q-img
                src="http://demo.ishitechnolabs.com/OPC056/image/cache/catalog/two_banner/bannerblock-1-287x246.jpg"
                class="cover img_hover_animation"
                style="max-height: 238px"
              />

            </q-card>

            <q-card
              class="my-card img_hover_animation"
              :class="{'q-ml-xs': is_lt_sm}"
              flat
              bordered
            >
              <q-img
                src="http://demo.ishitechnolabs.com/OPC056/image/cache/catalog/two_banner/bannerblock-2-287x246.jpg"
                class="cover img_hover_animation"
                style="max-height: 238px"
              />

            </q-card>

          </div>
        </div>

        <div
          class="row q-mt-lg q-py-md mobile-hide"
          style="background: #fff;"
        >
          <div
            class="col-md-3 col-sm-6 col-xs-6"
            :class="{'q-mb-sm': is_lt_sm}"
          >
            <q-card
              class="my-card row justify-center"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_local_shipping"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >WORLDWIDE DELIVERY</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div
            class="col-md-3 col-sm-6 col-xs-6"
            :class="{'q-mb-sm': is_lt_sm}"
          >
            <q-card
              class="my-card row justify-center"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_card_giftcard"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >GIFT VOUCHER</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <q-card
              class="my-card row justify-center"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_savings"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >GREAT SAVING</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <q-card
              class="my-card row justify-center"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_perm_phone_msg"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >24X7 SUPPORT</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

        </div>

      </div>
    </div>

    <div
      style="background: ;"
      class="q-pb-lg"
    >

      <div class="container q-mt-lg">
        <div class="row q-col-gutter-x-lg q-pt-lg">
          <div
            class="col-md-4 col-sm-12 col-xs-12"
            :class="{'q-pb-sm': is_lt_sm}"
          >
            <q-img
              src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-3-600x315.jpg"
              class="img_hover_animation"
            />
          </div>
          <div
            class="col-md-4 col-sm-12 col-xs-12"
            :class="{'q-pb-sm': is_lt_sm}"
          >
            <q-img
              src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-1-600x315.jpg"
              class="img_hover_animation"
            />
          </div>
          <div
            class="col-md-4 col-sm-12 col-xs-12"
            :class="{'q-pb-sm': is_lt_sm}"
          >
            <q-img
              src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-2-600x315.jpg"
              class="img_hover_animation"
            />
          </div>
        </div>

        <div class="q-mt-xl">
          <div class="row">
            <div
              class="col-12 row"
              :class="{'q-px-lg': is_gt_sm, 'q-px-md': is_lt_sm}"
            >
              <h5
                class="col-md-11 col-sm-8 col-xs-8 q-my-sm q-pb-0"
                style="font-family: 'Playfair Display',serif;"
              >Deals of the Day</h5>

              <q-btn
                color="primary"
                label="View All"
                class="col-md-1 col-sm-4 col-xs-4"
                outline
                size="md"
              />
            </div>
            <div class="col-12">

              <VueSlickCarousel
                v-bind="dealof"
                class="inline_carousel q-py-md"
              >
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>
                <q-card
                  class="my-card product_card no-shadow cursor-pointer product_card"
                  :class="{'q-pb-md': is_lt_sm}"
                >
                  <q-card-section class="product_card_header">
                    <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                    <div class="row no-wrap justify-center items-center">
                      <q-rating
                        size="18px"
                        v-model="stars"
                        max="5"
                        color="yellow-6"
                      />
                      <span
                        class="text-caption text-grey q-ml-sm"
                        v-if="$q.screen.gt.xs"
                      >4.2 (551)</span>
                    </div>
                    <div
                      class="text-center text-caption"
                      :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                      style="color: #444; font-size: 17px;"
                    >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                  </q-card-section>

                  <q-img
                    src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                    style="width: 170px;"
                    class="row justify-center q-mx-auto"
                    :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                  />

                  <div
                    class="button-group row justify-center"
                    :class="{'q-col-gutter-x-md': is_gt_sm}"
                  >
                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_quickview">
                        <q-btn
                          icon="o_visibility"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_whishlist">
                        <q-btn
                          icon="o_favorite_border"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Wish List
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div
                      class="col-2"
                      :class="{'q-mr-sm': is_lt_sm}"
                    >
                      <div class="btn_action_main btn_cart">
                        <q-btn
                          icon="o_shopping_cart"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Add to Cart
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="btn_action_main btn_buy">
                        <q-btn
                          icon="o_bolt"
                          size="sm"
                          class="action_btn no-shadow"
                        >
                          <q-tooltip
                            anchor="top middle"
                            self="bottom middle"
                            content-style="font-size: 11px"
                            content-class="bg-dark"
                            sty
                          >
                            Buy Now
                          </q-tooltip>
                        </q-btn>
                      </div>
                    </div>

                  </div>

                </q-card>

              </VueSlickCarousel>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container q-pt-lg q-pb-lg">
      <div class="row">
        <div class="col-12">
          <h3
            v-if="$q.screen.gt.sm"
            class="text-center"
            style="font-family: 'Playfair Display',serif;"
          >Trending Products</h3>
          <div
            class="col-12 row"
            v-if="$q.screen.lt.sm"
            :class="{'q-px-md': is_lt_sm}"
          >
            <h5
              class="col-md-11 col-sm-8 col-xs-8 q-my-sm q-pb-0"
              style="font-family: 'Playfair Display',serif;"
            >Trending Products</h5>

            <q-btn
              color="primary"
              label="View All"
              class="col-md-1 col-sm-4 col-xs-4"
              outline
              size="md"
            />
          </div>
          <VueSlickCarousel
            v-bind="dealof"
            class="inline_carousel q-py-md"
          >
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>

          </VueSlickCarousel>

        </div>
      </div>

      <div class="row q-col-gutter-x-md">
        <div
          class="col-md-4 col-sm-12 col-xs-12"
          :class="{'q-pb-sm': is_lt_sm}"
        >
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/centerbanner/centerbanner-490x490.jpg"
            class="cover img_hover_animation"
          />
        </div>
        <div
          class="col-md-4 col-sm-6 col-xs-12"
          :class="{'q-mb-sm': is_lt_sm}"
        >
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/Offerbanner/1-490x230.jpg"
            class="cover img_hover_animation"
            :class="{'q-mb-md': is_gt_sm, 'q-mb-sm': is_lt_sm}"
          />

          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/Offerbanner/1-490x230.jpg"
            class="cover img_hover_animation"
            :class="{'q-pt-md': is_gt_sm}"
          />
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/Offerbanner/2-490x230.jpg"
            class="cover img_hover_animation"
            :class="{'q-mb-md': is_gt_sm, 'q-mb-sm': is_lt_sm}"
          />
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/Offerbanner/2-490x230.jpg"
            class="cover q-pt-md img_hover_animation"
          />
        </div>

      </div>
    </div>

    <div
      style="background: ;"
      class="q-pb-lg"
    >

      <div class="container q-pt-md">

        <div class="row">
          <div
            class="col-12 row"
            :class="{'q-px-lg': is_gt_sm, 'q-px-md': is_lt_sm}"
          >
            <h5
              class="col-md-11 col-sm-8 col-xs-8 q-my-sm q-pb-0"
              style="font-family: 'Playfair Display',serif;"
            >Deals of the Day</h5>

            <q-btn
              color="primary"
              label="View All"
              class="col-md-1 col-sm-4 col-xs-4"
              outline
              size="md"
            />
          </div>
          <div class="col-12">

            <VueSlickCarousel
              v-bind="dealof"
              class="inline_carousel q-py-md"
            >
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>
              <q-card
                class="my-card product_card no-shadow cursor-pointer product_card"
                :class="{'q-pb-md': is_lt_sm}"
              >
                <q-card-section class="product_card_header">
                  <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                  <div class="row no-wrap justify-center items-center">
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      color="yellow-6"
                    />
                    <span
                      class="text-caption text-grey q-ml-sm"
                      v-if="$q.screen.gt.xs"
                    >4.2 (551)</span>
                  </div>
                  <div
                    class="text-center text-caption"
                    :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                    style="color: #444; font-size: 17px;"
                  >₹ 249.00 <small><del>₹ 300.00</del></small></div>
                </q-card-section>

                <q-img
                  src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                  style="width: 170px;"
                  class="row justify-center q-mx-auto"
                  :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
                />

                <div
                  class="button-group row justify-center"
                  :class="{'q-col-gutter-x-md': is_gt_sm}"
                >
                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_quickview">
                      <q-btn
                        icon="o_visibility"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_whishlist">
                      <q-btn
                        icon="o_favorite_border"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Wish List
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div
                    class="col-2"
                    :class="{'q-mr-sm': is_lt_sm}"
                  >
                    <div class="btn_action_main btn_cart">
                      <q-btn
                        icon="o_shopping_cart"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Add to Cart
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="btn_action_main btn_buy">
                      <q-btn
                        icon="o_bolt"
                        size="sm"
                        class="action_btn no-shadow"
                      >
                        <q-tooltip
                          anchor="top middle"
                          self="bottom middle"
                          content-style="font-size: 11px"
                          content-class="bg-dark"
                          sty
                        >
                          Buy Now
                        </q-tooltip>
                      </q-btn>
                    </div>
                  </div>

                </div>

              </q-card>

            </VueSlickCarousel>

          </div>
        </div>

      </div>
    </div>

    <div class="container q-pt-md">

      <div class="row">
        <div
          class="col-12 row"
          :class="{'q-px-lg': is_gt_sm, 'q-px-md': is_lt_sm}"
        >
          <h5
            class="col-md-11 col-sm-8 col-xs-8 q-my-sm q-pb-0"
            style="font-family: 'Playfair Display',serif;"
          >Deals of the Day</h5>

          <q-btn
            color="primary"
            label="View All"
            class="col-md-1 col-sm-4 col-xs-4"
            outline
            size="md"
          />
        </div>
        <div class="col-12">

          <VueSlickCarousel
            v-bind="dealof"
            class="inline_carousel q-py-md"
          >
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>

          </VueSlickCarousel>

        </div>
      </div>

    </div>

    <div class="container q-pt-md">

      <div class="row">
        <div
          class="col-12 row"
          :class="{'q-px-lg': is_gt_sm, 'q-px-md': is_lt_sm}"
        >
          <h5
            class="col-md-11 col-sm-8 col-xs-8 q-my-sm q-pb-0"
            style="font-family: 'Playfair Display',serif;"
          >Deals of the Day</h5>

          <q-btn
            color="primary"
            label="View All"
            class="col-md-1 col-sm-4 col-xs-4"
            outline
            size="md"
          />
        </div>
        <div class="col-12">

          <VueSlickCarousel
            v-bind="dealof"
            class="inline_carousel q-py-md"
          >
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>
            <q-card
              class="my-card product_card no-shadow cursor-pointer product_card"
              :class="{'q-pb-md': is_lt_sm}"
            >
              <q-card-section class="product_card_header">
                <div class="text-subtitle1 product_name text-center q-mb-xs">Vivamus Consequat </div>
                <div class="row no-wrap justify-center items-center">
                  <q-rating
                    size="18px"
                    v-model="stars"
                    max="5"
                    color="yellow-6"
                  />
                  <span
                    class="text-caption text-grey q-ml-sm"
                    v-if="$q.screen.gt.xs"
                  >4.2 (551)</span>
                </div>
                <div
                  class="text-center text-caption"
                  :class="{'q-pt-md': is_gt_xs, 'q-pt-sm': is_lt_xs}"
                  style="color: #444; font-size: 17px;"
                >₹ 249.00 <small><del>₹ 300.00</del></small></div>
              </q-card-section>

              <q-img
                src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/product/25-800x800.jpg"
                style="width: 170px;"
                class="row justify-center q-mx-auto"
                :class="{'q-my-md': is_lt_sm, 'q-my-md': is_gt_sm }"
              />

              <div
                class="button-group row justify-center"
                :class="{'q-col-gutter-x-md': is_gt_sm}"
              >
                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_quickview">
                    <q-btn
                      icon="o_visibility"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_whishlist">
                    <q-btn
                      icon="o_favorite_border"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Wish List
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div
                  class="col-2"
                  :class="{'q-mr-sm': is_lt_sm}"
                >
                  <div class="btn_action_main btn_cart">
                    <q-btn
                      icon="o_shopping_cart"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Add to Cart
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

                <div class="col-2">
                  <div class="btn_action_main btn_buy">
                    <q-btn
                      icon="o_bolt"
                      size="sm"
                      class="action_btn no-shadow"
                    >
                      <q-tooltip
                        anchor="top middle"
                        self="bottom middle"
                        content-style="font-size: 11px"
                        content-class="bg-dark"
                        sty
                      >
                        Buy Now
                      </q-tooltip>
                    </q-btn>
                  </div>
                </div>

              </div>

            </q-card>

          </VueSlickCarousel>

        </div>
      </div>

    </div>

    <div class="container q-mt-md">
      <div class="row q-col-gutter-x-lg q-pt-lg">
        <div
          class="col-md-4 col-sm-12 col-xs-12"
          :class="{'q-pb-sm': is_lt_sm}"
        >
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-3-600x315.jpg"
            class="img_hover_animation"
          />
        </div>
        <div
          class="col-md-4 col-sm-12 col-xs-12"
          :class="{'q-pb-sm': is_lt_sm}"
        >
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-1-600x315.jpg"
            class="img_hover_animation"
          />
        </div>
        <div
          class="col-md-4 col-sm-12 col-xs-12"
          :class="{'q-pb-sm': is_lt_sm}"
        >
          <q-img
            src="https://opencart.dostguru.com/PL01/plantish_01/image/cache/catalog/img-banner/imgbanner-2-600x315.jpg"
            class="img_hover_animation"
          />
        </div>
      </div>
    </div>

    <q-btn
      color="grey"
      flat
      dense
      :icon="expanded ? 'keyboard_arrow_up' : 'keyboard_arrow_down'"
      @click="expanded = !expanded"
      style="width: 100%"
      class="justify-between"
    >
      More at YupStore
    </q-btn>

    <div
      class="shadow-2 bg-light"
      :v-show="{'expanded': is_lt_sm}"
    >

      <div class="container">
        <div class="row q-py-xl">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <q-card
              class="my-card row"
              :class="{'justify-center': is_gt_sm}"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_local_shipping"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >WORLDWIDE DELIVERY</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <q-card
              class="my-card row"
              :class="{'justify-center': is_gt_sm}"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_card_giftcard"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >GIFT VOUCHER</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <q-card
              class="my-card row"
              :class="{'justify-center': is_gt_sm}"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_savings"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >GREAT SAVING</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <q-card
              class="my-card row"
              :class="{'justify-center': is_gt_sm}"
              flat
              style="border-right: 1px solid #ddd;"
            >
              <q-card-section horizontal>

                <q-card-section class="col-2 flex flex-center">
                  <q-icon
                    name="o_perm_phone_msg"
                    size="40px"
                    style="color: #555;"
                  />
                </q-card-section>

                <q-card-section class="q-pt-xs">
                  <div
                    class="text-subtitle1 text-weight-medium q-mt-sm q-mb-xs"
                    style="color: #555; font-family: 'Poppins', sans-serif;"
                  >24X7 SUPPORT</div>
                  <div
                    class="text-subtitle2 text-weight-light"
                    style="color: #555;"
                  >Lorem ipsum Dolor Site</div>
                </q-card-section>
              </q-card-section>

            </q-card>
          </div>

        </div>
      </div>

      <div class="container q-py-lg">
        <div class="row suggested_links">
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link>
        </div>
        <div class="row suggested_links">
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Tupperware Kitchenware</router-link> /
          <router-link to="#">Photo Frames</router-link> /
          <router-link to="#">Hawkins Kitchenware</router-link> /
          <router-link to="#">Milton Kitchenware</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link> /
          <router-link to="#">Home Decor</router-link> /
          <router-link to="#">Paintings</router-link> /
          <router-link to="#">Clocks</router-link> /
          <router-link to="#">Flasks & Thermos</router-link> /
          <router-link to="#">Revlon</router-link> /
          <router-link to="#">Street Wear</router-link> /
          <router-link to="#">St. Ives</router-link> /
          <router-link to="#">Accu-Chek Health Monitoring Devices</router-link> /
          <router-link to="#">Nutraj - California Walnuts</router-link> /
          <router-link to="#">JSB Massagers</router-link> /
          <router-link to="#">Park Avenue</router-link> /
          <router-link to="#">Gillette</router-link> /
          <router-link to="#">Airwick</router-link> /
          <router-link to="#">Veet</router-link> /
          <router-link to="#">Livon</router-link> /
          <router-link to="#">Mortein</router-link> /
          <router-link to="#">Whisper</router-link> /
          <router-link to="#">KamaSutra</router-link> /
          <router-link to="#">Durex</router-link> /
          <router-link to="#">Bio Oil</router-link>
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
        "dots": true,
        "focusOnSelect": true,
        "infinite": true,
        "speed": 500,
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "touchThreshold": 5
      },
      dealof: {
        "dots": true,
        "arrows": true,
        "infinite": false,
        "speed": 500,
        "slidesToShow": 6,
        "slidesToScroll": 1,
        "initialSlide": 0,
        "responsive": [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 3,
              "infinite": true,
              "dots": true
            }
          },
          {
            "breakpoint": 600,
            "settings": {
              "slidesToShow": 2,
              "slidesToScroll": 2,
              "initialSlide": 2
            }
          },
          {
            "breakpoint": 480,
            "settings": {
              "slidesToShow": 2,
              "rows": 2,
              "slidesToScroll": 2
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



