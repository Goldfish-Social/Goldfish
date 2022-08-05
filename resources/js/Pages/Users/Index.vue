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
  <AppLayout title="Users">
    <section class="bg-white dark:bg-gray-900">
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <input
              v-model="search"
              type="text"
              class="w-full"
              placeholder="Search.."
            />
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white dark:bg-gray-900 min-h-screen">
      <div
        class="
          w-full
          max-w-2xl
          mx-auto
          bg-white
          shadow-lg
          rounded-sm
          border border-gray-200
        "
      >
        <header class="px-5 py-4 border-b border-gray-100">
          <h2 class="font-semibold text-gray-800">Customers</h2>
        </header>
        <div class="p-3">
          <div class="overflow-x-auto">
            <table class="table-auto w-full">
              <tbody class="text-sm divide-y divide-gray-100">
                <tr v-for="user in users.data" :key="user.id">
                  <td class="p-2 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="font-medium text-gray-800">
                        {{ user.name }}
                      </div>
                    </div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <div class="text-lg text-center">
                      <a href="/users/${user.id}/edit">Edit</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <Pagination :links="users.links" class="mt-5 px-4" />
    </section>
  </AppLayout>
</template>