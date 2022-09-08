<template>
    <div class="py-12 max-w-lg mx-auto px-4 lg:px-8">
        <div>
            <ul class="menu menu-horizontal bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-box">
                <li>
                    <InertiaLink>
                        Dashboard
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink :href="route('admin.users')">
                        Users
                    </InertiaLink>
                </li>
                <li>
                    <InertiaLink :href="route('admin.posts')">
                        Posts
                    </InertiaLink>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {

}
</script>