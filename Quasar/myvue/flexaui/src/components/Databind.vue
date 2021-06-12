<template>
    <dir>
        <h2>Bind {{message}}</h2>
        <input type="text" v-model="message">
    </dir>
</template>

<script>
export default {
    name: 'Databind',
    data() {
        return {
            message: 'Hi'
        }
    }
}
</script>