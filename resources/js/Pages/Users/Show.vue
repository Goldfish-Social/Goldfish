<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProfileCard from '../Shared/ProfileCard.vue';
import Empty from '../Shared/Empty.vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import SimplePagination from '../Shared/SimplePagination.vue';

let props = defineProps({
    profile: Object,
    posts: Object,
});

</script>
<template>
    <AppLayout title="User Profile">

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div class="py-10 pt-16 px-4 mx-auto max-w-screen-xl lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <ProfileCard :profile="profile.data" />
                </div>
            </div>
        </section>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900 mx-auto max-w-screen-sm">
            <TabGroup>
                <TabList class="text-center flex space-x-1 bg-gray-100 dark:bg-gray-800 p-2 mx-4 rounded-lg">
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary btn-sm' : 'btn btn-primary btn-sm btn-active']">
                            Posts
                        </button>
                    </Tab>
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary btn-sm' : 'btn btn-primary btn-sm btn-active']">
                            Liked
                        </button>
                    </Tab>
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary btn-sm' : 'btn btn-primary btn-sm btn-active']">
                            Shared
                        </button>
                    </Tab>
                </TabList>
                <TabPanels>
                    <TabPanel>
                        <div v-if="profile.data.posts === null">
                            <Empty />
                        </div>

                        <div class="px-4 mx-auto max-w-screen-xl py-10 lg:px-6">
                            <div v-if="posts.data.posts !== null">
                                <div v-for="post in posts.data" :key="post.id"
                                    class="mx-auto max-w-screen-sm max-h-fit lg:mb-16 mb-8">

                                    <div
                                        class="card card-compact dark:bg-gray-800 bg-white dark:text-white text-gray-900">

                                        <div v-if="post.hlsready === null">
                                            <vue-plyr :options="options">
                                                <video controls crossorigin playsinline>
                                                    <source size="720" :src="post.video" type="video/mp4" />
                                                </video>
                                            </vue-plyr>
                                        </div>
                                        <div v-else>
                                            <vue3-video-player :core="HLSCore" :src="post.hls">
                                            </vue3-video-player>
                                        </div>

                                        <div class="card-body">
                                            <div class="flex justify-between">
                                                <h3 class="card-title">
                                                    <InertiaLink :href="route('user-profile', { id: post.username })">
                                                        <div class="avatar">
                                                            <div class="w-14 mask mask-hexagon">
                                                                <img :src="post.avatar" />
                                                            </div>
                                                        </div>
                                                    </InertiaLink>
                                                    <div class="ml-2 text-sm">
                                                        <InertiaLink
                                                            :href="route('user-profile', { id: post.username })">
                                                            {{ post.username }}
                                                        </InertiaLink>
                                                        <div>
                                                            <InertiaLink :href="route('show-post', { id: post.id })">
                                                                <div class="badge badge-sm badge-outline p-1">
                                                                    {{ post.time }}
                                                                </div>
                                                            </InertiaLink>
                                                        </div>
                                                    </div>
                                                </h3>
                                                <div class="badge badge-primary badge-outline mt-5">
                                                    <InertiaLink :href="route('show-post', { id: post.id })">
                                                        {{ post.status }}
                                                    </InertiaLink>
                                                </div>
                                            </div>
                                            <p class="mt-3">
                                                <InertiaLink :href="route('show-post', { id: post.id })">
                                                    {{ post.description }}
                                                </InertiaLink>
                                            </p>
                                            <div class="divider"></div>
                                            <div class="card-actions flex">
                                                <div class="flex">
                                                    <InertiaLink v-if="post.isliked === false" preserveScroll
                                                        method="post" as="button" type="button"
                                                        class="btn btn-ghost btn-sm gap-2"
                                                        :href="route('like', { id: post.id })">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                        {{ post.likes }}
                                                    </InertiaLink>
                                                    <InertiaLink v-if="post.isliked === true" preserveScroll
                                                        method="post" as="button" type="button"
                                                        class="btn btn-ghost btn-sm btn-block gap-2"
                                                        :href="route('like', { id: post.id })">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="#f8e71c" stroke="#f8e71c"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                        {{ post.likes }}
                                                    </InertiaLink>
                                                    <InertiaLink v-if="$page.props.auth.user === null"
                                                        :href="route('show-post', { id: post.id })"
                                                        class="btn btn-ghost btn-sm btn-block gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                        {{ post.likes }}
                                                    </InertiaLink>
                                                </div>
                                                <div class="flex">
                                                    <InertiaLink class="btn btn-sm btn-ghost btn-block gap-2 mr-2"
                                                        :href="route('show-post', { id: post.id })">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                            </path>
                                                        </svg>
                                                        {{ post.replycount }}
                                                    </InertiaLink>
                                                </div>
                                                <div class="flex">
                                                    <button class="btn btn-sm btn-ghost btn-block gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
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

                                            <div v-if="post.delete" class="card-actions justify-end mt-2">
                                                <button v-if="post.delete" @click="destroy(post.id)"
                                                    class="btn btn-error btn-sm" method="post" type="submit">
                                                    Delete
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <SimplePagination class="mb-6" v-if="posts.meta.total >= 21" :data="posts.links" />


                    </TabPanel>
                    <TabPanel>
                        <div class="px-4 mx-auto max-w-screen-xl">
                            <div class="mx-auto max-w-screen-sm text-center p-10">

                                Soon.

                            </div>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
                            <div class="mx-auto max-w-screen-sm text-center p-10">

                                Soon.

                            </div>
                        </div>
                    </TabPanel>
                </TabPanels>
            </TabGroup>

        </section>

    </AppLayout>
</template>