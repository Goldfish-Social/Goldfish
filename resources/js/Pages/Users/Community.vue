<script setup>
import Pagination from "../Shared/Pagination.vue";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import throttle from "lodash/throttle";
import AppLayout from "@/Layouts/AppLayout.vue";
import UserCard from "../Shared/UserCard.vue";;

let props = defineProps({
  users: Object,
  filters: Object,
  usercount: String,
});

let search = ref(props.filters.search);

watch(
  search,
  throttle(function (value) {
    Inertia.get(
      "/community",
      { search: value },
      {
        preserveState: true,
        replace: true,
      }
    );
  }, 500)
);
</script>
<template>
  <AppLayout title="Community">
    <template #header>
      Community ({{ usercount }} users)
    </template>

    <section class="bg-gray-900 min-h-screen pb-4">
      <div class="px-4 mx-auto max-w-screen-sm">

        <input v-model="search" type="text" class="input input-bordered input-info w-full mt-4"
          placeholder="Search.." />

        <div v-for="user in users.data" :key="user.id" class="card bg-gray-800 mt-5 shadow-xl">
          <UserCard :profile="user" />
        </div>

      </div>
      <Pagination :links="users.links" />
    </section>

  </AppLayout>
</template>