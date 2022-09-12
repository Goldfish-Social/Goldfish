<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    terms: String,
});
</script>
    
<template>
    <AppLayout title="Terms of Service">

        <div class="text-black dark:text-white">
            <div class="pb-4 py-4 bg-gray-100 dark:bg-gray-900 ">
                <div class="min-h-screen flex flex-col items-center pt-6">

                    <div class="w-full sm:max-w-2xl p-6 bg-white dark:bg-gray-800 dark:text-white overflow-hidden sm:rounded-lg prose"
                        v-html="terms" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
    