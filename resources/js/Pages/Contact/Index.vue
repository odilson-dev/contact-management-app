<template>
    <Head title="Contacts" />
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Contact Lists</h5>
                <Link
                    :href="route('contact.create')"
                    class="bg-blue-500 text-white p-3 rounded mb-4"
                    >Add Contact</Link
                >
            </div>

            <table class="w-full bg-white border border-gray-200 shadow">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-left border">Id</th>
                        <th class="py-2 px-4 text-left border">Name</th>
                        <th class="py-2 px-4 text-left border">Email</th>
                        <th class="py-2 px-4 text-left border">Phone</th>
                        <th class="py-2 px-4 text-left border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1</td>
                        <td class="py-2 px-4 border">Peter Harris</td>
                        <td class="py-2 px-4 border">peterharris@gmail.com</td>
                        <td class="py-2 px-4 border">+509 40234898</td>
                        <td class="py-2 px-4 border">
                            <Link
                                :href="route('contact.create')"
                                class="px-2 oy-1 text-sm bg-blue-300 text-dark me-2 rounded inline-block"
                                >Show</Link
                            >
                            <Link
                                :href="route('contact.create')"
                                class="px-2 oy-1 text-sm bg-green-500 text-white me-2 rounded inline-block"
                                >Add Contact</Link
                            >
                            <button
                                type="submit"
                                class="px-2 oy-1 text-sm bg-danger-500 text-white me-2 rounded inline-block"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Link, Head } from "@inertiajs/vue3";
</script>
