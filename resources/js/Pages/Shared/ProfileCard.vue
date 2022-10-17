<template>
    <div>
        <div class="card card-compact dark:bg-gray-800 dark:text-white bg-white text-gray-900">
            <!-- <figure>
                <img :src="profile.pic" class="w-full max-h-fit" alt="" />
            </figure> -->
            <div class="card-body">
                <div class="flex justify-between text-left">
                    <h2 class="card-title">
                        <InertiaLink :href="route('user-profile', { id: profile.username })">
                            <div class="avatar">
                                <div class="w-14 mask mask-hexagon">
                                    <img :src="profile.pic" />
                                </div>
                            </div>
                        </InertiaLink>
                        <div class="ml-2 mb-2">
                            <InertiaLink :href="route('user-profile', { id: profile.username })">
                                {{ profile.name }}
                                <div class="text-sm">
                                    @{{ profile.username }}
                                </div>
                            </InertiaLink>
                        </div>
                    </h2>
                    <InertiaLink
                        v-if="$page.props.auth.user !== null && profile.is.following === false && profile.is.self === false"
                        preserveScroll method="post" as="button" type="button" class="btn btn-primary gap-2"
                        :href="route('follow', { id: profile.username })">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </InertiaLink>
                    <InertiaLink
                        v-if="$page.props.auth.user !== null && profile.is.following === true && profile.is.self === false"
                        preserveScroll method="post" as="button" type="button" class="btn btn-secondary gap-2"
                        :href="route('follow', { id: profile.username })">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </InertiaLink>
                </div>
                <p class="my-2 ml-2 text-left" v-if="profile.about === null">
                    No bio yet!
                </p>
                <p class="my-2 ml-2 text-left">{{ profile.about }}</p>
                <div class="flex my-4">
                    <div class="flex justify-start">
                        <div class="hidden sm:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 mt-1" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            {{ profile.time }}
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            class="ml-3 mr-1 mt-1" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                        <p v-if="profile.website === null">
                            No website</p>
                        <a v-else :href="profile.link" class="break-all" target="_blank">{{
                        profile.website
                        }}</a>

                    </div>
                </div>

                <div class="card-actions flex ml-2">
                    <InertiaLink preserve-scroll class="btn-link font-bold"
                        :href="route('user-profile', { id: profile.username })">
                        {{ profile.postamount }} <span class="font-normal">Posts</span>
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn-link font-bold"
                        :href="route('user-profile-follows', { id: profile.username })">
                        {{ profile.followcount }} <span class="font-normal">Follows</span>
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn-link font-bold"
                        :href="route('user-profile-followers', { id: profile.username })">
                        {{ profile.followerscount }} <span class="font-normal">Followers</span>
                    </InertiaLink>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
let props = defineProps({
    profile: Object,
});

</script>