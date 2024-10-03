import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import NotFound from "../components/404-Page.vue";
import Login from "../components/auth/Login.vue";
import Register from "../components/auth/Register.vue";
import Dashboard from "../components/Dashboard.vue";
import ForgotPassword from "../components/auth/ForgotPassword.vue";

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/forgot-password',
        component: ForgotPassword
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard,
        meta: { requiresAuth: true }
    },
    {
        path: '/:pathMatch(.*)*',
        component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes,
});

// Navigation guard to check if the route requires authentication
router.beforeEach((to, from, next) => {
    // Check if the route requires authentication and the user is not authenticated
    if (to.meta.requiresAuth && !localStorage.getItem('token')) {
        // Redirect to the login page
        next({ name: 'Login' });
    } else {
        // Proceed to the route
        next();
    }
});

export default router;
