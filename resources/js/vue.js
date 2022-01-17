window.Vue = require('vue');

import App from './components/views/App';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});
