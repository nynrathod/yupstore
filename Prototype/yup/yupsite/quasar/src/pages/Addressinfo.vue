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
          <q-breadcrumbs
            style="color: #666; font-size:12px;"
            active-color="dark"
            gutter="sm"
            class="q-pb-sm avenir_regular"
            :class="{'mobile-block q-mt-md q-mb-md': is_lt_sm}"
          >
            <q-breadcrumbs-el label="Home" />
            <q-breadcrumbs-el label="Components" />
            <q-breadcrumbs-el
              label="Breadcrumbs"
              class="text-weight-bold"
            />
          </q-breadcrumbs>

          <div :class="{'mobile-block q-mb-md q-pt-sm': is_lt_sm}">
            <form class="q-mt-lg">
              <label class="avenir_semibold d-block q-mb-md">CONTACT DETAILS</label>
              <div class="row q-col-gutter-x-md">
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
                  <q-input
                    outlined
                    v-model="form.mdphon2"
                    dense
                    placeholder="alternative Number"
                    class="address_field"
                    :rules="[
                  $rules.required('Field is Required'),
                  $rules.numeric('Only Numbers are Allowed'),
                ]"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <q-input
                    outlined
                    v-model="form.mdemail"
                    type="email"
                    dense
                    placeholder="Email"
                    class="address_field"
                    :rules="[
                  $rules.required('Field is Required'),
                  $rules.email('Only Characters are allowed'),
                ]"
                  />
                </div>
              </div>

              <label class="avenir_semibold d-block q-mt-lg q-mb-sm">ADDRESS DETAILS</label>
              <div class="row q-col-gutter-x-md">
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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
                <div class="col-md-6 col-sm-12 col-xs-12 q-mb-md">
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

            <div>
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
                    color="dark"
                  />
                </template>
              </q-input>
            </div>

          </div>
          <q-separator class="q-mb-md" />
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
              class="full-width q-mt-md  avenir_medium lsp7 font16"
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
      mdcoupon: '',
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