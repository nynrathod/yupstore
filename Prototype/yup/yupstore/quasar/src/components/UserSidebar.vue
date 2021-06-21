<template>
  <div
    class="q-pb-xs"
    :class="{'mobile-block q-px-md q-py-md': is_lt_sm}"
  >
    <q-list
      padding
      class="text-grey-8"
    >
      <q-item
        class="GNL__drawer-item "
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
          <q-item-label class="font_700 whiteney_medium">{{ link.text }}</q-item-label>
        </q-item-section>
      </q-item>

      <q-separator class="" />

      <q-item
        class="GNL__drawer-item"
        v-ripple
        clickable
        to="/password-reset"
      >
        <q-item-section avatar>
          <q-icon name="lock" />
        </q-item-section>
        <q-item-section>
          <q-item-label class="font_nunito font_700 font15">Reset Password</q-item-label>
        </q-item-section>
      </q-item>

      <q-item
        class="GNL__drawer-item"
        v-ripple
        clickable
        to="/asdkjh"
      >
        <q-item-section avatar>
          <q-icon name="power_settings_new" />
        </q-item-section>
        <q-item-section>
          <q-item-label class="font_nunito font_700 font15">Logout</q-item-label>
        </q-item-section>
      </q-item>

      <q-separator class="" />

    </q-list>

  </div>
</template>

<script>
export default {
  name: 'UserSidebar',
  data () {
    return {
      links2: [
        { icon: "o_account_circle", text: "Profile", to: "/account" },
        { icon: "o_inventory_2", text: "My Orders", to: "/myorders" },
        { icon: "favorite_border", text: "Wishlist", to: "/wishlist" },
        { icon: "shopping_cart", text: "Cart", to: "/cart" },
        { icon: "contact_mail", text: "Address", to: "/my-address" },
        { icon: "local_offer", text: "My Coupons", to: "/coupons" },
      ],
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