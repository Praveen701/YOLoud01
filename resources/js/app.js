/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueSwal from 'vue-swal'

window.Vue = require('vue');
import vSelect from 'vue-select';
Vue.component('v-select', vSelect)
import 'vue-select/dist/vue-select.css';
import Multiselect from 'vue-multiselect';
import VueCountdownTimer from 'vuejs-countdown-timer';
Vue.use(VueCountdownTimer);

// register globally
Vue.component('multiselect', Multiselect);
import ToggleButton from 'vue-js-toggle-button';
 
Vue.use(ToggleButton);





Vue.use(VueSwal)
Vue.use(require('vue-moment'));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('settings', require('./components/Settings.vue').default);
Vue.component('intrest', require('./components/Admin/Intrest.vue').default);
Vue.component('language', require('./components/Admin/Language.vue').default);
Vue.component('newinfluencer', require('./components/Admin/NewInfluencer.vue').default);



//user
Vue.component('profile', require('./components/Influencers/Profile.vue').default);
Vue.component('campaign', require('./components/Influencers/Campaign.vue').default);
Vue.component('cstatus', require('./components/Influencers/CampaignStatus.vue').default);





//Admin - Inluencer
Vue.component('influencerlist', require('./components/Admin/Influencer/List.vue').default);
Vue.component('influenceredit', require('./components/Admin/Influencer/Edit.vue').default);
Vue.component('pendinglist', require('./components/Admin/Influencer/Pendinglist.vue').default);


//Admin - Brands
Vue.component('brandadd', require('./components/Admin/Brand/Add.vue').default);
Vue.component('brandedit', require('./components/Admin/Brand/Edit.vue').default);
Vue.component('brandlist', require('./components/Admin/Brand/List.vue').default);

//Admin - Campaigns
Vue.component('addcamp', require('./components/Admin/Campaign/Add.vue').default);
Vue.component('creatormatch', require('./components/Admin/Campaign/CreatorMView.vue').default);
Vue.component('apprec', require('./components/Admin/Campaign/AppRView.vue').default);
Vue.component('shortlist', require('./components/Admin/Campaign/ShortLView.vue').default);
Vue.component('finalize', require('./components/Admin/Campaign/FinalizeV.vue').default);
Vue.component('cperform', require('./components/Admin/Campaign/CPerform.vue').default);
Vue.component('newcreator', require('./components/Admin/Campaign/NewCreator.vue').default);
Vue.component('createcamp', require('./components/Admin/Campaign/Create.vue').default);
Vue.component('editcamp', require('./components/Admin/Campaign/Edit.vue').default);


//Admin-Other OPPtunities

Vue.component('opplist', require('./components/Admin/OtherOpp/list.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});