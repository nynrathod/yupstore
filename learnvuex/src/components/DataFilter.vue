<template>
  <q-card>

    <q-card-section class="q-pb-sm">
      <div class="text-h6">Data Filter</div>
      <div class="text-subtitle2">DataFilter.vue</div>
    </q-card-section>

    <q-card-section class="q-pt-none">
      <q-input filled v-model="filterState" />
    </q-card-section>

  </q-card>
</template>

<script>
export default {
  name: 'DataFilter',
  computed: {
    filterState: {
      get () {
        return this.$store.state.example.filter
      },
      set (val) {
        this.$store.commit('example/setFilter', val)
      }
    }
  }
}
</script>
