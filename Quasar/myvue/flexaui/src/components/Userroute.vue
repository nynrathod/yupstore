<template>
    <div>
        <h1>User Route Component</h1>
        <h2>User ID is {{userId}}</h2>
    </div>
</template>
<script>
export default {
    name: 'Useroute',
    data() {
        return {userId:this.$route.params.id}
    }
}
</script>
