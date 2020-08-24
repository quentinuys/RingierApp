import AllItems from './components/AllItems.vue';
import AddItem from './components/AddItem.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllItems
    },
    {
        name: 'add',
        path: '/add',
        component: AddItem
    }
];