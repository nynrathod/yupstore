import Vue from 'vue'
import Yup from '../apis/Yup'

const state = {
    mystatus: 'asds'
}
const mutations = {
    increase (state) {
        state.counter++
    },
    auths (state, payload) {
        state.mystatus = payload
        // state.success = payload
        // console.log(payload)
    },
    register (state) {
        state.mystatus = 'asfg'
    }
}
const actions = {
    decrement () {
        console.log('hello');
    },
    register ({ commit }, udata) {
        // alert(udata.mddomain)
        // Yup.checkdomain(udata)
        //     .then((response) => {
        //         // console.log(response.data);
        //         // return  response.data;
        //         // alert(response.data.error)
        //         // console.log(response.data);
        //         // const success = response.data.success
        //         commit('auths', response.data)
        //         if (response.data.error) {
        //             this.domainerror = true

        //         } else {
        //             this.domainerror = false
        //         }
        //         if (response.data.success) {
        //             this.domainerror = false
        //             this.domainhint = response.data.success
        //         }
        //     })
        //     .catch(error => {
        //         // if (error.response.status === 422) {
        //         //     this.errors = error.response.data.errors
        //         // }
        //     })
    }


}

const getters = {


}

export default {

    state,
    mutations,
    actions,
    getters
}