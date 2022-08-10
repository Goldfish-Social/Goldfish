<template>
  <div>
    <InertiaLink
      v-if="
        profile.isFollowing === false &&
        profile.followbutton === false
      "
      preserveScroll
      method="post"
      as="button"
      type="button"
      class="btn btn-primary gap-2"
      :href="route('follow', { id: profile.username })"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
        <circle cx="8.5" cy="7" r="4"></circle>
        <line x1="20" y1="8" x2="20" y2="14"></line>
        <line x1="23" y1="11" x2="17" y2="11"></line>
      </svg>
      Follow
    </InertiaLink>

    <InertiaLink
      v-if="
        profile.isFollowing === true &&
        profile.followbutton === false
      "
      preserveScroll
      method="post"
      as="button"
      type="button"
      class="btn btn-secondary gap-2"
      :href="route('follow', { id: profile.username })"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
        <circle cx="8.5" cy="7" r="4"></circle>
        <line x1="23" y1="11" x2="17" y2="11"></line>
      </svg>
      Unfollow
    </InertiaLink>
  </div>
</template>
<script setup>
import { InertiaLink } from '@inertiajs/inertia-vue3';

let props = defineProps({
  profile: Object,
});

</script>
