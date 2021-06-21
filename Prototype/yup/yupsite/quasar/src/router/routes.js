
import { Platform } from 'quasar'

let redirectto;
let platforms;
if (Platform.is.mobile) {
  redirectto = "MobileLayout.vue"
  platforms = "m"
}
else {
  redirectto = "AdminLayout.vue"
  platforms = "d"
}



const routes = [
  {
    path: '/',
    component: () => import('src/layouts/AdminLayout.vue'),
    children: [
      // { path: '/', redirect: '/admin' },
      { path: '/', component: () => import('pages/Index.vue') },
      { path: '/cart', component: () => import('pages/Cart.vue') },
      { path: '/address', component: () => import('pages/Addressinfo.vue') },
      { path: '/wishlist', component: () => import('pages/Wishlist.vue') },
      { path: '/shop', component: () => import('pages/Shop.vue') },
      { path: '/product', component: () => import('pages/Product.vue') },
      { path: '/account', component: () => import('pages/Account.vue') },
      { path: '/login', component: () => import('pages/Login.vue') },
      { path: '/register', component: () => import('src/pages/Register.vue') },
    ]
  },
  {
    path: '/login',
    component: () => import('src/layouts/BlankLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Login.vue') },
      { path: '/otpverify', component: () => import('pages/Otpverify.vue') },
      { path: '/mobilesearch', component: () => import('pages/Mobilesearch.vue') },
    ]
  },


  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]


export default routes
