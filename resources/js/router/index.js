import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import NotFound from "../components/404-Page.vue";
import Login from "../components/auth/Login.vue";
import Register from "../components/auth/Register.vue";
import Dashboard from "@/pages/Dashboard.vue";
import Location from "@/pages/Location.vue";
import Provider from "@/pages/Provider.vue";
import Customer from "@/pages/Customer.vue";
import ForgotPassword from "../components/auth/ForgotPassword.vue";
import Sale from "@/pages/Sale.vue";
import Deposit from "../pages/DepositIndex.vue";

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
        path: '/location',
        name: 'Location',
        component: Location,
        meta: { requiresAuth: true }
    },
    {
        path: '/provider',
        name: 'Provider',
        component: Provider,
        meta: { requiresAuth: true }
    },
    {
        path: '/customer',
        name: 'Customer',
        component: Customer,
        meta: { requiresAuth: true }
    },
    {
        path: '/sale',
        name: 'Sale',
        component: Sale,
        meta: { requiresAuth: true }
    },
    {
        path: '/deposit',
        name: 'Deposit',
        component: Deposit,
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
