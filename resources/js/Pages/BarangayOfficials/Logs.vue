<template>
    <div class="under-development">
      <div class="content">
        <h1>Undevelop Page!</h1>
        <p>I will work on this</p>
      </div>
    </div>
  </template>
  
<script setup>
import Layoutpage from '@/Layouts/Layoutpage.vue';

defineOptions({
    layout: Layoutpage
});
  </script>
  
  <style scoped>
  .under-development {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f3f4f6;
  }
  
  .content {
    text-align: center;
  }
  
  h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #333;
  }
  
  p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 10px;
  }
  </style>
  