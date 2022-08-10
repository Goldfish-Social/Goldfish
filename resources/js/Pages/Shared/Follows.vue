<template>
    <div> 
        <!-- The button to open modal -->
        <label for="FollowsModal" class="btn btn-sm btn-outline btn-primary">{{ profile.followcount }} Follows</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="FollowsModal" class="modal-toggle" />
        <div class="modal">
        <div class="modal-box relative bg-base-100 dark:bg-gray-800 text-gray-900 dark:text-white">
            <label for="FollowsModal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold">{{ profile.username }}'s Follows</h3>
            
            <div class="overflow-x-auto w-full mt-3">
                <table class="table w-full">
                    <tbody>
                    <!-- row 1 -->
                    <tr 
                    v-for="follower in profile.follows"
                    :key="follower.id"
                    >
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img :src="follower.avatar" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold text-gray-900">{{ follower.username }}</div>
                            </div>
                        </div>
                        </td>
                        <th>
                         <InertiaLink
                            :href="route('user-profile', { id: follower.id })"
                            class="btn btn-primary btn-md"
                         >
                         Profile
                         </InertiaLink>
                        </th>
                    </tr>
                    </tbody>
                </table>
                </div>

        </div>
        </div>
    </div>
</template>
<script setup>
let props = defineProps({
  profile: Object,
});

</script>