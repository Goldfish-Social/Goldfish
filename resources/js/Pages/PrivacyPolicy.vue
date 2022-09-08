<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    policy: String,
});
</script>
    
<template>
    <AppLayout title="Privacy Policy">

        <div class="text-black dark:text-white">
            <div class="py-4 bg-base-100 dark:bg-gray-900 ">
                <div class="min-h-screen flex flex-col items-center pt-6">

                    <div class="w-full sm:max-w-2xl mt-6 p-6 bg-base-200 dark:bg-gray-800 dark:text-white overflow-hidden sm:rounded-lg prose"
                        v-html="policy" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
    