<template>
  <q-layout view="lHh Lpr lFf">
    <Header />

    <q-page-container>
      <router-view />
    </q-page-container>
    <Footer />
  </q-layout>
</template>

<script lang="ts">
import Header from "components/Header.vue";
import Footer from "components/Footer.vue";

export default {
  name: "MainLayout",
  components: { Header, Footer },
};
</script>

<style lang="scss">
@import "../css/app.scss";
@import "../css/typography.scss";
</style>