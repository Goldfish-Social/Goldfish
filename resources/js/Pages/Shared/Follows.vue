<template>
    <div> 
        <!-- The button to open modal -->
        <label for="FollowersModal" class="btn btn-sm btn-outline btn-primary">{{ profile.followcount }} Follows</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="FollowersModal" class="modal-toggle" />
        <div class="modal">
        <div class="modal-box relative bg-base-100 dark:bg-gray-800 text-gray-900 dark:text-white">
            <label for="FollowersModal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold">{{ profile.username }}'s Follows</h3>
            
            <div class="overflow-x-auto w-full mt-3">
                <table class="table w-full">
                    <tbody>

                    <!-- row 1 -->
                    <tr>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img :src="profile.pic" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold text-white dark:text-gray-900">@username</div>
                            </div>
                        </div>
                        </td>
                        <th>
                        <button class="btn btn-primary btn-md">Follow</button>
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