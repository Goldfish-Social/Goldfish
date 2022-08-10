<template>
    <div>
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div v-if="posts !== null">
                <div
                    v-for="post in posts.data"
                    :key="post.id"
                    class="mx-auto max-w-screen-sm lg:mb-16 mb-8">

                    <div 
                    class="card bg-base-100 dark:bg-gray-200 shadow-xl">
                    <div v-if="post.video !== null">
                    <vue3-video-player :src="post.video"></vue3-video-player>
                     
                    </div> 
                        <div class="card-body">

                            <div class="flex justify-between">
                                <h3 class="card-title">
                                    <InertiaLink :href="route('user-profile', { id: post.username })">
                                    <div class="avatar">
                                        <div class="w-14 rounded-full">
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
                                <div class="badge badge-primary badge-outline mt-5">{{ post.status }}</div>
                            </div>

                            <p class="mt-3">
                                <InertiaLink :href="route('show-post', { id: post.id })">
                                    {{ post.description }}
                                </InertiaLink>
                                </p>
                            <div class="divider"></div> 
                            <div class="card-actions flex justify-between">
                                    <div>
                                        <InertiaLink
                                        v-if="post.isliked === false"
                                        preserveScroll
                                        method="post"
                                        as="button"
                                        type="button"
                                        class="btn btn-primary btn-sm"
                                        :href="route('like', { id: post.id })"
                                        >
                                        Like ({{ post.likes }})
                                        </InertiaLink>

                                        <InertiaLink
                                        v-if="post.isliked === true"
                                        preserveScroll
                                        method="post"
                                        as="button"
                                        type="button"
                                        class="btn btn-secondary btn-sm"
                                        :href="route('like', { id: post.id })"
                                        >
                                        Unlike ({{ post.likes }})
                                        </InertiaLink>

                                        <button class="btn btn-sm btn-secondary ml-2">0 Replies</button> 
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-accent">0 Shares</button>
                                    </div>
                            </div>

                            <div class="card-actions justify-end mt-2">
                                <button 
                                v-if="post.delete" 
                                @click="destroy(post.id)"
                                class="btn btn-error btn-sm"
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
        </div>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
import Like from './Like.vue';

const form = useForm();
function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('posts.destroy', id));
    }
}

let props = defineProps({
  posts: Object,
});
</script>