
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// //... some vue component imports ...


// // Laravel CSRF protection
// Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('token').getAttribute('value');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// Vue.component('projectbase', require('./components/ProjectBase.vue'));
// Vue.component('projectholder', require('./components/ProjectHolder.vue'));
// Vue.component('projectdynamic', require('./components/ProjectDynamic.vue'));
// Vue.component('projectprocess', require('./components/ProjectProcess.vue'));
// Vue.component('deletebtn', require('./components/DeleteButton.vue'));
// Vue.component('projectsearchbar', require('./components/ProjectSearchBar.vue'));
// Vue.component('carousel', require('./components/Carousel.vue'));
const app = new Vue({
    el: '#app'
});
