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

        </div>
        <template v-if="isloading">
          <q-markup-table>
            <thead>
              <th
                class="text-left"
                style="width: 150px"
              >
                <q-skeleton
                  animation="blink"
                  type="text"
                  height="50px"
                  width="100px"
                />
              </th>
              <th
                class="text-left"
                style="width: 150px"
              />
              <th
                class="text-left"
                style="width: 150px"
              />
              <th
                class="text-left"
                style="width: 150px"
              />
              <th
                class="text-left"
                style="width: 150px"
              />
              <th
                class="text-left"
                style="width: 150px"
              />
              <th
                class="text-left"
                style="width: 150px"
              >
                <q-skeleton
                  animation="blink"
                  type="text"
                  height="50px"
                  width="100px"
                />
              </th>
              <th
                class="text-left"
                style="width: 150px"
              >
                <q-skeleton
                  animation="blink"
                  type="text"
                  height="50px"
                  width="100px"
                />
              </th>
            </thead>

            <tbody>
              <tr
                v-for="n in 5"
                :key="n"
              >
                <td class="text-left">
                  <q-skeleton
                    animation="blink"
                    size="70px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="50px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="35px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="65px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="25px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="85px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="85px"
                  />
                </td>
                <td class="text-right">
                  <q-skeleton
                    animation="blink"
                    type="text"
                    width="85px"
                  />
                </td>
              </tr>
            </tbody>
          </q-markup-table>
        </template>
        <template v-else>
          <q-table
            :rows="data"
            :columns="columns"
            :filter="filter"
            :loading="loading"
            row-key="name"
            unelevated
            flat
            :pagination="pagination"
            class="myshadow"
          >
            <template v-slot:top>
              <span class="text-h4 font_700 q-mb-lg">Products</span>
              <q-space />
              <q-btn
                color="primary"
                :disable="loading"
                label="Add Product"
                to="/singleproduct"
                icon="add"
                @click="addRow"
                rounded
                unelevated
                class="q-mr-md q-mb-lg"
              />
              <q-input
                dense
                debounce="300"
                rounded
                outlined
                color="primary"
                v-model="filter"
                class="q-mb-lg"
              >
                <template v-slot:append>
                  <q-icon name="search" />
                </template>
              </q-input>
            </template>

            <template v-slot:body="props">
              <q-tr :props="props">
                <!-- <q-td
                key="image"
                :props="props"
              >{{ props.row.image }}</q-td> -->
                <q-td key="image"><img
                    src="https://demo.templatetrip.com/Opencart/OPC07/OPC190_nursery/OPC10/image/cache/catalog/demo/product/20-385x501.jpg"
                    style="width: 50px"
                  /></q-td>
                <q-td
                  key="sku"
                  :props="props"
                >{{ props.row.sku }}
                </q-td>
                <q-td
                  key="name"
                  :props="props"
                  @click="updaterouter(props.row.sku,props.row.slug)"
                  class="cursor-pointer"
                ><span class="font16 text-primary">{{ props.row.name }}</span>
                </q-td>
                <q-td
                  key="category"
                  :props="props"
                ><span class="font15">{{ props.row.category }}</span>
                </q-td>
                <q-td
                  key="product_weight"
                  :props="props"
                ><span class="font15">{{ props.row.product_weight }}</span>
                </q-td>
                <q-td
                  key="price"
                  :props="props"
                ><span class="font15">{{ props.row.price }}</span>
                </q-td>
                <q-td
                  key="product_quantity"
                  :props="props"
                ><span class="font15">{{ props.row.product_quantity }}</span>
                </q-td>
                <q-td
                  key="action"
                  :props="props"
                  class="text-primary"
                >
                  <span
                    @click="updaterouter(props.row.sku,props.row.slug)"
                    class="text-primary"
                  >Edit</span> /
                  <router-link to=""><span class="text-primary">View</span></router-link> /
                  <span
                    @click="deleteItem(props.row)"
                    class="text-primary"
                  >Delete</span>
                </q-td>
              </q-tr>
            </template>
          </q-table>
        </template>

      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";
import { LocalStorage, SessionStorage } from 'quasar'

export default {
  name: "GoogleNewsLayout",
  data () {
    return {

      search: "",
      loading: false,
      filter: '',
      isloading: true,
      pagination: {
        rowsPerPage: 10
      },
      columns: [
        { name: 'image', label: '', field: 'image' },
        { name: 'sku', align: 'left', label: 'SKU', field: 'sku', sortable: true },
        {
          name: 'name',
          required: true,
          label: 'Name',
          align: 'left',
          field: row => row.name,
          format: val => `${val}`,
          sortable: true
        },
        { name: 'category', align: 'left', label: 'Category', field: 'category', sortable: true },
        { name: 'product_weight', align: 'left', label: 'Weight', field: 'product_weight', sortable: true },
        { name: 'price', align: 'left', label: 'Price', field: 'price', sortable: true },
        { name: 'product_quantity', align: 'left', label: 'stock', field: 'product_quantity', sortable: true },
        { name: 'action', align: 'left', label: 'Action', field: '' },
      ],
      data: [],
      catoptions: [
        'Category 1', 'Category 3', 'Category 4', 'Category 4', 'Category 9'
      ],
      stockoptions: [
        'In Stock', 'Out of Stock'
      ]
    }
  },
  isLoggedIn () {
    return LocalStorage.getItem("auth");
  },
  mounted () {

  },
  methods: {
    updaterouter (sku, slug) {
      this.$router.push({ path: `/update/${sku}/${slug}` })
    },
    deleteItem (item) {
      const index = this.data.indexOf(item);
      confirm("Are you sure you want to delete this item?") &&
        this.data.splice(index, 1);

      this.$store.dispatch('example/deleteproduct', { sku: item.sku })
        .then((response) => {
          this.$q.notify({
            icon: 'done',
            color: 'positive',
            message: 'Deleted'
          })
        })
        .catch(error => {
        })
    },
    redirect (sku, slug) {
      this.$router.push("/update/" + sku + "/" + slug)
    }
  },
  created () {
    this.$store.dispatch('example/fetchproduct')
      .then((response) => {
        let totalproduct = this.$store.state.example.productjson.length
        for (let i = 0; i < totalproduct; i++) {
          this.data.push(this.$store.state.example.productjson[i])
        }
        this.isloading = false
      })
      .catch(error => {
        if (error.response.status === 422) {
        }
      })
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
}
</script>

<style>
@import "../../css/Admin.scss";
.my-sticky-virtscroll-table {
  height: 100vh;
}

.q-table__top,
.q-table__bottom,
thead tr:first-child th {
  background-color: #fff;
}

thead tr th {
  position: sticky;
  z-index: 1;
}

thead tr:last-child th {
  top: 48px;
}

thead tr:first-child th {
  top: 0;
}

.my-sticky-virtscroll-table ::-webkit-scrollbar {
  width: 5px;
  height: 4px;
}

.my-sticky-virtscroll-table ::-webkit-scrollbar-thumb {
  background: rgb(26 127 226);
  border-radius: 10px;
}

.my-sticky-virtscroll-table ::-webkit-scrollbar-track {
  border: 1px solid #f2f2f2;
  border-radius: 10px;
}

.q-table tbody td span {
  color: #7a92a5;
  font-weight: 500;
}

.table-top {
  border-top-left-radius: 5px;
  border-top-right-radius: 20px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 2px 2px rgba(0, 0, 0, 0.14),
    0 3px 1px -2px rgba(0, 0, 0, 0.12);
}

.q-table th.sortable {
  /* padding: 3px i !important; */
}
</style>