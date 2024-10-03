<template>
    <div>
        <h1 class="text-center title">Login</h1>

        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control mb-2" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="juandelacruz@example.com" v-model="email" />
                        <span class="text-danger" v-if="errors && errors.email && errors.email.length > 0">
                            {{ errors.email[0] }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control mb-2" id="exampleInputPassword1"
                            placeholder="********" v-model="password" />
                        <span class="text-danger" v-if="errors && errors.password && errors.password.length > 0">
                            {{ errors.password[0] }}
                        </span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-success" @click="loginAccount()" :disabled="isLoading">
                            <span v-if="!isHidden">
                                <i class="fa fa-spinner fa-spin"></i>
                            </span>
                            {{ isLoading ? 'Loading...' : 'Login' }}
                        </button>
                        <router-link to="/forgot-password" class="text text-decoration-underline label">Forgot
                            Password</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Swal from 'sweetalert2';
import { useAuthStore } from '../../src/store/auth';

export default {
    data() {
        return {
            email: '',
            password: '',
            errors: '',
            isLoading: false,
            isHidden: true,
        }
    },

    methods: {
        loginAccount() {
            this.errors = '';
            this.isLoading = true;
            this.isHidden = false;

            axios.post('/api/v1/login', {
                email: this.email,
                password: this.password,
            }).then((response) => {
                this.isLoading = false;
                this.isHidden = true;

                // Call the login action from the useAuthStore Pinia store
                const authStore = useAuthStore();
                authStore.login({ response });

                Swal.fire({
                    title: 'Success!',
                    text: 'Account Login!',
                    icon: 'success',
                });

                // Redirect to dashboard after successful login
                this.$router.push({ name: 'Dashboard' });
            }).catch((error) => {
                this.isLoading = false;
                this.isHidden = true;

                let errorStatus = error.response?.status;

                if (errorStatus === 401) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Email or password incorrect',
                        icon: 'error',
                    });
                }

                // If validation error then push to errors array
                if (errorStatus === 422) {
                    let errors = error.response.data.errors;
                    this.errors = errors;
                }

                // If server error then throw error
                if (errorStatus === 500) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong!',
                        icon: 'error',
                    });
                }
            })
        }
    },
}
</script>

<style scoped>
.title {
    background: linear-gradient(to right, #42b983, #5f7081);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.5rem;
    font-weight: bold;
}

.label {
    color: #42b983;
    font-size: 13px;
}
</style>
