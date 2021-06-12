<template>
<q-page 
    ref="pageChat"
    class="page-chat flex column q-pa-md">

        <q-banner 
            v-if="!otherUserDetails.online"
            inline-actions 
            class="text-bloack bg-grey-4 fixed-top">
            {{ otherUserDetails.name }} is Offline
        </q-banner>
        <div
            :class="{ 'invisible' : !showMessages }" 
            class="q-pa-md column col justify-end">
            <q-chat-message
                v-for="(message, key) in messages"
                :bg-color="message.from == 'me' ? 'primary ' : 'grey-4'"
                :text-color="message.from == 'me' ? 'grey-11 ' : 'grey-10'"
                :key="key"
                :name="message.from == 'me' ? userDetails.name : otherUserDetails.name"
                :text="[message.text]"
                :sent="message.from == 'me' ? true : false"
            />
            
        </div>
    <q-footer elevated class="q-pa-sm">
        <q-toolbar>

            <q-form 
            @submit="sendMessage" class="full-width">
                <q-input 
                bg-color="white"
                
                v-model="newMessage"
                ref="newMessage"
                outlined
                rounded
                label="Message" 
                dense>

                    <template>
                        <q-btn 
                        round 
                        dense 
                        flat 
                        type="submit"
                        
                        icon="send" />
                    </template>
                </q-input>
            </q-form>
        </q-toolbar>
      </q-footer> 
  
  </q-page>
</template>

<script>

    import { mapState, mapActions } from 'vuex'
    import mixinOtherUserDetails from 'src/mixins/mixin-other-user-details.js'

    export default {
        mixins: [mixinOtherUserDetails],
        data() {
            return {
                newMessage: '',
                showMessages: false
                // messages: [
                //     {
                //         text: 'Hey Virat, How are you?',
                //         from:'me'
                //     },
                //     {
                //         text: 'good thanks, Wbu,',
                //         from:'then'
                //     },
                //     {
                //         text: 'Im fine',
                //         from:'me'
                //     },
                //     {
                //         text: 'Ok',
                //         from:'then'
                //     }
                // ]
            }
        },
        computed: {
            ...mapState('store', ['messages', 'userDetails'])
        },
        methods: {
            ...mapActions('store', ['firebaseGetMessages', 'firebaseStopGettingMessages', 'firebaseSendMessage']),
            sendMessage() {
                console.warn('hello')
                this.firebaseSendMessage({
                    message: {
                        text: this.newMessage,
                        from: 'me'
                    },
                    otherUserId: this.$route.params.otherUserId
                })
                this.clearMessage()
                // this.messages.push({
                //     text: this.newMessage,
                //     from: 'me'
                // })
            },
            clearMessage() {
                this.newMessage = ''
                this.$refs.newMessage.focus()
            },
            scrollToBottom() {
                let pageChat = this.$refs.pageChat.$el
                setTimeout(() => {
                    window.scrollTo(0, pageChat.scrollHeight)
                }, 20);
            }
        },
        watch: {
            messages: function(val) {
                if (Object.keys(val).length) {
                    this.scrollToBottom()
                    setTimeout(() => {
                        this.showMessages = true
                    }, 200)
                }
            }
        },
        mounted() {
            this.firebaseGetMessages(this.$route.params.otherUserId)
        },
        destroyed() {
            this.firebaseStopGettingMessages()
        }
    }
</script>





<style lang="stylus">
	.page-chat
		// background #e2dfd5
		&:after
			content ''
			display block
			position fixed
			left 0
			right 0
			top 0
			bottom 0
			z-index 0
			opacity 0.1			
			background-size 100px 50px
	.q-banner
		top 50px
		z-index 2
		opacity 0.8
	.q-message
		z-index 1
</style>
