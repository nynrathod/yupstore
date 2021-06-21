import { updateproduct } from 'src/store/module-example/actions'
import Api from './Api'
import Csrf from './Csrf'

export default {

  auth () {
    return Api.get('/user')
  },

  async registerseller (form) {
    await Csrf.getCookie()
    return Api.post('/registerseller', form)
  },

  async checkdomain (form) {
    await Csrf.getCookie()
    return Api.post('/checkdomain', form)
  },

  async checkemail (form) {
    await Csrf.getCookie()
    return Api.post('/checkemail', form)
  },

  async register (form) {
    await Csrf.getCookie()
    return Api.post('/register', form)
  },

  async login (form) {
    await Csrf.getCookie()
    return Api.post('/login', form)
  },

  async logout () {
    await Csrf.getCookie()
    return Api.post('/logout')
  },

  async uploadsingle (filedata) {
    await Csrf.getCookie()
    return Api.post('/uploadsingle', filedata)
  },

  async uploadmultiple (filedata) {
    await Csrf.getCookie()
    return Api.post('/uploadmultiple', filedata)
  },

  async singlepicker (filedata) {
    await Csrf.getCookie()
    return Api.post('/singlepicker', filedata)
  },

  async multiplepicker (filedata) {
    await Csrf.getCookie()
    return Api.post('/multiplepicker', filedata)
  },

  async galleryorder (value) {
    await Csrf.getCookie()
    return Api.post('/galleryorder', value)
  },

  async deleteimage (data) {
    await Csrf.getCookie()
    return Api.post('/deleteimage', data)
  },

  async addproduct (form) {
    await Csrf.getCookie()
    return Api.post('/addproduct', form)
  },

  async updateproduct (form) {
    await Csrf.getCookie()
    return Api.post('/updateproduct', form)
  },

  async deleteproduct (form) {
    await Csrf.getCookie()
    return Api.post('/deleteproduct', form)
  },

  async fetchproduct (sellerid) {
    await Csrf.getCookie()
    return Api.post('/fetchproduct', sellerid)
  },

  async fetchproductinfo (data) {
    await Csrf.getCookie()
    return Api.post('/fetchproductinfo', data)
  },

  async savenameitem (udata) {
    await Csrf.getCookie()
    return Api.post('/savenameitem', udata)
  },

  async savecategoryitem (udata) {
    await Csrf.getCookie()
    return Api.post('/savecategoryitem', udata)
  },

  async saveweightitem (udata) {
    await Csrf.getCookie()
    return Api.post('/saveweightitem', udata)
  },

  async savepriceitem (udata) {
    await Csrf.getCookie()
    return Api.post('/savepriceitem', udata)
  },

  async savestockitem (udata) {
    await Csrf.getCookie()
    return Api.post('/savestockitem', udata)
  },

}
