<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import SimplePagination from '../Shared/SimplePagination.vue';
import Empty from '../Shared/Empty.vue';
import Nav from './Nav.vue';

let props = defineProps({
    posts: Object,
});

const form = useForm();
function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        form.delete(route('admin.post.destroy', id));
    }
};
</script>
<template>
    <AppLayout title="Admin - Users">

        <Nav />

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 lg:px-8">
                <div class="overflow-hidden">

                    <Empty v-if="posts.meta.total === 0" class="columns-1 mt-20" />

                    <div class="columns-1 md:columns-1 lg:columns-1">
                        <div class="overflow-x-auto">
                            <table class="table w-full">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Content</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="post in posts.data" :key="post.id">
                                        <td>
                                            <InertiaLink class="hover:underline"
                                                :href="route('user-profile', { id: post.username })">
                                                {{ post.username }}
                                            </InertiaLink>
                                        </td>
                                        <td>{{ post.description }}</td>
                                        <td>{{ post.time }}</td>
                                        <td>
                                            <InertiaLink :href="route('show-post', { id: post.id })"
                                                class="btn btn-ghost btn-sm">
                                                Show
                                            </InertiaLink>
                                            <button @click="destroy(post.id)" class="btn btn-ghost btn-sm" method="post"
                                                type="submit">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="columns-1 md:columns-1 lg:columns-1 mt-6">
                        <SimplePagination v-if="posts.meta.total >= 21" :data="posts.links" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
            