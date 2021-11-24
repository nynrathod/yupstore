
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
    path: '/login',
    component: () => import('src/layouts/BlankLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: '/login', component: () => import('pages/Index.vue'), name: 'login', props: { name: 'Documents' } },
      { path: '/otpverify', component: () => import('pages/Otpverify.vue') },
      { path: '/register-shop', component: () => import('src/pages/RegisterShop.vue') },
      { path: '/mobilesearch', component: () => import('pages/Mobilesearch.vue') },
    ]
  },
  {
    path: '/test',
    component: () => import('src/layouts/BlankLayout.vue'),
    children: [
      { path: '/test', component: () => import('pages/Test.vue'), meta: { authOnly: true } },
    ]
  },
  {
    path: '/',
    component: () => import('src/layouts/' + redirectto),
    children: [
      // { path: '/', redirect: '/admin' },
      { path: '/', component: () => import('pages/' + platforms + '/dashboard.vue'), meta: { authOnly: true } },
      { path: '/dashboard', component: () => import('pages/' + platforms + '/dashboard.vue'), meta: { authOnly: true } },
      { path: '/mystore', component: () => import('pages/' + platforms + '/mystore.vue'), meta: { authOnly: true } },
      { path: '/pages', component: () => import('pages/' + platforms + '/Pages.vue'), meta: { authOnly: true } },
      { path: '/website-content', component: () => import('pages/' + platforms + '/Website-Content.vue'), meta: { authOnly: true } },
      { path: '/update/:sku/:slug', component: () => import('pages/' + platforms + '/update.vue'), meta: { authOnly: true } },
      { path: '/singleproduct', component: () => import('pages/' + platforms + '/singleproduct.vue'), meta: { authOnly: true } },
      { path: '/products', component: () => import('pages/' + platforms + '/products.vue'), meta: { authOnly: true } },
      { path: '/orders', component: () => import('pages/' + platforms + '/Orders.vue'), meta: { authOnly: true } },
      { path: '/order-detail/:orderno', component: () => import('pages/' + platforms + '/OrderDetails.vue'), meta: { authOnly: true } },

      { path: '/sitesetting', component: () => import('pages/' + platforms + '/sitesetting.vue'), meta: { authOnly: true } },
      { path: '/website-info', component: () => import('pages/' + platforms + '/website-info.vue'), meta: { authOnly: true } },
      { path: '/socialmedia', component: () => import('pages/' + platforms + '/socialmedia.vue'), meta: { authOnly: true } },
      { path: '/contactinfo', component: () => import('pages/' + platforms + '/contactinfo.vue'), meta: { authOnly: true } },
      { path: '/businessinfo', component: () => import('pages/' + platforms + '/businessinfo.vue'), meta: { authOnly: true } },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
