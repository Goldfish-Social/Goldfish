<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Pagination from '../Shared/Pagination.vue';
import Followers from '../Shared/Followers.vue';
import Follows from '../Shared/Follows.vue';
import NavLink from '../../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Components/NavLink.vue';

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
                        <div class="flex justify-between">
                            <h2 class="card-title">
                                <InertiaLink :href="route('user-profile', { id: profile.username })">
                                    <div class="avatar">
                                        <div class="w-14 rounded-full">
                                            <img :src="profile.pic" />
                                        </div>
                                    </div>
                                </InertiaLink>
                                <div class="ml-3 mb-2">
                                    <InertiaLink :href="route('user-profile', { id: profile.username })">
                                        {{ profile.username }}
                                    </InertiaLink>
                                </div>
                            </h2>

                        <InertiaLink
                            v-if="profile.isFollowing === false && profile.followbutton === false"
                            preserveScroll
                            method="post" as="button" type="button"
                            class="btn btn-primary" 
                            :href="route('follow', { id: profile.username })"
                        >
                            Follow
                        </InertiaLink>

                        <InertiaLink
                            v-if="profile.isFollowing === true && profile.followbutton === false"
                            preserveScroll
                            method="post" as="button" type="button"
                            class="btn btn-secondary" 
                            :href="route('follow', { id: profile.username })"
                        >
                            Unfollow
                        </InertiaLink>

                        </div>
                        <p>{{ profile.about }}</p>
                        <div class="divider"></div> 
                            <div class="card-actions justify-between">
                                <button class="btn btn-sm btn-outline btn-success">{{ profile.postamount }} Posts</button>
                                <Follows :profile="profile" />
                                <Followers :profile="profile" />
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
                        class="card bg-base-100 shadow-xl">
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
        <Pagination :links="profile.posts.links" />
        </div>


        </section>



    </AppLayout>
</template>