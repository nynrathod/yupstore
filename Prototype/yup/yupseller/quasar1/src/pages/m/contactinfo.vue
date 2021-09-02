<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg_light1"
  >

    <q-page-container>
      <q-page class="q-page bg-light font_nunito">
        <div class="q-pl-lg bg-white q-pb-xs">
          <h4 class="q-mt-sm q-mb-md font_700 font_nunito">Contact Info</h4>
        </div>

        <div class="q-my-md bg-white">
          <h6 class="q-pl-md q-py-md q-my-xs font_700">Basic Contacts</h6>
          <q-separator />
          <div class="q-px-md q-py-lg">

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Contact no 1"
              color="blue"
            >
              <template v-slot:prepend>
                <q-icon
                  name="stay_current_portrait"
                  color="blue"
                />
              </template>
            </q-input>

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Contact no 2"
              color="pink-6"
            >
              <template v-slot:prepend>
                <q-icon
                  name="stay_current_portrait"
                  color="pink-6"
                />
              </template>
            </q-input>

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Email Address"
              color="light-blue-6"
            >
              <template v-slot:prepend>
                <q-icon
                  name="email"
                  color="light-blue-6"
                />
              </template>
            </q-input>

            <q-editor
              v-model="editor"
              min-height="8rem"
              class="q-mb-lg"
            />

          </div>
        </div>

      </q-page>
      <!-- <router-view /> -->
    </q-page-container>
  </q-layout>
</template>

<script>

export default {
  data () {
    return {
      visibility: true,
      tab: 'successful',
      dialog: false,
      position: 'top',
      text: '',
      text4: true,
      editor: 'What you see is <b>what</b> you get.',
      model: 'In Stock',
      options: [
        'In Stock', 'Out of Stock'
      ],
    }
  },
  methods: {
    open (position) {
      this.position = position;
      this.dialog = true;
    },
    checkFileSize (files) {
      return files.filter(file => file.size < 2048)
    },

    checkFileType (files) {
      return files.filter(file => file.type === 'image/png')
    },

    onRejected (rejectedEntries) {
      // Notify plugin needs to be installed
      // https://quasar.dev/quasar-plugins/notify#Installation
      this.$q.notify({
        type: 'negative',
        message: `${rejectedEntries.length} file(s) did not pass validation constraints`
      })
    }
  }

};
</script>

<style lang="scss">
.q-card__section--vert {
  padding: 10px !important;
}
</style>