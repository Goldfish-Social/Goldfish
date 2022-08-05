<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Upload from './Shared/Upload.vue';

let props = defineProps({
  posts: Object,
});
</script>

<template>
    <AppLayout title="Home">
        <template #header>
            <a href="#upload" class="btn">Upload</a>
        </template>

       <Upload />

        <section class="bg-white dark:bg-gray-900 min-h-screen">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                <div 
                    v-for="post in posts.data"
                    :key="post.id"
                    class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">

                    <div 
                    class="card bg-base-100 shadow">
                    <figure v-if="post.media !== 'storage/'">
                        <img :src="post.media" alt="Shoes" />
                        </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                        {{ post.title }}
                        <div class="badge badge-secondary">NEW</div>
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
        </section>



    </AppLayout>
</template>
