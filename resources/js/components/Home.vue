<template>
    <div class="container flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <!-- Welcome Section -->
        <div class="text-center py-5">
            <h1 class="display-1 mb-4">Welcome to <span class="navbar-brand">Vuetify</span></h1>
            <p class="lead mb-5">Build amazing applications with Vuetify and Vue.js</p>
            <router-link to="/dashboard" class="btn btn-success btn-lg me-3">Get Started</router-link>
            <a class="btn btn-outline-success btn-lg">Learn More</a>
        </div>

        <!-- Features Section -->
        <div class="text-center py-5">
            <h2 class="mb-4 fw-bold">Features</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Responsive Design</h5>
                            <p class="card-text">Build responsive, mobile-first projects on the web with the world’s
                                most popular front-end component library.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Customizable Components</h5>
                            <p class="card-text">Easily customize components to fit your needs and design preferences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Seamless Integration</h5>
                            <p class="card-text">Seamlessly integrate Vuetify with Vue.js to build robust and scalable
                                applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.active {
    color: #4cbab5 !important;
}

.navbar-brand {
    background: linear-gradient(to right, #42b983, #7c8995);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
}

.card-title {
    color: #4cbab5;
}
</style>
