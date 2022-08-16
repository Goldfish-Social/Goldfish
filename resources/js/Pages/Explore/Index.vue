<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Post from '../Shared/Post.vue';
import Cards from '../Shared/Cards.vue';
import Pagination from '../Shared/Pagination.vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import HLSCore from '@cloudgeek/playcore-hls';

let props = defineProps({
    posts: Object,
});

</script>
<template>
    <AppLayout title="Explore">
        <template #header>
            Explore
        </template>

        <section class="py-4 mb-4">
            <div class="px-4 mx-auto max-w-screen-sm">
                <Post />
            </div>
        </section>


        <section class="py-4 mb-4">
            <div class="px-4 mx-auto max-w-screen-sm">
                <TabGroup>
                    <TabList class="flex space-x-1 rounded-xl bg-gray-100 p-3">
                        <Tab v-slot="{ selected }" as="template">
                            <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                                Posts
                            </button>
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                                Users
                            </button>
                        </Tab>
                        <Tab v-slot="{ selected }" as="template">
                            <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                                More
                            </button>
                        </Tab>
                    </TabList>
                    <TabPanels>
                        <TabPanel>

                        </TabPanel>
                        <TabPanel>Content 2</TabPanel>
                        <TabPanel>Content 3</TabPanel>
                    </TabPanels>
                </TabGroup>
            </div>
        </section>

        <section class="bg-gray-900 min-h-screen">
            <div class="mx-auto my-8 px-4">
                <div className="masonry sm:masonry-sm md:masonry-md">
                    <div v-for="post in posts.data" :key="post.id" className="rounded-lg m-4 break-inside">
                        <div class="mx-auto max-w-screen-sm max-h-fit lg:mb-16">
                            <div class="card bg-gray-800 shadow-xl">
                                <div v-if="post.hlsready === null">
                                    <vue3-video-player :src="post.video">
                                    </vue3-video-player>
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
                                                        <div class="badge badge-sm badge-outline p-2">
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
                                        <div class="flex justify-start">
                                            <InertiaLink v-if="post.isliked === false" preserveScroll method="post"
                                                as="button" type="button" class="btn btn-success btn-sm gap-2"
                                                :href="route('like', { id: post.id })">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>
                                                Like ({{ post.likes }})
                                            </InertiaLink>

                                            <InertiaLink v-if="post.isliked === true" preserveScroll method="post"
                                                as="button" type="button"
                                                class="btn btn-outline btn-success btn-sm gap-2"
                                                :href="route('like', { id: post.id })">
                                                Undo
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg>

                                                ({{ post.likes }})
                                            </InertiaLink>
                                        </div>
                                        <div class="flex justify-end">
                                            <InertiaLink class="btn btn-sm btn-secondary gap-2 mr-2"
                                                :href="route('show-post', { id: post.id })">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                                {{ post.replycount }}
                                            </InertiaLink>
                                            <button class="btn btn-sm btn-accent gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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

                                    <div class="card-actions justify-end mt-2">
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

            </div>
        </section>

    </AppLayout>
</template>
