/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// cropper
import { Cropper } from 'vue-advanced-cropper'

// quasar
import  Quasar  from  'quasar'; 
import  'quasar/dist/quasar.sass'; 
import  'quasar-extras/material-icons';
import 'quasar-extras/fontawesome';
// vee validate
import * as VeeValidate from 'vee-validate';
import VeeValidateLaravel from 'vee-validate-laravel';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.use(VeeValidate);
Vue.use(VeeValidateLaravel);

Vue.use(Quasar);
window.route = require('./route');
/**
 * Quill Editor
 */
import VueQuillEditor from 'vue-quill-editor'

import 'quill/dist/quill.core.css' // import styles
import 'quill/dist/quill.snow.css' // for snow theme
import 'quill/dist/quill.bubble.css' // for bubble theme

import Quill from 'quill';
import  ImageResize  from 'quill-image-resize-vue';

Quill.register('modules/imageResize', ImageResize);

Vue.use(VueQuillEditor, {
})

Vue.prototype.$user = window.User // register a variable globally




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        Cropper
    }
});
