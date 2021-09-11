<template>
  <q-layout
    view="hHh Lpr lff"
    class="bg-grey-1 container"
    style="height: 300px"
  >
   <!-- <q-header
      elevated
      class="bg-white text-grey-8"
      height-hint="64"
    >
      <q-toolbar class="GNL__toolbar">
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
          class="q-mr-sm po"
        />

        <q-btn
          v-if="$q.screen.gt.xs"
          flat
          rounded
          class="q-py-sm"
          color="primary"
          to="/admin"
        >
          <q-icon
            name="computer"
            size="md"
            color="primary"
          />

          <q-toolbar-title
            shrink
            class="text-weight-bold"
          >
            ABCD
          </q-toolbar-title>
        </q-btn>

        <q-space />

        <q-input
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
        </q-input>

        <q-space />

        <div class="q-gutter-sm row items-center no-wrap">
          <q-btn
            v-if="$q.screen.gt.sm"
            round
            dense
            flat
            color="text-grey-7"
            icon="apps"
          >
            <q-tooltip>Google Apps</q-tooltip>
          </q-btn>
          <q-btn
            round
            dense
            flat
            color="grey-8"
            icon="notifications"
          >
            <q-badge
              color="red"
              text-color="white"
              floating
            > 2 </q-badge>
            <q-tooltip>Notifications</q-tooltip>
          </q-btn>
          <q-btn
            round
            flat
          >
            <q-avatar size="26px">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
            <q-menu
              fit
              class="q-mt-sm"
            >
              <q-list style="min-width: 100px">
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="account_balance" />
                  </q-item-section>
                  <q-item-section>Account</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="storefront" />
                  </q-item-section>
                  <q-item-section>Orders</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="favorite_border" />
                  </q-item-section>
                  <q-item-section>Wishlist</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="person" />
                  </q-item-section>
                  <q-item-section>Profile</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="settings" />
                  </q-item-section>
                  <q-item-section>Setting</q-item-section>
                </q-item>
                <q-item
                  clickable
                  @click.prevent="logout"
                >
                  <q-item-section avatar>
                    <q-icon name="logout" />
                  </q-item-section>
                  <q-item-section>Logout</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section>Help &amp; Feedback</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
            <q-tooltip>Account</q-tooltip>
          </q-btn>
        </div>
      </q-toolbar> 
    </q-header> -->

    <!-- <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      content-class="shop_drawer"
      :width="280"
      breakpoint="1440"
    >
      <q-scroll-area class="fit">
        <q-list
          padding
          class="text-grey-8"
        >
          <q-item
            class="GNL__drawer-item"
            v-ripple
            clickable
          >
            <q-btn
              rounded
              dense
              flat
              style="color: rgb(26 127 226)"
            >
              <q-avatar
                size="26px"
                class="q-mr-md"
              >
                <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
              </q-avatar>
            </q-btn>
            <q-item-section>
              <q-item-label class="font_700">Atttrect</q-item-label>
              <q-item-label
                caption
                class="text-weight-medium"
              >Owner</q-item-label>
            </q-item-section>
          </q-item>
          <q-separator
            inset
            class="q-my-sm"
          />

          <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links1"
            :key="link.text"
            clickable
            :to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label class="font_700">{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator
            inset
            class="q-my-sm"
          />

          <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links2"
            :key="link.text"
            clickable
            :to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label class="font_700">{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator
            inset
            class="q-my-sm"
          />

          <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links3"
            :key="link.text"
            clickable
            :to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label class="font_700">{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>
    </q-drawer> -->

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
import AdminHeader from "src/components/AdminHeader.vue";
import Adminsidebar from "src/components/Adminsidebar.vue";

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
  components: { AdminHeader, Adminsidebar },
  data () {
    return {
      leftDrawerOpen: false,
      search: "",
      showAdvanced: false,
      showDateOptions: false,
      exactPhrase: "",
      hasWords: "",
      excludeWords: "",
      byWebsite: "",
      byDate: "Any time",
      isLoggedIn: false,
      links1: [
        { icon: "dashboard", text: "Dashboard", to: "/dashboard" },
        { icon: "star_border", text: "My Products", to: "/products" },
        { icon: "notifications_active", text: "My Orders", to: "/orders" },
      ],
      links2: [
        { icon: "tab", text: "My Site", to: "/mystore" },
        { icon: "topic", text: "Pages" },
        { icon: "storefront", text: "Store Setting", to: "/mystore" },
        { icon: "settings", text: "Website content", to: "/website-content" },
      ],
      links3: [
        { icon: "tune", text: "Customers", to: "/My Orders" },
        { icon: "topic", text: "Reports", to: "/My Orders" },
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
  .font_lato {
    // font-family: "Lato", sans-serif;
  }
}
.q-drawer--left {
  left: unset;
}
</style>
