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
            <span class="text-h4 font_700 q-mb-lg">Orders</span>
            <q-space />
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
              <q-td
                key="order_no"
                :props="props"
              ><span class="font15">{{ props.row.order_no }}</span>
              </q-td>
              <q-td
                key="order_status"
                :props="props"
              >
                <q-chip
                  color="primary"
                  text-color="white"
                  class="q-pb-sm"
                >{{ props.row.order_status }}</q-chip>
              </q-td>
              <q-td
                key="order_date"
                :props="props"
              ><span class="font15">{{ props.row.order_date }}</span>
              </q-td>
              <q-td
                key="customer_id"
                :props="props"
                class=""
              ><span class="font16 text-primary">{{ props.row.customer_id }}</span>
              </q-td>
              <q-td
                key="payment_status"
                :props="props"
              ><span class="font15">{{ props.row.payment_status }}</span>
              </q-td>

              <q-td
                key="unit_price"
                :props="props"
              ><span class="font15">{{ props.row.unit_price }}</span>
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
                <router-link to=""><span class="text-primary">Quick View</span></router-link>
              </q-td>
            </q-tr>
          </template>
        </q-table>

      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { fasGlobeAmericas, fasFlask } from "@quasar/extras/fontawesome-v5";
import { LocalStorage, SessionStorage } from 'quasar'

export default {
  name: "GoogleNewsLayout",
  meta: {
    // sets document title
    title: 'Index Page',
    // optional; sets final title as "Index Page - My Website", useful for multiple level meta
    titleTemplate: title => `${title} - My Website`,

    // meta tags
    meta: {
      description: { name: 'description', content: 'Page 1' },
      keywords: { name: 'keywords', content: 'Quasar website' },
      equiv: { 'http-equiv': 'Content-Type', content: 'text/html; charset=UTF-8' },
      // note: for Open Graph type metadata you will need to use SSR, to ensure page is rendered by the server
      ogTitle: {
        name: 'og:title',
        // optional; similar to titleTemplate, but allows templating with other meta properties
        template (ogTitle) {
          return `${ogTitle} - My Website`
        }
      }
    },

    // CSS tags
    link: {
      material: { rel: 'stylesheet', href: 'https://fonts.googleapis.com/icon?family=Material+Icons' }
    },

    // JS tags
    script: {
      ldJson: {
        type: 'application/ld+json',
        innerHTML: `{ "@context": "http://schema.org" }`
      }
    },

    // <html> attributes
    htmlAttr: {
      'xmlns:cc': 'http://creativecommons.org/ns#' // generates <html xmlns:cc="http://creativecommons.org/ns#">,

    },

    // <body> attributes
    bodyAttr: {
      'action-scope': 'xyz', // generates <body action-scope="xyz">
      empty: undefined // generates <body empty>
    },

    // <noscript> tags
    noscript: {
      default: 'This is content for browsers with no JS (or disabled JS)'
    }
  },
  data () {
    return {
      search: "",
      loading: false,
      filter: '',
      pagination: {
        rowsPerPage: 50
      },
      columns: [
        { name: 'title', align: 'left', label: 'Title', field: 'title', sortable: true },
        {
          name: 'last_modified', align: 'left', label: 'Last Modified', field: 'last_modified', sortable: true
        },
      ],
      data: [
        {
          title: 'Home',
          last_modified: '12 Mar, 2021',
        },
        {
          title: 'About',
          last_modified: '12 Mar, 2021',
        },
        {
          title: 'Contact',
          last_modified: '12 Mar, 2021',
        },
        {
          title: 'Home',
          last_modified: '12 Mar, 2021',
        },
        {
          title: 'Home',
          last_modified: '12 Mar, 2021',
        },
      ],

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