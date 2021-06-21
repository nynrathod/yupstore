<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">
    <div
      class="cart_container"
      :class="{'q-pa-md': is_gt_sm, }"
    >

      <div class="row">
        <div
          class="col-md-8 col-sm-12 col-xs-12"
          :class="{'q-pr-md': is_gt_sm}"
        >
          <div :class="{'mobile-block q-mb-md q-py-sm': is_lt_sm}">
            <span class="text-h6 avenir_semibold d-block">My Account</span>
            <span class="text-h6 avenir_regular d-block q-mb-xl">Welcome back, Nayan!</span>

            <span class="avenir_medium">My Orders</span>
          </div>
          <q-separator
            class="q-my-md"
            color="grey-4"
            v-if="$q.screen.gt.sm"
          />

          <div :class="{'mobile-block q-mb-md q-pt-sm': is_lt_sm, 'q-mb-md': is_gt_sm}">
            <div :class="{'border_light2': is_gt_sm}">
              <div
                class="row   justify-between"
                :class="{'border_bottom_light6 q-py-md': is_lt_sm, 'q-pa-md': is_gt_sm}"
              >
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ORDER NO</span>
                  <span class="whiteney_medium lsp7">19423742354</span>
                </div>
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">STATUS</span>
                  <span class="whiteney_medium lsp7 myred">DELIVERED</span>
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
                      style="height: 130px;"
                    />
                  </router-link>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-8">
                  <router-link to="product">
                    <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                    <span
                      class="text-weight-light whiteney_light"
                      v-if="$q.screen.gt.sm"
                    >Lorem ipsum dolor sit amet </span>
                  </router-link>

                  <div
                    class=""
                    v-if="$q.screen.lt.sm"
                  >
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      class="myred"
                    />

                  </div>

                  <div class="row q-pt-md">
                    <q-btn
                      unelevated
                      label="Buy Again"
                      icon="bolt"
                      class="bgmyred"
                    />

                  </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <q-rating
                    v-if="$q.screen.gt.sm"
                    size="18px"
                    v-model="stars"
                    max="5"
                    class="myred"
                  />
                  <div class="row q-col-gutter-x-md q-mt-md">
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Review"
                        icon="rate_review"
                        class="font_dark4 whiteney_medium full-width"
                        :class="{'q-mb-md': is_gt_sm}"
                      />
                    </div>
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Invoice"
                        icon="download"
                        class="font_dark4 whiteney_medium full-width"
                      />
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div :class="{'mobile-block q-mb-md q-pt-sm': is_lt_sm, 'q-mb-md': is_gt_sm}">
            <div :class="{'border_light2': is_gt_sm}">
              <div
                class="row   justify-between"
                :class="{'border_bottom_light6 q-py-md': is_lt_sm, 'q-pa-md': is_gt_sm}"
              >
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ORDER NO</span>
                  <span class="whiteney_medium lsp7">19423742354</span>
                </div>
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">STATUS</span>
                  <span class="whiteney_medium lsp7 myred">DELIVERED</span>
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
                      style="height: 130px;"
                    />
                  </router-link>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-8">
                  <router-link to="product">
                    <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                    <span
                      class="text-weight-light whiteney_light"
                      v-if="$q.screen.gt.sm"
                    >Lorem ipsum dolor sit amet </span>
                  </router-link>

                  <div
                    class=""
                    v-if="$q.screen.lt.sm"
                  >
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      class="myred"
                    />

                  </div>

                  <div class="row q-pt-md">
                    <q-btn
                      unelevated
                      label="Buy Again"
                      icon="bolt"
                      class="bgmyred"
                    />

                  </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <q-rating
                    v-if="$q.screen.gt.sm"
                    size="18px"
                    v-model="stars"
                    max="5"
                    class="myred"
                  />
                  <div class="row q-col-gutter-x-md q-mt-md">
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Review"
                        icon="rate_review"
                        class="font_dark4 whiteney_medium full-width"
                        :class="{'q-mb-md': is_gt_sm}"
                      />
                    </div>
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Invoice"
                        icon="download"
                        class="font_dark4 whiteney_medium full-width"
                      />
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div :class="{'mobile-block q-mb-md q-pt-sm': is_lt_sm, 'q-mb-md': is_gt_sm}">
            <div :class="{'border_light2': is_gt_sm}">
              <div
                class="row   justify-between"
                :class="{'border_bottom_light6 q-py-md': is_lt_sm, 'q-pa-md': is_gt_sm}"
              >
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ORDER NO</span>
                  <span class="whiteney_medium lsp7">19423742354</span>
                </div>
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">STATUS</span>
                  <span class="whiteney_medium lsp7 myred">DELIVERED</span>
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
                      style="height: 130px;"
                    />
                  </router-link>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-8">
                  <router-link to="product">
                    <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                    <span
                      class="text-weight-light whiteney_light"
                      v-if="$q.screen.gt.sm"
                    >Lorem ipsum dolor sit amet </span>
                  </router-link>

                  <div
                    class=""
                    v-if="$q.screen.lt.sm"
                  >
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      class="myred"
                    />

                  </div>

                  <div class="row q-pt-md">
                    <q-btn
                      unelevated
                      label="Buy Again"
                      icon="bolt"
                      class="bgmyred"
                    />

                  </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <q-rating
                    v-if="$q.screen.gt.sm"
                    size="18px"
                    v-model="stars"
                    max="5"
                    class="myred"
                  />
                  <div class="row q-col-gutter-x-md q-mt-md">
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Review"
                        icon="rate_review"
                        class="font_dark4 whiteney_medium full-width"
                        :class="{'q-mb-md': is_gt_sm}"
                      />
                    </div>
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Invoice"
                        icon="download"
                        class="font_dark4 whiteney_medium full-width"
                      />
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div :class="{'mobile-block q-mb-md q-pt-sm': is_lt_sm, 'q-mb-md': is_gt_sm}">
            <div :class="{'border_light2': is_gt_sm}">
              <div
                class="row   justify-between"
                :class="{'border_bottom_light6 q-py-md': is_lt_sm, 'q-pa-md': is_gt_sm}"
              >
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">ORDER NO</span>
                  <span class="whiteney_medium lsp7">19423742354</span>
                </div>
                <div class="">
                  <span class="d-block whiteney_book font12 font_dark9 text-weight-thin">STATUS</span>
                  <span class="whiteney_medium lsp7 myred">DELIVERED</span>
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
                      style="height: 130px;"
                    />
                  </router-link>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-8">
                  <router-link to="product">
                    <span class="q-my-xs d-block font15 whiteney_medium">Money Plant Variegated</span>
                    <span
                      class="text-weight-light whiteney_light"
                      v-if="$q.screen.gt.sm"
                    >Lorem ipsum dolor sit amet </span>
                  </router-link>

                  <div
                    class=""
                    v-if="$q.screen.lt.sm"
                  >
                    <q-rating
                      size="18px"
                      v-model="stars"
                      max="5"
                      class="myred"
                    />

                  </div>

                  <div class="row q-pt-md">
                    <q-btn
                      unelevated
                      label="Buy Again"
                      icon="bolt"
                      class="bgmyred"
                    />

                  </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <q-rating
                    v-if="$q.screen.gt.sm"
                    size="18px"
                    v-model="stars"
                    max="5"
                    class="myred"
                  />
                  <div class="row q-col-gutter-x-md q-mt-md">
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Review"
                        icon="rate_review"
                        class="font_dark4 whiteney_medium full-width"
                        :class="{'q-mb-md': is_gt_sm}"
                      />
                    </div>
                    <div class="col-md-12 sol-sm-6 col-xs-6">
                      <q-btn
                        unelevated
                        outline
                        label="Invoice"
                        icon="download"
                        class="font_dark4 whiteney_medium full-width"
                      />
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div
          class="col-md-4 col-sm-12 col-xs-12 "
          style="border-left: 1px solid #eee;"
          :class="{'q-pl-md': is_gt_sm}"
        >
          <div
            class="q-pb-md"
            :class="{'mobile-block q-px-md q-py-md': is_lt_sm}"
          >

            <q-btn
              unelevated
              label="Reset Password"
              icon="password"
              class="q-mt-md avenir_medium ls2 d-block bg_hover_white"
              @click="passworddialog =! passworddialog"
            />

            <q-btn
              unelevated
              label="Logout"
              icon="power_settings_new"
              class="q-mt-md avenir_medium ls1 q-mb-xl bg_hover_white"
            />

          </div>

          <div
            class="avenir_regular"
            :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
          >
            <div>
              Address
            </div>
            <q-separator class="q-my-md" />

            <span class="d-block">Xenos Perkins</span>
            <span class="d-block">Frazier Heath LLC</span>
            <span class="d-block">503 White Nobel Court</span>
            <span class="d-block">Aliqua Dolorem</span>
            <span class="d-block">123456 Aliqua Nostrud</span>
            <span class="d-block">Malawi</span>
            <q-btn
              unelevated
              color="dark"
              label="Edit Address"
              @click="addressdialog =! addressdialog"
              class="q-mt-md avenir_medium ls2"
            />
          </div>
        </div>
      </div>
    </div>

    <q-dialog v-model="addressdialog">
      <q-card>
        <q-card-section>
          <div class="text-h6">Edit Address</div>
        </q-card-section>

        <q-separator />

        <q-card-section class="scroll">
          <form class="q-mt-lg">
            <div class="row q-col-gutter-x-md">
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdname"
                  dense
                  placeholder="First Name"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdlname"
                  dense
                  placeholder="last Name"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
            </div>

            <div class="row q-col-gutter-x-md">
              <div class="col-md-6 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdpincode"
                  dense
                  placeholder="Pincode"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.numeric('Only Numbers are allowed'),
                  $rules.minLength(6, 'Less than 6 numbers not allowed'),
                  $rules.maxLength(6, 'More than 6 numbers not allowed')
                ]"
                />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 q-mb-sm">

                <q-input
                  outlined
                  v-model="form.mdphone1"
                  dense
                  placeholder="Mobile Number"
                  prefix="+91"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.numeric('Only Numbers are Allowed'),
                  $rules.minLength(10, 'Less than 6 numbers not allowed'),
                  $rules.maxLength(10, 'More than 10 numbers not allowed')
                ]"
                />
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdaddress"
                  class="address_field"
                  dense
                  placeholder="Address (House No, Street, Area, Landmark)"
                  :rules="[
                  $rules.required('Field is Required'),
                ]"
                />
              </div>
            </div>
            <div class="row q-col-gutter-x-md">
              <div class="col-md-6 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdtown"
                  dense
                  placeholder="Town / City"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mddistrict"
                  dense
                  placeholder="District"
                  class="address_field"
                  readonly
                  :rules="[
                  $rules.required('Field is Required'),
                ]"
                >
                  <template v-slot:append>
                    <q-icon
                      name="check_circle"
                      class="dark"
                    />
                  </template>
                </q-input>
              </div>
            </div>

          </form>
        </q-card-section>

        <q-separator />

        <q-card-actions
          align="center"
          class="q-py-md"
        >
          <q-btn
            label="Submit Address"
            color="primary"
            v-close-popup
            class="full-width q-py-xs"
          />
        </q-card-actions>
      </q-card>
    </q-dialog>

    <q-dialog v-model="passworddialog">
      <q-card>
        <q-card-section>
          <div class="text-h6">Reset Password</div>
        </q-card-section>

        <q-separator />

        <q-card-section class="scroll">
          <form class="q-mt-lg">
            <div class="row q-col-gutter-x-md">
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdname"
                  dense
                  placeholder="Old Password"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdlname"
                  dense
                  placeholder="New Password"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 q-mb-sm">
                <q-input
                  outlined
                  v-model="form.mdlname"
                  dense
                  placeholder="Confrim Password"
                  class="address_field"
                  :rules="[
                  $rules.required('Field is Required'),
                  $rules.alpha('Only Characters are allowed'),
                ]"
                />
              </div>
            </div>
          </form>
        </q-card-section>

        <q-separator />

        <q-card-actions
          align="center"
          class="q-py-md"
        >
          <q-btn
            label="Reset Password"
            color="primary"
            v-close-popup
            class="full-width q-py-xs"
          />
        </q-card-actions>
      </q-card>
    </q-dialog>

  </q-page>
</template>


<script>
export default {
  data () {
    return {
      quantity: 1,
      offerexpanded: false,
      couponexpanded: true,
      mdcoupon: '',
      stars: 3,
      addressdialog: false,
      passworddialog: true,
      form: {
        mdfname: '',
        mdlname: '',
        mdphone1: '',
        mdphone2: '',
        mdpincode: '',
        mdaddress: '',
        mdtown: '',
        mddistrict: 'Vadodara',

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