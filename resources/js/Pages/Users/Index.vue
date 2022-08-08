<script setup>
import Pagination from "../Shared/Pagination.vue";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import throttle from "lodash/throttle";
import AppLayout from "@/Layouts/AppLayout.vue";

let props = defineProps({
  users: Object,
  filters: Object,
});

let search = ref(props.filters.search);

watch(
  search,
  throttle(function (value) {
    Inertia.get(
      "/users",
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
        Community
      </template>


        <section class="bg-gray-100 py-4 dark:bg-gray-900 min-h-screen">
            <div class="px-4 mx-auto max-w-screen-sm">

              <input
                v-model="search"
                type="text"
                class="input input-bordered input-info w-full"
                placeholder="Search.."
              />

              <div
              v-for="user in users.data" :key="user.id"
              class="card bg-base-100 mb-4 mt-5 shadow-xl">
                <div class="card-body">
                  <h2 class="card-title">
                    <div class="avatar">
                        <div class="w-12 rounded-full">
                            <img :src="user.avatar" />
                        </div>
                      </div>
                      <div class="ml-3">
                        <InertiaLink :href="route('user-profile', { id: user.username })">
                          {{ user.username }}
                        </InertiaLink>
                      </div>
                  </h2>
                  <p>{{ user.about }}</p>
                  <div class="card-actions justify-end">
                    <InertiaLink :href="route('user-profile', { id: user.username })" class="btn btn-primary">Follow</InertiaLink>
                  </div>
                </div>
              </div>
            </div>
            <Pagination :links="users.links" />
        </section>

  </AppLayout>
</template>