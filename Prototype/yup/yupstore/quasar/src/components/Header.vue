<template>
  <q-header
    elevated
    class="bg-white text-grey-8 q-py-md mobile_header"
    height-hint="58"
  >
    <q-toolbar class="">
      <div
        class="col-3"
        v-if="$q.screen.gt.sm"
      >
        <q-btn
          flat
          rounded
          class="q-py-sm q-mr-md lightgreen"
          v-bind:class="{ Sub: scroll}"
          v-if="$q.screen.gt.sm"
          to="/"
        >
          <q-icon
            name="o_local_mall"
            size="md"
            color="primary"
          />
          <q-toolbar-title
            shrink
            class="text-weight-bold"
          >
            Yup Store
          </q-toolbar-title>
        </q-btn>

        <span v-if="$q.screen.gt.sm">
          <q-btn
            v-if="scroll"
            @mouseover="mainmenu = true"
            flat
            dense
            round
            icon="menu"
            aria-label="Menu"
          />

        </span>

      </div>

      <div
        class="col-2"
        v-if="$q.screen.lt.md"
      >
        <!-- <q-icon
          name="menu"
          size="md"
          color="primary"
        /> -->
        <q-btn
          flat
          dense
          @click="mobilmenudrawer = !mobilmenudrawer"
        >
          <q-img
            src="https://themes.magesolution.com/claue/m2/pub/static/frontend/Mgs/claue/en_US/images/hamburger-black.svg"
            style="width: 30px;"
          />
        </q-btn>

        <q-drawer
          v-model="mobilmenudrawer"
          show-if-above
          bordered
        >
          <span class="bg_light1 q-px-md q-py-lg d-block whiteney_book">WELCOME</span>
          <q-list class="q-mx-md">
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section>
                <q-item-label class="mobile_menu whiteney_medium">Home Decore</q-item-label>
              </q-item-section>
              <q-item-section avatar>
                <q-icon
                  name="chevron_right"
                  color="grey-5"
                />
              </q-item-section>
            </q-item>
          </q-list>
          <q-separator />
          <q-list class="q-mx-md">
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="person"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">Profile</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="o_inventory_2"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">My Orders</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="favorite_border"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">wishlist</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="shopping_cart"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">Cart</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="contact_mail"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">Address</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="local_offer"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">My Coupons</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="lock"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">Reset Password</q-item-label>
              </q-item-section>
            </q-item>
            <q-item
              clickable
              tag="a"
              target="_blank"
              rel="noopener"
              href="http://quasar.dev"
              class="pl0"
            >
              <q-item-section avatar>
                <q-icon
                  name="power_settings_new"
                  color="grey-6"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label class="font_500 font_monts">Logout</q-item-label>
              </q-item-section>
            </q-item>

          </q-list>
        </q-drawer>

      </div>

      <div
        class="col-6"
        v-if="$q.screen.gt.sm"
      >
        <div
          class="d-flex mxauto flex-center"
          style="max-width: 350px"
          v-if="$route.name == 'cart'"
        >
          <span class="text-overline">Cart</span>
          <q-space />
          <span>- - - - - - - - - - </span>
          <q-space />
          <span class="text-overline">Address</span>
          <q-space />
          <span>- - - - - - - - - - </span>
          <q-space />
          <span class="text-overline">Payment</span>
        </div>

        <div
          class="row no-wrap"
          v-if="$route.name != 'cart'"
        >
          <q-form class="row no-wrap fit header-search q-mr-lg">
            <q-input
              dense="dense"
              standout="text-grey"
              flat
              no-shadow
              outlined
              rounded
              placeholder="Search Your Product Here"
              class="bg-white col search-field"
              input-class="search-box"
            >
              <q-btn
                color="grey-3"
                rounded
                flat
                text-color="grey-8"
                icon="search"
                unelevated
              />
            </q-input>
          </q-form>
          <q-space />

        </div>
      </div>

      <div
        class="col-7"
        v-if="$q.screen.lt.md"
      >
        <div class="row justify-center">
          <q-btn
            flat
            rounded
            class="q-py-sm"
            style="color:#014e37"
            v-bind:class="{ Sub: scroll}"
            v-if="$q.screen.lt.md"
          >

            <q-toolbar-title
              shrink
              class="text-weight-bold"
            >
              Yup Store
            </q-toolbar-title>
          </q-btn>
        </div>
      </div>

      <div
        class="col-3"
        v-if="$q.screen.gt.sm && $route.name != 'cart'"
      >
        <div class="row justify-end">
          <q-btn
            icon="o_chat_bubble_outline"
            size="md"
            class="q-mr-md"
            color="primary"
            flat
            v-if="$q.screen.gt.sm"
          />

          <q-btn
            icon="o_shopping_cart"
            size="md"
            class="q-mr-md"
            color="primary"
            flat
            v-if="$q.screen.gt.sm"
          />

          <q-btn
            icon="ti-bag"
            size="sm"
            class="q-mr-md"
            color="primary"
            flat
            v-if="$q.screen.gt.sm"
          >
            <q-badge
              color="grey-7"
              text-color="white"
              floating
              rounded
            >2</q-badge>
          </q-btn>

          <q-btn
            icon="account_circle"
            size="md"
            class="q-mr-md"
            color="primary"
            flat
            v-if="$q.screen.gt.sm"
          >
            <q-menu
              fit
              class="q-mt-lg"
              :offset="[40, 26]"
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
          </q-btn>
        </div>
      </div>

      <div
        class="col-3"
        v-if="$q.screen.lt.md"
      >

        <div class="row">
          <div class="col">
            <q-btn
              color="primary"
              flat
              class="q-pr-lg"
              to="/mobilesearch"
              icon="search"
            />
          </div>

          <div class="col">
            <q-btn
              color="primary"
              flat
              class="q-pr-lg"
              icon="ti-bag"
            />
          </div>
        </div>

        <!-- <q-btn
            icon="ti-bag"
            size="sm"
            class="float-right"
            color="primary"
            flat
          >
            <q-badge
            color="grey-7"
            text-color="white"
            floating
            rounded
          >2</q-badge>
          </q-btn> -->

      </div>

      </div>

    </q-toolbar>

    <q-scroll-observer @scroll="onScroll" />

    <q-menu
      v-model="mainmenu"
      v-if="mainmenu"
      @mouseleave="mainmenu = false"
      fit
    >
      <div
        class="row"
        style="width: 80%;"
      >
        <div class="col-3">
          <q-list
            dense
            style="min-width: 100px"
          >
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>Open...</q-item-section>
            </q-item>
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>New</q-item-section>
            </q-item>
            <q-separator />
            <q-item clickable>
              <q-item-section>Preferences</q-item-section>
              <q-item-section side>
                <q-icon name="keyboard_arrow_right" />
              </q-item-section>

              <q-menu
                anchor="top end"
                self="top stacdcrt"
              >
                <q-list dense>
                  <q-item
                    v-for="n in 3"
                    :key="n"
                    clickable
                  >
                    <q-item-section>Submenu Label</q-item-section>
                    <q-item-section side>
                      <q-icon name="keyboard_arrow_right" />
                    </q-item-section>
                    <q-menu
                      auto-close
                      anchor="top end"
                      self="top start"
                    >
                      <q-list dense>
                        <q-item
                          v-for="n in 3"
                          :key="n"
                          clickable
                        >
                          <q-item-section>3rd level Label</q-item-section>
                        </q-item>
                      </q-list>
                    </q-menu>
                  </q-item>
                </q-list>
              </q-menu>

            </q-item>
            <q-separator />
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>Quit</q-item-section>
            </q-item>
          </q-list>

          <q-list
            dense
            style="min-width: 100px"
          >
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>Menu 1...</q-item-section>
            </q-item>
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>Menu 2</q-item-section>
            </q-item>
            <q-separator />
            <q-item
              clickable
              @mouseover="submenu1 = true"
              @mouseleave="submenu1 = false"
            >
              <q-item-section>Sub Menu</q-item-section>
              <q-item-section side>
                <q-icon name="keyboard_arrow_right" />
              </q-item-section>

              <q-menu
                anchor="top end"
                self="top start"
                v-model="submenu1"
                v-if="submenu1"
              >
                <q-list dense>
                  <q-item
                    v-for="n in 3"
                    :key="n"
                    clickable
                  >
                    <q-item-section>Submenu Label</q-item-section>
                    <q-item-section side>
                      <q-icon name="keyboard_arrow_right" />
                    </q-item-section>
                    <q-menu
                      auto-close
                      anchor="top end"
                      self="top start"
                    >
                      <q-list dense>
                        <q-item
                          v-for="n in 3"
                          :key="n"
                          clickable
                        >
                          <q-item-section>3rd level Label</q-item-section>
                        </q-item>
                      </q-list>
                    </q-menu>
                  </q-item>
                </q-list>
              </q-menu>

            </q-item>
            <q-separator />
            <q-item
              clickable
              v-close-popup
            >
              <q-item-section>Quit</q-item-section>
            </q-item>
          </q-list>
        </div>
      </div>
    </q-menu>
  </q-header>

</template>

<style>
.search-box {
  padding: 10px;
}
.q-field--dense .q-field__control,
.q-field--dense .q-field__marginal {
  height: 50px;
}
.q-header .q-layout__shadow:after {
  /* box-shadow: unset; */
}
@media only screen and (max-width: 1024px) {
  .mobile_header {
    padding-top: 0;
    padding-bottom: 0;
  }
}
</style>


<script>


export default {
  data () {
    return {
      mainmenu: false,
      submenu1: false,
      scrollInfo: {},
      scroll: false,
      gtmd: false,
      mobilmenudrawer: false
    }
  },
  methods: {
    onScroll (info) {
      this.scrollInfo = info
      if (info.position == 150 || info.position >= 150) {
        this.scroll = true
      } else {
        this.scroll = false
      }
    },

  }
}
</script>