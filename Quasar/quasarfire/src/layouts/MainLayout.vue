<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
      
            <q-btn
			v-if="$route.fullPath.includes('/Chat')"
			v-go-back.single
			icon="arrow_back"
			flat
			dense
			label="back" />
        <q-toolbar-title class="absolute-center">
          {{ title }}
        </q-toolbar-title>

		<q-btn
            v-if="!userDetails.userId"
			to="/auth"
			class="absolute-right q-pr-sm"
			icon="account_circle"
			flat
			no-caps
			dense
			label="" />

        <q-btn
            v-else
            @click="logoutUser"
			class="absolute-right q-pr-sm"
			icon="account_circle"
			flat
			no-caps
			dense>
            Logout<br>
            {{ userDetails.name }}
        </q-btn>

      </q-toolbar>
    </q-header>

  

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
    import { mapState, mapActions } from 'vuex'
    import mixinOtherUserDetails from 'src/mixins/mixin-other-user-details.js'

    export default {
        mixins: [mixinOtherUserDetails],
        name: 'MainLayout',
        computed: {
            ...mapState('store',['userDetails']),
            title() {
                console.log(this.$route)
                let currentpath = this.$route.fullPath
                if (currentpath == '/') return 'Flex Chat'
                else if (currentpath.includes('/Chat')) return this.otherUserDetails.name
                else if (currentpath == '/auth') return 'Login'
            }
        },
        methods: {
            ...mapActions('store', ['logoutUser'])
        }
    }
</script>

<style>
.q-btn { line-height: 1.2em; }
</style>
