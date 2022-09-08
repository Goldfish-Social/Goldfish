<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import Nav from './Nav.vue';


let props = defineProps({
    users: Object,
});

const form = useForm();
function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        form.delete(route('admin.user.destroy', id));
    }
};
</script>
<template>
    <AppLayout title="Admin - Users">
       
        <Nav />

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 lg:px-8">
                <div class="overflow-hidden">

                    <!-- <Empty v-if="links.meta.total === 0" class="columns-1 mt-20" /> -->

                    <div class="columns-1 md:columns-1 lg:columns-1">
                        <div class="overflow-x-auto">
                            <table class="table w-full">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr v-for="profile in users" :key="profile.id">
                                        <td>{{ profile.name }}</td>
                                        <td>@{{ profile.username }}</td>
                                        <td>
                                            <button @click="destroy(profile.id)" class="btn btn-ghost btn-sm"
                                                method="post" type="submit">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- <PostCard class="mb-4" v-for="post in posts.data" :key="post.id" :post="post" /> -->
                    </div>

                    <!-- <div class="columns-1 md:columns-1 lg:columns-1 mt-6">
                                <SimplePagination v-if="users.meta.total >= 21" :data="users.links" />
                            </div> -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
                