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
            <span class="badge badge-lg">{{ $page.props.unreadNotificationsCount }}</span><span class="ml-1 mt-2">Notifications</span>
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

                            <!-- <div class="card-actions justify-between">
                                <InertiaLink preserve-scroll class="btn btn-xs btn-outline btn-primary"
                                    :href="route('user-profile', { id: profile.username })">
                                    {{ profile.postamount }} Posts
                                </InertiaLink>
                                <InertiaLink preserve-scroll class="btn btn-xs btn-outline btn-accent"
                                    :href="route('user-profile-follows', { id: profile.username })">
                                    {{ profile.followcount }} Follows
                                </InertiaLink>
                                <InertiaLink preserve-scroll class="btn btn-xs btn-outline btn-primary"
                                    :href="route('user-profile-followers', { id: profile.username })">
                                    {{ profile.followerscount }} Followers
                                </InertiaLink>
                            </div> -->
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </AppLayout>
</template>