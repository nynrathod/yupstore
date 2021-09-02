import axios from 'axios'

const Api = axios.create({
  baseURL: 'http://localhost:8000/api'
})

Api.defaults.withCredentials = true

export default Api

// import axios from 'axios'
// const Api = axios.create({
//   baseURL: 'http://localhost:8000/api'
// })
// export default ({ Vue }) => {
//   Vue.prototype.$axios = Api
// }
// export { Api }
