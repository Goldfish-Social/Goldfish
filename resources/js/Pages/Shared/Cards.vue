<template>
    <div>
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div v-if="posts !== null">
                <div
                    v-for="post in posts.data"
                    :key="post.id"
                    class="mx-auto max-w-screen-sm lg:mb-16 mb-8">

                    <div 
                    class="card bg-base-100 shadow">
                    <div v-if="post.video !== null">
                    <vue3-video-player :src="post.video"></vue3-video-player>
                     
                    </div> 
                        <div class="card-body">

                            <h3 class="card-title">
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img :src="post.avatar" />
                                    </div>
                                </div>
                                <div class="ml-3">
                                    {{ post.username }}
                                    <div>
                                        <div class="badge badge-sm badge-outline">
                                            {{ post.time }}
                                        </div>
                                    </div>
                                </div>
                            </h3>

                            <p class="mt-3">{{ post.description }}</p>
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
        </div>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

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