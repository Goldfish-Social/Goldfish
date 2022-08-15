<template>
    <div>
        <div class="card dark:bg-gray-800 dark:text-white bg-white text-gray-900 shadow-xl">
            <figure>
                <img :src="profile.pic" class="w-full max-h-fit" alt="" />
            </figure>
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="card-title">
                        <InertiaLink :href="route('user-profile', { id: profile.username })">
                            <div class="avatar">
                                <div class="w-16 rounded-full">
                                    <img :src="profile.pic" />
                                </div>
                            </div>
                        </InertiaLink>
                        <div class="ml-3 mb-2">
                            <InertiaLink :href="route('user-profile', { id: profile.username })">
                                {{ profile.name }}
                                <div class="text-sm">
                                    @{{ profile.username }}
                                </div>
                            </InertiaLink>
                        </div>
                    </h2>
                    <InertiaLink
                        v-if="$page.props.auth.user !== null && profile.isFollowing === false && profile.followbutton === false"
                        preserveScroll method="post" as="button" type="button" class="btn btn-primary gap-2"
                        :href="route('follow', { id: profile.username })">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        Follow
                    </InertiaLink>
                    <InertiaLink
                        v-if="$page.props.auth.user !== null && profile.isFollowing === true && profile.followbutton === false"
                        preserveScroll method="post" as="button" type="button" class="btn btn-secondary gap-2"
                        :href="route('follow', { id: profile.username })">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        Unfollow
                    </InertiaLink>
                </div>
                <p class="mt-2 mb-2">{{ profile.about }}</p>
                <div class="flex mt-3">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-1 mr-1" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        {{ profile.time }} · <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" class="ml-2 mr-1 mt-1" fill="none" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                        <p v-if="profile.website === null">
                            No website</p>
                        <a v-else location="profile.website" target="_blank">{{
                                profile.website
                        }}</a>

                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-actions justify-between">
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-success"
                        :href="route('user-profile', { id: profile.username })">
                        {{ profile.postamount }} Posts
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-success"
                        :href="route('user-profile-follows', { id: profile.username })">
                        {{ profile.followcount }} Follows
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-success"
                        :href="route('user-profile-followers', { id: profile.username })">
                        {{ profile.followerscount }} Followers
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