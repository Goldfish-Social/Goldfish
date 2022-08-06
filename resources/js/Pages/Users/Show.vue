<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';

let props = defineProps({
  user: Object,
});

</script>

<template>
    <AppLayout title="Home">
        <template #header>
            {{ user.name }} Profile
        </template>


        <section class="bg-gray-900 dark:bg-gray-900 min-h-screen">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
         
                    <div class="card bg-base-100 shadow-xl">
                    <figure>
                        <img :src="user.avatar" alt="" />
                        </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            <InertiaLink :href="route('user-profile', { id: post.username })">
                                <div class="avatar">
                                    <div class="w-12 rounded-full">
                                        <img :src="user.avatar" />
                                    </div>
                                </div>
                            </InertiaLink>
                            <div class="ml-3">
                                <InertiaLink :href="route('user-profile', { id: post.username })">
                                    {{ post.username }}
                                </InertiaLink>
                            </div>
                        </h2>
                        <p>{{ user.about }}</p>
                       <div class="card-actions justify-end">
                            <button class="btn btn-primary">Follow</button>
                        </div>
                    </div>   
                </div>
            </div>

            </div>
        </section>



    </AppLayout>
</template>
