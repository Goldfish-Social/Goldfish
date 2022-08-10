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
                            v-if="profile.isFollowing === false && profile.followbutton === false && $page.props.auth.user"
                            preserveScroll
                            method="post" as="button" type="button"
                            class="btn btn-primary" 
                            :href="route('follow', { id: profile.username })"
                        >
                            Follow
                        </InertiaLink>

                        <InertiaLink
                            v-if="profile.isFollowing === true && profile.followbutton === false && $page.props.auth.user"
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
            <Cards v-bind:posts="profile.posts" />
            
        <Pagination :links="profile.posts.links" />


        </section>



    </AppLayout>
</template>