<x-app-layout>
    <div class="px-8 py-6">
    <!-- Section Header -->
    <div  class="flex  items-center justify-between mb-6">
        <h1 class="text-xl font-semibold tracking-wide uppercase text-gray-800">
            Mes colocations
        </h1>
<x-create-colocation>
    <button 
    @click="open = true"
    class="px-5 py-2 bg-indigo-600 text-white rounded-xl shadow-md
    hover:bg-indigo-700 transition duration-200">
    + Nouvelle colocation
</button>
</x-create-colocation>
    </div>

    <!-- Colocations Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Colocation Card -->
    @include('components.colocation-cards')
     

    </div>

</div>
</x-app-layout>
