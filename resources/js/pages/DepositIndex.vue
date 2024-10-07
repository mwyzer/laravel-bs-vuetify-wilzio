<template>
    <div class="d-flex">
      <!-- Sidebar Section -->
      <Sidebar />
  
      <!-- Main Content Section -->
      <main role="main" class="main-content flex-grow-1">
        <!-- Tab Menu -->
        <div class="tab-menu-container mb-4">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'List' }" href="#" @click.prevent="activeTab = 'List'">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Customer' }" href="#" @click.prevent="activeTab = 'Customer'">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Settings' }" href="#" @click.prevent="activeTab = 'Settings'">Settings</a>
            </li>
          </ul>
        </div>
  
        <!-- Tab Content -->
        <div class="tab-content">
          <div v-if="activeTab === 'List'">
            <List />
          </div>
          <div v-if="activeTab === 'Customer'">
            <Customer />
          </div>
          <div v-if="activeTab === 'Settings'">
            <Settings />
          </div>
        </div>
      </main>
    </div>
  </template>
  
  <script>
  // Import the Sidebar and Tab Components
  import Sidebar from '../components/Sidebar.vue';
  import List from './DepositList.vue';
  import Customer from './DepositCustomers.vue';
  import Settings from './DepositSettings.vue';
  
  export default {
    components: {
      Sidebar,
      List,
      Customer,
      Settings,
    },
    data() {
      return {
        activeTab: 'List', // Default active tab
      };
    },
  };
  </script>
  
  <style scoped>
  .main-content {
    margin-left: 0px;
    padding: 20px 30px; /* Added padding for better spacing */
    flex-grow: 1;
    background-color: #1e1e2d;
  }
  
  .nav-tabs {
    border-bottom: 1px solid #444;
  }
  
  .nav-tabs .nav-link {
    color: #ddd;
    margin-right: 10px;
  }
  
  .nav-tabs .nav-link.active {
    background-color: #007bff;
    color: white;
    border: 1px solid transparent;
  }
  
  .tab-menu-container {
    margin-bottom: 30px; /* Increased margin for more space between tabs and content */
  }
  
  .tab-content {
    padding: 20px;
    background-color: #2a2a3d;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  h3 {
    color: #ddd;
  }
  </style>
  