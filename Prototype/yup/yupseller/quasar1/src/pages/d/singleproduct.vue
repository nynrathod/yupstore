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
            class="row q-col-gutter-x-lg "
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
                    label="Product 1"
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
                    <span
                      class="text-h5 text-bold"
                      style="display: grid;"
                    >

                      Product 1
                      <small class="text-caption text-blue-grey-4">http://localhost:8080/#/product1</small>
                    </span>
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
                            <!-- <q-input
                              v-model="form.mduid"
                              type="text"
                              ref="name"
                              color="blue"
                              class="hidden"
                            /> -->
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

            </div>
            <div
              class=""
              :class="{'col-3': is_gt_md, 'col-4': is_lt_md}"
            >
              <div class="q-gutter-y-md">

                <form
                  @submit="formSubmit"
                  enctype="multipart/form-data"
                >
                  <!-- <q-file
                    outlined
                    ref="file"
                    v-model="files"
                    label="Pick files"
                    multiple
                    @input="onFileChange"
                  /> -->

                  <q-file
                    v-model="singlefile"
                    label="Gallery Images"
                    square
                    flat
                    counter
                    outlined
                    use-chips
                    clearable
                    multiple
                    max-files="1"
                    accept=".jpg,.png,.jpeg,.JPG,.PNG,.JPEG,.gif"
                    @rejected="onRejected"
                  />

                  <q-file
                    v-model="files"
                    label="Gallery Images"
                    square
                    flat
                    counter
                    outlined
                    use-chips
                    multiple
                    clearable
                    accept=".jpg,.png,.jpeg,.JPG,.PNG,.JPEG,.gif"
                    @rejected="onRejected"
                  />

                  <!-- <input
                    type="file"
                    multiple
                    @input="onFileChange"
                  > -->

                  <!-- <input
                    type="file"
                    class="form-control"
                    v-on:change="onFileChange"
                  > -->

                  <button class="btn btn-success">Submit</button>
                </form>

                <!-- <q-uploader
                  :factory="uploadFile"
                  label="Custom header"
                  multiple
                  class="full-width"
                  text-color="dark"
                  color="white"
                  @change="onChange"
                >
                  <template v-slot:header="scope">
                    <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                      <q-btn
                        v-if="scope.queuedFiles.length > 0"
                        icon="clear_all"
                        @click="scope.removeQueuedFiles"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Clear All</q-tooltip>
                      </q-btn>
                      <q-btn
                        v-if="scope.uploadedFiles.length > 0"
                        icon="done_all"
                        @click="scope.removeUploadedFiles"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Remove Uploaded Files</q-tooltip>
                      </q-btn>
                      <q-spinner
                        v-if="scope.isUploading"
                        class="q-uploader__spinner"
                      />
                      <div class="col">
                        <div class="q-uploader__title">Logo</div>
                        <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                      </div>

                      <q-btn
                        v-if="scope.canUpload"
                        icon="cloud_upload"
                        @click="scope.upload"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Upload Files</q-tooltip>
                      </q-btn>

                      <q-btn
                        v-if="scope.isUploading"
                        icon="clear"
                        @click="scope.abort"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Abort Upload</q-tooltip>
                      </q-btn>
                    </div>

                    <div class="text-center">
                      <q-btn
                        v-if="scope.canAddFiles"
                        type="a"
                        icon="add_box"
                        round
                        dense
                        flat
                        class="q-mx-auto"
                      >
                        <q-uploader-add-trigger />
                        <q-tooltip>Pick Files</q-tooltip>
                      </q-btn>
                    </div>

                  </template>

                </q-uploader>
                <q-uploader
                  url="http://localhost:4444/upload"
                  label="Custom header"
                  multiple
                  class="full-width"
                  text-color="dark"
                  color="white"
                >
                  <template v-slot:header="scope">
                    <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                      <q-btn
                        v-if="scope.queuedFiles.length > 0"
                        icon="clear_all"
                        @click="scope.removeQueuedFiles"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Clear All</q-tooltip>
                      </q-btn>
                      <q-btn
                        v-if="scope.uploadedFiles.length > 0"
                        icon="done_all"
                        @click="scope.removeUploadedFiles"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Remove Uploaded Files</q-tooltip>
                      </q-btn>
                      <q-spinner
                        v-if="scope.isUploading"
                        class="q-uploader__spinner"
                      />
                      <div class="col">
                        <div class="q-uploader__title">Favicon</div>
                        <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                      </div>

                      <q-btn
                        v-if="scope.canUpload"
                        icon="cloud_upload"
                        @click="scope.upload"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Upload Files</q-tooltip>
                      </q-btn>

                      <q-btn
                        v-if="scope.isUploading"
                        icon="clear"
                        @click="scope.abort"
                        round
                        dense
                        flat
                      >
                        <q-tooltip>Abort Upload</q-tooltip>
                      </q-btn>
                    </div>

                    <div class="text-center">
                      <q-btn
                        v-if="scope.canAddFiles"
                        type="a"
                        icon="add_box"
                        round
                        dense
                        flat
                        class="q-mx-auto"
                      >
                        <q-uploader-add-trigger />
                        <q-tooltip>Pick Files</q-tooltip>
                      </q-btn>
                    </div>

                  </template>

                </q-uploader> -->

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


import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";

export default {
  name: "GoogleNewsLayout",
  data () {
    const catoptions = []
    for (let i = 0; i <= 100000; i++) {
      catoptions.push('Category ' + i)
    }
    return {
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
      },
      catoptions: Object.freeze(catoptions),
      mdsale: false,
      name: '',
      files: null,
      singlefile: null,
      success: '',
      loading: false,
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
    this.$root.$on("login", () => {
      this.isLoggedIn = true;
    });

    this.isLoggedIn = !!LocalStorage.getItem("auth");

    // this.$store.dispatch('example/auth', this.form)
    //   .then((response) => {
    //     this.form.mduid = this.$store.state.example.userid;
    //   })


    Yup.auth().then(response => {
      this.user = response.data
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
      this.$store.dispatch('example/addproduct', this.form)
        .then((response) => {
          this.loading = false
          if (response) {
            this.$q.notify({
              icon: 'done',
              color: 'positive',
              message: 'Product Successfully Added',
            })

          }
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


    // onFileChange (e) {


    //   let formData = new FormData();
    //   formData.append('file', this.singlefile);


    //   console.log(e.target.files[0]);
    //   // this.file = e.target.files[0];
    //   // log(this.file);
    //   console.log(this.$refs.singlefile.files[0])




    //   for (const [name, value] of formData.entries()) {

    //     console.log(value.name);

    //   }


    // },
    // onFileChange (e) {
    //   console.log(e.target.files[0]);
    //   // this.file = e.target.files[0];

    // },
    formSubmit (evt) {
      evt.preventDefault();



      let formData = new FormData()
      // console.log(this.files.length);











      if (this.singlefile && this.singlefile.length > 0) {
        alert('asd')
        for (let i = 0; i < this.singlefile.length; i++) {
          formData.append('files[' + i + ']', this.singlefile[i])
          // console.log(formData);
        }
        for (let [key, value] of Object.entries(this.form)) {
          formData.append(key, value)
        }
        let config = {
          headers: { 'content-type': 'multipart/form-data' }
        }

        Yup.upload(formData, config)
          .then(function (response) {
            // currentObj.success = response.data.success;
            this.galleryupload()
          })
          .catch(function (error) {
            // currentObj.output = error;
          });
      }


    },
    galleryupload () {
      let formData = new FormData()
      if (this.files && this.files.length > 0) {
        // alert('asd')
        for (let i = 0; i < this.files.length; i++) {
          formData.append('files[' + i + ']', this.files[i])
          // console.log(formData);
        }
        for (let [key, value] of Object.entries(this.form)) {
          formData.append(key, value)
        }
        let config = {
          headers: { 'content-type': 'multipart/form-data' }
        }

        Yup.upload(formData, config)
          .then(function (response) {
            // currentObj.success = response.data.success;
          })
          .catch(function (error) {
            // currentObj.output = error;
          });
      }
    },
    onRejected (entries) {
      if (entries.length > 0) {
        switch (entries[0].failedPropValidation) {
          case 'max-file-size':
            this.$q.notify({
              position: 'top',
              type: 'negative',
              message: 'File exceeds 5MB.'
            })

            break

          case 'max-files':
            this.$q.notify({
              position: 'top',
              type: 'negative',
              message: 'You can upload up to 10 files.'
            })

            break
        }
      }
    }



  },

  computed: {
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
</style>