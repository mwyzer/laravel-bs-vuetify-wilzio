<template>
    <div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center navbar-brand" href="#">Forgot Password</h1><br />
                    <p class="text-center">Enter your email address below to receive a password reset link.</p>

                    <form @submit.prevent="submitForm">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter your email" v-model="email"
                                :disabled="isLoading" />
                            <div v-if="errors && errors.email" class="text text-danger mt-2">
                                {{ errors.email[0] }}
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" :disabled="isLoading">
                            <span v-if="isLoading" class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true"></span>
                            Reset Password
                        </button>
                        <router-link to="/login" class="btn btn-secondary ms-2">Back</router-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Swal from 'sweetalert2';

export default {
    data() {
        return {
            email: '',
            errors: null,
            isLoading: false,
        }
    },
    methods: {
        submitForm() {
            this.errors = null;
            this.isLoading = true;

            axios.post('/api/v1/forgot-password', { email: this.email })
                .then(response => {
                    this.isLoading = false;

                    Swal.fire({
                        title: 'Email Sent!',
                        text: 'Check your email for password reset instructions.',
                        icon: 'success',
                    });

                    // Optionally, redirect to another page after email sent
                    this.$router.push({ name: 'Login' });
                })
                .catch(error => {
                    this.isLoading = false;

                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;

                        console.log(this.errors);
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong. Please try again later.',
                            icon: 'error',
                        });
                    }
                });
        }
    }
}
</script>

<style scoped>
.navbar-brand {
    background: linear-gradient(to right, #42b983, #5f7081);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.5rem;
    font-weight: bold;
}
</style>
