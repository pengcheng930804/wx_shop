import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

export default new VueRouter({
    saveScrollposition :true,
    routers :[
        {
            name: 'test',
            path: '/test',
            component:resolve => void(['../components/adminLeft.vue'],resolve)
        },
        {
            name: 'index',
            path: '/',
            component:resolve => void(['../components/adminTop.vue'],resolve)
        }
    ]
});