import { RouteConfig } from 'vue-router';

const routes: RouteConfig[] = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      { path: '/products', component: () => import('pages/products.vue') },
      { path: 'attrect/dashboard', component: () => import('pages/dashboard.vue') },
      { path: 'attrect/', component: () => import('pages/dashboard.vue') },
      { path: '/createaccount', component: () => import('pages/createaccount.vue') },
      { path: '/registershop', component: () => import('pages/registershop.vue') },
      { path: '/singleproduct', component: () => import('pages/singleproduct.vue') },
      { path: '/mystore', component: () => import('pages/mystore.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
];

export default routes;
