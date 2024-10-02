<template>
    <Head title="Create Contact" />
    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Create contact
                </h2>
                <Link
                    :href="route('contact.index')"
                    class="bg-red-600 text-white rounded  inline-block py-2 px-5"
                    >Back</Link
                >
            </div>
        </template>
        <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
              <!-- Avatar section -->
      <div class="flex justify-center mb-4">
        <div class="relative w-20 h-20">
          <div class="bg-gray-200 rounded-full w-full h-full flex justify-center items-center">
            <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </div>
          <div class="absolute bottom-0 right-0 bg-blue-500 rounded-full p-1">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M5 12h14v2H5z" />
            </svg>
          </div>
        </div>
      </div>
            
            <form @submit.prevent="saveContact">
            
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">Name</label>
                    <input type="text" v-model="form.name" placeholder="John Doe" class="mt-1 w-full border border-gray-300 p-2 rounded-md"></input>
                    <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold">Phone number</label>
                    <input type="tel" v-model="form.phone_number" placeholder="+123456789" class="mt-1 w-full border border-gray-300 p-2 rounded-md"></input>
                    <div v-if="errors.phone_number" class="text-red-500">{{ errors.phone_number }}</div>
                </div>
                
                

                <button type="submit" :disabled="form.processing" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition duration-300">
                    <span v-if="form.processing">Saving...</span>
                    <span v-else>Save</span>
                </button>
               
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    errors: Object
})

const form = useForm({
    name: "",
    email: "",
    phone_number: "",
});

const saveContact = () => {
    const res = form.post(route('contact.store'));
    if(res){
        form.reset()
    }
}
</script>
