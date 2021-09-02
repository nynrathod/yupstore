<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg_light1"
  >

    <q-page-container>
      <q-page class="q-page bg-light font_nunito">
        <div class="q-pl-lg bg-white q-pb-xs">
          <h4 class="q-mt-sm q-mb-md font_700 font_nunito">Add New Product</h4>
        </div>
        <div class="q-my-md q-py-lg q-px-md bg-white">

          <q-uploader
            url="http://localhost:4444/upload"
            label="Custom header"
            multiple
            class="full-width"
            text-color="dark"
            color="white"
          >
            <template v-slot:header="scope">
              <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                <q-btn
                  v-if="scope.queuedFiles.length > 0"
                  icon="clear_all"
                  @click="scope.removeQueuedFiles"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Clear All</q-tooltip>
                </q-btn>
                <q-btn
                  v-if="scope.uploadedFiles.length > 0"
                  icon="done_all"
                  @click="scope.removeUploadedFiles"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Remove Uploaded Files</q-tooltip>
                </q-btn>
                <q-spinner
                  v-if="scope.isUploading"
                  class="q-uploader__spinner"
                />
                <div class="col">
                  <div class="q-uploader__title">Main Image</div>
                  <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                </div>

                <q-btn
                  v-if="scope.canUpload"
                  icon="cloud_upload"
                  @click="scope.upload"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Upload Files</q-tooltip>
                </q-btn>

                <q-btn
                  v-if="scope.isUploading"
                  icon="clear"
                  @click="scope.abort"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Abort Upload</q-tooltip>
                </q-btn>
              </div>

              <div class="text-center">
                <q-btn
                  v-if="scope.canAddFiles"
                  type="a"
                  icon="add_box"
                  round
                  dense
                  flat
                  class="q-mx-auto"
                >
                  <q-uploader-add-trigger />
                  <q-tooltip>Pick Files</q-tooltip>
                </q-btn>
              </div>

            </template>

          </q-uploader>

        </div>

        <div class="q-my-md q-py-lg q-px-md bg-white">

          <q-uploader
            url="http://localhost:4444/upload"
            label="Custom header"
            multiple
            class="full-width"
            text-color="dark"
            color="white"
          >
            <template v-slot:header="scope">
              <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                <q-btn
                  v-if="scope.queuedFiles.length > 0"
                  icon="clear_all"
                  @click="scope.removeQueuedFiles"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Clear All</q-tooltip>
                </q-btn>
                <q-btn
                  v-if="scope.uploadedFiles.length > 0"
                  icon="done_all"
                  @click="scope.removeUploadedFiles"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Remove Uploaded Files</q-tooltip>
                </q-btn>
                <q-spinner
                  v-if="scope.isUploading"
                  class="q-uploader__spinner"
                />
                <div class="col">
                  <div class="q-uploader__title">Other Image</div>
                  <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                </div>

                <q-btn
                  v-if="scope.canUpload"
                  icon="cloud_upload"
                  @click="scope.upload"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Upload Files</q-tooltip>
                </q-btn>

                <q-btn
                  v-if="scope.isUploading"
                  icon="clear"
                  @click="scope.abort"
                  round
                  dense
                  flat
                >
                  <q-tooltip>Abort Upload</q-tooltip>
                </q-btn>
              </div>

              <div class="text-center">
                <q-btn
                  v-if="scope.canAddFiles"
                  type="a"
                  icon="add_box"
                  round
                  dense
                  flat
                  class="q-mx-auto"
                >
                  <q-uploader-add-trigger />
                  <q-tooltip>Pick Files</q-tooltip>
                </q-btn>
              </div>

            </template>

          </q-uploader>

        </div>

        <div class="q-my-md bg-white">
          <h6 class="q-pl-md q-py-md q-my-xs font_700">Basic Info</h6>
          <q-separator />
          <div class="q-px-md q-py-lg">
            <q-input
              v-model="text"
              label="Product Name"
              color="blue"
              class="q-mb-lg"
            />
            <q-input
              v-model="text"
              label="Lable"
              color="blue"
              class="q-mb-lg"
            />
            <div class="row">
              <div class="col">
                <q-input
                  v-model="text"
                  label="Price"
                  color="blue"
                  class="q-mb-lg"
                />
              </div>
              <div class="col">
                <span class="q-mb-lg d-block">
                  <q-toggle
                    v-model="text4"
                    checked-icon="check"
                    color="blue"
                    unchecked-icon="clear"
                  />
                  <label class="text-caption">On Sale</label>
                </span>
              </div>
            </div>
            <q-input
              v-model="text"
              label="Discount"
              color="blue"
              class="q-mb-lg"
            />

            <q-editor
              v-model="editor"
              min-height="5rem"
              class="q-mb-lg"
            />
            <q-input
              v-model="text"
              label="Product Name"
              color="blue"
              class="q-mb-lg"
            />
          </div>
        </div>

        <div class="q-my-md bg-white">
          <h6 class="q-pl-md q-py-md q-my-xs font_700">Inventory & Shipping</h6>
          <q-separator />
          <div class="q-px-md q-py-lg">
            <q-select
              v-model="model"
              :options="options"
              dense="dense"
              class="q-mb-lg"
              color="blue"
            >

            </q-select>
            <q-input
              v-model="text"
              label="SKU"
              color="blue"
              class="q-mb-lg"
            />

            <q-input
              v-model="text"
              label="Weight"
              color="blue"
              class="q-mb-lg"
            />

            <q-editor
              v-model="editor"
              min-height="5rem"
              class="q-mb-lg"
            />

            <q-editor
              v-model="editor"
              min-height="5rem"
              class="q-mb-lg"
            />

            <q-editor
              v-model="editor"
              min-height="5rem"
              class="q-mb-lg"
            />

            <q-btn
              unelevated
              color="blue"
              label="Save"
              class="fixed-bottom full-width"
              style="bottom: 62px"
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