<template>
  <div>
    <InertiaLink
      v-if="post.isliked === false"
      preserveScroll
      method="post"
      as="button"
      type="button"
      class="btn btn-primary"
      :href="route('like', { id: post.id })"
    >
      Like
    </InertiaLink>

    <InertiaLink
      v-if="post.isliked === true"
      preserveScroll
      method="post"
      as="button"
      type="button"
      class="btn btn-secondary"
      :href="route('like', { id: post.id })"
    >
      Unlike
    </InertiaLink>
  </div>
</template>
<script setup>
let props = defineProps({
  post: Object,
});

</script>
