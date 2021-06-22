import Home from '../views/Home'
import Register from '../views/Register'
import Shop from '../views/Shop'

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
            path: '/register',
            name: 'user.register',
            component: Register
        },
        {
            path: '/shop',
            name: 'user.shop',
            component: Shop
        }
    ]
}