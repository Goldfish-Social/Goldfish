<template>
    <div class="flex flex-col sm:justify-center items-center pt-8 sm:pt-4 dark:bg-gray-800">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-4 px-6 py-4 bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
