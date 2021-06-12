<template>
    <div>
        <h1>Post Component</h1>

        <form @submit="submitdata" method="POST">
            <input type="text" name="title" v-model="post.title" id=""><br><br>
            <input type="text" name="author" v-model="post.author" id=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
 
Vue.use(VueAxios, axios)
export default {
    name: 'PostComponent',
    data() {
        return {
            post: {
                title: null,
                author: null,
            }
        }
    },
    methods: {
        submitdata(e) {
            console.warn(this.post)
            e.preventDefault();
        }
    }
}
</script>