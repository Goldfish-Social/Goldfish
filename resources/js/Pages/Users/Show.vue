<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';

let props = defineProps({
  posts: Object,
});

</script>

<template>
    <AppLayout title="Home">
        <template #header>
            <a href="#upload" class="btn">Upload</a>
        </template>


        <section class="bg-white dark:bg-gray-900 min-h-screen">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <div v-if="posts !== null">
                    <div 
                    v-for="post in posts.data"
                    :key="post.id"
                    class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">
                        {{ post.title }}
                        <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div> 
                        <div class="badge badge-outline">Products</div>
                        </div>
                    </div>
                    </div>   
                    </div> 
                </div>

            </div>
        </section>



    </AppLayout>
</template>
