<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import Mobile from '../Pages/Shared/Mobile.vue';
import MobileNav from "../Pages/Shared/MobileNav.vue";
import FlashMessage from "../Pages/Shared/FlashMessage.vue";

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

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      <nav class="navbar sticky top-0 z-50 bg-white dark:bg-gray-900 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="navbar-start">
          <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#dc2626">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </label>
            <ul v-if="$page.props.auth.user === null" tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow text-gray-800 bg-white dark:bg-gray-900
                dark:text-white rounded-box w-40">

              <li>
                <JetNavLink :href="route('login')" :active="route().current('login')">
                  Login
                </JetNavLink>
              </li>

              <li>
                <JetNavLink :href="route('about')" :active="route().current('about')">
                  About
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('privacy')" :active="route().current('privacy')">
                  Privacy Policy
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('terms')" :active="route().current('terms')">
                  Terms of Use
                </JetNavLink>
              </li>
            </ul>
            <ul v-else tabindex="0" class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-gray-100
                text-gray-900
                dark:bg-gray-800
                dark:text-white
                rounded-box
                w-40
              ">
              <li>
                <JetNavLink :href="route('home')" :active="route().current('home')">
                  Home
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('public-timeline')" :active="route().current('public-timeline')">
                  Public
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('community')" :active="route().current('community')">
                  Community
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('about')" :active="route().current('about')">
                  About
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('privacy')" :active="route().current('privacy')">
                  Privacy Policy
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('terms')" :active="route().current('terms')">
                  Terms of Use
                </JetNavLink>
              </li>
            </ul>
          </div>
        </div>

        <div class="navbar-center">
          <Link :href="route('landing')" class="btn btn-ghost text-primary dark:text-white normal-case text-xl">{{
              $page.props.appName
          }}
          </Link>
        </div>

        <div v-if="$page.props.auth.user === null" class="navbar-end">
          <Link :href="route('register')" class="btn btn-primary">Register</Link>
        </div>

        <div v-else class="navbar-end">

          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
              </div>
            </label>
            <ul tabindex="0" class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-gray-100
                text-gray-900
                dark:bg-gray-800
                dark:text-white
                rounded-box
                w-36
              ">
              <li>
                <JetNavLink :href="route('user-profile', { id: $page.props.user.username })">
                  Profile
                </JetNavLink>
              </li>
              <li>
                <JetNavLink :href="route('profile.show')">
                  Settings
                </JetNavLink>
              </li>
              <li>
                <JetNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                  API Tokens
                </JetNavLink>
              </li>
              <div class="border-t border-gray-700" />
              <li>
                <!-- Authentication -->
                <form @submit.prevent="logout">
                  <JetDropdownLink as="button">
                    Log Out
                  </JetDropdownLink>
                </form>
              </li>
            </ul>
          </div>
        </div>

      </nav>

      <FlashMessage />

      <!-- Page Heading -->
      <header v-if="$slots.header" class="
          border-gray-200
          px-4
          lg:px-6
          py-2.5
          dark:bg-gray-700
          bg-gray-200
          shadow
        ">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h3 class="font-semibold text-xl text-gray-900 dark:text-white leading-tight">
            <slot name="header" />
          </h3>
        </div>
      </header>

      <!-- Page Content -->
      <main class="dark:bg-gray-900 bg-gray-100">
        <slot />
      </main>

    </div>

    <!--<MobileNav class="pt-10" v-if="$page.props.auth.user !== null" />-->

  </div>

</template>
