<template>
    <div>
        <h1>Hello From Home Component</h1>
        <!-- <h3 v-once>{{name}}</h3>
        <h3>{{name}}</h3>
        <h3>{{a+b}}</h3>
        <h3>{{ok?"yes":"no"}}</h3>
        <button v-on:click="updatetxt()">Click Me</button>
        <button v-bind:disabled="disablebtn">Disable Btn</button>
        <p v-html="rowHtml"></p> -->
        <h3 class="homestyle">Class and Style Binding</h3>
        <h3 v-bind:style="{color: 'blue'}">Style Binding</h3>
        <h3 v-bind:style="{color: color}">Style Binding</h3>
        <h3 v-bind:class="{display:show,display2: show}">Class Binding with object</h3>
        <h3 v-bind:class="[aclass]">Class Binding with array</h3>
        <h3 v-bind:class="[show?'yesshow':'noshow']">Class Binding with array</h3>
        <!-- <Users />
        <Products /> -->
        <!-- <h2>{{dynamic}}</h2> -->
        <!-- <button v-on:mouseover="hello('Function Para Data')">click Here</button> -->
        <!-- <h1 v-if="show">V if Data Funtion</h1> -->
        <!-- <h1 v-else>V else Data Funtion</h1> -->
        <!-- <button v-on:click="display">if Toggle Click</button> -->
        <!-- <table style="width: 600px; margin: auto;">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr v-for="user in users" :key="user.id">
                <td>{{user.id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
            </tr>
        </table> -->
    </div>
</template>
<script>
// import Users from './Users'
// import Products from './Products'

export default {
    name: "Home",
    components: {
        // Users,
        // Products
    },
    props: {
        dynamic: String
    },methods: {
        hello(a) {
            alert(a);
        },
        display() {
            this.show=!this.show
        },
        updatetxt() {
            // this.name="peter"
            this.ok=!this.ok
        }
    },data() {
        // return {show:true}
        return {
            // users: [
            //     {id: 1, name: 'nayan', email: 'mail@mail.com'},
            //     {id: 2, name: 'arjun', email: 'mail2@mail.com'},
            //     {id: 3, name: 'john', email: 'mail3@mail.com'},
            //     {id: 4, name: 'brock', email: 'mail4@mail.com'},
            //     {id: 5, name: 'daniel', email: 'mail5@mail.com'}
            // ]
            name: 'Nayan',
            a: 10,
            b: 20,
            ok: false,
            rowHtml: "<h1>Html in Vue</h1>",
            disablebtn: true,
            show: true,
            aclass: 'arrayclass',
            color: 'red'
        }
    }
};
</script>

<style scoped>
    div {
        /* background-color: #dde5ec;
        height: 500px; */
    }
    .homestyle {
        color: orange;
    }
    .display {
        color: green;
    }
    .arrayclass {
        color: #00d999
    }
</style>