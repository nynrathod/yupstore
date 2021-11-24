<template>
  <q-page class="">

    <q-input
      v-model="text"
      autofocus
      placeholder="Search For Products, Categor & More"
    >

      <template v-slot:prepend>
        <q-icon
          v-if="text === ''"
          name="keyboard_backspace"
        />
        <q-icon
          v-else
          name="clear"
          class="cursor-pointer"
          @click="text = ''"
        />
      </template>
    </q-input>

    <div class="q-mx-sm q-mt-lg">
      <span class="text-subtitle2 d-block q-mt-xs q-mb-lg q-ml-md">Trending Search</span>
      <q-list>
        <q-item
          clickable
          v-ripple
        >
          <q-item-section avatar>
            <q-icon
              name="trending_up"
              style="transform: rotateY(180deg)"
            />
          </q-item-section>
          <q-item-section>Active</q-item-section>
        </q-item>

        <q-item
          clickable
          v-ripple
          active-class="text-orange"
        >
          <q-item-section avatar>
            <q-icon
              name="trending_up"
              style="transform: rotateY(180deg)"
            />
          </q-item-section>
          <q-item-section>Active, Active class</q-item-section>
        </q-item>

        <q-item
          clickable
          v-ripple
          active-class="bg-teal-1 text-grey-8"
        >
          <q-item-section avatar>
            <q-icon
              name="trending_up"
              style="transform: rotateY(180deg)"
            />
          </q-item-section>
          <q-item-section>Active, Active class</q-item-section>
        </q-item>
      </q-list>
    </div>

    <q-separator />

    <div class="q-mx-sm q-mt-lg">
      <span class="text-subtitle2 d-block q-mt-xs q-mb-lg q-ml-md">Suggested Search</span>
      <div class="q-gutter-sm q-pl-md">
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
        <q-btn
          outline
          color="primary"
          label="Cat 1"
        />
      </div>

    </div>

  </q-page>
</template>


<script>
export default {
  data () {
    return {
      text: '',
    }
  },
}
</script>


<style>
.q-field__control {
  padding: 0 10px;
}
</style>