<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '../Shared/Pagination.vue';
import ProfileCard from '../Shared/ProfileCard.vue';
import Empty from '../Shared/Empty.vue';

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
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center mb-8">
                    <ProfileCard :profile="profile" />
                </div>
            </div>
        </section>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div v-if="profile.posts.total === 0">
                <Empty />
            </div>
            <Cards v-bind:posts="profile.posts" />
            <Pagination :links="profile.posts.links" />
        </section>

    </AppLayout>
</template>