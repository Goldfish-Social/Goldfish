<template>
    <div>
        <div class="dropdown dropdown-down">
            <label tabindex="0" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#b91c1c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </label>
            <div tabindex="0" class="dropdown-content card card-compact w-64 p-2 shadow bg-gray-900 text-white">
                <div class="card-body">
                    <h3 class="card-title">Search Posts</h3>
                    <input v-model="search" type="text"
                        class="input input-bordered input-info w-full bg:white text-gray-900 dark:bg-gray-800 dark:text-white"
                        placeholder="Search.." />
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import throttle from "lodash/throttle";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    filters: Object,
})

let search = ref(props.filters.search)

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
)
</script>
