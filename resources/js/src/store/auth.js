import { defineStore } from 'pinia';

export const useAuthStore = defineStore({
    id: 'auth',
    state: () => ({
        _isAuthenticated: localStorage.getItem('token') !== null,
    }),
    actions: {
        login({ response }) {
            // Store token and user data in local storage
            localStorage.setItem('token', response.data.token);
            localStorage.setItem('user', JSON.stringify(response.data.user));

            // Perform login actions
            this._isAuthenticated = true;
        },
        logout() {
            // Clear token and user from local storage
            localStorage.removeItem('token');
            localStorage.removeItem('user');

            // Perform logout actions
            this._isAuthenticated = false;
        },
    },
    getters: {
        isAuthenticated: state => state._isAuthenticated,
    },
});
