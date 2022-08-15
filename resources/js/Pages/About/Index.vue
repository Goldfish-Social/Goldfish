<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <AppLayout title="About Goldfish">

        <div class="hero min-h-screen dark:bg-gray-800 bg-gray-100 text-gray-900 dark:text-white">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Goldfish!</h1>
                    <p class="py-6">Hello and welcome on the brand new Goldfish Social project.</p>
                </div>
            </div>
        </div>

        <div class="text-gray-100">
            <div class="pt-4 pb-6  dark:bg-gray-900 bg-gray-100 text-gray-900 dark:text-white">
                <div class="flex flex-col items-center pt-6 sm:pt-0">

                    <div class="w-full sm:max-w-2xl mt-6 p-6 dark:bg-gray-800 bg-gray-200 text-gray-900 dark:text-white shadow-md overflow-hidden sm:rounded-lg prose">
                    <h1>Goldfish Social</h1>
                        <p>
                            Meow there! Welcome to the Goldfish Social repo, this project is intended
                            as a free open source alternative to (former) Vine and (currently) TikTok.
                            The project has just started and is in very early stages. We started out
                            with something different but after some great advice restarted the project
                            in SPA form(Single Page Application). We are using the following stacks:
                        </p>
                        <ul>
                            <li>
                                <a href="https://laravel.com/" rel="nofollow">Laravel 9.x</a>
                                .
                            </li>
                            <li>
                                <a href="https://vuejs.org/" rel="nofollow">Vue JS 3.x</a>
                                .
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" rel="nofollow">Tailwind CSS 2.x</a>
                                .
                            </li>
                            <li>
                                <a href="https://inertiajs.com/" rel="nofollow">Inertia.js</a>
                                .
                            </li>
                        </ul>
                        <p>
                            If you want to test out this software for yourself, do checkout our little
                            <a href="https://github.com/Goldfish-Social/Goldfish/blob/main/docs/install.md">
                                documentation
                            </a>
                            
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
