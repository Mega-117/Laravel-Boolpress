window.Vue = require('vue');

import App from './components/views/App';
import router from './route.js';

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App)
});
