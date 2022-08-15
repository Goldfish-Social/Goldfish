<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '../Shared/Pagination.vue';
import ProfileCard from '../Shared/ProfileCard.vue';

let props = defineProps({
    profile: Object,
});

</script>

<template>
    <AppLayout title="User Profile">
        <template #header>
            {{ profile.name }} Profile
        </template>

        <section class="dark:bg-gray-900 bg-gray-100 text-gray-900 dark:text-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center mb-8">
                    <ProfileCard :profile="profile" />
                </div>
            </div>
        </section>

        <section class="dark:bg-gray-900 bg-gray-100 text-gray-900 dark:text-white">
            <div v-if="profile.followers === null">
                <Empty />
            </div>
            <div class="mx-auto max-w-screen-sm text-center px-4 pb-12 pt-2">
                <div class="overflow-x-auto w-full">
                    <table class="table w-full">
                        <tbody>
                            <tr v-for="follower in profile.followers" :key="follower.id">
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar">
                                            <div class="mask mask-squircle w-12 h-12">
                                                <InertiaLink :href="follower.userlink">
                                                    <img :src="follower.avatar" alt="{{ follower.name }}" />
                                                </InertiaLink>
                                            </div>
                                        </div>
                                        <div class="mp-2">
                                            <InertiaLink :href="follower.userlink">
                                                <div class="font-bold hover:text-gray-300">{{ follower.name }}</div>
                                                <div class="text-sm opacity-50 hover:text-gray-300">@{{
                                                        follower.username
                                                }}</div>
                                            </InertiaLink>
                                        </div>
                                    </div>
                                </td>
                                <th class="flex justify-end">
                                    <InertiaLink
                                        v-if="$page.props.auth.user !== null && follower.isFollowing === false && follower.followbutton === false"
                                        preserveScroll method="post" as="button" type="button"
                                        class="btn btn-primary gap-2"
                                        :href="route('follow', { id: follower.username })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14"></line>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg>
                                        Follow
                                    </InertiaLink>
                                    <InertiaLink
                                        v-if="$page.props.auth.user !== null && follower.isFollowing === true && follower.followbutton === false"
                                        preserveScroll method="post" as="button" type="button"
                                        class="btn btn-secondary gap-2"
                                        :href="route('follow', { id: follower.username })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg>
                                        Unfollow
                                    </InertiaLink>
                                    <InertiaLink v-if="$page.props.auth.user !== null && follower.followbutton === true"
                                        preserveScroll class="btn btn-secondary gap-2"
                                        :href="route('user-profile', { id: follower.username })">
                                        That's you
                                    </InertiaLink>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </AppLayout>
</template>