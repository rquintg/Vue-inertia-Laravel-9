<template>
    <Head title="Actividad" />
    <AppLayout>
        <div class="py-4 bg-black text-white">
        <div class="container mx-auto flex flex-col md:flex-row my-12 md:my-36">
      <div class="flex flex-col w-full lg:w-2/5 p-8">
        <p class="text-3xl md:text-5xl text-yellow-500 my-4 leading-relaxed md:leading-snug">Laravel9 with sanctum + Vue3 Inertia  SPA</p>
      </div>
      <div class=" flex flex-col lg:w-3/5 justify-center w-full lg:-mt-12">
        <div class="container">
          <div class="relative flex flex-col min-w-0 break-words w-full">
            <div class="flex-auto p-5 lg:p-10">
              <img src="https://user-images.githubusercontent.com/54521023/152731049-cc744a56-1d6f-4945-9566-0fa3b7ad1d24.png" alt="contact image">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/App"
import { Head } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AppLayout, Head
    }
}
</script>
