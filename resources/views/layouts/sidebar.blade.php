<!-- Sidebar -->
<div x-bind:class="isCollapsed ? 'w-20' : 'w-64'" class="flex flex-col bg-white border-r transition-all duration-300 ease-in-out">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between h-16 border-b px-4">
      <span x-show="!isCollapsed" class="text-2xl font-bold text-indigo-600 transition-opacity duration-300">SIS - INF</span>
      <button @click="isCollapsed = !isCollapsed" class="p-2 rounded-lg hover:bg-gray-100 focus:outline-none">
        <svg x-show="!isCollapsed" class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25" />
        </svg>


        <svg x-show="isCollapsed" class="w-5 h-5 text-gray-500"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
        </svg>


      </button>
    </div>

    <!-- Sidebar Menu -->
    <div class="flex flex-col flex-1 overflow-y-auto">
      <nav class="flex-1 px-2 py-4 space-y-1">
        <!-- Dashboard Item -->
        <a href="{{ route('dashboard') }}" @click="currentPage = 'dashboard'" :class="{'bg-indigo-100 text-indigo-700': currentPage === 'dashboard', 'text-gray-600 hover:bg-gray-100': currentPage !== 'dashboard'}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors">
          <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
          </svg>

          <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Dashboard</span>
        </a>

        <!-- Reports Item -->
        <a href="#reports" @click="currentPage = 'reports'" :class="{'bg-indigo-100 text-indigo-700': currentPage === 'reports', 'text-gray-600 hover:bg-gray-100': currentPage !== 'reports'}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors">
          <svg class="w-5 h-5 flex-shrink-0"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
          </svg>


          <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Reports</span>
        </a>

        <!-- Libros Item -->
        <!-- Libros Item en SPA -->
        <a href="javascript:void(0);"
        @click="currentPage = 'books'"
        :class="{'bg-indigo-100 text-indigo-700': currentPage === 'books', 'text-gray-600 hover:bg-gray-100': currentPage !== 'books'}"
        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors">

        <!-- Icono de Libros -->
        <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
            <path d="M23.096,16.193l-2.909-2.909c-.057-.057-.12-.106-.187-.146v10.862h-1V13.138c-.066,.04-.129,.088-.187,.146l-2.871,2.871-.707-.707,2.871-2.871c.768-.769,2.02-.769,2.787,0l2.909,2.909-.707,.707Zm-16.096,2.807h10v1H4.5c-.827,0-1.5,.673-1.5,1.5s.673,1.5,1.5,1.5h12.5v1H4.5c-1.379,0-2.5-1.122-2.5-2.5V2.5C2,1.122,3.121,0,4.5,0H20.5c.827,0,1.5,.673,1.5,1.5V11.562l-.045-.045c-.279-.28-.609-.484-.955-.651V1.5c0-.276-.225-.5-.5-.5H7V19ZM6,1h-1.5c-.827,0-1.5,.673-1.5,1.5V19.501c.418-.315,.938-.501,1.5-.501h1.5V1Z"/>
        </svg>

        <!-- Texto del enlace (Libros) -->
        <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Libros</span>
        </a>


        <!-- Orders Item -->
        <a href="#orders" @click="currentPage = 'orders'" :class="{'bg-indigo-100 text-indigo-700': currentPage === 'orders', 'text-gray-600 hover:bg-gray-100': currentPage !== 'orders'}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors">
          <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>

          <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Prestamos</span>
        </a>

        <!-- Reservations Item -->
        <a href="#reservations" @click="currentPage = 'reservations'" :class="{'bg-indigo-100 text-indigo-700': currentPage === 'reservations', 'text-gray-600 hover:bg-gray-100': currentPage !== 'reservations'}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-colors">
          <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
          </svg>

          <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Reservaciones</span>
        </a>
      </nav>

      <!-- Settings and Logout -->
      <div class="p-4 border-t">
        <button class="flex items-center px-4 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 w-full">
          <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </xmlns=>

          <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">Settings</span>
        </button>
        <div x-data="{ isCollapsed: false }">

            <button @click="document.getElementById('logout-form').submit()" class="flex items-center px-4 py-2 text-sm font-medium text-red-600 rounded-lg hover:bg-red-50 w-full mt-2">
                <svg class="w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>

                <span x-show="!isCollapsed" class="ml-3 transition-opacity duration-300">
                    Logout
                </span>
            </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>

      </div>
    </div>
  </div>
