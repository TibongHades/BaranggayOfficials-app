<template>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white container p-4 border-4 rounded-lg shadow-lg">
            <Link :href="route('barangay-officials.index')" class="flex items-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700 max-w-max">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    <span class="w-auto">Back</span>
</Link>


            <h1 class="text-3xl font-bold mt-6 mb-8 text-center text-blue-600">View Barangay Official</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div v-if="showEdit">
                    <form @submit.prevent="submit" class="space-y-2">
                        <div>
                            <label for="name" class="block font-semibold text-gray-700">Name</label>
                            <input type="text" id="name" v-model="form.name" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="position_id" class="block font-semibold text-gray-700">Position</label>
                            <select id="position_id" v-model="form.position_id" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option v-for="position in positions" :key="position.id" :value="position.id">{{ position.pos_name }}</option>
                            </select>

                        </div>
                        <div>
                            <label for="age" class="block font-semibold text-gray-700">Age</label>
                            <input type="text" id="age" v-model="form.age" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="address" class="block font-semibold text-gray-700">Address</label>
                            <input type="text" id="address" v-model="form.address" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </form>
                </div>

                <div v-else>
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="font-semibold text-gray-700">Name:</td>
                                <td class="text-gray-900">{{ form.name }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-gray-700">Position:</td>
                                <td class="text-gray-900">{{ props.barangayOfficial.position.pos_name }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-gray-700">Age:</td>
                                <td class="text-gray-900">{{ form.age }}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-gray-700">Address:</td>
                                <td class="text-gray-900">{{ form.address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-end mt-4">   
                <button @click="toggleEdit" class="flex items-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700 max-w-max" v-if="!showEdit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                    </svg>
                    Edit
                </button>


                <button @click="submit" class="flex items-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700 max-w-max" v-if="showEdit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2" viewBox="0 0 16 16">
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                    </svg>  
                    Save
                </button>


                <button @click="deleteBarangayOfficial" class="flex items-center py-2 px-4 bg-red-600 text-white rounded hover:bg-red-700 ml-2 max-w-max">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                    Delete
                </button>


            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Layoutpage from '@/Layouts/Layoutpage.vue';

defineOptions({
    layout: Layoutpage
});

const props = defineProps({
    barangayOfficial: Object,
    positions: Array
});

const showEdit = ref(false);

const form = useForm({
    name: props.barangayOfficial.name,
    position_id: props.barangayOfficial.position_id,
    age: props.barangayOfficial.age,
    address: props.barangayOfficial.address
});

const submit = async () => {
    if (showEdit.value) {
        await form.put('/barangay-officials/' + props.barangayOfficial.id);
        toggleEdit();
    }
};

const toggleEdit = () => {
    showEdit.value = !showEdit.value;
};

const deleteBarangayOfficial = () => {
    console.log("Delete function called");
    const del = confirm('Are you sure you want to delete this barangay official?');
};

console.log('Positions:', props.positions);
</script>

