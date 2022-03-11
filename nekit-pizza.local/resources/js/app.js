import Vue from 'vue'
import VueRouter from 'vue-router'
import VueVideoPlayer from 'vue-video-player'

import 'video.js/dist/video-js.css'

import VueCookies from 'vue-cookies'
Vue.use(VueCookies)

Vue.use(VueRouter)
Vue.use(VueVideoPlayer)

import App from './views/App'
import Home from './views/Home'
import Channel from "./views/Channel";
import Video from "./views/Video";
import Auth from "./views/Auth";
import Signup from "./views/Signup";
import Forget from "./views/Forget";
import Upload from "./views/Upload";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/auth',
            name: 'auth',
            component: Auth
        },
        {
            path: '/signup',
            name: 'signup',
            component: Signup
        },
        {
            path: '/forget',
            name: 'forget',
            component: Forget
        },
        {
            path: '/upload',
            name: 'upload',
            component: Upload
        },
        {
            path: '/channel:id',
            name: 'channel',
            props: true,
            component: Channel
        },
        {
            path: '/watch:id',
            name: 'watch',
            props: true,
            component: Video
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
