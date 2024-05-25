<script setup>
import { Head } from '@inertiajs/vue3';
import Layoutpage from '@/Layouts/Layoutpage.vue';

defineOptions({
    layout: Layoutpage
});
</script>

<template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
  
          <div class="bg-blue-100 border border-blue-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-blue-900">
              <h2 class="text-lg font-semibold mb-2">Total Population</h2>
              <p class="text-3xl font-bold">1,404 Residents as of 2020 Census</p>
            </div>
          </div>
  

          <div class="bg-green-100 border border-green-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-green-900">
              <h2 class="text-lg font-semibold mb-2">Total Households</h2>
              <p class="text-3xl font-bold">307 households</p>
            </div>
          </div>
  

          <div class="bg-yellow-100 border border-yellow-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-yellow-900">
              <h2 class="text-lg font-semibold mb-2">Average Population per Household</h2>
              <p class="text-3xl font-bold">4.22 members</p>
            </div>
          </div>
        </div>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">

          <div class="bg-pink-100 border border-pink-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-pink-900">
              <h2 class="text-lg font-semibold mb-2">Bosongon Location</h2>
              <img src="../../css/Loc.png" alt="Bosongon Location" class="mx-auto my-4 w-full h-64 object-cover">
              <p class="text-sm">A picturesque view of Bosongon</p>
            </div>
          </div>
  

          <div class="bg-purple-100 border border-purple-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-purple-900">
              <h2 class="text-lg font-semibold mb-2">Bosongon Covered Court</h2>
              <img src="../../css/court.png" alt="Bosongon Covered Court" class="mx-auto my-4 w-full h-64 object-cover">
              <p class="text-sm">The heart of community events in Bosongon</p>
            </div>
          </div>
  

          <div class="bg-teal-100 border border-teal-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-teal-900">
              <h2 class="text-lg font-semibold mb-2">Bosongon Chapel</h2>
              <img src="../../css/chap.png" alt="Bosongon Chapel" class="mx-auto my-4 w-full h-64 object-cover">
              <p class="text-sm">The chapel of Bosongon</p>
            </div>
          </div>

          <div class="bg-orange-100 border border-orange-200 rounded-lg overflow-hidden shadow-sm">
            <div class="p-6 text-orange-900">
              <h2 class="text-lg font-semibold mb-2">Unfinished Barangay Hall</h2>
              <img src="../../css/bh.png" alt="Unfinished Barangay Hall" class="mx-auto my-4 w-full h-64 object-cover">
              <p class="text-sm">The unfinished barangay hall of Bosongon</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>
