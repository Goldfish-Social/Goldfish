<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '../Layouts/AppLayout.vue';
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import Pagination from './Shared/Pagination.vue';

let props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    posts: Object,
    filters: Object,
});

let search = ref(props.filters.search);

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
);
</script>

<template>
    <AppLayout title="Explore &amp; Discover">

        <template #header>
            <div class="flex justify-between">
                <div class="items-start pt-4">
                    Public Feed
                </div>
                <div class="items-end">
                    <div class="dropdown dropdown-left">
                        <label tabindex="0" class="btn btn-outline btn-primary">Search</label>
                        <div tabindex="0"
                            class="dropdown-content card card-compact w-64 p-2 shadow bg-base-100 dark:bg-gray-900 text-gray-900 dark:text-white">
                            <div class="card-body">
                                <h4 class="card-title">Search Posts</h4>
                                <input v-model="search" type="text"
                                    class="input input-bordered input-info w-full text-gray-900"
                                    placeholder="Search.." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <section>
            <Cards v-bind:posts="posts" />
            <Pagination :links="posts.links" />
        </section>

    </AppLayout>
</template>
