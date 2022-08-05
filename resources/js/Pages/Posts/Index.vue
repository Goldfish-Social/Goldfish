<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Post from '../Shared/Post.vue';

let props = defineProps({
  posts: Object,
});

</script>
<template>
    <AppLayout title="Home">
        <template #header>
            Home Feed
        </template>

        <section class="bg-gray-900 py-4 dark:bg-gray-900">
            <div class="px-4 mx-auto max-w-screen-sm">
                    <Post />
            </div>
        </section>

        <section class="bg-gray-800 dark:bg-gray-800 min-h-screen">
            <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div v-if="posts !== null">
                <div
                    v-for="post in posts.data"
                    :key="post.id"
                    class="mx-auto max-w-screen-sm lg:mb-16 mb-8">

                    <div 
                    class="card bg-base-100 shadow">
                    <figure v-if="post.media !== 'storage/'">
                        <img :src="post.media" alt="Shoes" />
                        </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            <div class="avatar">
                                <div class="w-14 rounded-full">
                                    <img :src="post.avatar" />
                                </div>
                            </div>
                        {{ post.title }}
                        </h2>
                        <p>{{ post.description }}</p>
                        <div class="card-actions justify-end">
                        <div class="badge badge-outline">{{ post.username }}</div> 
                        <div class="badge badge-outline">{{ post.time }}</div>
                        </div>
                    </div>
                    </div>    
                </div>
            </div>
            </div>
        </section>

    </AppLayout>
</template>
