require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';


const appName = window.document.getElementsByTagName('title')[0] ?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('InertiaHead', Head)
            .component('InertiaLink', Link)
            .mixin({ methods:{ 
                    parent_url(){
                      return "http://admin.di.vc/";
                      //return "http://192.168.86.100:501";
                    },
                    base_url(){
                      return "http://di.vc/";
                      //return "http://192.168.86.100:8000";
                    },
                    route
                 }})
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });