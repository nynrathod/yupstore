<template>
  <div class="q-mt-md">
    <q-card>
      <q-card-section class="q-pb-sm">
        <div class="q-pa-md q-gutter-md">
          <q-badge v-for="item in filteredItems" :key="item" :color="item">
            {{item}}
          </q-badge>
        </div>
        {{items}}<br>
        FilterState: {{filterState}}<br>
        <strong>getterWithoutParameter:</strong> {{getterWithoutParameter}}<br>
        <strong>getterWithParameter:</strong> {{getterWithParameter}}
      </q-card-section>
    </q-card>
  </div>
</template>

<script>
export default {
  name: 'DataList',
  computed: {
    filteredItems: {
      get () {
        if (!this.filterState) {
          return this.items
        }

        return this.items.filter(color => color.includes(this.filterState))
      }
    },
    filterState: {
      get () {
        return this.$store.state.example.filter
      }
    },
    getterWithoutParameter: {
      get () {
        return this.$store.getters['example/someGetter']
      }
    },
    getterWithParameter: {
      get () {
        return this.$store.getters['example/someGetter2'](4)
      }
    }
  },
  data () {
    return {
      items: ['red', 'blue', 'green', 'yellow', 'purple']
    }
  }
}
</script>
