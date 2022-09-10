<template>
    <div>
        <button type="button" @click="openModal" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="#b91c1c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 8l-5-5-5 5M12 4.2v10.3" />
            </svg>
        </button>

        <TransitionRoot appear :show="isOpen" as="template">
            <Dialog as="div" @close="closeModal" class="relative z-10">
                <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0"
                    enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-black bg-opacity-25" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-y-auto">
                    <div class="flex min-h-full items-center justify-center p-4 text-center">
                        <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0 scale-95"
                            enter-to="opacity-100 scale-100" leave="duration-200 ease-in"
                            leave-from="opacity-100 scale-100" leave-to="opacity-0 scale-95">
                            <DialogPanel
                                class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white dark:bg-gray-800 p-6 text-left align-middle shadow-xl transition-all">
                                <DialogTitle as="h3"
                                    class="text-lg font-medium leading-6 text-gray-900 dark:text-white pb-2">
                                    Upload a short
                                </DialogTitle>
                                <form @submit.prevent="submit">
                                    <div class="form-control py-2">
                                        <label
                                            class="flex flex-col w-full h-32 border-4 border-primary border-dashed dark:hover:bg-gray-800 hover:bg-gray-300 hover:border-secondary">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-8 h-8 text-gray-400 group-hover:text-gray-400" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                </svg>
                                                <p
                                                    class="pt-1 text-sm tracking-wider text-gray-400 dark:group-hover:text-gray-900 group-hover:text-gray-300">
                                                    Upload a video(max 10MB)</p>
                                                <progress v-if="form.progress"
                                                    class="progress progress-success w-56 m-1"
                                                    :value="form.progress.percentage" max="100">
                                                    {{ form.progress.percentage }}%
                                                </progress>
                                            </div>
                                            <input type="file" @input="form.video = $event.target.files[0]" name="video"
                                                id="video" class="opacity-0" />
                                        </label>
                                        <div v-if="form.errors.video" v-text="form.errors.video"
                                            class="text-red-500 mt-1"></div>
                                    </div>
                                    <div class="form-control py-2">
                                        <textarea v-model="form.description" id="description" name="description"
                                            class="textarea textarea-primary bg-white text-gray-900 dark:bg-gray-900 dark:text-white"
                                            placeholder="Write a description (max 500 characters)"></textarea>
                                        <p class="mt-2 text-sm text-gray-900 dark:text-white">{{ characterCount }}/500</p>
                                        <div v-if="form.errors.description" v-text="form.errors.description"
                                            class="text-red-500 mt-1">
                                        </div>
                                    </div>
                                    <div v-if="form.errors.status" v-text="form.errors.status"
                                        class="text-red-500 mt-1"></div>

                                    <div class="modal-action mt-2">
                                        <div class="justify-start">
                                            <div class="form-control">
                                                <label class="label cursor-pointer mt-1">
                                                    <span class="label-text dark:text-white mr-2">NSFW?</span>
                                                    <input v-model="form.nsfw" type="checkbox" name="nsfw" id="nsfw"
                                                        class="checkbox" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="justify-start">
                                            <select v-model="form.status" name="status" id="status"
                                                class="select select-bordered w-full max-w-xs">
                                                <option disabled value="">Status</option>
                                                <option value="public" selected>Public</option>
                                                <option value="unlisted">Unlisted</option>
                                                <option value="private">Private</option>
                                            </select>
                                        </div>

                                        <button type="submit" :disabled="form.processing" class="btn btn-success gap-2">
                                            Publish
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                </form>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
    </div>
</template>
<script setup>
import { ref } from 'vue'
import { useForm } from "@inertiajs/inertia-vue3";
import { computed } from 'vue';
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
} from '@headlessui/vue'

const characterCount = computed(() => {
    return form.description.length
})

let form = useForm({
    description: "",
    video: "",
    nsfw: "",
    status: "public",
})

let submit = () => {
    form.post("/home", {
        forceFormData: true,
        onSuccess: () => [
            form.reset("description", "video", "nsfw"),
            isOpen.value = false
        ],
    });
}

const isOpen = ref(false)

function closeModal() {
    isOpen.value = false
}
function openModal() {
    isOpen.value = true
}
</script>
