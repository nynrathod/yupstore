<template>
    <div>
        <h1>Child Component</h1>
        <!-- <h3>{{username}}</h3> -->
        <!-- <h3 v-for="user in username" :key="user.name">
            {{user.name}} {{user.email}}
        </h3> -->
        <button v-on:click="updatetitle">Update Parent Title</button>
    </div>
</template>

<script>
export default {
    name: 'Child',
    props: ['username'],
    methods: {
        updatetitle() {
            // console.warn("hello from title")
            this.$emit("changeTitle","Parent Updated")
        }
    }
}
</script>