<template>
    <div>
        <div class="card dark:bg-gray-800 dark:text-white bg-white text-gray-900 shadow-xl">
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
                <div class="divider"></div>
                <div class="card-actions justify-between">
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-primary"
                        :href="route('user-profile', { id: profile.username })">
                        {{ profile.postamount }} Posts
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-accent"
                        :href="route('user-profile-follows', { id: profile.username })">
                        {{ profile.followcount }} Follows
                    </InertiaLink>
                    <InertiaLink preserve-scroll class="btn btn-sm btn-outline btn-primary"
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