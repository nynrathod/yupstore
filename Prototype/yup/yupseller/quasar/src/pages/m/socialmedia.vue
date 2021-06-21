<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg_light1"
  >

    <q-page-container>
      <q-page class="q-page bg-light font_nunito">
        <div class="q-pl-lg bg-white q-pb-xs">
          <h4 class="q-mt-sm q-mb-md font_700 font_nunito">Socialmedia</h4>
        </div>

        <div class="q-my-md bg-white">
          <h6 class="q-pl-md q-py-md q-my-xs font_700">Social Media Accounts</h6>
          <q-separator />
          <div class="q-px-md q-py-lg">

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Facebook Username"
              color="blue"
            >
              <template v-slot:prepend>
                <q-icon
                  name="facebook"
                  color="blue"
                />
              </template>
            </q-input>

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Instagram Username"
              color="pink-6"
            >
              <template v-slot:prepend>
                <q-icon
                  name="ti-instagram"
                  color="pink-6"
                />
              </template>
            </q-input>

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Twitter Username"
              color="light-blue-6"
            >
              <template v-slot:prepend>
                <q-icon
                  name="eva-twitter-outline"
                  color="light-blue-6"
                />
              </template>
            </q-input>

            <q-input
              outlined
              v-model="text"
              class="q-mb-lg"
              placeholder="Youtube Username or URL"
              color="red-7"
            >
              <template v-slot:prepend>
                <q-icon
                  name="ti-youtube"
                  color="red-7"
                />
              </template>
            </q-input>

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