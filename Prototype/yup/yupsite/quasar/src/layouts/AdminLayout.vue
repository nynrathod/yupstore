<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg-grey-1 container"
  >

    <q-header
      class="bg-white text-grey-8 border_bottom_light3"
      height-hint="64"
    >
      <q-slide-transition
        class="fixed-top bg-white"
        style="z-index: 999;"
        :duration="500"
      >
        <div
          class="position-absolute"
          v-show="searchbar"
        >
          <q-input
            placeholder="Search Here"
            class="searchbar_desktop"
          >
            <q-icon
              name="close"
              size="md"
              color="primary"
              @click="searchbar =! searchbar"
              style="postition: relative; top: 13px; right: 20px;"
            />
          </q-input>
        </div>
      </q-slide-transition>
      <q-toolbar class="GNL__toolbar">

        <q-btn
          flat
          @click="mobilmenudrawer = !mobilmenudrawer"
          round
          dense
          icon="menu"
          v-if="$q.screen.lt.md"
        />

        <q-btn
          flat
          rounded
          class="q-py-sm"
          color="primary"
          to="/"
        >
          <q-icon
            v-if="$q.screen.gt.sm"
            name="computer"
            size="md"
            color="primary"
          />

          <q-toolbar-title
            shrink
            class="text-weight-bold avenir_black"
            :class="{'font15':is_lt_sm}"
          >
            Yup Site
          </q-toolbar-title>
        </q-btn>

        <!-- <q-input

          class="GNL__toolbar-input no-shadow"
          outlined
          dense
          v-model="search"
          color="bg-grey-7"
          placeholder="Search for topics, locations & sources"
        >
          <template v-slot:prepend>
            <q-icon
              v-if="search === ''"
              name="search"
            />
            <q-icon
              v-else
              name="clear"
              class="cursor-pointer"
              @click="search = ''"
            />
          </template>
          <template v-slot:append>
            <q-btn
              flat
              dense
              round
              aria-label="Menu"
              icon="arrow_drop_down"
            >
              <q-menu
                anchor="bottom end"
                self="top end"
              >
                <div
                  class="q-pa-md"
                  style="width: 400px"
                >
                  <div class="text-body2 text-grey q-mb-md">
                    Narrow your search results
                  </div>

                  <div class="row items-center">
                    <div class="col-3 text-subtitle2 text-grey">
                      Exact phrase
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input
                        dense
                        v-model="exactPhrase"
                      />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Has words</div>
                    <div class="col-9 q-pl-md">
                      <q-input
                        dense
                        v-model="hasWords"
                      />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">
                      Exclude words
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input
                        dense
                        v-model="excludeWords"
                      />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Website</div>
                    <div class="col-9 q-pl-md">
                      <q-input
                        dense
                        v-model="byWebsite"
                      />
                    </div>

                    <div class="col-12 q-pt-lg row justify-end">
                      <q-btn
                        flat
                        dense
                        no-caps
                        color="grey-7"
                        size="md"
                        style="min-width: 68px"
                        label="Search"
                        v-close-popup
                      />
                      <q-btn
                        flat
                        dense
                        no-caps
                        color="grey-7"
                        size="md"
                        style="min-width: 68px"
                        @click="onClear"
                        label="Clear"
                        v-close-popup
                      />
                    </div>
                  </div>
                </div>
              </q-menu>
            </q-btn>
          </template>
        </q-input> -->

        <div
          class="row"
          v-if="$q.screen.gt.sm"
        >
          <router-link
            to="#"
            class="avenir_semibold text-dark lsp4 q-ml-md q-mr-xl"
          >New Arrivals</router-link>
          <router-link
            to="#"
            class="font_heebo font_500 lsp4 q-mr-xl"
          >Air Purifier Plants</router-link>
          <router-link
            to="#"
            class="font_heebo font_500 lsp4 q-mr-xl"
          >Indoor Plants</router-link>
          <router-link
            to="#"
            class="font_heebo font_500 lsp4 q-mr-xl"
          >Flowering Plants</router-link>
          <router-link
            to="#"
            class="font_heebo font_500 lsp4 q-mr-xl"
          >Pet-Friendly Plants</router-link>
          <router-link
            to="#"
            class="font_heebo font_500 lsp4 q-mr-xl"
          >Office Plants</router-link>

        </div>

        <q-space />

        <div class="q-gutter-sm row items-center no-wrap">
          <q-btn
            round
            dense
            flat
            color="text-grey-7"
            icon="person_outline"
            size="17px"
            class="header_icon"
          >
            <q-tooltip>Google Apps</q-tooltip>
          </q-btn>
          <q-btn
            @click="searchbar =! searchbar"
            round
            dense
            flat
            color="grey-8"
            icon="search"
            size="17px"
            class="header_icon"
          >
          </q-btn>

          <q-btn
            round
            dense
            flat
            color="grey-8"
            icon="o_local_mall"
            size="16px"
            class="header_icon"
          >

          </q-btn>

        </div>
      </q-toolbar>

      <q-drawer
        v-model="mobilmenudrawer"
        :width="200"
        v-if="$q.screen.lt.md"
      >
        <q-scroll-area class="fit">
          <q-list
            padding
            class="menu-list"
          >
            <q-item
              clickable
              v-ripple
            >
              <q-item-section avatar>
                <q-icon name="inbox" />
              </q-item-section>

              <q-item-section>
                Inbox
              </q-item-section>
            </q-item>

            <q-item
              active
              clickable
              v-ripple
            >
              <q-item-section avatar>
                <q-icon name="star" />
              </q-item-section>

              <q-item-section>
                Star
              </q-item-section>
            </q-item>

            <q-item
              clickable
              v-ripple
            >
              <q-item-section avatar>
                <q-icon name="send" />
              </q-item-section>

              <q-item-section>
                Send
              </q-item-section>
            </q-item>

            <q-item
              clickable
              v-ripple
            >
              <q-item-section avatar>
                <q-icon name="drafts" />
              </q-item-section>

              <q-item-section>
                Drafts
              </q-item-section>
            </q-item>
          </q-list>
        </q-scroll-area>
      </q-drawer>

    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

    <Footer />

  </q-layout>
</template>

<script>
import AdminHeader from "src/components/AdminHeader.vue";
import Adminsidebar from "src/components/Adminsidebar.vue";
import Footer from "src/components/Footer.vue";

import User from "../apis/Yup";
import { LocalStorage, SessionStorage } from 'quasar'


import { Platform } from 'quasar'


let redirectto;
let platforms;
if (Platform.is.mobile) {
  redirectto = "BlankLayout.vue"
  platforms = "m"
}
else {
  redirectto = "AdminLayout.vue"
  platforms = "d"
}

export default {
  name: "Admin",
  components: { AdminHeader, Adminsidebar, Footer },
  data () {
    return {
      mobilmenudrawer: false,
      search: "",
      showAdvanced: false,
      showDateOptions: false,
      exactPhrase: "",
      hasWords: "",
      excludeWords: "",
      byWebsite: "",
      byDate: "Any time",
      isLoggedIn: false,
      searchbar: false,
      links1: [
        { icon: "inbox", text: "Inbox" },
        { icon: "notification_important", text: "Notification" },
      ],
      links2: [
        { icon: "dashboard", text: "Dashboard", to: "/dashboard" },
        { icon: "storefront", text: "My Store", to: "/mystore" },
        { icon: "star_border", text: "My Products", to: "/products" },
        { icon: "notifications_active", text: "My Orders", to: "/My Orders" },
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
    isLoggedIn () {
      return LocalStorage.getItem("auth");
    },
    logout () {
      User.logout().then(() => {
        localStorage.removeItem("auth")
        this.isLoggedIn = false
        this.$router.push('/login')
      });
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
};

</script>

<style lang="scss">
@import "../css/typography.scss";

body {
  // font-family: "Montserrat", sans-serif;
  // font-family: "Oswald", sans-serif;
  // font-family: "Nunito", sans-serif;
  // font-family: "Poppins", sans-serif;
  // font-family: "Quicksand", sans-serif;
  // font-family: "Roboto", sans-serif;
}
</style>
