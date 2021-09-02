<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg-grey-1"
  >

    <q-page-container>
      <q-page
        class="q-page"
        :class="{'q-px-lg': is_gt_md, 'q-px-sm': is_lt_md}"
      >
        <div
          class="row q-col-gutter-x-lg "
          :class="{'pt35': is_gt_sm, 'pt10': is_lt_md}"
        >
          <div class="col-8 q-pr-lg">
            <div class="myshadow">
              <div
                class="row items-center q-px-lg separator"
                style="border-radius: 5px !important; border-bottom: 1px solid #ccc;"
              >
                <div class="col-2">
                  <q-avatar
                    size="100px"
                    class="q-mr-md"
                    style="width: 100%;max-width: 110px"
                  >
                    <q-img
                      src="https://images-wixmp-a87e9a901094cb6400f2e0ce.wixmp.com/images/d16bfc25-fc5a-45ef-841f-79810c6ccaab_snapshot.jpg/v1/fit/w_356,h_356/file.jpg"
                      contain
                    />
                  </q-avatar>
                </div>
                <div class="col-7">
                  <span
                    class="text-h5 text-bold"
                    style="display: grid;"
                  >

                    Atttrect
                    <small class="text-caption text-blue-grey-4">http://localhost:8080/#/attrect</small>
                  </span>
                </div>
                <q-space />
                <div class="col-3 text-right">
                  <q-btn
                    outline
                    rounded
                    icon="eva-external-link-outline"
                    label="Visit Site"
                    color="blue"
                    class="font_700"
                  />
                </div>
              </div>
              <div class="row  items-center">
                <div
                  class="col-3 q-py-lg"
                  :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
                >
                  <span class="font_600 d-block">Site Status</span>
                  <span class=" font_dark4 d-block">Pulblished - Live</span>
                </div>
                <div
                  class="col-3 q-py-lg"
                  :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
                >
                  <span class="font_600 d-block">Total Orders</span>
                  <span class=" font_dark4 d-block">123 Orders</span>
                </div>
                <div
                  class="col-3 q-py-lg"
                  :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
                >
                  <span class="font_600 d-block">Site Status</span>
                  <span class=" font_dark4 d-block">Pulblished - Live</span>
                </div>
                <div
                  class="col-3 q-py-lg"
                  :class="{'q-px-xl': is_gt_md, 'q-px-sm': is_lt_md}"
                >
                  <span class="font_600 d-block">Total Orders</span>
                  <span class=" font_dark4 d-block">123 Orders</span>
                </div>
              </div>
            </div>

            <div class=" myshadow bg-white q-my-md">
              <q-list class="rounded-borders">
                <q-expansion-item
                  expand-separator
                  label="Primary Content"
                  class="text-blue text-h6"
                  default-opened
                >

                  <div class="row q-col-gutter-x-lg q-py-md">
                    <div class="col-6">
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
                              <div class="q-uploader__title">Logo</div>
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
                    <div class="col-6">
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
                              <div class="q-uploader__title">Favicon</div>
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
                  </div>

                  <div class="row">
                    <div class="col-12 q-py-md q-gutter-sm">
                      <label class="text-caption">About Us Content</label>
                      <q-editor
                        v-model="editor"
                        min-height="10rem"
                        style="font-size: 15px;"
                        class="text-grey-8"
                      />
                    </div>
                  </div>

                </q-expansion-item>
              </q-list>
            </div>

            <div class=" myshadow bg-white q-my-md">
              <q-list class="rounded-borders">
                <q-expansion-item
                  expand-separator
                  label="Social Media Accounts"
                  class="text-blue text-h6"
                  default-opened
                >

                  <div class="row q-col-gutter-x-lg q-pt-md ">
                    <div class="col-6">
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
                    </div>
                    <div class="col-6">
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
                    </div>
                  </div>

                  <div class="row q-col-gutter-x-lg">
                    <div class="col-6">
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
                    </div>
                    <div class="col-6">
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

                </q-expansion-item>
              </q-list>
            </div>

            <div class=" myshadow bg-white q-my-md">
              <q-list class="rounded-borders">
                <q-expansion-item
                  expand-separator
                  label="Contact Info"
                  class="text-blue text-h6"
                  default-opened
                >
                  <div class="row q-col-gutter-x-lg q-pt-md ">
                    <div class="col-4">
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
                    </div>
                    <div class="col-4">
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
                    </div>
                    <div class="col-4">
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
                    </div>
                  </div>

                  <div class="row q-col-gutter-x-lg q-pt-md ">
                    <div class="col-12">
                      <label class="text-caption">Shop Address</label>
                      <q-editor
                        v-model="editor"
                        min-height="10rem"
                        style="font-size: 15px;"
                        class="text-grey-8"
                      />
                    </div>
                  </div>

                </q-expansion-item>
              </q-list>
            </div>

            <div class=" myshadow bg-white q-my-md">
              <q-list class="rounded-borders">
                <q-expansion-item
                  expand-separator
                  label="Business Info"
                  class="text-blue text-h6"
                  default-opened
                >
                  <div class="row q-col-gutter-x-lg q-pt-md ">
                    <div class="col-4">
                      <q-input
                        outlined
                        v-model="text"
                        class="q-mb-lg"
                        placeholder="Business Name"
                        color="blue"
                      >
                        <template v-slot:prepend>
                          <q-icon
                            name="tag"
                            color="blue"
                          />
                        </template>
                      </q-input>
                    </div>
                    <div class="col-4">
                      <q-input
                        outlined
                        v-model="text"
                        class="q-mb-lg"
                        placeholder="Website Url"
                        color="pink-6"
                      >
                        <template v-slot:prepend>
                          <q-icon
                            name="http"
                            color="pink-6"
                          />
                        </template>
                      </q-input>
                    </div>
                    <div class="col-4">
                      <q-input
                        outlined
                        v-model="text"
                        class="q-mb-lg"
                        placeholder="Business Email"
                        color="light-blue-6"
                      >
                        <template v-slot:prepend>
                          <q-icon
                            name="email"
                            color="light-blue-6"
                          />
                        </template>
                      </q-input>
                    </div>
                  </div>

                  <div class="row q-col-gutter-x-lg q-pt-md ">
                    <div class="col-12">
                      <label class="text-caption">Shop Address</label>
                      <q-editor
                        v-model="editor"
                        min-height="8rem"
                        class="q-mb-lg"
                      />
                    </div>
                  </div>

                </q-expansion-item>
              </q-list>
            </div>

          </div>
          <div
            class=""
            :class="{'col-3': is_gt_md, 'col-4': is_lt_md}"
          >
            <div class="q-gutter-y-md">
              <q-skeleton
                height="250px"
                animation="none"
                style="background: #f0f4f7;"
              />
              <q-skeleton
                height="50px"
                animation="none"
                style="background: #f0f4f7;"
              />
              <q-skeleton
                height="50px"
                animation="none"
                style="background: #f0f4f7;"
              />
              <q-skeleton
                height="250px"
                animation="none"
                style="background: #f0f4f7;"
              />
            </div>
          </div>
        </div>
      </q-page>
      <!-- <router-view /> -->
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";

export default {
  name: "GoogleNewsLayout",
  data () {
    return {
      text: '',
      text1: 'Product 1',
      text2: 'New Arrival',
      text3: '45 ₹',
      text4: false,
      text5: '5%',
      text6: 'labls547s14',
      text7: '2 Kg',
      editor: '',
      model: 'In Stock',
      options: [
        'In Stock', 'Out of Stock'
      ],
      leftDrawerOpen: false,
      search: "",
      showAdvanced: false,
      showDateOptions: false,
      exactPhrase: "",
      hasWords: "",
      excludeWords: "",
      byWebsite: "",
      byDate: "Any time",
      links1: [
        { icon: "inbox", text: "Inbox" },
        { icon: "notification_important", text: "Notification" },
      ],
      links2: [
        { icon: "dashboard", text: "Dashboard", to: "/attrect" },
        { icon: "storefront", text: "My Store", to: "/mystore" },
        { icon: "star_border", text: "My Products", to: "/products" },
        { icon: "notifications_active", text: "My Orders" },
      ],
      links3: [
        { icon: "tab", text: "My Site" },
        { icon: "topic", text: "Reports" },
        { icon: "settings", text: "Setting" },
      ],
      links4: [
        { icon: "tune", text: "Account Setting" },
        { icon: "receipt", text: "Billings" },
      ],
    };
  },
  methods: {
    onClear () {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
  },

  computed: {
    is_xs () {
      const isMobile = window.matchMedia("only screen and (max-width: 599px)")
      return isMobile.matches ? true : false
    },
    is_sm () {
      const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
      return isMobile.matches ? true : false
    },
    is_lt_xs () {
      const isMobile = window.matchMedia("only screen and (max-width: 599px)")
      return isMobile.matches ? true : false
    },
    is_lt_sm () {
      const isMobile = window.matchMedia("only screen and (max-width: 1023px)")
      return isMobile.matches ? true : false
    },
    is_lt_md () {
      const isMobile = window.matchMedia("only screen and (max-width: 1439px)")
      return isMobile.matches ? true : false
    },
    is_lt_lg () {
      const isMobile = window.matchMedia("only screen and (max-width: 1919px)")
      return isMobile.matches ? true : false
    },
    is_gt_xs () {
      const isMobile = window.matchMedia("only screen and (min-width: 600px)")
      return isMobile.matches ? true : false
    },
    is_gt_sm () {
      const isMobile = window.matchMedia("only screen and (min-width: 1024px)")
      return isMobile.matches ? true : false
    },
    is_gt_md () {
      const isMobile = window.matchMedia("only screen and (min-width: 1440px)")
      return isMobile.matches ? true : false
    },
    is_gt_lg () {
      const isMobile = window.matchMedia("only screen and (min-width: 1920px)")
      return isMobile.matches ? true : false
    },
  }
};
</script>

<style lang="scss">
@import "../../css/Admin.scss";

.q-expansion-item__container .q-item {
  border-bottom: 1px solid #eee;
}

.q-expansion-item__container .q-item {
  padding: 20px 36px !important;
}

.q-expansion-item__content {
  padding: 14px 20px !important;
}
</style>