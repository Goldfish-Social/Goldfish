<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '../Layouts/GuestLayout.vue';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    posts: Object,
});
</script>

<template>
<GuestLayout>
    <Head title="Welcome" />

    <template #header>
            What's new
        </template>

    <section>
            <Cards v-bind:posts="posts" />
        </section>

    </GuestLayout>
</template>
