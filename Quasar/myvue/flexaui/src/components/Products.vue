<template>
    <!-- <div>
        <h1>Hello From Products Component</h1>
    </div> -->
    <ul class="product_listing">
        <li v-for="product in allProducts" :key="product.id">
            {{product.title}} | {{product.price}}
        </li>
    </ul>
</template>
<script>

import { mapGetters, mapActions }  from "vuex";

export default {
    name: "Products",
    methods: {
        ...mapActions(["getproducts"])
    },
    computed: mapGetters(["allProducts"]),
    created() {
        this.getproducts()
    }
};
</script>

<style scoped>
    /* div {
        background-color: #dde5ec;
        height: 500px;
    } */
</style>