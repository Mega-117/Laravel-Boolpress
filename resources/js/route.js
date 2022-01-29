import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./components/views/pages/Home.vue";
import Contact from "./components/views/pages/Contact.vue";
import About from "./components/views/pages/About.vue";
import Show from "./components/views/pages/post/Show.vue";
import CategoryShow from "./components/views/pages/category/Categoryshow.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
        {
            path: "/post/:id",
            name: "post",
            component: Show,
        },
        {
            path: "/category/:id",
            name: "category",
            component: CategoryShow,
        },


    ]
});

export default router;