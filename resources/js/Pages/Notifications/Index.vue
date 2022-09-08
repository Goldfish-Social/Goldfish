<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from 'axios';
import { debounce } from "lodash/function";

export default {
    props: {
        user: Object,
        notifications: Object,
    },
    data() {
        return {
            UserNotifications: this.notifications
        }
    },
    components: {
        AppLayout,
    },
    mounted() {
        window.addEventListener('scroll', debounce((e) => {
            let pixelsFromBottom = document.documentElement.offsetHeight - document.documentElement.scrollTop - window.innerHeight;

            if (pixelsFromBottom < 200) {

                axios.get(this.UserNotifications.next_page_url).then(response => {
                    this.UserNotifications = {
                        ...response.data,
                        data: [...this.UserNotifications.data, ...response.data.data]
                    }
                });
            }
        }, 200));
    }
}

</script>
<template>
    <AppLayout title="Notifications">
        <template #header>
            <span class="badge badge-lg">{{ $page.props.unreadNotificationsCount }}</span><span
                class="ml-1 mt-2">Notifications</span>
        </template>

        <section class="dark:bg-gray-900 bg-gray-100 text-gray-900 dark:text-white min-h-screen pb-4">
            <div class="px-4 mx-auto max-w-screen-sm">

                <div v-for="notification in UserNotifications.data" :key="notification.id"
                    class="card dark:bg-gray-800 dark:text-white bg-gray-100 text-gray-900 mt-5 shadow-xl">


                    <div class="card card-compact dark:bg-gray-800 dark:text-white bg-white text-gray-900">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <h2 class="card-title">
                                    <InertiaLink :href="route('user-profile', { id: notification.data.user.username })">
                                        <div class="avatar">
                                            <div class="w-10 mask mask-hexagon">
                                                <img :src="notification.data.user.profile_photo_url" />
                                            </div>
                                        </div>
                                    </InertiaLink>
                                    <div class="mb-2">
                                        <InertiaLink class="hover:underline"
                                            :href="route('user-profile', { id: notification.data.user.username })">
                                            @{{ notification.data.user.username }}
                                        </InertiaLink>
                                        <span class="text-gray-500 dark:text-gray-100 ml-1">liked your</span>
                                        <InertiaLink class="hover:underline"
                                            :href="route('show-post', { id: notification.data.post.id })">
                                            post
                                        </InertiaLink>
                                    </div>
                                </h2>

                            </div>
                            <p class="my-4">{{ notification.data.post.description }}</p>

                            <div class="divider"></div>
                            <div class="card-actions flex">
                                <div class="flex">
                                    <InertiaLink v-if="notification.data.post.isliked === false" preserveScroll method="post" as="button"
                                        type="button" class="btn btn-ghost btn-sm gap-2"
                                        :href="route('like', { id: notification.data.post.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ post.data.likes }}
                                    </InertiaLink>
                                    <InertiaLink v-if="notification.data.post.isliked === true" preserveScroll method="post" as="button"
                                        type="button" class="btn btn-ghost btn-sm btn-block gap-2"
                                        :href="route('like', { id: notification.data.post.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="#f8e71c" stroke="#f8e71c" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ notification.data.post.likes }}
                                    </InertiaLink>
                                    <InertiaLink v-if="$page.props.auth.user === null"
                                        :href="route('show-post', { id: notification.data.post.id })"
                                        class="btn btn-ghost btn-sm btn-block gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{ notification.data.post.likes }}
                                    </InertiaLink>
                                </div>
                                <div class="flex">
                                    <InertiaLink class="btn btn-sm btn-ghost btn-block gap-2 mr-2"
                                        :href="route('show-post', { id: notification.data.post.id })">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                            </path>
                                        </svg>
                                        {{ notification.data.post.replycount }}
                                    </InertiaLink>
                                </div>
                                <div class="flex">
                                    <button class="btn btn-sm btn-ghost btn-block gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round">
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
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </AppLayout>
</template>