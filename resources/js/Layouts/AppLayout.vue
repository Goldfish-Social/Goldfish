<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import MobileNav from "../Pages/Shared/MobileNav.vue";
import FlashMessage from "../Pages/Shared/FlashMessage.vue";
import Compose from "../Pages/Shared/Compose.vue";
import Search from "../Pages/Shared/Search.vue";
import PublicSearch from "../Pages/Shared/PublicSearch.vue";

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
      <nav
        class="navbar sticky top-0 z-50 bg-white dark:bg-gray-900 border-gray-200 px-4 lg:px-6 py-2.5 dark:border-b-[1px] dark:border-gray-800">
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
              <li tabindex="0">
                <a class="justify-between">
                  More
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6" />
                  </svg>
                </a>
                <ul class="p-2 bg-base-100 dark:bg-gray-900 dark:text-white">
                  <li>
                    <JetNavLink :href="route('about')" :active="route().current('about')">
                      About
                    </JetNavLink>
                  </li>
                  <li>
                    <JetNavLink href="/terms-of-service" :active="$page.url === '/terms-of-service'">
                      Terms of Service
                    </JetNavLink>
                  </li>
                  <li>
                    <JetNavLink href="/privacy-policy" :active="$page.url === '/privacy-policy'">
                      Privacy Policy
                    </JetNavLink>
                  </li>
                </ul>
              </li>
            </ul>
            <ul v-else tabindex="0" class="
                menu menu-compact
                dropdown-content
                mt-3
                p-2
                shadow
                bg-white
                text-gray-900
                dark:bg-gray-900
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
              <li tabindex="0">
                <a class="justify-between">
                  More
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6" />
                  </svg>
                </a>
                <ul class="p-2 bg-base-100 dark:bg-gray-900 dark:text-white">
                  <li>
                    <JetNavLink :href="route('about')" :active="route().current('about')">
                      About
                    </JetNavLink>
                  </li>
                  <li>
                    <JetNavLink href="/terms-of-service" :active="$page.url === '/terms-of-service'">
                      Terms of Service
                    </JetNavLink>
                  </li>
                  <li>
                    <JetNavLink href="/privacy-policy" :active="$page.url === '/privacy-policy'">
                      Privacy Policy
                    </JetNavLink>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <Search v-if="$page.props.auth.user !== null" :filters="$page.props.filters" />

        </div>

        <div class="navbar-center">
          <Link :href="route('landing')" class="btn btn-ghost text-primary dark:text-white normal-case text-xl">{{
          $page.props.appName
          }}
          </Link>
        </div>

        <div v-if="$page.props.auth.user === null" class="navbar-end">
          <PublicSearch :filters="$page.props.filters" />

          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn m-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                <circle cx="12" cy="10" r="3" />
                <circle cx="12" cy="12" r="10" />
              </svg>
            </label>
            <ul tabindex="0"
              class="dropdown-content menu p-2 shadow bg-white rounded-box w-52 dark:bg-gray-900 dark:text-white">
              <li>
                <Link href="/login" :class="{ 'btn-active text-white': $page.url === '/login' }">
                Login
                </Link>
              </li>
              <li>
                <Link href="/register" :class="{ 'btn-active text-white': $page.url === '/register' }">
                Register
                </Link>
              </li>
            </ul>
          </div>
        </div>

        <div v-else class="navbar-end">
          <InertiaLink :href="route('notifications')" class="btn btn-ghost btn-circle">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#dc2626">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
              <span class="badge badge-xs badge-success indicator-item">
                {{ $page.props.unreadNotificationsCount }}
              </span>
            </div>
          </InertiaLink>

          <Compose />

          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 mask mask-hexagon">
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
                dark:bg-gray-900
                dark:text-white
                rounded-box
                w-52
              ">
              <li>
                <InertiaLink v-if="$page.props.can.admin" class="justify-between" href="/admin/users"
                  :class="{ 'btn-active text-white btn-primary': $page.url === '/admin/users' }">
                  Users
                  <span class="badge">ADMIN</span>
                </InertiaLink>
              </li>
              <li>
                <InertiaLink v-if="$page.props.can.admin" class="justify-between" href="/admin/posts"
                  :class="{ 'btn-active text-white btn-primary': $page.url === '/admin/posts' }">
                  Posts
                  <span class="badge">ADMIN</span>
                </InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('user-profile', { id: $page.props.user.username })"
                  :class="{ 'btn-active text-white btn-primary': $page.url === '`/@${$page.props.user.username}`' }">
                  Profile
                </InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('profile.show')"
                  :class="{ 'btn-active text-white btn-primary': $page.url === '/user/profile' }">
                  Settings
                </InertiaLink>
              </li>
              <li>
                <JetNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')"
                  :class="{ 'btn-active text-white btn-primary': $page.url === '/user/api-tokens' }">
                  API Tokens
                </JetNavLink>
              </li>
              <div class="border-t border-gray-700" />
              <li>
                <InertiaLink href="/logout" method="post" type="button" as="button">
                  Log Out
                </InertiaLink>
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
          dark:bg-gray-800
          bg-gray-200
          shadow
        ">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h3 class="text-2xl font-extrabold"><span
              class="text-transparent bg-clip-text bg-gradient-to-r to-red-500 from-red-800">
              <slot name="header" />
            </span>
          </h3>
        </div>
      </header>

      <!-- Page Content -->
      <main class="dark:bg-gray-900 bg-gray-100">
        <slot />
      </main>

    </div>

    <MobileNav class="pt-10 z-10" v-if="$page.props.auth.user !== null" />

  </div>

</template>
