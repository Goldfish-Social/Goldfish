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
import MobileNav from "../Pages/Shared/MobileNav.vue";

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

    <div class="min-h-screen bg-white dark:bg-gray-700">
      <nav class="navbar sticky top-0 z-50 bg-base-100 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-900">
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
                v-if="$page.props.auth.user === null"
                tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
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
                        <li>
                          <JetNavLink
                            :href="route('community')"
                            :active="route().current('community')"
                          >
                            Community
                          </JetNavLink>
                        </li>
                    </ul>
            <ul
              v-else
              tabindex="0"
              class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-base-100
                dark:bg-white
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
                  :href="route('public-timeline')"
                  :active="route().current('public-timeline')"
                >
                  Public
                </JetNavLink>
              </li>
              <li>
                <JetNavLink
                  :href="route('community')"
                  :active="route().current('community')"
                >
                  Community
                </JetNavLink>
              </li>
            </ul>
          </div>
        </div>

        <div class="navbar-center">
          <Link :href="route('landing')" class="btn btn-ghost text-gray-900 dark:text-white normal-case text-xl">{{$page.props.appName}}</Link>
        </div>

        <div 
        v-if="$page.props.auth.user === null"
        class="navbar-end"
        >
                <Link :href="route('register')" class="btn btn-outline btn-secondary">Register</Link>
          </div>

        <div 
        v-else
        class="navbar-end"
        >

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
          bg-gray-100
          dark:bg-gray-800
          shadow
        "
      >
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h3 class="font-semibold text-xl dark:text-white text-base-900 leading-tight">
            <slot name="header" />
          </h3>
        </div>
      </header>

      <!-- Page Content -->
      <main class="dark:bg-gray-900 bg-white">
        <slot />
      </main>
    </div>

  </div>
  <!-- <MobileNav /> -->
</template>
