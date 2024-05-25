<template>
    <div class="bg-container">
      <header class="bg-blue-600 text-white p-4">
        <nav class="container mx-auto flex justify-between">
          <div class="text-xl font-bold">Barangay Bosongon</div>
          <nav-bar :can-login="canLogin" :can-register="canRegister" />
        </nav>
      </header>
      <main class="container mx-auto p-4 flex justify-center items-center">
        <img class="max-h-main" src="https://scontent.fdvo1-2.fna.fbcdn.net/v/t1.6435-1/198426293_103058428686401_6023967792845595436_n.jpg?stp=dst-jpg_s200x200&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHANXCVuTrshNkNFGqrj95dkCgxJ3ZSRG6QKDEndlJEbiAsssfyt6nruOHW51VLVB4VHl6kMJ5FwHwH0mev1EYp&_nc_ohc=ObE1TIjxdbwQ7kNvgEI7NCh&_nc_ht=scontent.fdvo1-2.fna&oh=00_AYCTjy2M2g8GXve2_GuJlJtke_3pEgN81ImPH3CxcS9l6w&oe=6674E02A" alt="">
      </main>
      <footer class=" bg-blue-600 text-white p-4 text-center absolute bottom-0 w-full">
        &copy; 2024 Barangay Bosongon. All rights reserved.
      </footer>
    </div>
  </template>
  
  <script setup>
  import NavBar from '../Components/NavBar.vue';
  
  defineProps({
    canLogin: {
      type: Boolean,
    },
    canRegister: {
      type: Boolean,
    },
  });
  </script>
  
  <style scoped>
  .bg-container {
    position: relative;
    min-height: 100vh;
  }
  
  img {
    max-width: none; 
    height: auto;
    display: block;
    margin: 0 auto;
    width: auto;
    height: 70vh; 
  }
  
  header {
    position: relative;
    z-index: 1;
  }
  
  footer {
    position: absolute;
    z-index: 1;
  }
  </style>
  