<template>
  <q-layout view="lHh Lpr lFf">

    <Header />

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script lang="ts">
import Header from "components/Header.vue";

export default {
  name: "CartLayput",
  components: { Header },
  meta: { bodyClass: "dashboard" },
};
</script>
