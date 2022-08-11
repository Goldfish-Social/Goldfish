<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Post from '../Shared/Post.vue';
import Cards from '../Shared/Cards.vue';

let props = defineProps({
  post: Object,
});

</script>
<template>
    <AppLayout title="Home">
        <template #header>
            Post by {{ post.username }}
        </template>

        <section>

            <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div
                    
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
                                        <div class="badge badge-sm badge-outline">
                                            {{ post.time }}
                                        </div>
                                    </div>
                                </div>
                            </h3>

                            <p class="mt-3">{{ post.description }}</p>
                            <div class="divider"></div> 
                            <div class="card-actions flex justify-between">
                                <div class="flex justify-start">
                                    <InertiaLink
                                    v-if="post.isliked === false"
                                    preserveScroll
                                    method="post"
                                    as="button"
                                    type="button"
                                    class="btn btn-success btn-sm gap-2"
                                    :href="route('like', { id: post.id })"
                                    >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    Like ({{ post.likes }})
                                    </InertiaLink>

                                    <InertiaLink
                                    v-if="post.isliked === true"
                                    preserveScroll
                                    method="post"
                                    as="button"
                                    type="button"
                                    class="btn btn-outline btn-success btn-sm gap-2"
                                    :href="route('like', { id: post.id })"
                                    >
                                    Undo  
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>

                                    ({{ post.likes }})
                                    </InertiaLink>
                                </div>
                                <div class="flex justify-end">
                                    <button class="btn btn-sm btn-secondary gap-2 mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        0 
                                    </button> 
                                    <button class="btn btn-sm btn-accent gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                        0
                                    </button>
                                </div>

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
