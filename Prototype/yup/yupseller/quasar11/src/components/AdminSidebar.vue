<template>

  <q-drawer
    v-model="leftDrawerOpen"
    show-if-above
    content-class="shop_drawer"
    :width="280"
  >
    <q-scroll-area class="fit">
      <q-list
        padding
        class="text-grey-8"
      >
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
            <q-avatar
              size="26px"
              class="q-mr-md"
            >
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
          </q-btn>
          <q-item-section>
            <q-item-label>Atttrect</q-item-label>
            <q-item-label
              caption
              class="text-weight-regular"
            >Owner</q-item-label>
          </q-item-section>
        </q-item>
        <q-separator
          inset
          class="q-my-sm"
        />

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

        <q-separator
          inset
          class="q-my-sm"
        />

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

        <q-separator
          inset
          class="q-my-sm"
        />

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

        <q-separator
          inset
          class="q-my-sm"
        />

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

</template>




<script>

export default {
  name: "Adminsidebar",
  data () {
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
};
</script>
