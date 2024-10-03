<template>
    <div class="container my-5">
        <!-- Welcome User Alert -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Welcome!</strong> {{ user.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: JSON.parse(localStorage.getItem('user')) ?? [],
        }
    },
};
</script>

<style scoped>
.card {
    margin-bottom: 1.5rem;
    border: 1px solid #35495e;
}

.card-title {
    color: #35495e;
}

.text-primary {
    color: #42b983 !important;
}

.bg-alert-success {
    background: linear-gradient(to right, #42b983, #5f7081);
}

.navbar-brand {
    background: linear-gradient(to right, #42b983, #5f7081);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.5rem;
    font-weight: bold;
}
</style>
