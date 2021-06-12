<template>
  <q-page class="flex q-pa-md">

   <q-list class="full-width">
      <q-item 
	  v-for="(user, key) in users" 
	  :key="key" 
	  :to="'/Chat/' + key"
	  clickable 
	  v-ripple>
        <q-item-section avatar>
          <q-avatar color="primary" text-color="white">
            {{ user.name.charAt(0) }}
          </q-avatar>
        </q-item-section>

        <q-item-section>
          <q-item-label>{{ user.name }}</q-item-label>

        </q-item-section>

        <q-item-section side>
         	<q-badge :color="user.online ? 'blue' : 'grey-8'">
				{{ user.online ? 'Online' : 'Offline' }}
			</q-badge>
        </q-item-section>
      </q-item>

   
    </q-list>
  
  </q-page>
</template>

<script>
	
	import { mapGetters } from 'vuex'

	export default {
		// data () {
		// 	return {
		// 		users: [ {
		// 		id: 1,
		// 		name: 'Virat',
		// 		Online: true
		// 		}, {
		// 		id: 2,
		// 		name: 'Rohit',
		// 		Online: false
		// 		}, {
		// 		id: 3,
		// 		name: 'Shikhar',
		// 		Online: true
		// 		}, {
		// 		id: 4,
		// 		name: 'Dhoni',
		// 		Online: true
		// 		} ]
		// 	}
		// },
		computed: {
			...mapGetters('store', ['users'])
		}
	}
</script>
