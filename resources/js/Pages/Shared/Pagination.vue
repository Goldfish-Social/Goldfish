<template>
  <div v-if="links.length > 3">
    <div class="flex justify-center pb-8">
      <template class="btn-group" v-for="(link) in links">
        <div v-if="link.url === null" class="btn btn-outline btn-primary" v-html="link.label" />
        <inertia-link v-else class="btn btn-outline btn-primary" :class="{ 'bg-base-200 dark:bg-gray-700': link.active }" :href="link.url" v-html="link.label" />
      </template>
    </div>
  </div>
</template>

<script>
import {InertiaLink} from "@inertiajs/inertia-vue3";

export default {
  props: {
    links: Array,
  },
  components : {
    InertiaLink
  }
}
</script>
