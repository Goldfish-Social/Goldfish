<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';

let props = defineProps({
  profile: Object,
});

</script>

<template>
    <AppLayout title="Home">
        <template #header>
            {{ profile.name }} Profile
        </template>


        <section class="bg-gray-200 dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                    <div class="card bg-base-100 shadow-xl">
                    <figure>
                        <img :src="profile.pic" class="w-full" alt="" />
                        </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            <InertiaLink :href="route('user-profile', { id: profile.username })">
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img :src="profile.pic" />
                                    </div>
                                </div>
                            </InertiaLink>
                            <div class="ml-3">
                                <InertiaLink :href="route('user-profile', { id: profile.username })">
                                    {{ profile.username }}
                                </InertiaLink>
                            </div>
                        </h2>
                        <p>{{ profile.about }}</p>
                       <div class="card-actions justify-end">
                            <button class="btn btn-primary">Follow</button>
                        </div>
                    </div>   
                </div>
            </div>

            </div>
        </section>


        <section class="bg-gray-100 dark:bg-gray-800">
            <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                    <div
                        v-for="post in profile.posts.data"
                        :key="post.id"
                        class="mx-auto max-w-screen-sm lg:mb-16 mb-8">

                        <div 
                        class="card bg-base-100 shadow">
                        <div v-if="post.video !== null">
                        <vue3-video-player :src="post.video"></vue3-video-player>
                        
                        </div> 
                            <div class="card-body">

                                <h3 class="card-title">
                                    <InertiaLink :href="route('user-profile', { id: post.username })">
                                    <div class="avatar">
                                        <div class="w-12 rounded-full">
                                            <img :src="post.avatar" />
                                        </div>
                                    </div>
                                    </InertiaLink>
                                    <div class="ml-3">
                                        <InertiaLink :href="route('user-profile', { id: post.username })">
                                            {{ post.username }}
                                        </InertiaLink>
                                        <div>
                                            <InertiaLink :href="route('show-post', { id: post.id })">
                                            <div class="badge badge-sm badge-outline">
                                                {{ post.time }}
                                            </div>
                                            </InertiaLink>
                                        </div>
                                    </div>
                                </h3>

                                <p class="mt-3">
                                    <InertiaLink :href="route('show-post', { id: post.id })">
                                        {{ post.description }}
                                    </InertiaLink>
                                    </p>
                                <div class="divider"></div> 
                                <div class="card-actions justify-start">
                                    <button class="btn btn-sm btn-outline btn-success">0 Likes</button>
                                    <button class="btn btn-sm btn-outline btn-primary">0 Replies</button> 
                                    <button class="btn btn-sm btn-outline btn-accent">0 Shares</button>
                                </div>

                                <div class="card-actions justify-end mt-2">
                                    <button 
                                    v-if="post.delete" 
                                    @click="destroy(post.id)"
                                    class="btn btn-ghost btn-sm"
                                    method="post" 
                                    type="submit"
                                    >
                                    Delete
                                    </button>
                                </div>

                            </div>
                        </div>    
                    </div>

        </div>

        </section>



    </AppLayout>
</template>