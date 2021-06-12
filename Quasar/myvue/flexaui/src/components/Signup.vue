<template>
    <div>
        <input type="text" placeholder="Name" v-model="signup.username"><br><br>
        <input type="password" placeholder="Name" v-model="signup.password"><br><br>
        <input type="checkbox" id="cricket" value="cricket" v-model="signup.hobbie">
        <label for="cricket">Cricket</label>
        <input type="checkbox" id="footeball" value="footeball" v-model="signup.hobbie">
        <label for="footeball">footeball</label><br><br>
        <input type="radio" id="male" value="male" name="gender" v-model="signup.gender">
        <label for="male">male</label>
        <input type="radio" id="female" value="female" name="gender" v-model="signup.gender">
        <label for="female">female</label><br><br>
        <button v-on:click="signupmethod">Sign up</button>
    </div>
</template>
<script>
export default {
    name: 'Signup',
    data() {
        return {
            signup: {
                username: null,
                password: null,
                hobbie: [],
                gender: null,
            }
        }
    },
    methods: {
        signupmethod() {
            console.warn(this.signup)
        }
    }
}
</script>