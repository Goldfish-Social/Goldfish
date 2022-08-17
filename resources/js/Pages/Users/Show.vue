<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '../Shared/Pagination.vue';
import ProfileCard from '../Shared/ProfileCard.vue';
import Empty from '../Shared/Empty.vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';

let props = defineProps({
    profile: Object,
});

</script>
<template>
    <AppLayout title="User Profile">
        <template #header>
            {{ profile.name }} Profile
        </template>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div class="py-10 px-4 mx-auto max-w-screen-xl lg:py-10 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <ProfileCard :profile="profile" />
                </div>
            </div>
        </section>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900 mx-auto max-w-screen-sm">
            <TabGroup>
                <TabList class="mx-auto text-center flex space-x-1 bg-gray-200 dark:bg-gray-800 p-2">
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                            Posts
                        </button>
                    </Tab>
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                            Liked
                        </button>
                    </Tab>
                    <Tab v-slot="{ selected }" as="template">
                        <button :class="[selected ? 'btn btn-primary' : 'btn btn-primary btn-active']">
                            Shared
                        </button>
                    </Tab>
                </TabList>
                <TabPanels>
                    <TabPanel>
                        <div v-if="profile.posts.total === 0">
                            <Empty />
                        </div>
                        <Cards v-bind:posts="profile.posts" />
                        <Pagination :links="profile.posts.links" />
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