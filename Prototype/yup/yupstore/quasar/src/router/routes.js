
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
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: '/shop', component: () => import('pages/Shop.vue') },
      { path: '/product', component: () => import('pages/Product.vue') },
    ]
  },
  {
    path: '/login',
    component: () => import('src/layouts/BlankLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Login.vue') },
      { path: '/login', component: () => import('pages/Login.vue') },
      { path: '/otpverify', component: () => import('pages/Otpverify.vue') },
      { path: '/register-shop', component: () => import('src/pages/RegisterShop.vue') },
      { path: '/mobilesearch', component: () => import('pages/Mobilesearch.vue') },
    ]
  },
  {
    path: '/cart',
    component: () => import('layouts/Cart.vue'),
    children: [
      { path: '/cart', component: () => import('pages/Cart.vue'), name: 'cart' },
      { path: '/wishlist', component: () => import('pages/Wishlist.vue'), name: 'wishlist' },
      { path: '/myorders', component: () => import('pages/MyOrders.vue'), name: 'myorders' },
      { path: '/myorder/:orderno', component: () => import('pages/MyOrdersDetails.vue'), name: 'myorderdetail' },
      { path: '/Profile', component: () => import('pages/Profile.vue'), name: 'profile' },
      { path: '/password-reset', component: () => import('pages/PasswordReset.vue'), name: 'PasswordReset' },
      { path: '/my-address', component: () => import('pages/MyAddress.vue'), name: 'MyAddress' },
      { path: '/address', component: () => import('pages/Address.vue'), name: 'address' },
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
