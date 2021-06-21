import Home from '../views/Home'
import Register from '../views/Register'
import Shop from '../views/Shop'
import Login from '../views/Login'
import Detail from '../views/Detail'

export default {
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'user.register',
            component: Register
        },
        {
            path: '/shop',
            name: 'user.shop',
            component: Shop
        },
        {
            path: '/detail',
            name: 'user.detail',
            component: Detail
        }
    ],
    scrollBehavior() {
        document.getElementById('app').scrollIntoView();
    }
}