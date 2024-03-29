<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import HLSCore from '@cloudgeek/playcore-hls';
import ReplyForm from '../Shared/ReplyForm.vue';
import ReplyCard from '../Shared/ReplyCard.vue';

let props = defineProps({
    post: Object,
});

</script>
<template>
    <AppLayout title="Post">
        <!-- <template #header>
            Post by {{ post.data.username }}
        </template> -->

        <section>
            <div class="py-4 pt-10 px-4 mx-auto max-w-screen-xl">
                <div class="mx-auto max-w-screen-sm lg:mb-16 mb-8">
                    <div class="card card-compact bg-white dark:bg-gray-800 shadow dark:text-white text-gray-900">
                        <div v-if="post.data.hlsready === null">
                            <vue-plyr :options="options">
                                <video controls crossorigin playsinline>
                                    <source size="720" :src="post.data.video" type="video/mp4" />
                                </video>
                            </vue-plyr>
                        </div>
                        <div v-else>
                            <vue3-video-player :core="HLSCore" :src="post.data.hls">
                            </vue3-video-player>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <InertiaLink :href="route('user-profile', { id: post.data.username })">
                                    <div class="avatar">
                                        <div class="w-14 mask mask-hexagon">
                                            <img :src="post.data.avatar" />
                                        </div>
                                    </div>
                                </InertiaLink>
                                <div class="ml-2">
                                    <InertiaLink :href="route('user-profile', { id: post.data.username })">
                                        {{ post.data.username }}
                                    </InertiaLink>
                                    <div>
                                        <div class="badge badge-sm badge-outline">
                                            {{ post.data.time }}
                                        </div>
                                    </div>
                                </div>
                            </h3>
                            <p class="mt-3">{{ post.data.description }}</p>
                            <div class="divider"></div>
                            <div class="card-actions flex">
                                <div class="flex">
                                    <InertiaLink v-if="post.data.isliked === false" preserveScroll method="post" as="button"
                                        type="button" class="btn btn-ghost btn-sm gap-2"
                                        :href="route('like', { id: post.data.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ post.data.likes }}
                                    </InertiaLink>
                                    <InertiaLink v-if="post.data.isliked === true" preserveScroll method="post" as="button"
                                        type="button" class="btn btn-ghost btn-sm btn-block gap-2"
                                        :href="route('like', { id: post.data.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="#f8e71c" stroke="#f8e71c" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ post.data.likes }}
                                    </InertiaLink>
                                    <InertiaLink v-if="$page.props.auth.user === null"
                                        :href="route('login')" 
                                        class="btn btn-ghost btn-sm btn-block gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ post.data.likes }}
                                    </InertiaLink>
                                </div>
                                <div class="flex">
                                    <InertiaLink class="btn btn-sm btn-ghost btn-block gap-2 mr-2"
                                        :href="route('show-post', { id: post.data.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                        {{ post.data.replycount }}
                                    </InertiaLink>
                                </div>
                                <div class="flex">
                                    <button class="btn btn-sm btn-ghost btn-block gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                        0
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section v-if="$page.props.auth.user !== null">
            <ReplyForm :post="post" />
        </section>

        <section>
            <div v-if="post.data.replies !== null" class="px-4 mx-auto max-w-screen-xl py-16 lg:px-6">
                <!-- <div v-for="reply in post.data.replies" :key="reply.id" class="mx-auto max-w-screen-sm lg:mb-16 mb-8">
                    <div class="card card-compact bg-white text-gray-900 dark:bg-gray-800 dark:text-white shadow">
                        <div class="card-body">
                            <h3 class="card-title">
                                <div class="avatar">
                                    <div class="w-14 mask mask-hexagon">
                                        <InertiaLink :href="route('user-profile', { id: reply.username })">
                                            <img :src="reply.avatar" />
                                        </InertiaLink>
                                    </div>
                                </div>
                                <div class="ml-2 text-sm">
                                    <InertiaLink :href="route('user-profile', { id: reply.username })">
                                        {{ reply.username }}
                                    </InertiaLink>
                                    <div>
                                        <div class="badge badge-sm badge-outline">
                                            {{ reply.time }}
                                        </div>
                                    </div>
                                </div>
                            </h3>
                            <p class="p-5">{{ reply.reply }}</p>
                            <div  v-if="reply.delete">
                                <div class="divider"></div>
                                <div class="card-actions justify-end mt-2">
                                    <button v-if="reply.delete" @click="destroy(reply.id)" class="btn btn-ghost btn-sm"
                                        method="post" type="submit">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <ReplyCard :post="post" />
            </div>
        </section>

    </AppLayout>
</template>
