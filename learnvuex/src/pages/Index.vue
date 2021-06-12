<template>
  <q-page padding>
    <DataFilter />
    <DataList />
  </q-page>
</template>

<script>
import DataFilter from '../components/DataFilter'
import DataList from '../components/DataList'

export default {
  name: 'PageIndex',
  components: {
    DataFilter,
    DataList
  }
}
</script>
