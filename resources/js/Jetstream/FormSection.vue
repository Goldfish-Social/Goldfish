<script setup>
import { computed, useSlots } from 'vue';
import JetSectionTitle from './SectionTitle.vue';

defineEmits(['submitted']);

const hasActions = computed(() => !! useSlots().actions);
</script>

<template>
    <div class="grid grid-cols-1 md:gap-6 px-4">
        <JetSectionTitle>
            <template #title>
                <slot name="title" />
            </template>
            <template #description>
                <slot name="description" />
            </template>
        </JetSectionTitle>

        <div class="mt-5 md:mt-0 md:col-span-1">
            <form @submit.prevent="$emit('submitted')">
                <div
                    class="px-4 py-5 dark:bg-gray-800 bg-white text-gray-900 dark:text-white sm:p-6"
                    :class="hasActions ? 'rounded-md' : 'rounded-md'"
                >
                    <div class="grid grid-cols-6 gap-6">
                        <slot name="form" />
                    </div>
                </div>

                <div v-if="hasActions" class="flex items-center justify-end px-4 py-3 dark:bg-gray-800 bg-white text-gray-900 dark:text-white text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <slot name="actions" />
                </div>
            </form>
        </div>
    </div>
</template>
