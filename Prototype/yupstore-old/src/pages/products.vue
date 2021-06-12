<template>
  <q-layout view="hHh lpR fFf" class="bg-grey-1">
    <q-header elevated class="bg-white text-grey-8" height-hint="64">
      <q-toolbar class="GNL__toolbar">
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
          class="q-mr-sm"
        />

        <q-btn
          v-if="$q.screen.gt.xs"
          flat
          rounded
          class="q-py-sm"
          style="color: rgb(26 127 226)"
        >
          <q-icon name="o_local_mall" size="md" style="color: rgb(26 127 226)" />

          <q-toolbar-title shrink class="text-weight-bold">
            Yup Store
          </q-toolbar-title>
        </q-btn>

        <q-space />

        <q-input
          class="GNL__toolbar-input no-shadow"
		  outlined
          dense
          v-model="search"
          color="bg-grey-7"
          placeholder="Search for topics, locations & sources"
        >
          <template v-slot:prepend>
            <q-icon v-if="search === ''" name="search" />
            <q-icon
              v-else
              name="clear"
              class="cursor-pointer"
              @click="search = ''"
            />
          </template>
          <template v-slot:append>
            <q-btn flat dense round aria-label="Menu" icon="arrow_drop_down">
              <q-menu anchor="bottom end" self="top end">
                <div class="q-pa-md" style="width: 400px">
                  <div class="text-body2 text-grey q-mb-md">
                    Narrow your search results
                  </div>

                  <div class="row items-center">
                    <div class="col-3 text-subtitle2 text-grey">
                      Exact phrase
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="exactPhrase" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Has words</div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="hasWords" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">
                      Exclude words
                    </div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="excludeWords" />
                    </div>

                    <div class="col-3 text-subtitle2 text-grey">Website</div>
                    <div class="col-9 q-pl-md">
                      <q-input dense v-model="byWebsite" />
                    </div>

                    <div class="col-12 q-pt-lg row justify-end">
                      <q-btn
                        flat
                        dense
                        no-caps
                        color="grey-7"
                        size="md"
                        style="min-width: 68px"
                        label="Search"
                        v-close-popup
                      />
                      <q-btn
                        flat
                        dense
                        no-caps
                        color="grey-7"
                        size="md"
                        style="min-width: 68px"
                        @click="onClear"
                        label="Clear"
                        v-close-popup
                      />
                    </div>
                  </div>
                </div>
              </q-menu>
            </q-btn>
          </template>
        </q-input>

        <q-space />

        <div class="q-gutter-sm row items-center no-wrap">
          <q-btn
            v-if="$q.screen.gt.sm"
            round
            dense
            flat
            color="text-grey-7"
            icon="apps"
          >
            <q-tooltip>Google Apps</q-tooltip>
          </q-btn>
          <q-btn round dense flat color="grey-8" icon="notifications">
            <q-badge color="red" text-color="white" floating> 2 </q-badge>
            <q-tooltip>Notifications</q-tooltip>
          </q-btn>
          <q-btn round flat>
            <q-avatar size="26px">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
            <q-menu fit class="q-mt-sm">
              <q-list style="min-width: 100px">
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="account_balance" />
                  </q-item-section>
                  <q-item-section>Account</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="storefront" />
                  </q-item-section>
                  <q-item-section>Orders</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="favorite_border" />
                  </q-item-section>
                  <q-item-section>Wishlist</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="person" />
                  </q-item-section>
                  <q-item-section>Profile</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="settings" />
                  </q-item-section>
                  <q-item-section>Setting</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="logout" />
                  </q-item-section>
                  <q-item-section>Logout</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section>Help &amp; Feedback</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
            <q-tooltip>Account</q-tooltip>
          </q-btn>
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      content-class="shop_drawer"
      :width="280"
    >
      <q-scroll-area class="fit">
        <q-list padding class="text-grey-8">
          <q-item
            class="GNL__drawer-item"
            v-ripple
            clickable
          >
            <q-btn
            rounded
            dense
			flat
            style="color: rgb(26 127 226)"
          >
            <q-avatar size="26px" class="q-mr-md">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
            </q-btn>
            <q-item-section>
              <q-item-label>Atttrect</q-item-label>
			  <q-item-label caption class="text-weight-regular">Owner</q-item-label>
            </q-item-section>
          </q-item>
		  <q-separator inset class="q-my-sm" />

		  <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links1"
            :key="link.text"
            clickable
			:to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator inset class="q-my-sm" />

		<q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links2"
            :key="link.text"
            clickable
			:to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

          <q-separator inset class="q-my-sm" />

          <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links3"
            :key="link.text"
            clickable
			:to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>

		  <q-separator inset class="q-my-sm" />

		  <q-item
            class="GNL__drawer-item"
            v-ripple
            v-for="link in links4"
            :key="link.text"
            clickable
			:to="link.to"
          >
            <q-item-section avatar>
              <q-icon :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>
          </q-item>
       
        </q-list>
      </q-scroll-area>
    </q-drawer>

    <q-page-container>
		<q-page class="q-px-lg q-page">
			<div class="q-pa-md">
        
        <div class="row q-py-md q-px-md bg-white table-top">
          <span class="text-h4">Products</span>
          <q-space />
          <q-btn
          outline
          color="primary"
          rounded
          icon-right="archive"
          label="Export to csv"
          class="q-mr-md"
        />
          <q-btn icon="add_circle_outline" color="primary" rounded label="Add Products" @click="redirect" text-color="white"/>  
        </div>
   
				<q-table
				class="my-sticky-virtscroll-table"
				virtual-scroll
				:pagination.sync="pagination"
				:rows-per-page-options="[0]"
				:virtual-scroll-sticky-size-start="48"
				row-key="index"
				:data="data"
				:columns="columns"
				:selected-rows-label="getSelectedString"
				selection="multiple"
				:selected="selected"
				@selection="onSelection"
        @row-click="onRowClick"
				/>

			
	
			</div>
		</q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";

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
let data = []
for (let i = 0; i < 1000; i++) {
  data = data.concat(seed.slice(0).map(r => ({ ...r })))
}
data.forEach((row, index) => {
  row.index = index
})

// we are not going to change this array,
// so why not freeze it to avoid Vue adding overhead
// with state change detection
Object.freeze(data)

export default {
  name: "GoogleNewsLayout",
  data() {
    return {
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
        { icon: "dashboard", text: "Dashboard", to:"/attrect" },
        { icon: "storefront", text: "My Store", to: "/mystore" },
        { icon: "star_border", text: "My Products", to:"/products" },
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
	   selected: [],
      lastIndex: null,
	  data,
      pagination: {
        rowsPerPage: 50
      },

      columns: [
        // {
        //   name: 'index',
        //   label: '#',
        //   field: 'index'
        // },
        { name: 'Image', label: '', field: 'Image' },
        {
          name: 'name',
          required: true,
          label: 'Name',
          align: 'left',
          field: row => row.name,
          format: val => `${val}`,
          sortable: true
        },
        { name: 'Category', align: 'center', label: 'Category', field: 'Category', sortable: true },
        { name: 'SKU', label: 'SKU', field: 'SKU', sortable: true },
        { name: 'Price', label: 'Price', field: 'Price', sortable: true },
        { name: 'Stock', label: 'Stock', field: 'Stock', sortable: true },
      ]
    }
  },
  methods: {
    onClear() {
      this.exactPhrase = "";
      this.hasWords = "";
      this.excludeWords = "";
      this.byWebsite = "";
      this.byDate = "Any time";
    },
    changeDate(option) {
      this.byDate = option;
      this.showDateOptions = false;
	},
	getSelectedString () {
      return this.selected.length === 0 ? '' : `${this.selected.length} record${this.selected.length > 1 ? 's' : ''} selected of ${this.data.length}`
    },

    onSelection ({ rows, added, evt }) {
      if (rows.length === 0 || this.$refs.table === void 0) {
        return
      }

      const row = rows[0]
      const filteredSortedRows = this.$refs.table.filteredSortedRows
      const rowIndex = filteredSortedRows.indexOf(row)
      const lastIndex = this.lastIndex

      this.lastIndex = rowIndex
      document.getSelection().removeAllRanges()

      if (this.$q.platform.is.mobile === true) {
        evt = { ctrlKey: true }
      }
      else if (evt !== Object(evt) || (evt.shiftKey !== true && evt.ctrlKey !== true)) {
        this.selected = added === true ? rows : []

        return
      }

      const operateSelection = added === true
        ? selRow => {
          const selectedIndex = this.selected.indexOf(selRow)
          if (selectedIndex === -1) {
            this.selected = this.selected.concat(selRow)
          }
        }
        : selRow => {
          const selectedIndex = this.selected.indexOf(selRow)
          if (selectedIndex > -1) {
            this.selected = this.selected.slice(0, selectedIndex).concat(this.selected.slice(selectedIndex + 1))
          }
        }

      if (lastIndex === null || evt.shiftKey !== true) {
        operateSelection(row)

        return
      }

      const from = lastIndex < rowIndex ? lastIndex : rowIndex
      const to = lastIndex < rowIndex ? rowIndex : lastIndex
      for (let i = from; i <= to; i += 1) {
        operateSelection(filteredSortedRows[i])
      }
    },
    onRowClick() {
      this.$router.push("/singleproduct")
    },
    redirect() {
          this.$router.push("/singleproduct")
      }
  },
}
</script>

<style lang="stylus">
.GNL__toolbar {
	height: 64px;
}
.GNL__toolbar-input {
	width: 55%
}
.GNL__drawer-item {
		line-height: 24px
		border-radius: 0 24px 24px 0
		margin-right: 12px
	}
	.q-drawer .q-item__section--avatar,
	.q-drawer .q-icon {
		color: #5f6368
	}
	.q-item__label:not(.text-caption) {
      color: #3c4043
      letter-spacing: .01785714em
      line-height: 1.25rem
	  font-weight: 500;
	}
.GNL__drawer-footer-link {
	color: inherit
	text-decoration: none
	font-weight: 500
	font-size: .75rem
}
.GNL:hover {
      color: #000
}

.shop_drawer {
	background: #f0f4f7
	border-radius: 5px !important;
}
.q-drawer {
	position: fixed;
	left: 60px;
	top: 100px !important;
	height: 665px;
}
.q-page { 
	padding-left: 80px;
	margin-top : 20px;
 }

 .my-sticky-virtscroll-table {
  height: 100vh
 }

  .q-table__top,
  .q-table__bottom,
  thead tr:first-child th {
    background-color: #fff
  }

  thead tr th {
    position: sticky
    z-index: 1
  }

  thead tr:last-child th {
    top: 48px
  }
  thead tr:first-child th {
    top: 0
  }

   .my-sticky-virtscroll-table ::-webkit-scrollbar {
    width: 5px;
    height: 4px
}

 .my-sticky-virtscroll-table ::-webkit-scrollbar-thumb {
    background: rgb(26 127 226);
    border-radius: 10px
}

 .my-sticky-virtscroll-table ::-webkit-scrollbar-track {
    border: 1px solid #f2f2f2;
    border-radius: 10px
}
.q-table thead tr, 
.q-table tbody td { height: 78px; cursor: pointer;}
.table-top { 
    border-top-left-radius: 5px; border-top-right-radius: 20px; 
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 2px 2px rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12);
}
</style>