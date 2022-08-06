<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationMark from "@/Jetstream/ApplicationMark.vue";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink.vue";
import Mobile from '../Pages/Shared/Mobile.vue';

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
  Inertia.put(
    route("current-team.update"),
    {
      team_id: team.id,
    },
    {
      preserveState: false,
    }
  );
};

const logout = () => {
  Inertia.post(route("logout"));
};
</script>

<template>
  <div>
    <Head :title="title" />

    <JetBanner />

    <div class="min-h-screen bg-gray-700">
      <nav class="navbar sticky top-0 z-50 bg-base-100 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="navbar-start">
          <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h7"
                />
              </svg>
            </label>
            <ul
              tabindex="0"
              class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-base-100
                rounded-box
                w-52
              "
            >
              <li>
                <JetNavLink
                  :href="route('home')"
                  :active="route().current('home')"
                >
                  Home
                </JetNavLink>
              </li>
              <li>
                <JetNavLink
                  :href="route('dashboard')"
                  :active="route().current('dashboard')"
                >
                  Dashboard
                </JetNavLink>
              </li>
              <li>
                <JetNavLink
                  :href="route('users')"
                  :active="route().current('users')"
                >
                  Community
                </JetNavLink>
              </li>
            </ul>
          </div>
        </div>

        <div class="navbar-center">
          <Link :href="route('home')" class="btn btn-ghost normal-case text-xl">{{$page.props.appName}}</Link>
        </div>

        <div class="navbar-end">


          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img
                  :src="$page.props.user.profile_photo_url"
                  :alt="$page.props.user.name"
                />
              </div>
            </label>
            <ul
              tabindex="0"
              class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-base-100
                rounded-box
                w-52
              "
            >
              <li>
                <JetNavLink :href="route('profile.show')">
                  Profile
                </JetNavLink>
              </li>
              <li>
                <JetNavLink
                  v-if="$page.props.jetstream.hasApiFeatures"
                  :href="route('api-tokens.index')"
                >
                  API Tokens
                </JetNavLink>
              </li>
              <div class="border-t border-gray-700" />
              <li>
                <!-- Authentication -->
                <form @submit.prevent="logout">
                  <JetDropdownLink as="button"> Log Out </JetDropdownLink>
                </form>
              </li>
            </ul>
          </div>
        </div>


      </nav>

      <!-- Page Heading -->
      <header
        v-if="$slots.header"
        class="
    
          border-gray-200
          px-4
          lg:px-6
          py-2.5
          bg-gray-800
          dark:bg-gray-800
          shadow
        "
      >
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h3 class="font-semibold text-xl text-white leading-tight">
            <slot name="header" />
          </h3>
        </div>
      </header>

      <!-- Page Content -->
      <main class="dark:bg-gray-900 bg-gray-900">
        <slot />
      </main>
    </div>

    <div class="btm-nav visible md:invisible">
        <Mobile 
            :href="route('home')"
            :active="route().current('home')"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
        </Mobile>
        <Mobile 
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </Mobile>
        <Mobile 
            :href="route('users')"
            :active="route().current('users')"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
        </Mobile>
    </div>

  </div>
</template>
