<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'text-success active'
        : 'text-success';
});
</script>

<template>
    <Link :href="href" as="button" :class="classes">
        <slot />
    </Link>
</template>
