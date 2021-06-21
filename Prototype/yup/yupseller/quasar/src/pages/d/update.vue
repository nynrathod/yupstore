<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg-grey-1"
  >

    <q-page-container>
      <q-page
        class="q-page"
        :class="{'q-px-lg': is_gt_md, 'q-px-sm': is_lt_md}"
      >
        <form @submit.prevent.stop="onSubmit">
          <div
            class="row q-col-gutter-x-sm "
            :class="{'pt35': is_gt_sm, 'pt10': is_lt_md}"
          >

            <div class="col-8 q-pr-lg">
              <div class="myshadow bg-white">
                <q-breadcrumbs class="q-pl-lg q-pt-lg">
                  <q-breadcrumbs-el
                    label="Products"
                    class="text-grey-7"
                  />
                  <q-breadcrumbs-el
                    :label="form.mdname"
                    class="text-grey-6"
                  />
                </q-breadcrumbs>
                <div
                  class="row items-center q-pl-lg separator q-pb-sm"
                  style="
                                    border-radius: 5px !important;
                                "
                >
                  <div class="col-2">
                    <q-avatar
                      size="100px"
                      class="q-mr-md"
                    >
                      <img
                        src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/d16bfc25-fc5a-45ef-841f-79810c6ccaab_snapshot.jpg/v1/fit/w_356,h_356/file.jpg"
                        style="object-fit: contain;"
                      />
                    </q-avatar>
                  </div>
                  <div class="col-7">
                    <router-link :href="'https://quasar.dev/'+this.form.mdslug">
                      <span
                        class="text-h5 text-bold"
                        style="display: grid;"
                      >
                        {{this.form.mdname}}
                        <small class="text-caption text-blue-grey-4">http://localhost:8080/#/{{this.form.mdslug}}</small>
                      </span>
                    </router-link>
                  </div>
                  <div class="col-3">
                    <q-btn
                      outline
                      rounded
                      color="blue"
                      type="submit"
                      label="Update Product"
                      :loading="loading"
                      class="font_700"
                    >
                      <template v-slot:loading>
                        <q-spinner-facebook />
                      </template>
                    </q-btn>
                  </div>
                </div>
              </div>
              <template v-if="isloading">
                <div class=" myshadow bg-white q-my-md">
                  <q-card class="no-shadow">
                    <q-card-section class="text-grey">
                      <div class="row q-mb-xl q-pb-lg border_bottom_light2">
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="200px"
                        />
                      </div>

                      <div class="row q-mb-xl">
                        <q-skeleton
                          type="text"
                          width="100px"
                          animation="fade"
                          height="20px"
                        />
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="100%"
                        />
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-6 q-pl-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <q-skeleton
                          animation="fade"
                          height="200px"
                          width="100%"
                        />
                      </div>

                    </q-card-section>
                  </q-card>
                </div>
                <div class=" myshadow bg-white q-my-md">
                  <q-card class="no-shadow">
                    <q-card-section class="text-grey">
                      <div class="row q-mb-xl q-pb-lg border_bottom_light2">
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="200px"
                        />
                      </div>

                      <div class="row q-mb-xl">
                        <q-skeleton
                          type="text"
                          width="100px"
                          animation="fade"
                          height="20px"
                        />
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="100%"
                        />
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-6 q-pl-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <q-skeleton
                          animation="fade"
                          height="200px"
                          width="100%"
                        />
                      </div>

                    </q-card-section>
                  </q-card>
                </div>
                <div class=" myshadow bg-white q-my-md">
                  <q-card class="no-shadow">
                    <q-card-section class="text-grey">
                      <div class="row q-mb-xl q-pb-lg border_bottom_light2">
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="200px"
                        />
                      </div>

                      <div class="row q-mb-xl">
                        <q-skeleton
                          type="text"
                          width="100px"
                          animation="fade"
                          height="20px"
                        />
                        <q-skeleton
                          animation="fade"
                          height="30px"
                          width="100%"
                        />
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-6 q-pl-md">
                          <q-skeleton
                            type="text"
                            width="100px"
                            animation="fade"
                            height="20px"
                          />
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <div class="col-6 q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md q-pr-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                        <div class="col-3 q-pl-md">
                          <q-skeleton
                            animation="fade"
                            height="30px"
                            width="100%"
                          />
                        </div>
                      </div>
                      <div class="row q-mb-xl">
                        <q-skeleton
                          animation="fade"
                          height="200px"
                          width="100%"
                        />
                      </div>

                    </q-card-section>
                  </q-card>
                </div>
              </template>

              <template v-else>

                <div class=" myshadow bg-white q-my-md">

                  <q-list class="rounded-borders">
                    <q-expansion-item
                      expand-separator
                      label="Products Info"
                      class="text-blue text-h6"
                      default-opened
                    >
                      <q-card>
                        <q-card-section class="text-grey">

                          <div class="row">
                            <div class="col-12"><label class="text-caption">Product Name</label>
                              <q-input
                                v-model="form.mduid"
                                type="text"
                                ref="name"
                                color="blue"
                                class="hidden"
                              />
                              <q-input
                                v-model="form.mdname"
                                type="text"
                                ref="name"
                                outlined
                                dense
                                placeholder="Enter Product Name Here"
                                color="blue"
                                input-class="text-weight-bold"
                                :rules="[
                                $rules.required('Field is Required'),
                              ]"
                              />
                            </div>

                          </div>

                          <div class="row">
                            <div class="col-6 q-pr-md"><label class="text-caption">Category</label>
                              <q-select
                                v-model="form.mdcategory"
                                multiple
                                :options="catoptions"
                                outlined
                                dense
                                :rules="[
                                $rules.required('Field is Required'),
                              ]"
                              />

                            </div>
                            <div class="col-6 q-pl-md"><label class="text-caption">Tags</label>
                              <q-input
                                v-model="form.mdtag"
                                type="text"
                                ref="tags"
                                outlined
                                dense
                                placeholder="tags"
                                color="blue"
                              />
                              <!-- <q-select
                              v-model="form.mdtag"
                              ref="tag"
                              use-input
                              use-chips
                              multiple
                              outlined
                              dense
                              hide-dropdown-icon
                              input-debounce="0"
                              new-value-mode="add"
                            /> -->
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 q-pr-md"><label class="text-caption">Price</label>
                              <q-input
                                v-model="form.mdprice"
                                type="text"
                                ref="price"
                                outlined
                                dense
                                placeholder="Price"
                                color="blue"
                                :rules="[
                                $rules.required('Field is Required'),
                                $rules.numeric('Only Numbers Allow'),
                              ]"
                              />
                            </div>
                            <div
                              v-if="form.mdsale"
                              class="col-3 q-pl-md"
                            ><label class="text-caption">Discount</label>
                              <q-input
                                v-model="form.mddiscount"
                                type="text"
                                ref="discount"
                                outlined
                                dense
                                placeholder="Label"
                                color="blue"
                                :rules="[
                                $rules.required('Field is Required'),
                                $rules.numeric('Only Numbers Allow'),
                              ]"
                              />
                            </div>
                            <div class="col-3 q-pl-md"><br>
                              <q-toggle
                                v-model="form.mdsale"
                                ref="sale"
                                checked-icon="check"
                                color="blue"
                                unchecked-icon="clear"
                              />
                              <label class="text-caption">On Sale</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 q-py-md q-gutter-sm">
                              <label class="text-caption">Description</label>
                              <q-editor
                                v-model="form.mddescription"
                                ref="description"
                                min-height="10rem"
                                style="font-size: 15px;"
                                class="text-grey-8"
                              />
                            </div>
                          </div>
                        </q-card-section>
                      </q-card>
                    </q-expansion-item>
                  </q-list>
                </div>

                <div class=" myshadow bg-white q-my-md">
                  <q-list class="rounded-borders">
                    <q-expansion-item
                      expand-separator
                      label="Inventory & Shipping"
                      class="text-blue text-h6"
                      default-opened
                    >
                      <q-card>
                        <q-card-section class="text-grey">
                          <div class="row">
                            <div class="col-6 q-pr-md">
                              <label class="text-caption">Stock Status</label>
                              <q-select
                                v-model="form.mdstock"
                                ref="stockstatus"
                                type="text"
                                outlined
                                :options="options"
                                dense
                                color="blue"
                              >
                              </q-select>
                            </div>
                            <div class="col-6">
                              <label class="text-caption">SKU</label>
                              <q-input
                                v-model="form.mdsku"
                                disable
                                readonly
                                type="text"
                                ref="sku"
                                outlined
                                dense
                                placeholder="SKU"
                                color="blue"
                                :rules="[
                                $rules.required('Field is Required'),
                                $rules.numeric('Only Numbers Allow | Whitespace Not allowed'),
                                $rules.minLength(4, 'Min 4 Numbers Allow'),
                                $rules.maxLength(8, 'Max 8 Numbers Allow')
                              ]"
                              />
                            </div>
                            <div class="col-6 q-pr-md">
                              <label class="text-caption">Weight</label>
                              <q-input
                                v-model="form.mdweight"
                                type="text"
                                ref="weight"
                                outlined
                                dense
                                placeholder="weight"
                                color="blue"
                                :rules="[
                                $rules.required('Field is Required'),
                                $rules.decimal('Only Numbers Allow'),
                              ]"
                              />
                            </div>
                            <div class="col-6">
                              <label class="text-caption">Stock Quantity</label>
                              <q-input
                                v-model="form.mdquantity"
                                type="number"
                                ref="quantity"
                                outlined
                                dense
                                placeholder="Quantity"
                                color="blue"
                                :rules="[
                                $rules.required('Field is Required'),
                                $rules.numeric('Only Numbers Allow'),
                              ]"
                              />
                            </div>
                          </div>
                        </q-card-section>
                      </q-card>
                    </q-expansion-item>
                  </q-list>
                </div>

                <div class=" myshadow bg-white q-my-md">
                  <q-list class="rounded-borders">
                    <q-expansion-item
                      expand-separator
                      label="Additional Info"
                      class="text-blue text-h6"
                      default-opened
                    >
                      <q-card>
                        <q-card-section class="text-grey">
                          <div class="row">
                            <div class="col-12 q-py-md q-gutter-sm">
                              <label class="text-caption">Products Info</label>
                              <q-editor
                                v-model="form.mdpinfo"
                                ref="pinfo"
                                min-height="10rem"
                                style="font-size: 15px;"
                                class="text-grey-8"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 q-py-md q-gutter-sm">
                              <label class="text-caption">Return & Refund Policy</label>
                              <q-editor
                                v-model="form.mdpreturn"
                                ref="return"
                                min-height="10rem"
                                style="font-size: 15px;"
                                class="text-grey-8"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 q-py-md q-gutter-sm">
                              <label class="text-caption">shipping Info</label>
                              <q-editor
                                v-model="form.mdshipping"
                                ref="shipping"
                                min-height="10rem"
                                style="font-size: 15px;"
                                class="text-grey-8"
                              />
                            </div>
                          </div>
                        </q-card-section>
                      </q-card>
                    </q-expansion-item>
                  </q-list>
                </div>
              </template>

            </div>
            <div
              class=""
              :class="{'col-3': is_gt_md, 'col-4': is_lt_md}"
            >

              <div
                class="myshadow"
                :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
                style="border-radius: .4rem;"
              >
                <span class="font_600 d-block q-mb-sm q-pa-sm">Product Image</span>
                <q-separator />
                <div class="q-pa-md">
                  <template v-if="isloadingimage">
                    <q-skeleton
                      animation="fade"
                      height="258px"
                    />
                    <q-skeleton
                      animation="fade"
                      height="50px"
                      class="q-mt-md"
                    />
                  </template>
                  <template v-else>
                    <div style=" background: #f7f7f7;">
                      <img
                        :src="singlefilepath"
                        style="width: 200px;"
                        class="d-block q-mx-auto"
                      >
                    </div>
                    <q-uploader
                      style="max-width: 100%"
                      :label="singlepicker"
                      :url="uploadsingle"
                      ref="uploadersingle"
                      @finish="finished"
                      class="q-mt-md"
                    />
                  </template>

                </div>

              </div>

              <div
                class="myshadow"
                :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
                style="border-radius: .4rem;"
              >
                <span class="font_600 d-block q-mb-sm q-mt-md q-pa-sm">Gallery Images</span>
                <q-separator />
                <div class="q-pa-md">
                  <template v-if="isloadingimage">
                    <div class="row">
                      <div
                        class="col"
                        v-for="n in 4"
                        :key="n"
                      >
                        <q-skeleton
                          animation="fade"
                          width="50px"
                          height="50px"
                        />
                      </div>
                    </div>

                    <q-skeleton
                      animation="fade"
                      height="50px"
                      class="q-mt-md"
                    />
                  </template>
                  <template v-else>
                    <draggable
                      v-model="gallerylist"
                      group="people"
                      @start="drag=true"
                      @end="drag=false"
                    >
                      <!-- <div
                    v-for="element in gallerylist"
                    :key="element.id"
                    style="float: left; margin-right:20px"
                  >{{element.name}} {{element.id}}</div> -->

                      <q-img
                        v-for="image in gallerylist"
                        src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
                        :key="image.id"
                        width="50px"
                        class="q-mr-md order_image"
                      >
                        <q-icon
                          name="close"
                          @click="deleteimage(image)"
                        />
                      </q-img>

                    </draggable>

                    <q-uploader
                      v-model="multiplefile"
                      style="max-width: 100%"
                      :label="multiplepicker"
                      batch
                      multiple
                      :url="uploadmultiple"
                      class="q-mt-md"
                    />
                  </template>

                </div>

              </div>
              <div class="q-gutter-y-md">

              </div>
            </div>

          </div>

        </form>
      </q-page>
      <!-- <router-view /> -->
    </q-page-container>
  </q-layout>
</template>

<script>

import Yup from '../../apis/Yup'
import { LocalStorage, SessionStorage } from 'quasar'
import draggable from 'vuedraggable'

import UserBanner from "src/components/UserBanner.vue"

import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";

export default {
  name: "GoogleNewsLayout",
  components: {
    draggable,
    UserBanner
  },
  data () {
    // const catoptions = []
    // for (let i = 0; i <= 100000; i++) {
    //   catoptions.push('Category ' + i)
    // }
    return {
      catoptions: ['Category 1', 'Category 2', 'Category 3', 'Category 4'],
      form: {
        mdname: '',
        mdtag: null,
        mdprice: '',
        mddiscount: '',
        mdsale: false,
        mddescription: '',
        mdpinfo: '',
        mdpreturn: '',
        mdshipping: '',
        mdweight: '',
        mdsku: '',
        mdquantity: '',
        mdstock: '',
        mduid: '',
        mdcategory: null,
        mdslug: '',
      },
      user: null,
      selected: [],
      mdsale: false,
      name: '',
      singlepicker: '',
      multiplepicker: '',
      files: null,
      singlefile: null,
      singlefilepath: '',
      multiplefilepath: [],
      multiplefile: [],
      success: '',
      file_path: null,
      // gallerylist: [
      //   {
      //     id: 1,
      //     name: 'asd',
      //   },
      //   {
      //     id: 2,
      //     name: 'asdy',
      //   },
      //   {
      //     id: 3,
      //     name: 'asdg',
      //   },
      // ],
      loading: false,
      isloading: true,
      isloadingimage: true,
      isloadinggallery: true,
      options: [
        'In Stock', 'Out of Stock'
      ],
      leftDrawerOpen: false,
      search: "",
      showAdvanced: false,
      showDateOptions: false,
      exactPhrase: "",
      hasWords: "",
      excludeWords: "",
      byWebsite: "",
      byDate: "Any time",
      links1: [
        { icon: "inbox", text: "Inbox" },
        { icon: "notification_important", text: "Notification" },
      ],
      links2: [
        { icon: "dashboard", text: "Dashboard", to: "/attrect" },
        { icon: "storefront", text: "My Store", to: "/mystore" },
        { icon: "star_border", text: "My Products", to: "/products" },
        { icon: "notifications_active", text: "My Orders" },
      ],
      links3: [
        { icon: "tab", text: "My Site" },
        { icon: "topic", text: "Reports" },
        { icon: "settings", text: "Setting" },
      ],
      links4: [
        { icon: "tune", text: "Account Setting" },
        { icon: "receipt", text: "Billings" },
      ],
    };
  },


  isLoggedIn () {
    return LocalStorage.getItem("auth");
  },

  mounted () {

    // this.form.mduid = this.$store.state.example.username;
    this.isloading = true;
    this.user = this.$store.state.example.userid;

    this.$store.dispatch('example/fetchproductinfo', {
      sku: this.$route.params.sku,
    })
      .then((response) => {
        this.isloading = false

        // console.log(response.data[0].name);
        this.form.mdname = response.data[0].name
        this.form.mdtag = response.data[0].tag
        this.form.mdprice = response.data[0].price
        this.form.mddiscount = response.data[0].discount
        if (response.data[0].onsale == 1) {
          this.form.mdsale = true
        } else {
          this.form.mdsale = false
        }

        this.form.mddescription = response.data[0].description
        this.form.mdpinfo = response.data[0].product_info
        this.form.mdpreturn = response.data[0].return_info
        this.form.mdshipping = response.data[0].shipping_info
        this.form.mdweight = response.data[0].product_weight
        this.form.mdsku = this.$route.params.sku
        this.form.mdquantity = response.data[0].product_quantity
        this.form.mdstock = response.data[0].stock_status
        this.form.mduid = response.data[0].seller_id
        this.form.mdslug = (response.data[0].slug)
        this.form.mdcategory = (response.data[0].category.split(','))
        // this.catoptions = (response.data[0].category.split(','))
        console.log(response.data[0].category.split(','))

      })
      .catch(error => {
        // if (error.response.status === 422) {
        //   this.errors = error.response.data.errors
        // }
      })



    this.$store.dispatch('example/singlepicker', { sku: this.$route.params.sku, sellerid: this.$store.state.example.userid })
      .then((response) => {
        this.isloadingimage = false;
        if (response.data == false) {

          this.singlepicker = "Upload Main Image"
        }
        if (response.data.status == "true") {
          // alert('true')
          this.singlefilepath = 'https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg'
          this.singlepicker = "Change Main Image"
        }
      })
      .catch(error => {
        // this.$router.push('/login');
      })



    this.$store.dispatch('example/multiplepicker', { sku: this.$route.params.sku, sellerid: this.$store.state.example.userid })
      .then((response) => {
        if (response.data.status == "false") {

          this.multiplepicker = "Upload Gallery Image"
        }
        // console.log(response.data.data);
        if (response.data.status == "true") {
          // alert('true')
          this.multiplefilepath = response.data.data
          this.multiplepicker = "Add Gallery Image"
        }
      })
      .catch(error => {
        // this.$router.push('/login');
      })

  },
  methods: {
    onClear () {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
    // isLoggedIn () {
    //   return LocalStorage.getItem("auth");
    // },
    isOnSale () {
      mdsale = true
    },
    simulateProgress () {
      this.loading = true
    },
    onSubmit (e) {

      this.simulateProgress()
      this.$refs.name.validate()
      this.$refs.tags.validate()
      this.$refs.price.validate()
      this.$refs.sku.validate()
      this.$refs.stockstatus.validate()
      this.$refs.weight.validate()
      this.$refs.quantity.validate()
      this.$refs.discount.validate()

      if (this.$refs.name.hasError || this.$refs.tags.hasError || this.$refs.price.hasError || this.$refs.discount.hasError || this.$refs.sku.hasError || this.$refs.weight.hasError || this.$refs.quantity.hasError || this.$refs.stockstatus.hasError) {
        this.formHasError = true
        this.loading = false
        e.preventDefault()
      } else {

        this.addproduct()
      }
    },
    addproduct () {
      this.$store.dispatch('example/updateproduct', this.form)
        .then((response) => {
          this.$store.dispatch('example/fetchproductinfo', {
            sku: this.$route.params.sku,
          })
            .then((response) => {
              this.form.mdslug = (response.data[0].slug)
              this.loading = false
              this.$q.notify({
                icon: 'done',
                color: 'positive',
                message: 'Product Successfully Updated',
              })

            })
            .catch(error => {
              // if (error.response.status === 422) {
              //   this.errors = error.response.data.errors
              // }
            })

        })
        .catch(error => {
          // if (error.response.status === 422) {
          //   this.errors = error.response.data.errors
          // }
        })

      // Yup.addproduct(this.form)
      //   // this.$axios.get('https://flexaui.in/qusar-laravel-hybrid/laravel/api/data')

      //   .then((response) => {
      //     // this.list = response.data
      //     // console.warn(response.data)
      //     // this.$router.push('/Login')
      //     if (response.data.success) {
      //       this.loading = false
      //       this.$q.notify({
      //         icon: 'done',
      //         color: 'positive',
      //         message: 'Product Added'
      //       })

      //     }
      //   })
      //   .catch(error => {
      //     if (error.response.status === 422) {
      //       this.errors = error.response.data.errors
      //     }
      //   })
    },
    uploadsingle (files) {
      this.singlefile = files[0]
      let formData = new FormData()
      formData.append('singlefile', this.singlefile)
      for (let [key, value] of Object.entries(this.form)) {
        formData.append(key, value)
      }
      let mysku = "mysku"
      formData.append(mysku, this.$route.params.sku)
      // let sellerid = "sellerid"
      // formData.append(sellerid, this.$store.state.example.userid)
      let imagetype = "imagetype"
      formData.append(imagetype, 'main')

      let config = {
        headers: { 'content-type': 'multipart/form-data' }
      }


      this.$store.dispatch('example/uploadsingle', { formData, config })
        .then(function (response) {
          // currentObj.success = response.data.success;
          // this.singlefile = null
          this.$q.notify({
            icon: 'done',
            color: 'positive',
            message: `Image Uploaded`
          })
        })
        .catch(function (error) {
          // currentObj.output = error;
        });

    },
    finished () {
      this.$refs.uploadersingle.reset()
    },
    stopspin () {
      alert('asd')
    },
    uploadmultiple (files) {

      // this.multiplefile = files[0]
      // alert(files.length)
      let formData = new FormData()

      for (let i = 0; i < files.length; i++) {
        formData.append('multiplefile[' + i + ']', files[i])
        // alert('as')
        // console.log(formData);
      }


      // formData.append('multiplefile', this.multiplefile)
      for (let [key, value] of Object.entries(this.form)) {
        formData.append(key, value)
      }
      let mysku = "mysku"
      formData.append(mysku, this.$route.params.sku)
      // let sellerid = "sellerid"
      // formData.append(sellerid, this.$store.state.example.userid)
      let imagetype = "imagetype"
      formData.append(imagetype, 'gallery')

      let config = {
        headers: { 'content-type': 'multipart/form-data' }
      }
      this.$store.dispatch('example/uploadmultiple', { formData, config })
        .then(function (response) {
          // currentObj.success = response.data.success;
          // this.singlefile = null
        })
        .catch(function (error) {
          // currentObj.output = error;
        });
    },
    onChange (files) {
      this.file_path = files[0].name;
      // console.log(files[0])
      // alert(this.file_path)

    },
    uploadFile (files) {
      this.file_path = files[0]
      const fileData = new FormData()
      fileData.append('file_path ', this.file_path)
      //Replace http://localhost:8000 with your API URL
      const uploadFile = Yup.upload(fileData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }).then((response) => {
        // console.log(response.data);
        // Notify plugin needs to be installed
        // https://quasar.dev/quasar-plugins/notify#Installation
        this.$q.notify({
          type: 'possitive',
          message: `Image Uploaded`
        })
      });
    },
    deleteimage (image) {

      // console.log(image);
      // console.log(this.$store.state.example.gallery)

      // let dd = this.$delete(image, this.$store.state.example.gallery).
      //   console.log(dd);
      // this.$store.commit('example/deleteimage', image)
      this.$store.dispatch('example/deleteimage', { name: image.image, imageid: image.image_id, sku: image.product_sku, sellerid: image.seller_id })
        .then((response) => {
          this.$store.dispatch('example/multiplepicker', { sku: this.$route.params.sku, sellerid: this.$store.state.example.userid })
            .then((response) => {
              // console.log(response.data.data);
              let value = response.data.data
              this.$store.dispatch('example/galleryorder', { value })
            })
            .catch(error => {

            })

        })
        .catch(error => {

        })
    }
  },

  computed: {
    gallerylist: {
      get () {
        // return [
        //   {
        //     id: 1,
        //     name: 'asd'
        //   },
        //   {
        //     id: 2,
        //     name: 'llkh'
        //   },
        //   {
        //     id: 3,
        //     name: 'qew'
        //   },
        // ]
        return this.$store.state.example.gallery
      },
      set (value) {
        // console.log(value);

        this.$store.commit('example/multiplepicker', value)
        this.$store.dispatch('example/galleryorder', { value })
      }
    },
    uname () { return this.$store.state.example.username },
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
};
</script>

<style lang="scss">
@import "../../css/Admin.scss";

.q-expansion-item__container .q-item {
  border-bottom: 1px solid #eee;
}

.q-expansion-item__container .q-item {
  padding: 20px 36px !important;
}

.q-expansion-item__content {
  padding: 14px 20px !important;
}

.q-uploader__list {
  padding: 0;
  min-height: unset;
}
.q-uploader__file--img {
  margin: 8px;
}
.order_image:hover {
}
</style>