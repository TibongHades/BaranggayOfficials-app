<template>
            <main id="page-trans">
                <div class="container mx-auto my-8 p-4 bg-white rounded shadow">
                    <div v-if="$page.props.message" class="alert alert-success">
            {{ $page.props.message }}
        </div>
                    <h1 class="text-2xl font-bold mb-4">Barangay Officials</h1>
                    <table class="table-auto w-full mb-4">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Position</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">Address</th>
                                <th class="px-4 py-2">Update/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="official in officials" :key="official.id" class="hover:bg-gray-100">
                                <td class="border px-4 py-2">{{ official.name }}</td>
                                <td class="border px-4 py-2">{{ official.position.pos_name }}</td>
                                <td class="border px-4 py-2">{{ official.age }}</td>
                                <td class="border px-4 py-2">{{ official.address }}</td>
                                <td class="border px-4 py-2 flex justify-center items-center">
                                    <Link :href="`/barangay-officials/${official.id}`" class="text-blue-500 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill w-6 h-6" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                        </svg>
                                    </Link>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import Layoutpage from '@/Layouts/Layoutpage.vue';

defineOptions({
    layout: Layoutpage
});

const props = defineProps({
    officials: Array,
});
</script>

<style scoped>
.container {
    width: 100%; /* Make the container fill the entire viewport width */
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
