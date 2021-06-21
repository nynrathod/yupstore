<template>

  <q-page class="items-center justify-evenly overflow-hidden cart-page">

    <div
      class="container q-pa-md"
      style="max-width: 1100px;"
    >
      <div class="row">
        <div
          class="col-md-3 col-sm-12 col-xs-12"
          :class="{'q-pr-xs': is_gt_sm}"
        >

          <UserSidebar v-if="$q.screen.gt.sm" />

        </div>

        <div
          class="col-md-8 col-sm-12 col-xs-12 "
          style="border-left: 1px solid #eee;"
          :class="{'q-pl-lg': is_gt_sm}"
        >
          <div
            class="row "
            :class="{'q-col-gutter-x-lg pt35': is_gt_sm,  'pt10 mobile-block q-mt-md': is_lt_md}"
          >
            <div class="col-12">
              <h6 class="q-my-xs">Personal Info</h6>
              <q-separator />
              <div class=" myshadow bg-white q-my-md">
                <div class="row q-col-gutter-x-lg q-pt-md ">
                  <div class="col-12">
                    <q-input
                      outlined
                      v-model="text"
                      class="q-mb-lg"
                      placeholder="Full Name"
                      color="dark"
                    >
                      <template v-slot:prepend>
                        <q-icon
                          name="tag"
                          color="dark"
                        />
                      </template>
                    </q-input>
                  </div>
                  <div class="col-12">
                    <q-input
                      outlined
                      v-model="text"
                      class="q-mb-lg"
                      placeholder="Email"
                      color="dark"
                    >
                      <template v-slot:prepend>
                        <q-icon
                          name="o_email"
                          color="dark"
                        />
                      </template>
                    </q-input>
                  </div>
                  <div class="col-12">
                    <q-input
                      outlined
                      v-model="text"
                      class="q-mb-lg"
                      placeholder="Mobile No"
                      color="dark"
                    >
                      <template v-slot:prepend>
                        <q-icon
                          name="stay_current_portrait"
                          color="dark"
                        />
                      </template>
                    </q-input>
                  </div>

                  <div class="col-12">
                    <q-input
                      outlined
                      v-model="text"
                      class="q-mb-lg"
                      placeholder="Alternate Mobile No"
                      color="dark"
                    >
                      <template v-slot:prepend>
                        <q-icon
                          name="stay_current_portrait"
                          color="dark"
                        />
                      </template>
                    </q-input>
                  </div>
                  <div class="col-12">
                    <!-- <label class="text-caption d-block q-mb-sm">Gender</label> -->
                    <q-btn-toggle
                      v-model="model"
                      spread
                      no-caps
                      toggle-color="primary"
                      color="white"
                      text-color="black"
                      class="q-mb-lg"
                      outline
                      padding="12px"
                      :options="[
                      {label: 'Male', value: 'one'},
                      {label: 'Female', value: 'two'}
                    ]"
                    />

                  </div>
                  <div class="col-12">
                    <q-input
                      outlined
                      v-model="text"
                      class="q-mb-lg"
                      placeholder="Birthdate"
                      color="dark"
                    >
                      <template v-slot:prepend>
                        <q-icon
                          name="cake"
                          color="dark"
                        />
                      </template>
                    </q-input>
                  </div>

                  <div class="col-12">
                    <q-btn
                      unelevated
                      color="primary"
                      label="save"
                      class="bglightgreen full-width"
                      padding="12px"
                    />
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </q-page>

</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";
import UserSidebar from "src/components/UserSidebar.vue";

export default {
  name: "GoogleNewsLayout",
  components: { UserSidebar },
  data () {
    return {
      text: '',
      text1: 'Product 1',
      text2: 'New Arrival',
      text3: '45 ₹',
      text4: false,
      text5: '5%',
      text6: 'labls547s14',
      text7: '2 Kg',
      editor: '',
      model: 'In Stock',
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
  methods: {
    onClear () {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
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
};
</script>

<style lang="scss">
@import "../css/typography.scss";
@import "../css/app.scss";
</style>