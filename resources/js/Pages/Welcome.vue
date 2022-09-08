<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import SimplePagination from './Shared/SimplePagination.vue';

let props = defineProps({
    posts: Object,
    filters: Object,
})

let search = ref(props.filters.search)

watch(
    search,
    throttle(function (value) {
        Inertia.get(
            "/",
            { search: value },
            {
                preserveState: true,
                replace: true,
                preserveScroll: true
            }
        );
    }, 1000)
)
</script>
<template>
    <AppLayout title="Explore &amp; Discover">

        <template #header>
            Public Feed
        </template>

        <section>
            <Cards v-bind:posts="posts" />
        </section>
        <SimplePagination v-if="posts.meta.total >= 21" :data="posts" />

    </AppLayout>
</template>
