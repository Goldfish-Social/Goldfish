<template>
    <div>
        <div v-for="reply in post.data.replies" :key="reply.id" class="mx-auto max-w-screen-sm mb-8">
            <div class="card card-compact bg-white text-gray-900 dark:bg-gray-800 dark:text-white shadow">
                <div class="card-body">
                    <h3 class="card-title">
                        <div class="avatar">
                            <div class="w-12 mask mask-hexagon">
                                <InertiaLink :href="route('user-profile', { id: reply.username })">
                                    <img :src="reply.avatar" />
                                </InertiaLink>
                            </div>
                        </div>
                        <div class="ml-2 text-sm">
                            <InertiaLink :href="route('user-profile', { id: reply.username })">
                                {{ reply.username }}
                            </InertiaLink>
                            <div>
                                <div class="badge badge-sm badge-outline">
                                    {{ reply.time }}
                                </div>
                            </div>
                        </div>
                    </h3>
                    <p class="p-5">{{ reply.reply }}</p>
                    <div v-if="reply.delete">
                        <div class="divider"></div>
                        <div class="card-actions justify-end mt-2">
                            <button v-if="reply.delete" @click="destroy(reply.id)" class="btn btn-ghost btn-sm"
                                method="post" type="submit">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let props = defineProps({
    post: Object,
});

let form = useForm({
    reply: "",
});


function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        form.delete(route('reply.destroy', id));
    }
}
</script>