<template>
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="min-h-screen flex flex-col ">
                        <div class="shrink-0 flex items-center">
                            <a href="/posts">
                                <img src="http://www.redttu.edu.co/es/wp-content/uploads/2019/03/LOGO-IU-DIGITAL-2.png" alt="logo" width="200" height="200">
                            </a>
                        </div>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <Link :href="route('posts.index')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === 'Posts/Index' }">Pensum
                            </Link>
                            <Link :href="route('pages.about')"
                                  class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out"
                                  :class="{ 'font-bold': $page.component === 'About' }">Actividad
                            </Link>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div>
                            <div>
                                Hola, <b>{{ $page.props.user.name }}</b>
                                <br/>
                                {{ $page.props.user.email }}
                            </div>
                        </div>
                    </div>
                    <td class="px-4 py-3">
                         <span v-if="$page.props.user.rol == 'Administrador' "  class="flex justify-center px-2 py-1 font-semibold leading-tight text-green-100 bg-green-900 rounded-sm"> <i class="fa-solid fa-user-shield"></i> {{ $page.props.user.rol }} </span>


                        <span v-if="$page.props.user.token == 2"  class="px-2 py-1 font-semibold leading-tight text-cyan-100 bg-cyan-900 rounded-sm"> <i class="fa-solid fa-user-graduate"></i> {{ $page.props.user.rol }} </span>


                        <span v-if="$page.props.user.rol == 'Coordinador' "  class="px-2 py-1 font-semibold leading-tight text-orange-100 bg-orange-600 rounded-sm"><i class="fa-solid fa-person-chalkboard"></i> {{ $page.props.user.rol }} </span>
                    </td>

                    <Link :href="route('logout')" method="post"
                          type="button"
                          @click="pff"
                        class="inline-flex items-center border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline"
                    >
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </Link>
                </div>
            </div>
        </nav>

        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-2 border-gray-200">
                            <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                                {{ $page.props.flash.message }}
                            </div>

                            <slot/>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3"
import {Inertia} from "@inertiajs/inertia";

export default {
    components: {
        Link, Head,
    },
    props: {
        posts: Object,
        permissions: Object,
    },
    setup(props) {

        const pff = () => {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Sesion Finalizada'
            })

        }

        return {  pff }


    }
}

</script>
