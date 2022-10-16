<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3';
import Cards from '../Shared/Cards.vue';
import Empty from '../Shared/Empty.vue';
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
            "/public",
            { search: value },
            {
                preserveState: true,
                replace: true,
                preserveScroll: true
            }
        );
    }, 500)
);

const form = useForm();
function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        form.delete(route('post.destroy', id));
    }
};
</script>
<template>
    <AppLayout title="Public Timeline">
        <template #header>
            The feed
        </template>

        <section class="dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div v-if="posts.total === 0">
                <Empty />
            </div>
            <Cards :posts="posts" />
        </section>
        <SimplePagination v-if="posts.meta.total >= 11" :data="posts.links" />

    </AppLayout>
</template>
