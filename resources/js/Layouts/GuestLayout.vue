<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import JetBanner from '@/Jetstream/Banner.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

</script>

<template>
    <div>
        <Head :title="title" />

        <JetBanner />

    <div class="min-h-screen bg-gray-800">
        <div class="navbar sticky top-0 z-50 bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <JetNavLink :href="route('landing')" :active="route().current('landing')">
                                    Home
                        </JetNavLink>
                    </li>
                    <li>
                        <JetNavLink :href="route('login')" :active="route().current('login')">
                                    Login
                        </JetNavLink>
                    </li>
                    <li>
                        <JetNavLink :href="route('register')" :active="route().current('register')">
                                    Register
                        </JetNavLink>
                    </li>
                </ul>
                </div>
               
            </div>

            <div class="navbar-center">
                <Link :href="route('landing')" class="btn btn-ghost normal-case text-xl">{{$page.props.appName}}</Link>
            </div>
           

            <div class="navbar-end">
                <Link :href="route('register')" class="btn">Register</Link>
            </div>
            </div>


            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-gray-100 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-700 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h3 class="font-semibold text-xl dark:text-white text-base-900 leading-tight">
                        <slot name="header" />
                    </h3>
                </div>
            </header>

            <!-- Page Content -->
            <main class="dark:bg-gray-800 bg-gray-100">
                <slot />
            </main>
        </div>
    </div>
</template>
