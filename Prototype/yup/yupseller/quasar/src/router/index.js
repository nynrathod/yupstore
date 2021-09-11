import { route } from 'quasar/wrappers'
import { createRouter, createMemoryHistory, createWebHistory, createWebHashHistory } from 'vue-router'
import routes from './routes'
import { LocalStorage, SessionStorage } from 'quasar'

/*
 * If not building with SSR mode, you can
 * directly export the Router instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Router instance.
 */

export default route(function (/* { store, ssrContext } */) {
  const createHistory = process.env.SERVER
    ? createMemoryHistory
    : (process.env.VUE_ROUTER_MODE === 'history' ? createWebHistory : createWebHashHistory)

  const Router = createRouter({
    scrollBehavior: () => ({ left: 0, top: 0 }),
    routes,

    // Leave this as is and make changes in quasar.conf.js instead!
    // quasar.conf.js -> build -> vueRouterMode
    // quasar.conf.js -> build -> publicPath
    history: createHistory(process.env.MODE === 'ssr' ? void 0 : process.env.VUE_ROUTER_BASE)
  })


   function isLoggedIn () {
    return localStorage.getItem("auth");
  }

  Router.beforeEach((to, from, next) => {
    // alert(to.matched.some(record => record.meta.authOnly));
    if (to.matched.some(record => record.meta.authOnly)) {

      const token = LocalStorage.getItem("auth");
      // console.log(LocalStorage.getItem("auth"));
      if (!isLoggedIn()) {
        // if (token == null) {
        // alert('null')
        Router.push('/login')
      } else {

        next()
      }
    } else {
      next()
    }




    // if (to.matched.some(record => record.meta.authOnly)) {

    //   // this route requires auth, check if logged in
    //   // if not, redirect to login page.
    //   if (!isLoggedIn()) {
    //     next({
    //       path: "/login",
    //       query: { redirect: to.fullPath }
    //     });
    //   } else {
    //     next();
    //   }
    // } else if (to.matched.some(record => record.meta.guestOnly)) {
    //   // this route requires auth, check if logged in
    //   // if not, redirect to login page.
    //   if (isLoggedIn()) {
    //     next({
    //       path: "/dashboard",
    //       query: { redirect: to.fullPath }
    //     });
    //   } else {
    //     next();
    //   }
    // } else {
    //   next(); // make sure to always call next()!
    // }


  })

  return Router
})
