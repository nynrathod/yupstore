import { LocalStorage } from 'quasar'

// export function setFilter (state, filter) {
//   LocalStorage.set('test', filter)
//   state.filter = filter
// }

// export function loadData (state) {
//   const filter = LocalStorage.getItem('test') || 'red'
//   state.filter = filter
// }

export function checkdomain (state, payload) {
    state.isdomainavailable = payload
    // state.success = payload
    // console.log(payload)
}

export function checkemail (state, payload) {
    state.isemailavailable = payload
}

export function registerseller (state, payload) {
    state.isemailavailable = payload
}

// export function addproduct (state, payload) {
//     state.isemailavailable = payload
// }

export function fetchproduct (state, payload) {
    // console.log(payload);
    state.productjson = payload
}

export function fetchproductinfo (state, payload) {
    state.product = payload
    // console.log(payload);

}

export function multiplepicker (state, payload) {
    state.gallery = payload
    // console.log(payload.data);

}


export function deleteimage (state, payload) {
    // console.log(state.gallery.splice(payload.id, 1))

    // state.gallery = payload
    // console.log(payload);

}


export function auth (state, payload) {
    state.username = payload.username
    state.userid = payload.user_id
    // console.log(payload.user_id);
}

export function login (state, payload) {
    state.userdata = payload
}

export function updateList (state, value) {

    state.list = value
    // console.log(value);
}

export function totalorders (state, payload) {
    state.totalorders = payload
}

export function sitestatus (state, payload) {
    state.sitestatus = payload
}


export function fetchorders (state, payload) {
    // console.log(payload);
    state.orderjson = payload
}

export function fetchorderinfo (state, payload) {
    state.orderinfo = payload
    // console.log(payload);

}