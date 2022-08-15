import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Cards from './Pages/Shared/Cards.vue';
import VuePlyr from 'vue-plyr';
import 'vue-plyr/dist/vue-plyr.css';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Goldfish';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VuePlyr, {
                plyr: {}
              })
            .component('InertiaHead', Head)
            .component('InertiaLink', Link)
            .component('Cards', Cards)
            .mount(el);
    },
});

InertiaProgress.init({
    color: '#FF0000',
    includeCSS: true,
    showSpinner: true,
});