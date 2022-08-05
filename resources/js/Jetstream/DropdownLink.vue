<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    href: String,
    as: String,
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" type="submit">
            <slot />
        </button>

        <a v-else-if="as =='a'" :href="href">
            <slot />
        </a>

        <Link v-else :href="href">
            <slot />
        </Link>
    </div>
</template>
