<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Post from '../Shared/Post.vue';
import Cards from '../Shared/Cards.vue';
import Pagination from '../Shared/Pagination.vue';

let props = defineProps({
  posts: Object,
});


</script>
<template>
    <AppLayout title="Home">
        <template #header>
            Home Feed
        </template>

        <section>
            <div class="px-4 mx-auto max-w-screen-sm">
                <Post />
            </div>
        </section>

        <section class="bg-gray-100 dark:bg-gray-800 min-h-screen">
            <Cards v-bind:posts="posts" />

            <Pagination :links="posts.links" />
        </section>

    </AppLayout>
</template>
