<template>
    <div class="dropdown dropdown-left mr-2">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="#a7081a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </label>
        <div tabindex="0"
            class="dropdown-content card card-compact w-64 p-2 shadow dark:bg-gray-900 dark:text-white bg-gray-100 text-gray-900">
            <div class="card-body">
                <input v-model="search" type="text" class="input input-bordered input-info w-full bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-white"
                    placeholder="Search.." />
            </div>
        </div>
    </div>
</template>
<script setup>
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3';

let props = defineProps({
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
    }, 500)
);

const form = useForm();
</script>