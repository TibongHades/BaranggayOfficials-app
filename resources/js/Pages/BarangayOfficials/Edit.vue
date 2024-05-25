<template>
    <div>
        <h1>Edit Official</h1>
        <form @submit.prevent="submit">
            <label for="name">Name:</label>
            <input type="text" v-model="form.name" id="name">
            <label for="position_id">Position:</label>
            <select v-model="form.position_id" id="position_id">
                <option v-for="position in positions" :value="position.id" :key="position.id">{{ position.pos_name }}</option>
            </select>
            <label for="age">Age:</label>
            <input type="text" v-model="form.age" id="age">
            <label for="address">Address:</label>
            <input type="text" v-model="form.address" id="address">
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';

const positions = ref([]);
const official = ref([]);
const form = useForm({
    name: official.value.name,
    position_id: official.value.position_id,
    age: official.value.age,
    address: official.value.address
});

function submit() {
    form.put(`/barangay-officials/${official.value.id}`);
}

// Fetch positions data
fetch('/api/positions')
    .then(response => response.json())
    .then(data => positions.value = data);

// Fetch official data
fetch(`/api/barangay-officials/${official.value.id}`)
    .then(response => response.json())
    .then(data => official.value = data);
</script>
