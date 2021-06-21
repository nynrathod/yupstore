<template>
  <q-layout
    view="hHh lpR fFf"
    class="bg_light1"
  >

    <q-page-container>
      <q-page class="q-page bg-light font_nunito">
        <div class="q-pl-lg bg-white q-pb-lg">
          <h4 class="q-mt-sm q-mb-md font_700 font_nunito">Dashboard</h4>
          <div class="d-flex q-gutter-x-md full-width overflow-auto">
            <q-btn
              unelevated
              class="bg_dark2 font_poppins dsh_quick_btn q-py-xs"
              icon="eva-shopping-bag-outline"
              text-color="white"
              no-caps
              label="Products"
              style="margin-left: 0 !important;"
            />
            <q-btn
              unelevated
              class="bg_dark2 font_poppins dsh_quick_btn"
              icon="eva-shopping-bag-outline"
              text-color="white"
              no-caps
              label="Orders"
            />
            <q-btn
              unelevated
              class="bg_dark2 font_poppins dsh_quick_btn"
              icon="eva-shopping-bag-outline"
              text-color="white"
              no-caps
              label="Settings"
            />
          </div>
        </div>
        <div class="q-px-sm q-my-md">
          <q-card
            class="my-card shadow-1 q-mb-sm rounded-borders"
            flat
          >

            <q-card-section>
              <div class="row">
                <div class="col">
                  <div class="text-h6 font_700">Orders </div>
                </div>
                <div class="col-auto">
                  <router-link
                    to="/"
                    class="text-blue font_700 font18 font_quicksand font_darkblue"
                  >Manage Orders</router-link>
                </div>
              </div>
            </q-card-section>

            <q-separator />
            <q-card-section class="no-scroll">

              <q-tabs
                v-model="tab"
                dense
                class="text-daek"
                active-color="blue"
                indicator-color="blue"
                align="justify"
                narrow-indicator
              >
                <q-tab
                  name="successful"
                  label="Successful"
                />
                <q-tab
                  name="pending"
                  label="Pending"
                />
              </q-tabs>

              <q-tab-panels
                v-model="tab"
                animated
              >
                <q-tab-panel
                  name="successful"
                  style="padding-left: 0; padding-right: 0;"
                >
                  <div class="d-flex overflow-auto">
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                  </div>
                </q-tab-panel>

                <q-tab-panel name="pending">
                  <div class="text-h6">Alarms</div>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </q-tab-panel>
              </q-tab-panels>

            </q-card-section>

            <q-separator />

          </q-card>
          <q-card
            class="my-card shadow-1 q-mb-sm rounded-borders"
            flat
          >

            <q-card-section>
              <div class="row">
                <div class="col">
                  <div class="text-h6 font_700">Orders </div>
                </div>
                <div class="col-auto">
                  <router-link
                    to="/"
                    class="text-blue font_700 font18 font_quicksand font_darkblue"
                  >Manage Orders</router-link>
                </div>
              </div>
            </q-card-section>

            <q-separator />
            <q-card-section class="no-scroll">

              <q-tabs
                v-model="tab"
                dense
                class="text-daek"
                active-color="blue"
                indicator-color="blue"
                align="justify"
                narrow-indicator
              >
                <q-tab
                  name="successful"
                  label="Successful"
                />
                <q-tab
                  name="pending"
                  label="Pending"
                />
              </q-tabs>

              <q-tab-panels
                v-model="tab"
                animated
              >
                <q-tab-panel
                  name="successful"
                  style="padding-left: 0; padding-right: 0;"
                >
                  <div class="d-flex overflow-auto">
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                    <div class="m_product_col">
                      <q-img
                        src="https://media.ugaoo.com/catalog/product/cache/bf904fa088be7169b4178c352b6a4f7a/4/5/45_31.png"
                        style="max-width: 400px; height: 200px;"
                        contain
                      />
                      <h6 class="q-my-xs font_700"> Product Name</h6>
                      <span class="d-block font_dark5 font18 font_monts text-weight-light">₹ 199.00</span>
                      <span class="d-block font_dark9 font_monts">In Stock</span>
                    </div>
                  </div>
                </q-tab-panel>

                <q-tab-panel name="pending">
                  <div class="text-h6">Alarms</div>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </q-tab-panel>
              </q-tab-panels>

            </q-card-section>

            <q-separator />

          </q-card>

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
      tab: 'successful'
    }
  },
  methods: {

  },

};
</script>

<style lang="scss">
</style>