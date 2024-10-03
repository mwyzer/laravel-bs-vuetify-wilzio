<template>
    <div class="d-flex flex-column min-vh-100">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Vuetify</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <router-link class="nav-link" to="/">Home</router-link>
              </li>
              <li v-if="isAuthenticated" class="nav-item">
                <router-link class="nav-link" to="/dashboard">Dashboard</router-link>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li v-if="!isAuthenticated" class="nav-item">
                <router-link class="nav-link" to="/login">Login</router-link>
              </li>
              <li v-if="!isAuthenticated" class="nav-item">
                <router-link class="nav-link" to="/register">Register</router-link>
              </li>
              <li v-if="isAuthenticated" class="nav-item">
                <button @click="logout" class="btn btn-link nav-link">Logout</button>
              </li>
              <li class="nav-item">
                <label class="nav-link toggle-btn">
                  <input type="checkbox" class="visually-hidden" v-model="isDark" />
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
  
      <!-- Main Content Area -->
      <div class="flex-grow-1 d-flex align-items-start justify-content-start">
        <div class="container-fluid text-start mt-3">
            <router-view />
          <!-- Welcome Message -->
          <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> -->
            <!-- <strong>Welcome!</strong> Super-admin User
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
          <!-- </div> -->
  
          <!-- Add your additional content or router-view here -->

        </div>
      </div>
  
      <!-- Footer -->
      <footer class="mt-auto p-3 text-center footer-bg">
        <p class="mb-0">© 2024 Vuetify, Inc. All rights reserved.</p>
      </footer>
    </div>
  </template>
  
  <style scoped>
  .text-start {
    text-align: left !important;
  }
  
  .mt-3 {
    margin-top: 1rem !important;
  }
  
  .brand-highlight {
    background: linear-gradient(to right, #42b983, #5f7081);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .footer-bg {
    background: linear-gradient(to right, #42b983, #5f7081);
    color: white;
  }
  </style>
  