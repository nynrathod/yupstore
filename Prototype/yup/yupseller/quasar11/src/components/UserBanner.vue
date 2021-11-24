<template>
  <div>

    <div class="myshadow">
      <div
        class="row items-center q-px-lg separator"
        style="border-radius: 5px !important; border-bottom: 1px solid #ccc;"
      >
        <div class="col-2">
          <q-avatar
            size="100px"
            class="q-mr-md"
            style="width: 100%;max-width: 110px"
          >
            <q-img
              src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/d16bfc25-fc5a-45ef-841f-79810c6ccaab_snapshot.jpg/v1/fit/w_356,h_356/file.jpg"
              contain
            />
          </q-avatar>
        </div>
        <div class="col-7">
          <span
            class="text-h5 text-bold"
            style="display: grid;"
          >
            {{user.seller_bname}}
            <a :href="'https://quasar.dev/'+user.seller_website"><small class="text-caption text-blue-grey-4">http://localhost:8080/{{user.seller_website}}</small></a>
          </span>
        </div>
        <q-space />
        <div class="col-3 text-right">
          <q-btn
            outline
            type="a"
            rounded
            icon="eva-external-link-outline"
            color="blue"
            class="font_700"
            @click="visitsite"
            :href="'https://quasar.dev/'+user.seller_website"
          >
            Visit Site
          </q-btn>

        </div>
      </div>
      <div class="row  items-center">
        <div
          class="col-3 q-py-lg"
          :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
        >
          <span class="font_600 d-block">Site Status</span>
          <template v-if="isauth">
            <q-skeleton
              height="22px"
              width="70px"
              type="text"
              animation="fade"
            />
          </template>
          <template v-else>
            <span
              v-if="this.$store.state.example.sitestatus=='true'"
              class=" font_dark4 d-block"
            >Pulblished - Live</span>
            <span
              v-else
              class=" font_dark4 d-block"
            >Not Pulblished</span>
          </template>

        </div>
        <div
          class="col-3 q-py-lg"
          :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
        >
          <span class="font_600 d-block">Total Orders</span>
          <template v-if="isauth">
            <q-skeleton
              height="22px"
              width="70px"
              type="text"
              animation="fade"
            />
          </template>
          <template v-else>
            <span class=" font_dark4 d-block">{{this.$store.state.example.totalorders}} Orders</span>
          </template>
        </div>
        <div
          class="col-3 q-py-lg"
          :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
        >
          <span class="font_600 d-block">Site Status</span>

          <template v-if="isauth">
            <q-skeleton
              height="22px"
              width="70px"
              type="text"
              animation="fade"
            />
          </template>
          <template v-else>
            <span
              v-if="this.$store.state.example.sitestatus=='true'"
              class=" font_dark4 d-block"
            >Published - Live</span>
            <span
              v-else
              class=" font_dark4 d-block"
            >Not Published</span>
          </template>

        </div>
        <div
          class="col-3 q-py-lg"
          :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
        >
          <span class="font_600 d-block">Total Orders</span>
          <template v-if="isauth">
            <q-skeleton
              height="22px"
              width="70px"
              type="text"
              animation="fade"
            />
          </template>
          <template v-else>
            <span class=" font_dark4 d-block">{{this.$store.state.example.totalorders}} Orders</span>
          </template>
        </div>
      </div>
    </div>

  </div>

</template>

<script>
import Yup from "../apis/Yup";
import { LocalStorage, SessionStorage } from 'quasar'


export default {
  name: 'UserBanner',
  data () {
    return {
      user: null,
      isauth: true,
      totalorders: '',
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
  isLoggedIn () {
    return LocalStorage.getItem("auth");
  },
  mounted () {

    // this.$root.$on("login", () => {
    //   this.isLoggedIn = true;
    // });

    this.isLoggedIn = !!LocalStorage.getItem("auth");

    // alert(this.isLoggedIn)
    if (this.isLoggedIn) {
      this.user = LocalStorage.getItem("auth")
      // console.log(LocalStorage.getItem("auth"));
    } else {

      Yup.auth().then(response => {
        // console.log(response.data);
        this.user = response.data

      })
        .catch(error => {

          // this.$router.push('/login');

        });
    }



    // this.$store.dispatch('example/auth', this.form)

    // Yup.auth().then(response => {

    //   this.user = response.data
    // })
    //   .catch(error => {

    //     // this.$router.push('/login');

    //   });
    this.isauth = true
    this.$store.dispatch('example/totalorders')
    this.$store.dispatch('example/sitestatus')
      .then(response => {
        this.isauth = false
      })
      .catch(error => {
        // this.$router.push('/login');
      });





    // this.isauth = true
    // Yup.auth().then(response => {
    //   // console.log(response.data);
    //   this.user = response.data
    //   this.isauth = false
    // })
    //   .catch(error => {

    //     // this.$router.push('/login');

    //   });



  },
  methods: {
    visitsite () {
      this.$router.push('https://quasar.dev/');
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