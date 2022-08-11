<script setup>
import Pagination from "../Shared/Pagination.vue";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";
import throttle from "lodash/throttle";
import AppLayout from "@/Layouts/AppLayout.vue";

let props = defineProps({
  users: Object,
  filters: Object,
  usercount:  String,
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


        <section class="bg-gray-900 min-h-screen">
            <div class="px-4 mx-auto max-w-screen-sm">

              <input
                v-model="search"
                type="text"
                class="input input-bordered input-info w-full mt-4"
                placeholder="Search.."
              />

              <div
              v-for="user in users.data" :key="user.id"
              class="card bg-gray-800 mb-4 mt-5 shadow-xl">
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
                    <InertiaLink
                            v-if="$page.props.auth.user !== null && user.isFollowing === false && user.followbutton === false"
                            preserveScroll
                            method="post" as="button" type="button"
                            class="btn btn-primary gap-2" 
                            :href="route('follow', { id: user.username })"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                            Follow
                        </InertiaLink>

                        <InertiaLink
                            v-if="$page.props.auth.user !== null && user.isFollowing === true && user.followbutton === false"
                            preserveScroll
                            method="post" as="button" type="button"
                            class="btn btn-secondary gap-2" 
                            :href="route('follow', { id: user.username })"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                            Unfollow
                        </InertiaLink>
                  </div>
                </div>
              </div>

            </div>
            <Pagination :links="users.links" />
        </section>

  </AppLayout>
</template>