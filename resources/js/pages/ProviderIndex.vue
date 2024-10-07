<template>
    <div class="d-flex">
      <!-- Sidebar Section -->
      <Sidebar />
  
      <!-- Main Content Section -->
      <main role="main" class="main-content flex-grow-1 px-4">
        <!-- Tab Navigation -->
        <div class="tab-menu-container mb-4">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'List' }" href="#" @click.prevent="activeTab = 'List'">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Tagihan' }" href="#" @click.prevent="activeTab = 'Tagihan'">Tagihan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Atur' }" href="#" @click.prevent="activeTab = 'Atur'">Atur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Pascabayar' }" href="#" @click.prevent="activeTab = 'Pascabayar'">Pascabayar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Prabayar' }" href="#" @click.prevent="activeTab = 'Prabayar'">Prabayar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Metro' }" href="#" @click.prevent="activeTab = 'Metro'">Metro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{ active: activeTab === 'Satelit' }" href="#" @click.prevent="activeTab = 'Satelit'">Satelit</a>
            </li>
          </ul>
        </div>
  
        <!-- Tab Content -->
        <div class="tab-content">
          <div v-if="activeTab === 'List'">
            <TabList />
          </div>
          <div v-if="activeTab === 'Tagihan'">
            <TabTagihan />
          </div>
          <div v-if="activeTab === 'Atur'">
            <TabAtur />
          </div>
          <div v-if="activeTab === 'Pascabayar'">
            <TabPascabayar />
          </div>
          <div v-if="activeTab === 'Prabayar'">
            <TabPrabayar />
          </div>
          <div v-if="activeTab === 'Metro'">
            <TabMetro />
          </div>
          <div v-if="activeTab === 'Satelit'">
            <TabSatelit />
          </div>
        </div>
      </main>
    </div>
  </template>
  
  <script>
  // Import the Sidebar and Tab Components
  import Sidebar from '../components/Sidebar.vue';
  import TabList from './TabList.vue';
  import TabTagihan from './TabTagihan.vue';
  import TabAtur from './TabAtur.vue';
  import TabPascabayar from './TabPascabayar.vue';
  import TabPrabayar from './TabPrabayar.vue';
  import TabMetro from './TabMetro.vue';
  import TabSatelit from './TabSatelit.vue';
  
  export default {
    components: {
      Sidebar,
      TabList,
      TabTagihan,
      TabAtur,
      TabPascabayar,
      TabPrabayar,
      TabMetro,
      TabSatelit,
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
    margin-left: 250px;
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
  