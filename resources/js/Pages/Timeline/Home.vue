<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Post from '../Shared/Post.vue';
import Cards from '../Shared/Cards.vue';
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import Pagination from '../Shared/Pagination.vue';
import PostModal from '../Shared/PostModal.vue';
import Empty from '../Shared/Empty.vue';
import Compose from '../Shared/Compose.vue';
import SimplePagination from '../Shared/SimplePagination.vue';


let props = defineProps({
    posts: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(
    search,
    throttle(function (value) {
        Inertia.get(
            "/home",
            { search: value },
            {
                preserveState: true,
                replace: true,
                preserveScroll: true
            }
        );
    }, 500)
);
</script>
<template>
    <AppLayout title="Home">
        <template #header>
            Home
        </template>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div v-if="posts.total === 0">
                <Empty />
            </div>
            <Cards v-bind:posts="posts" />
        </section>
        <SimplePagination v-if="posts.meta.total >= 21" :data="posts.links" />

    </AppLayout>
</template>
