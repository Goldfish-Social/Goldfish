<template>
    <div>
        <!-- Put this part before </body> tag -->
        <form @submit.prevent="submit">
             
            <h3 class="font-bold text-lg">Upload Content</h3>
            <div class="py-4">
                <div class="form-control py-2">
                    <label
                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-900 hover:border-gray-400">
                    <div class="flex flex-col items-center justify-center pt-7">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Attach a file</p>
                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                            </progress>
                    </div>
                    <input type="file" @input="form.files = $event.target.files[0]" name="files" id="files" class="opacity-0" />
                </label>
                <div
                    v-if="form.errors.files"
                    v-text="form.errors.files"
                    class="text-red-500 mt-1"
                ></div>
                </div>
                <div class="form-control py-2">
                    <input name="title" v-model="form.title" id="title" type="text" placeholder="Enter a title" class="input input-bordered input-primary w-full" />
                    <div
                    v-if="form.errors.title"
                    v-text="form.errors.title"
                    class="text-red-500 mt-1"
                ></div>
                </div>
                <div class="form-control py-2">
                    <textarea v-model="form.description" id="description" name="description" class="textarea textarea-primary" placeholder="Write a description"></textarea>
                <div
                    v-if="form.errors.description"
                    v-text="form.errors.description"
                    class="text-red-500 mt-1"
                ></div>
                </div>
            </div>
            <div class="modal-action">
            <button
            type="submit"
            :disabled="form.processing"
            class="btn"
            >
            <span class="font-bold text-sm">Submit</span>
          </button>
            </div>
        </form>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
  description: "",
  files: "",
  title: "",
});

let submit = () => {
  form.post("/home", {
    forceFormData: true,
    onSuccess: () => form.reset("title", "description", "files"),
  });
};
</script>
