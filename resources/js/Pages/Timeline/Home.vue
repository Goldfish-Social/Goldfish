<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
import { debounce } from "lodash/function";
import Cards from '../Shared/Cards.vue';
import Empty from '../Shared/Empty.vue';

export default {
    props: {
        posts: Object,
    },
    data() {
        return {
            userPosts: this.posts
        }
    },
    components: {
        AppLayout,
        Cards,
        Empty
    },
    mounted() {
        window.addEventListener('scroll', debounce((e) => {
            let pixelsFromBottom = document.documentElement.offsetHeight - document.documentElement.scrollTop - window.innerHeight;

            if (pixelsFromBottom < 200) {
                if (!this.userPosts.links.next) {
                    return;
                }

                axios.get(this.userPosts.links.next).then(response => {
                    this.userPosts = {
                        ...response.data,
                        data: [...this.userPosts.data, ...response.data.data]
                    }
                });
            }
        }, 100));
    },
    watch: {
        posts(newPosts) {
            this.userPosts = newPosts;
        }
    }
}
</script>
<template>
    <AppLayout title="Home">
        <template #header>
            Home
        </template>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div v-if="posts.meta.total === 0">
                <Empty />
            </div>
            <Cards :posts="userPosts" />
        </section>
        <!-- <SimplePagination v-if="posts.meta.total >= 21" :data="posts.links" /> -->

    </AppLayout>
</template>
