<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md mx-auto">
            <div>
                <InputLabel for="email" value="Email" class="block text-gray-700 text-sm font-bold mb-2" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2 text-red-500 text-xs italic" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" class="block text-gray-700 text-sm font-bold mb-2" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-600 focus:border-blue-600 sm:text-sm"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2 text-red-500 text-xs italic" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-blue-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="ml-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<style scoped>
form {
    max-width: 400px;
    margin: auto;
    padding: 2rem;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

button:disabled {
    cursor: not-allowed;
}

.shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.text-blue-600 {
    color: #2563EB;
}

.text-blue-700 {
    color: #1D4ED8; 
}

.focus\:ring-blue-600:focus {
    --tw-ring-color: #2563EB; 
}

.focus\:ring-blue-500:focus {
    --tw-ring-color: #3B82F6; 
}

.focus\:border-blue-600:focus {
    border-color: #2563EB; 
}

.bg-blue-600 {
    background-color: #2563EB; 
}

.bg-blue-700:hover {
    background-color: #1D4ED8; 
}

.underline:hover {
    text-decoration: underline;
}
</style>
