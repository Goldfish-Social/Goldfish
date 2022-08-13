<template>
    <div>
        <!-- The button to open modal -->
        <label for="upload" class="btn modal-button">Upload</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="upload" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
                <label for="upload" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>

                <Post />
               
            </div>
        </div>
    </div>
</template>
<script setup>
import Post from './Post.vue';

</script>
