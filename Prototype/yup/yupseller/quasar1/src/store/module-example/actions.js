// export function someAction (/* context */) {
// }
import Yup from '../../apis/Yup'


export function auth ({ commit }) {
    return Yup.auth()
        .then((response) => {
            commit('auth', response.data)
            return response
        })
        .catch(error => {
            // alert(error)
            if (error.response.status === 422) {
                // console.log(error.response);
                return error.response
                // alert(error.response.data.message)
            }
            // commit('login', response.data)
        })
}

export function checkdomain ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.checkdomain(udata)
        .then((response) => {
            // console.log(response.data);
            // return  response.data;
            // alert(response.data.error)

            // const success = response.data.success
            commit('checkdomain', response.data)
            return response.data.status
        })
        .catch(error => {
            // if (error.response.status === 422) {
            //     this.errors = error.response.data.errors
            // }
        })
}

export function checkemail ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.checkemail(udata)
        .then((response) => {
            commit('checkemail', response.data)
            return response.data.status
        })
        .catch(error => {
            // if (error.response.status === 422) {
            //     this.errors = error.response.data.errors
            // }
        })
}

export function registerseller ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.registerseller(udata)
        .then((response) => {
            commit('registerseller', response.data)
            return response.data.success
        })
        .catch(error => {
            // if (error.response.status === 422) {
            //     this.errors = error.response.data.errors
            // }
        })
}

export function login ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.login(udata)
        .then((response) => {
            commit('login', response.data)
            return response
        })
        .catch(error => {
            // alert(error)
            if (error.response.status === 422) {
                // console.log(error.response);
                return error.response
                // alert(error.response.data.message)
            }
            // commit('login', response.data)
        })
}




export function addproduct ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.addproduct(udata)
        .then((response) => {
            // commit('addproduct', response.data)
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function updateproduct ({ commit }, udata) {
    // alert(udata.mddomain)
    return Yup.updateproduct(udata)
        .then((response) => {
            // commit('addproduct', response.data)
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function deleteproduct ({ commit }, { sku }) {

    return Yup.deleteproduct({ sku })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function savenameitem ({ commit }, { newval, id, sellerid, sku }) {
    // console.log(sku)
    // alert(udata.mddomain)
    return Yup.savenameitem({ newval, id, sellerid, sku })
        .then((response) => {
            // commit('saveitem', response.data)

            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function savecategoryitem ({ commit }, { newval, id, sellerid, sku }) {
    return Yup.savecategoryitem({ newval, id, sellerid, sku })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function savepriceitem ({ commit }, { newval, id, sellerid, sku }) {
    return Yup.savepriceitem({ newval, id, sellerid, sku })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function saveskuitem ({ commit }, { newval, id, sellerid, sku }) {
    return Yup.saveskuitem({ newval, id, sellerid, sku })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function saveweightitem ({ commit }, { newval, id, sellerid, sku }) {
    return Yup.saveweightitem({ newval, id, sellerid, sku })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}



export function fetchproduct ({ commit }) {
    return Yup.fetchproduct()
        .then((response) => {
            commit('fetchproduct', response.data)
            // console.log(response);
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function fetchproductinfo ({ commit }, { sku }) {
    // alert(udata.mddomain)
    // console.log(sid);
    return Yup.fetchproductinfo({ sku })
        .then((response) => {
            commit('fetchproductinfo', response.data)
            // console.log(response.data);
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}



export function uploadsingle ({ commit }, { formData, config }) {
    // alert(udata.mddomain)
    return Yup.uploadsingle(formData, config)
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function test ({ commit }, { formData, config }) {
    // alert(udata.mddomain)
    return Yup.test(formData, config)
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function uploadmultiple ({ commit }, { formData, config }) {
    return Yup.uploadmultiple(formData, config)
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function singlepicker ({ commit }, { sku, sellerid }) {
    return Yup.singlepicker({ sku, sellerid })
        .then((response) => {
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function multiplepicker ({ commit }, { sku, sellerid }) {
    return Yup.multiplepicker({ sku, sellerid })
        .then((response) => {
            commit('multiplepicker', response.data.data)
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function galleryorder ({ commit }, { value }) {
    return Yup.galleryorder({ value })
        .then((response) => {
            // commit('multiplepicker', response.data.data)
            // return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function deleteimage ({ commit }, { name, imageid, sku, sellerid }) {
    return Yup.deleteimage({ name, imageid, sku, sellerid })
        .then((response) => {
            commit('multiplepicker', response.data.data)
            // return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function totalorders ({ commit }) {
    return Yup.totalorders()
        .then((response) => {
            commit('totalorders', response.data)
            // return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}

export function fetchorderinfo ({ commit }, { orderno }) {
    // alert(udata.mddomain)
    // console.log(sid);
    return Yup.fetchorderinfo({ orderno })
        .then((response) => {
            commit('fetchorderinfo', response.data)
            // console.log(response.data);
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}


export function sitestatus ({ commit }) {
    return Yup.sitestatus()
        .then((response) => {
            commit('sitestatus', response.data.status)
            return response.data.status
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}



export function sitetoggle ({ commit }, { visibility }) {
    return Yup.sitetoggle({ visibility })
        .then((response) => {
            // commit('sitestatus', response.data.status)
        })
        .catch(error => {
            // if (error.response.status === 422) {
            //     return error.response
            // }
        })
}


export function fetchorders ({ commit }) {
    return Yup.fetchorders()
        .then((response) => {
            commit('fetchorders', response.data)
            return response
        })
        .catch(error => {
            if (error.response.status === 422) {
                return error.response
            }
        })
}



// export function galleryorder ({ commit }, { sku, sellerid }) {
//     return Yup.galleryorder({ sku, sellerid })
//         .then((response) => {
//             commit('galleryorder', response.data)
//             return response
//         })
//         .catch(error => {
//             if (error.response.status === 422) {
//                 return error.response
//             }
//         })
// }


