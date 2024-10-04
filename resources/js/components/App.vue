<template>
    <div class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Wilzio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
 
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li v-if="!isAuthenticated" class="nav-item">
                            <router-link class="nav-link" to="/login">Login</router-link>
                        </li>
                        <li v-if="!isAuthenticated" class="nav-item">
                            <router-link class="nav-link" to="/register">Register</router-link>
                        </li>
                        <li v-if="isAuthenticated" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarProfileDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img :src="profilePhoto" alt="Profile" class="rounded-circle me-2" width="30" height="30" />
                                Profile
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarProfileDropdown">
                                <li>
                                    <router-link class="dropdown-item" to="/profile">View Profile</router-link>
                                </li>
                                <li>
                                    <router-link class="dropdown-item" to="/settings">Settings</router-link>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <button @click="logout" class="dropdown-item">Logout</button>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <label class="nav-link toggle-btn">
                                <input type="checkbox" class="visually-hidden" v-model="isDark">
                                <span class="switch"></span>
                                <span v-if="isDark">
                                    <i class="fa-solid fa-moon text-warning"></i>
                                </span>
                                <span v-else>
                                    <i class="fa-solid fa-sun text-warning"></i>
                                </span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-grow-1 d-flex align-items-center">
            <div class="container-fluid">
                <router-view />
            </div>
        </div>
        <!-- Footer Section -->
        <footer class="mt-auto p-3 text-center footer-bg">
            <p class="mb-0">© {{currentYear}} Wilzio Center. All rights reserved.</p>
        </footer>
    </div>
</template>

<script>
import { useAuthStore } from '../src/store/auth';

export default {
    data() {
        return {
            currentYear: new Date().getFullYear(),
            profilePhoto: 'https://via.placeholder.com/30', // Replace with the actual profile photo URL
            isDark: true,
        }
    },
    watch: {
        isDark(newVal) {
            this.isDark = newVal;
            document.documentElement.setAttribute('data-bs-theme', this.isDark ? 'dark' : 'light');
        },
    },
    computed: {
        isAuthenticated() {
            const authStore = useAuthStore();
            return authStore.isAuthenticated;
        }
    },
    methods: {
        logout() {
            // Call the logout action from the useAuthStore Pinia store
            const authStore = useAuthStore();
            authStore.logout();
            this.$router.push({ name: 'Login' });
        }
    },
}
</script>

<style scoped>
.toggle-btn {
    cursor: pointer;
    display: inline-flex;
    align-items: center;
}

.toggle-btn input[type="checkbox"] {
    position: absolute;
    left: -9999px;
}

.switch {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 18px;
    background-color: #ccc;
    border-radius: 15px;
    margin-right: 10px;
}

.switch:before {
    content: "";
    position: absolute;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #fff;
    top: 1px;
    left: 1px;
    transition: 0.4s;
}

input[type="checkbox"]:checked+.switch {
    background-color: #2196F3;
}

input[type="checkbox"]:checked+.switch:before {
    transform: translateX(18px);
}

.active {
    color: #4cbab5 !important;
}

.footer-bg {
    background: linear-gradient(to right, #0b07ec, #5f7081);
    color: white;
}

.navbar-brand {
    background: linear-gradient(to right, #0225ec, #5f7081);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.5rem;
    font-weight: bold;
}
</style>
