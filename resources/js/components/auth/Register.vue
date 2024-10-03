<template>
    <div>
        <h1 class="text-center title">Register</h1>

        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Full Name</label>
                        <input type="email" class="form-control mb-2" id="exampleInputName1"
                            aria-describedby="emailHelp" placeholder="Juan Dela Cruz" v-model="name" />
                        <span class="text-danger" v-if="errors && errors.name && errors.name.length > 0">
                            {{ errors.name[0] }}
                        </span>
                    </div>
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
                    <div class="mb-3">
                        <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control mb-2" id="exampleInputConfirmPassword1"
                            placeholder="********" v-model="password_confirmation" />
                        <span class="text-danger"
                            v-if="errors && errors.password_confirmation && errors.password_confirmation.length > 0">
                            {{ errors.password_confirmation[0] }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" @click="registerAccount()" :disabled="isLoading">
                            <span v-if="!isHidden">
                                <i class="fa fa-spinner fa-spin"></i>
                            </span>
                            {{ isLoading ? 'Loading...' : 'Register' }}
                        </button>
                        <router-link to="/login" class="btn btn-secondary ms-2">Back</router-link>
                    </div>
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
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            errors: '',
            isLoading: false,
            isHidden: true,
        }
    },

    methods: {
        registerAccount() {
            this.errors = '';
            this.isLoading = true;
            this.isHidden = false;

            axios.post('/api/v1/register', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }).then((response) => {
                this.isLoading = false;
                this.isHidden = true;

                this.name = '';
                this.email = '';
                this.password = '';
                this.password_confirmation = '';

                Swal.fire({
                    title: 'Success!',
                    text: 'Account Registered!',
                    icon: 'success',
                });
            }).catch((error) => {
                this.isLoading = false;
                this.isHidden = true;

                let errorStatus = error.response.status;

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
</style>
