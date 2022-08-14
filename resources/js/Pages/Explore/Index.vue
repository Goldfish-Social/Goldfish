<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Post from '../Shared/Post.vue';
import Cards from '../Shared/Cards.vue';
import Pagination from '../Shared/Pagination.vue';

let props = defineProps({
  posts: Object,
});

</script>
<template>
    <AppLayout title="Explore">
        <template #header>
            Explore
        </template>

        <section>
            <div class="px-4 mx-auto max-w-screen-sm">
                <Post />
            </div>
        </section>

        <section class="bg-gray-800 min-h-screen mt-4">
            <div class="mx-auto max-w-screen-lg lg:mb-16 mb-8 px-4">
                


            </div>
        </section>

    </AppLayout>
</template>
