import 'es6-promise/auto'
import axios from 'axios'
import './bootstrap'
// import Vue from 'vue'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import Index from './Index'
import auth from './auth'

import router from './router'
import Vuex from 'vuex';
import * as VueGoogleMaps from "vue2-google-maps";
Vue.use(Vuex);
//start editor
//start onepage
import 'animate.css'
import 'fullpage-vue/src/fullpage.css'
import VueFullpage from 'fullpage-vue'
Vue.use(VueFullpage)
    //end onepage
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );
//end editor
//vue carousel
import VueCarousel from '@chenfengyuan/vue-carousel';
Vue.component(VueCarousel.name, VueCarousel);

//vue slick
import Slick from 'vue-slick';
Vue.use(Slick);

//vue-pannellum
import VuePannellum from '../js/components/vue-pannellum.vue'
Vue.use(VuePannellum);
Vue.component('VPannellumn', VuePannellum)

//vue Panorama 
import Panorama from 'vuejs-panorama';
Vue.use(Panorama);

//vue sweetaler
import VueSweetAlert from 'vue-sweetalert';
Vue.use(VueSweetAlert)

import ReadMore from 'vue-read-more';
Vue.use(ReadMore);


//start Light Gallery
import Lightbox from 'vue-my-photos'
Vue.use(Lightbox)
    //end Light Gallery

Vue.use(require('vue-moment'));


//vuejs loading
import VueLoading from 'vuejs-loading-plugin'
Vue.use(VueLoading, {
    text: '送信中'
})

window.events = new Vue();
window.flash = function(message) {
    window.events.$emit('flash', message);
}
Vue.component('flash', require('../js/components/Flash.vue'));
Vue.component('ads_slider', require('../js/components/ads_slider.vue'));


Vue.use(VueClazyLoad)
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyC-2U_IRuSrajQavHadFp8FlXNi61MA3nw",
    libraries: "places" // necessary for places input
  }
});
// Set Vue globally
window.Vue = Vue
// Set Vue router
Vue.router = router
Vue.use(VueRouter)
// Set Vue authentication
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api` 
Vue.use(VueAuth, auth)

// Load Index


Vue.component('index', Index)

router.beforeEach((to, from, next) => {
  NProgress.start()
  NProgress.set(0.1)
  next()
})
router.afterEach(() => {
  setTimeout(() => NProgress.done(), 500)
})

const app = new Vue({
  el: '#app',
  router,
  component:{
    Index,
    meta: {
      auth: undefined
    }
  },

});
