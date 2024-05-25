<template>
  <main id="page-trans" class="h-auto">
    <div class="flex justify-center items-center">
      <div class="max-w-lg">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-600">Add Barangay Official</h1>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
          <form @submit.prevent="submit" class="space-y-4">
            <div>
              <label for="name" class="block text-gray-700 font-semibold">Name</label>
              <input type="text" id="name" v-model="form.name" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <div>
              <label for="position_id" class="block text-gray-700 font-semibold">Position</label>
              <select name="position_id" id="position_id" v-model="form.position_id" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500">
                <option v-for="position in positions" :key="position.id" :value="position.id">{{ position.pos_name }}</option>
              </select>
            </div>
            <div>
              <label for="age" class="block text-gray-700 font-semibold">Age</label>
              <input type="number" id="age" v-model="form.age" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <div>
              <label for="address" class="block text-gray-700 font-semibold">Address</label>
              <input type="text" id="address" v-model="form.address" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500">
            </div>
            <button type="submit" class="py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 mx-auto block">Save Official</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import Layoutpage from '@/Layouts/Layoutpage.vue';

defineOptions({
    layout: Layoutpage
});

const props = defineProps({
  positions: Array
});

const form = useForm({
  name: '',
  position_id: '',
  age: '',
  address: ''
});

const submit = () => {
  form.post('/barangay-officials');
};
</script>

<style scoped>
#page-trans {
  background-color: #f3f4f6;
}

.max-w-lg {
  max-width: 500px;
  margin: auto;
}

.bg-white {
  background-color: #fff;
}

.p-8 {
  padding: 2rem;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.shadow-md {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.form-input {
  border: 1px solid #d1d5db;
  padding: 0.5rem;
  font-size: 1rem;
}

.form-select {
  appearance: none;
  padding: 0.5rem;
  font-size: 1rem;
  border: 1px solid #d1d5db;
  background-image: url('data:image/svg+xml,<svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.293 5.293a1 1 0 011.414 0L10 10.586l5.293-5.293a1 1 0 111.414 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>');
  background-repeat: no-repeat;
  background-position: right 0.5rem center;
  background-size: 1.5em;
  padding-right: 2.5rem;
}

.btn-submit {
  background-color: #3490dc;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-submit:hover {
  background-color: #2779bd;
}
</style>
