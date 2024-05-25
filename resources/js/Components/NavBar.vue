<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <nav v-if="canLogin" class="-mx-3 flex justify-end space-x-4">
        <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
            Dashboard
        </Link>

        <template v-else>
            <Link
                :href="route('login')"
                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Log in
            </Link>

            <Link
                v-if="canRegister"
                :href="route('register')"
                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Register
            </Link>
        </template>
    </nav>
</template>
