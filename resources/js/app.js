

import { createApp } from 'vue';
import Home from './components/home.vue';
import Welcome from './components/Welcome.vue';
import About from './components/About.vue';
import PrimeVue from 'primevue/config';
import Banner from './components/Banner.vue';
import Project from './components/Project.vue'


import InputText from 'primevue/inputtext';
import Textarea from 'primevue/textarea';
import Select from 'primevue/select';
import Aura from '@primevue/themes/aura';
import Button from "primevue/button"
import FloatLabel from 'primevue/floatlabel';
import Badge from 'primevue/badge';
import '../css/app.css';

//My menu
import Menubar from 'primevue/menubar';

// Importiere die ripple-Direktive
import Ripple from 'primevue/ripple';

const app = createApp();

//Without Tailwindcss

app.use(PrimeVue,{
    theme: {
        preset: Aura,
        options: {
            prefix: 'p',
            darkModeSelector: 'system',
            cssLayer: false
        }
    }
});

//With Tailwindcss

/* app.use(PrimeVue, {
    theme: {
        preset: Aura,
        options: {
            cssLayer: {
                name: 'primevue',
                order: 'tailwind-base, primevue, tailwind-utilities'
            }
        }
    }
 }); */


app.component("home", Home)
app.component('Welcome', Welcome)
app.component('InputText', InputText);
app.component('Textarea', Textarea);
app.component('Select', Select);
app.component('Button', Button);
app.component('FloatLabel', FloatLabel);
app.component('About', About);
app.component('Banner', Banner);
app.component('Project', Project);

//Menu components
app.component('Menubar', Menubar);
app.component('Badge', Badge);


// Registriere die ripple-Direktive
app.directive('ripple', Ripple);


app.mount("#app")
