<template>
    <div>
        <p v-if="error.length">
            <b>Please correct data</b>
            <ul>
                <li v-for="e in error" v-bind:key="e.id">
                    {{e}}
                </li>
            </ul>
        </p>
        <!-- <input type="text" v-model="loginform.uname" name="username" placeholder="Username" ><br><br>
        <input type="password" v-model="loginform.pass" name="password" placeholder="Password" ><br><br> 
        <button type="submit" v-on:click="logindata">Login</button> -->
        <form @submit="login">
            <input type="text" v-model="name" name="username" placeholder="Username" ><br><br>
            <input type="password" v-model="pass"  name="password" placeholder="Password" ><br><br> 
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script>
export default {
    name: 'Login',
    data() {
        return {
            // loginform: {
            //     uname: null,
            //     pass: null,
            // }
            error: [],
            name: null,
            pass: null
        }
    },
    methods: {
        // logindata() {
        //     // console.log("logindata",this.loginform)
        //     console.log("logindata",this.loginform.uname,this.loginform.pass)
        // }
        login(e) {
            
            if(this.name && this.pass) {
                console.warn("no error");
                return true
            }
            if(!this.name) {
                this.error.push("Uname required")
            }
            if(!this.pass) {
                this.error.push("Password required")
            }
            console.warn("hello",this.error);
            e.preventDefault();
        }
    }
}
</script>