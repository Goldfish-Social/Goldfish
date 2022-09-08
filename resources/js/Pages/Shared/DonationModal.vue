<template>
    <button type="button" @click="openModal" class="btn-link gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d0021b"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
            </path>
        </svg>
    </button>

    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" @close="closeModal" class="relative z-50">
            <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0" enter-to="opacity-100"
                leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-black bg-opacity-25" />
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center">
                    <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100" leave="duration-200 ease-in" leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95">
                        <DialogPanel
                            class="w-full max-w-md transform overflow-hidden rounded-lg bg-base-100 text-black dark:bg-gray-900 dark:text-white p-6 text-left align-middle shadow-xl transition-all">
                            <DialogTitle as="h3" class="text-gray-900 flex justify-between">
                                <div
                                    class="flex justify-start text-lg font-medium leading-6 mb-2 text-black dark:text-white">
                                    Donate
                                </div>
                                <div class="flex justify-end text-sm text-black dark:text-white">
                                    Thank you
                                </div>
                            </DialogTitle>

                            <div class="mt-4">
                                Much of my work is free open source software of ad-free web services. I do not make any
                                profit on these services and rely on your kindness to keep the lights on. Please think
                                about making a donation.
                            </div>

                            <div class="mt-4">
                                <ul>
                                    <li>
                                        <a href="https://paypal.me/stuxOS" target="_blank"
                                            class="btn btn-block mt-2">PayPal</a>
                                    </li>
                                    <li>
                                        <a href="https://patreon.com/mstdn" target="_blank"
                                            class="btn btn-block mt-2">Patreon</a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/sponsors/Goldfish-Social" target="_blank"
                                            class="btn btn-block mt-2">GitHub Sponsors</a>
                                    </li>
                                    <li>
                                        <a href="https://ko-fi.com/mstdn" target="_blank"
                                            class="btn btn-block mt-2">Ko-Fi</a>
                                    </li>
                                    <li>
                                        <a href="https://liberapay.com/mstdn" target="_blank"
                                            class="btn btn-block mt-2">LiberaPay</a>
                                    </li>
                                    <li>
                                        <a href="https://opencollective.com/mstdn" target="_blank"
                                            class="btn btn-block mt-2">OpenCollective</a>
                                    </li>
                                    <li>
                                        <a href="https://bunq.me/stuxhost" target="_blank"
                                            class="btn btn-block mt-2">iDEAL / Credit Card</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between">
                                    <div class="flex justify-start text-sm mt-2">
                                        You make this possible
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" class="btn btn-error btn-sm" @click="closeModal">
                                            Close
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ref } from 'vue'
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
} from '@headlessui/vue'


const isOpen = ref(false);

function closeModal() {
    isOpen.value = false
}
function openModal() {
    isOpen.value = true
}
</script>
