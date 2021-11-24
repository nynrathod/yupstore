<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg_light1"
  >

    <q-page-container>
      <q-page class="q-page bg-light font_nunito">
        <div class="q-pl-lg bg-white q-pb-xs">
          <h4 class="q-mt-sm q-mb-md font_700 font_nunito">
            <q-icon name="computer" /> Website
          </h4>
        </div>

        <div class="q-px-xl q-my-xl ">
          <q-btn
            outline
            color="deep-orange"
            push
            class="full-width q-mb-lg"
            no-caps
            rounded
            size="lg"
            enter-active-class="animated fadeIn"
            leave-active-class="animated fadeOut"
          >
            <div class="row items-center no-wrap">
              <q-icon
                left
                name="eva-file-text-outline"
              />
              <q-space />
              <div class="text-h6 font_700">
                Website Content
              </div>
            </div>
          </q-btn>
          <q-btn
            outline
            color="indigo"
            push
            class="full-width q-mb-lg"
            no-caps
            rounded
            size="lg"
          >
            <div class="row items-center no-wrap">
              <q-icon
                left
                name="tag"
              />
              <q-space />
              <div class="text-h6 font_700">
                Social Media
              </div>
            </div>
          </q-btn>
          <q-btn
            outline
            color="amber"
            push
            class="full-width q-mb-lg"
            no-caps
            rounded
            size="lg"
          >
            <div class="row items-center no-wrap">
              <q-icon
                left
                name="eva-person-outline"
              />
              <q-space />
              <div class="text-h6 font_700">
                Contact Info
              </div>
            </div>
          </q-btn>
          <q-btn
            outline
            color="accent"
            push
            class="full-width q-mb-lg"
            no-caps
            rounded
            size="lg"
          >
            <div class="row items-center no-wrap">
              <q-icon
                left
                name="store"
              />
              <q-space />
              <div class="text-h6 font_700">
                Business Info
              </div>
            </div>
          </q-btn>
          <q-btn
            outline
            color="blue"
            push
            class="full-width q-mb-lg"
            no-caps
            rounded
            size="lg"
          >
            <div class="row items-center no-wrap">
              <q-icon
                left
                name="eva-settings-outline"
              />
              <q-space />
              <div class="text-h6 font_700">
                Site Settings
              </div>
            </div>
          </q-btn>

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
    }
  },
  methods: {
    open (position) {
      this.position = position;
      this.dialog = true;
    },
  }

};
</script>

<style lang="scss">
.q-card__section--vert {
  padding: 10px !important;
}
</style>