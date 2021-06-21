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
        <q-breadcrumbs
          style="color: #282c3f;"
          active-color="text-grey-6"
          gutter="sm"
          class="q-pb-xs pt35"
        >
          <q-breadcrumbs-el label="Home" />
          <q-breadcrumbs-el label="Components" />
          <q-breadcrumbs-el
            label="Breadcrumbs"
            class="text-weight-bold"
          />
        </q-breadcrumbs>
        <div
          class="row q-col-gutter-x-sm align_baseline"
          :class="{'pt10': is_lt_md}"
        >
          <div class="col-8">

            <h2 class="q-my-xs font35 font_600">Order #6467 <q-chip
                square
                class="ls1 font12"
              >PAID </q-chip>
            </h2>
            <span
              class="lsp3"
              style="color: #7a92a5;"
            >Place on 3rd May, 2021 @ 15:20:32 PM</span>
          </div>
          <q-space />
          <div class="col">
            <q-btn
              label="Download Invoice"
              color="primary"
              outline
              rounded
              class="font_600"
            />
          </div>
        </div>

        <div
          class="row q-col-gutter-x-lg "
          :class="{'pt35': is_gt_sm, 'pt10': is_lt_md}"
        >

          <div class="col-8 q-pr-lg">

            <q-markup-table class="no-shadow">
              <thead>
                <tr>
                  <th class="text-left font_600"><span class="font16">Image</span></th>
                  <th class="text-left font_600"><span class="font16">Product</span></th>
                  <th class="text-center font_600"><span class="font16">Unit Price</span></th>
                  <th class="text-center font_600"><span class="font16">Quantity</span></th>
                  <th class="text-center font_600"><span class="font16">Total</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-left">
                    <img
                      src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
                      style="width: 50px"
                    />
                  </td>
                  <td class="text-left"><span class="font16 text-grey-8">Syngonium White Butterfly Plant</span> <span
                      class="d-block"
                      style="color: #7a92a5;"
                    >SKU: 1456</span></td>
                  <td class="text-center text-grey-8">₹ 1599</td>
                  <td class="text-center text-grey-8">X 2</td>
                  <td class="text-center text-grey-8">₹ 3198</td>
                </tr>
              </tbody>
            </q-markup-table>

            <q-separator class="q-mt-xl" />

            <div
              class=" q-mt-lg q-pa-md"
              :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
              style="border-radius: .8rem;"
            >
              <span class="text-subtitle2 d-block q-mb-md">Payment summery</span>
              <div class="row q-mb-md">
                <span class="font15 text-grey-8">Total MRP</span>
                <q-space />
                <span class="text-caption font15 text-grey-8">249.00</span>
              </div>
              <div class="row q-mb-md">
                <span class="font15 text-grey-8">Discount</span>
                <q-space />
                <span class="text-caption font15 text-grey-8">-49.00</span>
              </div>
              <div class="row q-mb-md">
                <span class="font15 text-grey-8">Delivery Charge</span>
                <q-space />
                <span class="text-caption font15 text-grey-8">49.00</span>
              </div>
              <div
                class="row q-pt-md"
                style="border-top: 1px solid #eee;"
              >
                <span class="font15 font_600 text-grey-8">Total Amount</span>
                <q-space />
                <span class="font15 font_600 text-grey-8">249.00</span>
              </div>
            </div>

            <q-separator class="q-mt-xl" />

            <div class="q-mt-xl">

              <q-timeline color="grey-8">

                <q-timeline-entry>
                  <q-input
                    outlined
                    v-model="text"
                  >
                    <template v-slot:append>
                      <q-btn
                        round
                        dense
                        flat
                        icon="done"
                      />
                    </template>
                  </q-input>

                </q-timeline-entry>

                <q-timeline-entry>
                  <template v-slot:title>
                    <span class="font15 font_quicksand font_600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>

                  </template>
                  <template v-slot:subtitle>
                    February 22, 1986
                  </template>
                </q-timeline-entry>
                <q-timeline-entry>
                  <template v-slot:title>
                    <span class="font15 font_quicksand font_600">Event Title</span>
                  </template>
                  <template v-slot:subtitle>
                    February 22, 1986
                  </template>
                </q-timeline-entry>

                <q-timeline-entry>
                  <template v-slot:title>
                    <span class="font15 font_quicksand font_600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>

                  </template>
                  <template v-slot:subtitle>
                    February 22, 1986
                  </template>
                </q-timeline-entry>
                <q-timeline-entry>
                  <template v-slot:title>
                    <span class="font15 font_quicksand font_600">Event Title</span>
                  </template>
                  <template v-slot:subtitle>
                    February 22, 1986
                  </template>
                </q-timeline-entry>

              </q-timeline>

            </div>
          </div>
          <div
            class=""
            :class="{'col-3': is_gt_md, 'col-4': is_lt_md}"
          >
            <div
              class="border_light2 q-mt-lg"
              :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
              style="border-radius: .4rem;"
            >
              <span class="font_600 d-block q-mb-sm q-pa-sm">Order Status</span>
              <q-separator />
              <div class="q-pa-md">
                <q-select
                  bottom-slots
                  outlined
                  v-model="orderstatus"
                  dense
                  :options="options"
                >

                  <template v-slot:after>
                    <q-btn
                      outline
                      dense
                      color="primary"
                      icon="arrow_forward_ios"
                      style="height: 38px;"
                    />
                  </template>
                </q-select>
              </div>

            </div>

            <div
              class="border_light2 q-mt-lg"
              :class="{'mobile-block q-px-md q-py-md q-mb-xl': is_lt_sm}"
              style="border-radius: .4rem;"
            >
              <span class="font_600 font20 d-block q-mb-sm q-px-md q-py-sm">Customer Info</span>
              <q-separator />
              <div class="q-pa-md">
                <q-item-label class="d-block font_700 text-dark">
                  <q-btn
                    unelevated
                    round
                    dense
                    color="grey-8"
                    label="NR"
                    class="q-mr-md"
                  >
                  </q-btn> Nayan Rathod
                </q-item-label>
                <q-separator class="q-my-md" />
                <q-item-label class="d-block q-mb-sm font_700">Shipping Address</q-item-label>
                <q-item-label class="d-block text-weight-light font13">171, Spring Filed</q-item-label>
                <q-item-label class="d-block text-weight-light font13">Waghodia road, Opp Gayatri Mandir,</q-item-label>
                <q-item-label class="d-block text-weight-light font13">Baroda, 390019,</q-item-label>
                <q-item-label class="d-block text-weight-light font13">Baroda, Gujarat</q-item-label>
                <q-separator class="q-my-md" />
                <q-item-label class="d-block q-mb-sm font_700">Contact Info</q-item-label>
                <q-item-label class=" font13 q-mb-sm font13">Mobile: 9662007745</q-item-label>
                <q-item-label class=" font13 q-mb-md font13">Email: nayan@mail.com</q-item-label>
              </div>

            </div>
          </div>

        </div>

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
      orderstatus: '',
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
              message: 'Submitted'
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