<template>
  <q-page class="items-center justify-evenly overflow-hidden cart-page">
    <div
      class="container q-pa-md"
      style="max-width: 1000px;"
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

          <div
            class="q-pt-lg q-px-md q-pb-lg border_light2 q-mb-md"
            :class="{'mobile-block': is_lt_sm}"
          >
            <q-item
              tag="label"
              class="address_radio"
            >
              <q-item-section
                avatar
                top
              >
                <q-radio
                  v-model="address"
                  val="Address 1"
                  color="teal-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="d-block q-mb-sm whiteney_medium">Nayan Rathod</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12">Spring Filed, Waghodia road, 171</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12 q-mb-sm">Baroda, Gujarat, 390019</q-item-label>
                <q-item-label class="whiteney_light font13 q-mb-md">Mobile: <b>9662007745</b></q-item-label>
                <div class="flex">
                  <q-btn
                    label="edit"
                    outline
                    dense
                    class="q-py-0 q-px-md whiteney_medium ls1 q-mr-md font13 lightgreen"
                    @click="editexpanded = !editexpanded"
                  />
                  <q-btn
                    label="Remove"
                    outline
                    dense
                    unelevated
                    @click="confirmdialog = true"
                    class="q-py-0 q-px-md whiteney_medium ls1 font13 lightgreen"
                  />
                </div>
                <div>
                  <q-slide-transition class="edit-address">
                    <div v-show="editexpanded">
                      <div class="q-py-md">
                        <form>
                          <label class="whiteney_medium d-block q-mb-sm">CONTACT DETAILS</label>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdname"
                                dense
                                placeholder="Your Name"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdphone"
                                dense
                                placeholder="Mobile Number"
                                prefix="+91"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are Allowed'),
                          $rules.minLength(10, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(10, 'More than 10 numbers not allowed')
                        ]"
                              />
                            </div>
                          </div>
                          <label class="whiteney_medium d-block q-mb-sm">ADDRESS DETAILS</label>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdpincode"
                                dense
                                placeholder="Pincode"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are allowed'),
                          $rules.minLength(6, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(6, 'More than 6 numbers not allowed')
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdaddress"
                                dense
                                placeholder="Address (House No, Street, Area, Landmark)"
                                :rules="[
                          $rules.required('Field is Required'),
                        ]"
                              />
                            </div>
                          </div>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdtown"
                                dense
                                placeholder="Town / City"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mddistrict"
                                dense
                                placeholder="District"
                                readonly
                                :rules="[
                          $rules.required('Field is Required'),
                        ]"
                              >
                                <template v-slot:append>
                                  <q-icon
                                    name="check_circle"
                                    class="lightgreen"
                                  />
                                </template>
                              </q-input>
                            </div>
                          </div>
                          <div class="row q-col-gutter-x-md">
                            <div class="col">
                              <q-btn
                                label="Save Address"
                                unelevated
                                class="full-width bglightgreen"
                              />
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </q-slide-transition>
                </div>
              </q-item-section>
            </q-item>

          </div>

          <div
            class="q-pt-lg q-px-md q-pb-lg border_light2 q-mb-md"
            :class="{'mobile-block': is_lt_sm}"
          >
            <q-item
              tag="label"
              class="address_radio"
            >
              <q-item-section
                avatar
                top
              >
                <q-radio
                  v-model="address"
                  val="Address 2"
                  color="teal-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="d-block q-mb-sm whiteney_medium">Nayan Rathod</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12">Spring Filed, Waghodia road, 171</q-item-label>
                <q-item-label class="d-block text-weight-light font_nunito font12 q-mb-sm">Baroda, Gujarat, 390019</q-item-label>
                <q-item-label class="whiteney_light font13 q-mb-md">Mobile: <b>9662007745</b></q-item-label>
                <div class="flex">
                  <q-btn
                    label="edit"
                    outline
                    dense
                    class="q-py-0 q-px-md whiteney_medium ls1 q-mr-md font13 lightgreen"
                    @click="editexpanded = !editexpanded"
                  />
                  <q-btn
                    label="Remove"
                    outline
                    dense
                    unelevated
                    @click="confirmdialog = true"
                    class="q-py-0 q-px-md whiteney_medium ls1 font13 lightgreen"
                  />
                </div>
                <div>
                  <q-slide-transition class="edit-address">
                    <div v-show="editexpanded">
                      <div class="q-py-md">
                        <form>
                          <label class="whiteney_medium d-block q-mb-sm">CONTACT DETAILS</label>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdname"
                                dense
                                placeholder="Your Name"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdphone"
                                dense
                                placeholder="Mobile Number"
                                prefix="+91"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are Allowed'),
                          $rules.minLength(10, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(10, 'More than 10 numbers not allowed')
                        ]"
                              />
                            </div>
                          </div>
                          <label class="whiteney_medium d-block q-mb-sm">ADDRESS DETAILS</label>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdpincode"
                                dense
                                placeholder="Pincode"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are allowed'),
                          $rules.minLength(6, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(6, 'More than 6 numbers not allowed')
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdaddress"
                                dense
                                placeholder="Address (House No, Street, Area, Landmark)"
                                :rules="[
                          $rules.required('Field is Required'),
                        ]"
                              />
                            </div>
                          </div>
                          <div class="row q-col-gutter-x-md">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="form.mdtown"
                                dense
                                placeholder="Town / City"
                                :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                              />
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <q-input
                                outlined
                                v-model="
                              form.mddistrict"
                                dense
                                placeholder="District"
                                readonly
                                :rules="[
                          $rules.required('Field is Required'),
                        ]"
                              >
                                <template v-slot:append>
                                  <q-icon
                                    name="check_circle"
                                    class="lightgreen"
                                  />
                                </template>
                              </q-input>
                            </div>
                          </div>
                          <div class="row q-col-gutter-x-md">
                            <div class="col">
                              <q-btn
                                label="Save Address"
                                unelevated
                                class="full-width bglightgreen"
                              />
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </q-slide-transition>
                </div>
              </q-item-section>
            </q-item>

          </div>

          <div
            class="row  border_light2"
            :class="{'mobile-block q-mb-md': is_lt_sm}"
          >

            <q-expansion-item
              v-model="addressexpanded"
              icon="add"
              label="Add new Address"
              class="full-width "
              header-class="q-py-md lightgreen whiteney_medium"
            >
              <div class="q-pa-md">
                <form>
                  <label class="whiteney_medium d-block q-mb-sm">CONTACT DETAILS</label>
                  <div class="row q-col-gutter-x-md">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mdname"
                        dense
                        placeholder="Your Name"
                        :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                      />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mdphone"
                        dense
                        placeholder="Mobile Number"
                        prefix="+91"
                        :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are Allowed'),
                          $rules.minLength(10, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(10, 'More than 10 numbers not allowed')
                        ]"
                      />
                    </div>
                  </div>
                  <label class="whiteney_medium d-block q-mb-sm">ADDRESS DETAILS</label>
                  <div class="row q-col-gutter-x-md">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mdpincode"
                        dense
                        placeholder="Pincode"
                        :rules="[
                          $rules.required('Field is Required'),
                          $rules.numeric('Only Numbers are allowed'),
                          $rules.minLength(6, 'Less than 6 numbers not allowed'),
                          $rules.maxLength(6, 'More than 6 numbers not allowed')
                        ]"
                      />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mdaddress"
                        dense
                        placeholder="Address (House No, Street, Area, Landmark)"
                        :rules="[
                          $rules.required('Field is Required'),
                        ]"
                      />
                    </div>
                  </div>
                  <div class="row q-col-gutter-x-md">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mdtown"
                        dense
                        placeholder="Town / City"
                        :rules="[
                          $rules.required('Field is Required'),
                          $rules.alpha('Only Characters are allowed'),
                        ]"
                      />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <q-input
                        outlined
                        v-model="form.mddistrict"
                        dense
                        placeholder="District"
                        readonly
                        :rules="[
                          $rules.required('Field is Required'),
                        ]"
                      >
                        <template v-slot:append>
                          <q-icon
                            name="check_circle"
                            class="lightgreen"
                          />
                        </template>
                      </q-input>
                    </div>
                  </div>
                  <div class="row q-col-gutter-x-md">
                    <div class="col">
                      <q-btn
                        label="Save Address"
                        unelevated
                        class="full-width bglightgreen"
                      />
                    </div>
                  </div>
                </form>
              </div>
            </q-expansion-item>

          </div>

        </div>

      </div>
    </div>

    <q-dialog v-model="confirmdialog">
      <q-card style="width: 400px">
        <q-card-section>
          <div class="text-h6">Confirm Remove Address</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
          Are you sure you want to remove this address
        </q-card-section>

        <q-card-actions
          align="right"
          class="bg-white text-teal"
        >

          <q-btn
            flat
            label="No"
            v-close-popup
            class="lightbreen"
          />
          <q-btn
            flat
            label="Yes"
            v-close-popup
            class="lightbreen"
          />
        </q-card-actions>
      </q-card>
    </q-dialog>

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
      addressexpanded: false,
      editexpanded: '',
      address: 'Address 1',
      mdcoupon: '',
      form: {
        mdname: '',
        mdphone: '',
        mdpincode: '',
        mdaddress: '',
        mdtown: '',
        mddistrict: 'Vadodara',
      },
      confirmdialog: false,
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