<template>
  <q-layout view="lHh Lpr lFf">
    <Header />

    <q-page-container>
      <router-view />
    </q-page-container>
    <Footer />

  </q-layout>
</template>

<script>
import Header from "components/MobileHeader.vue";
import Footer from "components/MobileFooter.vue";

export default {
  name: "MobileLatyout",
  components: { Header, Footer },
};
</script>

<style lang="scss">
@import "../css/typography.scss";
@import "../css/mobileadmin.scss";
</style>
