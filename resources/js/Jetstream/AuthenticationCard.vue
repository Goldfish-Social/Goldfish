<template>
    <div class="flex flex-col sm:justify-center items-center py-10 sm:pt-4 bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-900">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-4 px-6 py-4 bg-white dark:bg-gray-900 dark:text-white text-gray-900 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
