<template>
    <div>
        <div v-if="notification.data.type === 'follow'"
            class="card card-compact dark:bg-gray-800 dark:text-white bg-white text-gray-900">
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="card-title">
                        <InertiaLink :href="route('user-profile', { id: notification.data.follower.username })">
                            <div class="avatar">
                                <div class="w-12 shrink-0 rounded-full">
                                    <img :src="notification.data.follower.avatar" />
                                </div>
                            </div>
                        </InertiaLink>
                        <div class="ml-2">
                            <InertiaLink class="hover:underline"
                                :href="route('user-profile', { id: notification.data.follower.username })">
                                @{{ notification.data.follower.username }}
                            </InertiaLink>
                            <span class="text-gray-600 dark:text-gray-300 ml-2">followed you</span>
                        </div>
                    </h2>
                    <div class="mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                </div>
                <!-- <p class="my-4">
                    {{  notification.data.post.description }} in {{ notification.data.post.category }}
                </p> -->

                <!-- <div class="card-actions">
                    <div class="flex justify-between">
                        <div>
                        
                        </div>
                        <div>
                            <div class="badge badge-outline">
                               
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

        <div v-if="notification.data.type === 'like'"
            class="card card-compact dark:bg-gray-800 dark:text-white bg-white text-gray-900">
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="card-title">
                        <InertiaLink :href="route('user-profile', { id: notification.data.follower.username })">
                            <div class="avatar">
                                <div class="w-12 shrink-0 rounded-full">
                                    <img :src="notification.data.follower.avatar" />
                                </div>
                            </div>
                        </InertiaLink>
                        <div class="ml-2">
                            <InertiaLink class="hover:underline"
                                :href="route('user-profile', { id: notification.data.follower.username })">
                                @{{ notification.data.follower.username }}
                            </InertiaLink>
                            <span class="text-gray-600 dark:text-gray-300 ml-2">liked your</span>
                            <InertiaLink class="hover:underline"
                                :href="route('show-post', { id: notification.data.post.id })">
                                post
                            </InertiaLink>
                        </div>
                    </h2>
                    <div class="mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- <p class="my-4">
                    {{  notification.data.post.description }} in {{ notification.data.post.category }}
                </p> -->

                <!-- <div class="card-actions">
                    <div class="flex justify-between">
                        <div>
                        
                        </div>
                        <div>
                            <div class="badge badge-outline">
                               
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

        <div v-if="notification.data.type === 'reply'"
            class="card card-compact dark:bg-gray-800 dark:text-white bg-white text-gray-900">
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="card-title">
                        <InertiaLink :href="route('user-profile', { id: notification.data.follower.username })">
                            <div class="avatar">
                                <div class="w-12 shrink-0 rounded-full">
                                    <img :src="notification.data.follower.avatar" />
                                </div>
                            </div>
                        </InertiaLink>
                        <div class="ml-2">
                            <InertiaLink class="hover:underline"
                                :href="route('user-profile', { id: notification.data.follower.username })">
                                @{{ notification.data.follower.username }}
                            </InertiaLink>
                            <span class="text-gray-600 dark:text-gray-300 ml-2">replied to your</span>
                            <InertiaLink class="hover:underline"
                                :href="route('show-post', { id: notification.data.post.id })">
                                post
                            </InertiaLink>
                        </div>
                    </h2>
                    <div class="mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- <p class="my-4">
                    {{  notification.data.post.description }} in {{ notification.data.post.category }}
                </p> -->

                <!-- <div class="card-actions">
                    <div class="flex justify-between">
                        <div>
                        
                        </div>
                        <div>
                            <div class="badge badge-outline">
                               
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

    </div>
</template>
<script setup>

let props = defineProps({
    notification: Object,
});
</script>
