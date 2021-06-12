<template>
  <q-layout view="hHh lpR fFf" class="bg-grey-1">
    <q-header elevated class="bg-white text-grey-8" height-hint="64">
      <q-toolbar class="GNL__toolbar">
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
          class="q-mr-sm"
        />

        <q-btn
          v-if="$q.screen.gt.xs"
          flat
          rounded
          class="q-py-sm"
          style="color: rgb(26 127 226)"
        >
          <q-icon
            name="o_local_mall"
            size="md"
            style="color: rgb(26 127 226)"
          />

          <q-toolbar-title shrink class="text-weight-bold">
            Yup Store
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
            <q-icon v-if="search === ''" name="search" />
            <q-icon
              v-else
              name="clear"
              class="cursor-pointer"
              @click="search = ''"
            />
          </template>
          <template v-slot:append>
            <q-btn flat dense round aria-label="Menu" icon="arrow_drop_down">
              <q-menu anchor="bottom end" self="top end">
                <div class="q-pa-md" style="width: 400px">
                  <div class="text-body2 text-grey q-mb-md">
                    Narrow your search results
                  </div>

                  <div class="row items-center">
                    <div class="col-3 text-subtitle2 text-grey">
                      Exact phrase
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="exactPhrase" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Has words</div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="hasWords" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">
                      Exclude words
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="excludeWords" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Website</div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="byWebsite" />
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
          <q-btn round dense flat color="grey-8" icon="notifications">
            <q-badge color="red" text-color="white" floating> 2 </q-badge>
            <q-tooltip>Notifications</q-tooltip>
          </q-btn>
          <q-btn round flat>
            <q-avatar size="26px">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
            <q-menu fit class="q-mt-sm">
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
                <q-item clickable>
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
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      content-class="shop_drawer"
      :width="280"
    >
      <q-scroll-area class="fit">
        <q-list padding class="text-grey-8">
          <q-item class="GNL__drawer-item" v-ripple clickable>
            <q-btn rounded dense flat style="color: rgb(26 127 226)">
              <q-avatar size="26px" class="q-mr-md">
                <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
              </q-avatar>
            </q-btn>
            <q-item-section>
              <q-item-label>Atttrect</q-item-label>
              <q-item-label caption class="text-weight-regular"
                >Owner</q-item-label
              >
            </q-item-section>
          </q-item>
          <q-separator inset class="q-my-sm" />

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
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator inset class="q-my-sm" />

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
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator inset class="q-my-sm" />

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
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator inset class="q-my-sm" />

          <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links4"
            :key="link.text"
            clickable
            :to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>
    </q-drawer>

    <q-page-container>
      <q-page class="q-px-lg q-page">
        <div class="row">
          <div class="col-8 q-pr-lg">
                <div class="myshadow">
                    <div class="row items-center q-pl-lg separator" style="
                                    border-radius: 5px !important; border-bottom: 1px solid #ccc;
                                ">
                        <div class="col-2">
                            <q-avatar size="100px" class="q-mr-md">
                                <img
                                    src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/d16bfc25-fc5a-45ef-841f-79810c6ccaab_snapshot.jpg/v1/fit/w_356,h_356/file.jpg" style="object-fit: contain;"
                                />
                                </q-avatar>
                        </div>
                        <div class="col-10">
                            <span class="text-h5 text-bold" style="display: grid;">
                                
                                Atttrect
                                <small class="text-caption text-blue-grey-4">http://localhost:8080/#/attrect</small>
                            </span>
                        </div>
                    </div>
                    <div class="row  items-center">
                        <div class="col-3 q-px-xl q-py-lg"><q-skeleton type="square " class="q-mb-md" /> <q-skeleton type="square " /></div>
                        <div class="col-3 q-px-xl q-py-lg"><q-skeleton type="square " class="q-mb-md" /> <q-skeleton type="square " /></div>
                        <div class="col-3 q-px-xl q-py-lg"><q-skeleton type="square " class="q-mb-md" /> <q-skeleton type="square " /></div>
                        <div class="col-3 q-px-xl q-py-lg"><q-skeleton type="square " class="q-mb-md" /> <q-skeleton type="square " /></div>
                    </div>
                </div>
          </div>
          <div class="col-4">
            <div class="q-gutter-y-md">
              <q-skeleton bordered height="250px" />
              <q-skeleton bordered height="50px" />
              <q-skeleton bordered height="50px" />
              <q-skeleton bordered height="250px" />
            </div>
          </div>
        </div>
      </q-page>
      <!-- <router-view /> -->
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";

export default {
  name: "GoogleNewsLayout",
  data() {
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
    onClear() {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
  },
};
</script>

<style lang="stylus">
.GNL__toolbar {
  height: 64px;
}

.GNL__toolbar-input {
  width: 55%;
}

.GNL__drawer-item {
  line-height: 24px;
  border-radius: 0 24px 24px 0;
  margin-right: 12px;
}

.q-drawer .q-item__section--avatar, .q-drawer .q-icon {
  color: #5f6368;
}

.q-item__label:not(.text-caption) {
  color: #3c4043;
  letter-spacing: 0.01785714em;
  line-height: 1.25rem;
  font-weight: 500;
}

.GNL__drawer-footer-link {
  color: inherit;
  text-decoration: none;
  font-weight: 500;
  font-size: 0.75rem;
}

.GNL:hover {
  color: #000;
}

.shop_drawer {
  background: #f0f4f7;
  border-radius: 5px !important;
}

.q-drawer {
  position: fixed;
  left: 60px;
  top: 100px !important;
  height: 665px;
}

.q-page-container {
  // padding-left: 80px;
  padding-right: 80px;
}

.q-page {
  padding-left: 80px;
  margin-top: 36px;
}

.myshadow {
    box-shadow: 0px -2px 25px 0px rgba(152,170,198,0.20);
}
</style>