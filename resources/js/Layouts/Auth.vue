<template>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-coolGray-300">
            <div>
                <a href="/">
                    <img class="rounded-lg" src="https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/ff/40/77/ff4077ec-0584-1c3c-207e-6c6dbfaddc83/source/512x512bb.jpg" alt="Logo" width="200" height="200">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-warmGray-200 shadow-md overflow-hidden sm:rounded-lg">
                <slot/>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link
    }
}

</script>
