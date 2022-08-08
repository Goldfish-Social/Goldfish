<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '../Layouts/AppLayout.vue';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    posts: Object,
});
</script>

<template>
<AppLayout title="Home">
        <template #header>
            Browse the feed
        </template>

    <Head title="Explore & Discover" />

    <section>
            <Cards v-bind:posts="posts" />
        </section>

    </AppLayout>
</template>
