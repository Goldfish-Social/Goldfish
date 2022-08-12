<template>
    <div>
        <!-- Put this part before </body> tag -->
        <form @submit.prevent="submit">
             
            <h3 class="font-bold text-lg dark:text-white">Write a reply {{$page.props.user.name}}</h3>
            <div class="py-4">
                
                <div class="form-control py-2">
                    <textarea v-model="form.reply" id="reply" name="reply" class="textarea textarea-primary" placeholder="Write a reply (max 500 characters)"></textarea>
                <p class="mt-2 text-sm text-gray-100">{{ characterCount }}/500</p>
                <div
                    v-if="form.errors.reply"
                    v-text="form.errors.reply"
                    class="text-red-500 mt-1"
                ></div>
                </div>

            </div>
            
            <div class="modal-action mt-2">
            <button
            type="submit"
            :disabled="form.processing"
            class="btn btn-success gap-2"
            >
            Reply
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
          </button>
            </div>
        </form>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { computed } from 'vue';



const characterCount = computed(()=>{
    return form.reply.length
})

let form = useForm({
  reply: "",
  post_id: "",
});

let submit = () => {
  form.post(route('reply', { id: post.id }), {
    forceFormData: true,
    onSuccess: () => form.reset("reply"),
  });
};
</script>
