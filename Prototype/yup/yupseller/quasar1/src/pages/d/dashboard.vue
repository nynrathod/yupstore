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
        <div
          class="row q-col-gutter-x-lg "
          :class="{'pt35': is_gt_sm, 'pt10': is_lt_md}"
        >
          <div class="col-md-8 col-sm-12 col-xs-12">
            <UserBanner />
            <div class="myshadow q-mt-md">
              <div
                class="row q-pa-md"
                style="border-radius: 5px !important; border-bottom: 1px solid #ccc;"
              >
                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/d498eac7-72aa-4f7f-8e18-da172f8e6918.png"
                      />
                    </q-card-section>
                    <!-- <span>{{asd}}</span> -->
                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>
                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/4d1cb9bb-070e-4499-acba-c67e4e8de5b0.png"
                      />
                    </q-card-section>

                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>
                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/93f48e9d-ed13-463e-98bb-dfc63f938d02.png"
                      />
                    </q-card-section>

                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>
                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/ec47f297-190a-4ed2-bc3a-468a52d6bc9d.png"
                      />
                    </q-card-section>

                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>
                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/67a8a5a3-25ca-4f94-9a11-4b248119b90d.png"
                      />
                    </q-card-section>

                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>

                <q-card
                  class="my-card dash_quick_card full-width q-mb-md no-shadow"
                  flat
                  bordered
                  style="border-radius: 7px"
                >
                  <q-card-section horizontal>

                    <q-card-section class="col-2 flex flex-center">
                      <q-img
                        class="rounded-borders"
                        src="https://static.wixstatic.com/media/3531c989-8e9c-4083-8220-8ba009639481.png"
                      />
                    </q-card-section>

                    <q-card-section class="q-pt-xs">
                      <div class="text-subtitle2 font16 font_600 q-mt-sm q-mb-xs">Set Up Store Settings</div>
                      <div class="text-body2 font13 font_dark0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing
                      </div>
                      <router-link
                        to="#"
                        class="font13 font_700 d-block q-pt-sm"
                        style="color: #0f62e6;"
                      >
                        Setup Now
                      </router-link>
                    </q-card-section>

                  </q-card-section>

                  <q-separator />
                </q-card>

              </div>
            </div>
            <q-uploader
              style="max-width: 300px"
              label="Main Image"
              :url="getUrl"
            />

          </div>
          <div
            class=""
            :class="{'col-3': is_gt_md, 'col-4': is_lt_md}"
          >
            <div class="q-gutter-y-md">
              <div class="myshadow">
                <div style="border-radius: 5px !important;">

                  <span class="d-flex align_center q-px-lg admin_toggle q-py-sm font20 font_500 font_poppins">
                    Live Site Visibility
                    <q-space />
                    <template v-if="visibilityloaded">
                      <q-toggle
                        v-model="visibility"
                        checked-icon="check"
                        color="blue"
                        unchecked-icon="clear"
                        left-label
                        class=""
                        @input="sitetoggle()"
                      />
                    </template>
                    <template v-else>
                      <q-skeleton
                        animation="fade"
                        height="24px"
                        class="q-my-sm"
                        width="50px"
                      />
                    </template>
                  </span>

                </div>
              </div>
              <q-skeleton
                bordered
                height="50px"
              />
              <q-skeleton
                bordered
                height="50px"
              />
              <q-skeleton
                bordered
                height="250px"
              />
              <q-skeleton
                bordered
                height="250px"
              />
            </div>
          </div>
        </div>
      </q-page>
      <!-- <router-view /> -->
    </q-page-container>
  </q-layout>
</template>

<script>

import Yup from "../../apis/Yup";
import { LocalStorage, SessionStorage } from 'quasar'


import Sidebar from "src/components/AdminSidebar.vue"
import UserBanner from "src/components/UserBanner.vue"


import Api from '../../apis/Api'
import Cookie from 'js-cookie'

import Csrf from '../../apis/Csrf'


import {
  Loading,

  // optional!, for example below
  // with custom spinner
  QSpinnerGears
} from 'quasar'

export default {
  name: "GoogleNewsLayout",
  components: { Sidebar, UserBanner },
  data () {
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
      leftDrawerOpen: false,
      search: "",
      showAdvanced: false,
      showDateOptions: false,
      exactPhrase: "",
      hasWords: "",
      excludeWords: "",
      byWebsite: "",
      byDate: "Any time",
      visibility: true,
      visibilityloaded: false,
      isLoggedIn: false,
      file_path: null,
      window: {
        width: 0,
        height: 0
      },
      user: null,
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
  // isLoggedIn () {
  //   return LocalStorage.getItem("auth");
  // },

  mounted () {


    const token = Cookie.get('XSRF-TOKEN')


    // this.$root.$on("login", () => {
    //   this.isLoggedIn = true;
    // });

    // this.isLoggedIn = !!LocalStorage.getItem("auth");



    // this.$store.dispatch('example/auth', this.form)

    // Yup.auth().then(response => {

    //   this.user = response.data
    // })
    //   .catch(error => {

    //     // this.$router.push('/login');

    //   });






    // Yup.auth().then(response => {

    //   this.user = response.data
    // })
    //   .catch(error => {

    //     // this.$router.push('/login');

    //   });

    this.$store.dispatch('example/sitestatus')
      .then(response => {

        this.visibilityloaded = true
        if (this.$store.state.example.sitestatus == 'true') {
          this.visibility = true;
          this.visibilityloaded = true;
        } else {
          this.visibility = false;
        }
      })
      .catch(error => {

        // this.$router.push('/login');

      });

  },
  destroyed () {
    window.removeEventListener('resize', this.handleResize);
  },
  created () {
    window.addEventListener('resize', this.handleResize);
    this.handleResize();
    // Loading.show()
  },
  methods: {
    onClear () {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
    handleResize () {
      this.window.width = window.innerWidth;
      this.window.height = window.innerHeight;
    },
    sitetoggle () {
      // alert(this.visibility)
      this.$store.dispatch('example/sitetoggle', { visibility: String(this.visibility) })
        .then(response => {
          this.$store.dispatch('example/sitestatus')
        })
        .catch(error => {

        });

    },
    getUrl (files) {

      this.file_path = files[0]
      let formData = new FormData()
      formData.append('file_path', this.file_path)


      for (let [key, value] of Object.entries(this.form)) {
        formData.append(key, value)
      }

      let config = {
        headers: { 'content-type': 'multipart/form-data' }
      }

      Yup.test(formData, config).then(response => {

      })
        .catch(error => {

        });


      // alert(files.length)
    }

  },

  computed: {
    asd () {
      // return 'asd'
      return this.$store.getters['example/happyStaff']


      // return this.$store.getters.example.happyStaff
    },
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
</style>