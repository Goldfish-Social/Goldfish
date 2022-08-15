<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="block font-medium text-sm dark:text-white text-gray-900">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
