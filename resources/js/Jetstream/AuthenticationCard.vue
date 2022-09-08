<template>
    <div
        class="flex flex-col justify-center items-center py-10 pt-4 bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-900">
        <div>
            <slot name="logo" />
        </div>
        <div class="py-4">
            <div
                class="w-full mt-4 px-6 py-4 bg-white dark:bg-gray-800 dark:text-white text-gray-900 overflow-hidden rounded-lg">
                <slot />
            </div>
        </div>

    </div>
</template>
