<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from 'axios';
import { debounce } from "lodash/function";
import NotificationsCard from "../Shared/NotificationsCard.vue";
import Empty from "../Shared/Empty.vue";

export default {
    props: {
        notifications: Object,
    },
    data() {
        return {
            userNotifications: this.notifications
        }
    },
    components: {
        AppLayout,
        NotificationsCard,
        Empty
    },
    mounted() {
        window.addEventListener('scroll', debounce((e) => {
            let pixelsFromBottom = document.documentElement.offsetHeight - document.documentElement.scrollTop - window.innerHeight;

            if (pixelsFromBottom < 200) {
                if (!this.userNotifications.next_page_url) {
                    return;
                }

                axios.get(this.UserNotifications.next_page_url).then(response => {
                    this.UserNotifications = {
                        ...response.data,
                        data: [...this.UserNotifications.data, ...response.data.data]
                    }
                });
            }
        }, 200));
    }, 
    watch: {
        posts(newNotifications) {
            this.userNotifications = newNotifications;
        }
    }
}
</script>
<template>
    <AppLayout title="Notifications">
        <template #header>
            <span class="badge badge-lg bg-white">{{ $page.props.unreadNotificationsCount }}</span><span
                class="ml-1 mt-2">Notifications</span>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">

                    <!-- <Empty v-if="userNotifications.total === 0" class="columns-1 mt-20" /> -->

                    <div class="columns-1 md:columns-1 lg:columns-1">
                        <NotificationsCard class="mb-4" v-for="notification in userNotifications.data"
                            :key="notification.id" :notification="notification" />
                    </div>

                </div>
            </div>
        </div>

    </AppLayout>
</template>