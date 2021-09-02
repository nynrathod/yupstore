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

        <!-- <q-table
          title="Treats"
          :data="data"
          :columns="columns"
          row-key="name"
          binary-state-sort
        >

          <template v-slot:body="props">
            <q-tr :props="props">
              <q-td
                key="name"
                :props="props"
              >{{ props.row.name }}</q-td>
              <q-td
                key="category"
                :props="props"
              >{{ props.row.category }}</q-td>
              <q-td
                key="sku"
                :props="props"
              >{{ props.row.sku }}</q-td>
              <q-td
                key="price"
                :props="props"
              >{{ props.row.price }}</q-td>
              <q-td
                key="stock"
                :props="props"
              >{{ props.row.product_quantity }}</q-td>
              <q-td
                key="action"
                :props="props"
              >
                <q-btn
                  color="blue"
                  label="Update"
                  @click="editItem(props.row)"
                  size=sm
                  no-caps
                ></q-btn>
                <q-btn
                  color="red"
                  label="Delete"
                  @click="deleteItem(props.row)"
                  size=sm
                  no-caps
                ></q-btn>
              </q-td>
            </q-tr>
          </template>
        </q-table> -->

        <q-table
          :data="data"
          :columns="columns"
          :filter="filter"
          :loading="loading"
          row-key="name"
          unelevated
          bordered
          flat
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
                  style="width: 70px"
                /></q-td>
              <q-td
                key="sku"
                :props="props"
              >{{ props.row.sku }}
              </q-td>
              <q-td
                key="name"
                :props="props"
                class="text-primary"
              ><span class="font16">{{ props.row.name }}</span>
                <!-- <q-spinner-dots
                  key="name"
                  color="blue"
                  :props="props"
                  v-if="spin"
                /> -->

                <!-- <q-popup-edit
                  v-model="props.row.name"
                  title="Update calories"
                  buttons
                  @before-hide="updateitem"
                  @save="(newValue, initialValue) => saveitem(newValue,initialValue,props.row)"
                > -->
                <q-popup-edit
                  v-model="props.row.name"
                  title="Update Item"
                  anchor="top left"
                  buttons
                  color="blue"
                  @save="(newValue, initialValue) => savenameitem(newValue,props)"
                >
                  <q-input
                    type="text"
                    v-model="props.row.name"
                    dense
                    color="blue"
                    autofocus
                  />

                </q-popup-edit>

              </q-td>
              <q-td
                key="category"
                :props="props"
              ><span class="font15">{{ props.row.category }}</span>
                <q-popup-edit
                  v-model="props.row.category"
                  title="Update Item"
                  anchor="top left"
                  buttons
                  color="blue"
                  @save="(newValue, initialValue) => savecategoryitem(newValue,props)"
                >
                  <q-select
                    v-model="props.row.category"
                    multiple
                    :options="catoptions"
                    outlined
                    dense
                    color="blue"
                    autofocus
                    :rules="[
                      $rules.required('Field is Required'),
                    ]"
                  />

                </q-popup-edit>

              </q-td>
              <q-td
                key="product_weight"
                :props="props"
              ><span class="font15">{{ props.row.product_weight }}</span>
                <q-popup-edit
                  v-model="props.row.product_weight"
                  title="Update Item"
                  anchor="top left"
                  buttons
                  color="blue"
                  @save="(newValue, initialValue) => saveweightitem(newValue,props)"
                >
                  <q-input
                    type="text"
                    v-model="props.row.product_weight"
                    dense
                    color="blue"
                    autofocus
                  />

                </q-popup-edit>
              </q-td>
              <q-td
                key="price"
                :props="props"
              ><span class="font15">{{ props.row.price }}</span>
                <q-popup-edit
                  v-model="props.row.price"
                  title="Update Item"
                  anchor="top left"
                  buttons
                  color="blue"
                  @save="(newValue, initialValue) => savepriceitem(newValue,props)"
                >
                  <q-input
                    type="text"
                    v-model="props.row.price"
                    dense
                    color="blue"
                    autofocus
                  />

                </q-popup-edit>
              </q-td>
              <q-td
                key="product_quantity"
                :props="props"
              ><span class="font15">{{ props.row.product_quantity }}</span>
                <q-popup-edit
                  v-model="props.row.product_quantity"
                  title="Update Item"
                  anchor="top left"
                  buttons
                  color="blue"
                  @save="(newValue, initialValue) => savestockitem(newValue,props)"
                >
                  <q-input
                    type="text"
                    v-model="props.row.slug"
                    dense
                    color="blue"
                    autofocus
                  />

                </q-popup-edit>
              </q-td>
              <q-td
                key="action"
                :props="props"
                class="text-primary"
              >

                <span @click="updaterouter(props.row.sku,props.row.slug)">Edit</span> /
                <router-link to=""><span>View</span></router-link> /
                <span @click="deleteItem(props.row)">Delete</span>

              </q-td>
            </q-tr>
          </template>

          <!-- <template #body-cell-action="props">
            <q-td>
              <q-btn
                dense
                flat
                round
                color="blue"
                field="edit"
                icon="edit"
                @click="editItem(props.row)"
              ></q-btn>
            </q-td>
          </template> -->
        </q-table>

      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";
import { LocalStorage, SessionStorage } from 'quasar'

import { Platform } from 'quasar'
import { QSpinnerFacebook } from 'quasar'

let redirectto;
let platforms;
if (Platform.is.mobile) {
  redirectto = "BlankLayout.vue"
  platforms = "m"
}
else {
  redirectto = "AdminLayout.vue"
  platforms = "d"
}


const seed = [
  {
    name: 'Lorem ipsum dolor sit amet, consectetur',
    Category: 159,
    SKU: 6.0,
    Price: 24,
    Stock: 4.0,
  },
  {
    name: 'Lorem ipsum dolor sit amet',
    Category: 237,
    SKU: 9.0,
    Price: 37,
    Stock: 4.3
  },
  {
    name: 'Lorem ipsum d',
    Category: 262,
    SKU: 16.0,
    Price: 23,
    Stock: 6.0
  },
  {
    name: 'Lorem ipsum dolor sit',
    Category: 305,
    SKU: 3.7,
    Price: 67,
    Stock: 4.3
  },
  {
    name: 'Lorem ipsum dolor',
    Category: 356,
    SKU: 16.0,
    Price: 49,
    Stock: 3.9
  },
  {
    name: 'Lorem ipsum',
    Category: 375,
    SKU: 0.0,
    Price: 94,
    Stock: 0.0
  },
  {
    name: 'Lorem ipsum dolor sit amet, consectetur',
    Category: 392,
    SKU: 0.2,
    Price: 98,
    Stock: 0
  },
  {
    name: 'Lorem ipsum dolor sit amet',
    Category: 408,
    SKU: 3.2,
    Price: 87,
    Stock: 6.5
  },
  {
    name: 'Lorem ipsum sit amet, consectetur',
    Category: 452,
    SKU: 25.0,
    Price: 51,
    Stock: 4.9
  },
  {
    name: 'Lorem dolor sit amet, consectetur',
    Category: 518,
    SKU: 26.0,
    Price: 65,
    Stock: 7
  }
]

// we generate lots of rows here
// let data = []
// for (let i = 0; i < 1000; i++) {
//   data = data.concat(seed.slice(0).map(r => ({ ...r })))
// }
// data.forEach((row, index) => {
//   row.index = index
// })

// // we are not going to change this array,
// // so why not freeze it to avoid Vue adding overhead
// // with state change detection
// Object.freeze(data)

export default {
  name: "GoogleNewsLayout",
  data () {
    return {
      leftDrawerOpen: false,
      search: "",
      loading: false,
      filter: '',
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
      show_dialog: false,
      editedIndex: -1,
      editedItem: {
        // name: "",
        // category: ['Category 5'],

      },
      defaultItem: {
        name: "",
        category: '',
        sku: '',
        price: '',
        product_quantity: '',
        onsale: false,
        tags: "",
        description: "",
        product_weight: "",
        product_quantity: "",
        product_info: "",
        return_info: "",
        shipping_info: "",

      },
      newcat: '',
      selected: [],
      lastIndex: null,
      pagination: {
        rowsPerPage: 50
      },
      spin: false,
      columns: [
        // {
        //   name: 'index',
        //   label: '#',
        //   field: 'index'
        // },
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

    this.$root.$on("login", () => {
      this.isLoggedIn = true;
    });

    this.isLoggedIn = !!LocalStorage.getItem("auth");





    this.$store.dispatch('example/fetchproduct')
      .then((response) => {
        let totalproduct = this.$store.state.example.productjson.length
        for (let i = 0; i < totalproduct; i++) {
          this.data.push(this.$store.state.example.productjson[i])
        }
      })
      .catch(error => {
        if (error.response.status === 422) {
        }
      })


    // this.$store.dispatch('example/auth', this.form)
    //   .then((response) => {
    //     // this.form.mduid = this.$store.state.example.username;
    //     let userid = this.$store.state.example.userid

    //     this.$store.dispatch('example/fetchproduct', { userid: this.$store.state.example.userid })
    //       .then((response) => {
    //         // console.log(response.data);


    //         // console.log(this.data);
    //         // console.log(this.$store.state.example.productjson);

    //         for (let i = 0; i < 10; i++) {
    //           // console.log(i);
    //           // console.log(this.data[5].sku)
    //           this.data.push(this.$store.state.example.productjson[i])


    //           // let as = this.$store.state.example.productjson[i].category.split(",");
    //           // console.log(as.join())
    //         }



    //         // this.data.name = 'asd';
    //         // console.log(this.$store.state.example.productjson[2].sku);
    //         // console.log(this.$store.state.example.productjson)

    //       })
    //       .catch(error => {
    //         // if (error.response.status === 422) {
    //         //   this.errors = error.response.data.errors
    //         // }
    //       })

    //   })





  },
  methods: {
    // savenameitem (newval, item) {
    //   // this.spin = true
    //   this.$q.loading.show({
    //     spinner: QSpinnerFacebook,
    //     spinnerColor: 'blue',
    //     spinnerSize: 40,
    //     backgroundColor: 'dark',
    //     message: 'Some important process is in progress. Hang on...',
    //     messageColor: 'black'
    //   })


    //   let i = item.row.id
    //   console.log(item.row.sku);
    //   // console.log(item.cols[i].name)
    //   this.$store.dispatch('example/savenameitem', {
    //     newval: newval,
    //     id: item.row.id,
    //     sellerid: item.row.seller_id,
    //     sku: item.row.sku
    //   })
    //     .then((response) => {
    //       // this.spin = false
    //       this.$q.loading.hide()
    //     })
    //     .catch(error => {
    //       // if (error.response.status === 422) {
    //       //   this.errors = error.response.data.errors
    //       // }
    //     })


    // },
    // savecategoryitem (newval, item) {
    //   this.$q.loading.show({
    //     spinner: QSpinnerFacebook,
    //     spinnerColor: 'blue',
    //     spinnerSize: 40,
    //     backgroundColor: 'dark',
    //     message: 'Some important process is in progress. Hang on...',
    //     messageColor: 'black'
    //   })
    //   this.$store.dispatch('example/savecategoryitem', {
    //     newval: newval,
    //     sellerid: item.row.seller_id,
    //     sku: item.row.sku
    //   })
    //     .then((response) => {
    //       this.$q.loading.hide()
    //     })
    //     .catch(error => {
    //     })
    // },
    // savepriceitem (newval, item) {
    //   this.$q.loading.show({
    //     spinner: QSpinnerFacebook,
    //     spinnerColor: 'blue',
    //     spinnerSize: 40,
    //     backgroundColor: 'dark',
    //     message: 'Some important process is in progress. Hang on...',
    //     messageColor: 'black'
    //   })
    //   this.$store.dispatch('example/savepriceitem', {
    //     newval: newval,
    //     sellerid: item.row.seller_id,
    //     sku: item.row.sku
    //   })
    //     .then((response) => {
    //       this.$q.loading.hide()
    //     })
    //     .catch(error => {
    //     })
    // },
    // saveweightitem (newval, item) {
    //   this.$q.loading.show({
    //     spinner: QSpinnerFacebook,
    //     spinnerColor: 'blue',
    //     spinnerSize: 40,
    //     backgroundColor: 'dark',
    //     message: 'Some important process is in progress. Hang on...',
    //     messageColor: 'black'
    //   })
    //   this.$store.dispatch('example/saveweightitem', {
    //     newval: newval,
    //     sellerid: item.row.seller_id,
    //     sku: item.row.sku
    //   })
    //     .then((response) => {
    //       this.$q.loading.hide()
    //     })
    //     .catch(error => {
    //     })
    // },
    // savestockitem (newval, item) {
    //   this.$q.loading.show({
    //     spinner: QSpinnerFacebook,
    //     spinnerColor: 'blue',
    //     spinnerSize: 40,
    //     backgroundColor: 'dark',
    //     message: 'Some important process is in progress. Hang on...',
    //     messageColor: 'black'
    //   })
    //   this.$store.dispatch('example/savestockitem', {
    //     newval: newval,
    //     sellerid: item.row.seller_id,
    //     sku: item.row.sku
    //   })
    //     .then((response) => {
    //       this.$q.loading.hide()
    //     })
    //     .catch(error => {
    //     })
    // },

    // updateitem () {
    //   this.spin = true
    //   // console.log(this.spin);
    // },
    // onRowClick () {
    //   this.$router.push("/singleproduct")
    // },
    // updaterow () {
    //   if (this.editedIndex > -1) {

    //     // let ss = ''
    //     // Object.assign(this.newcat, (this.editedItem.category));
    //     // let as = this.editedItem.category.join();
    //     // Object.assign(this.data[this.editedIndex].category, this.editedItem.category.join());
    //     // Object.assign(this.editedItem.category, this.editedItem.category.join());
    //     this.editedItem.category.join();
    //     Object.assign(this.data[this.editedIndex], this.editedItem);
    //     // this.newcat = this.editedItem.category.join()
    //   } else {
    //     this.data.push(this.editedItem.category);
    //     // console.log(this.editedItem);
    //   }
    //   this.close()
    // },
    // editItem (item) {
    //   this.editedIndex = this.data.indexOf(item);
    //   this.editedItem = Object.assign({}, item);
    //   this.editedItem.category = item.category.split(",");
    //   // console.log(this.editedItem.category);
    //   this.show_dialog = true;
    //   if (item.onsale == 1) {
    //     this.editedItem.onsale = true
    //   } else {
    //     this.editedItem.onsale = false
    //   }
    // },
    // close () {
    //   this.show_dialog = false
    //   setTimeout(() => {
    //     this.editedItem = Object.assign({}, this.defaultItem)

    //     // this.editedItem.category = this.defaultItem.category.join();
    //     // console.log(this.editedItem);

    //     // if (item.onsale == 1) {
    //     //   this.editedItem.onsale = true
    //     // } else {
    //     //   this.editedItem.onsale = false
    //     // }


    //     this.editedIndex = -1
    //   }, 300)
    // },
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

.q-table thead tr,
.q-table tbody td {
  /* cursor: pointer; */
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