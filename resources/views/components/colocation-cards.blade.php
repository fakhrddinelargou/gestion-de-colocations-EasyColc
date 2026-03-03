@foreach($colocations as $colocation)

<div x-data="{ open: false }"
     class="relative bg-white border border-gray-100 
            rounded-2xl p-6 
            hover:shadow-xl hover:-translate-y-1 
            transition duration-300">

    <!-- Top Actions -->
    <div class="absolute top-4 right-4 flex items-center gap-2">

        <span class="text-xs font-semibold px-3 py-1 rounded-full
            {{ $colocation->status == 'active' 
                ? 'bg-green-100 text-green-600' 
                : 'bg-gray-100 text-gray-500' }}">
            {{ $colocation->status }}
        </span>

        @if($colocation->owner_id == auth()->id())
        <button @click="open = true"
            class="w-8 h-8 flex items-center justify-center
                   bg-red-50 text-red-500 rounded-full
                   hover:bg-red-500 hover:text-white
                   transition duration-200">

            <!-- Trash Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" 
                      stroke-linejoin="round" 
                      stroke-width="2" 
                      d="M6 7h12M9 7v12m6-12v12M4 7h16M10 3h4a1 1 0 011 1v3H9V4a1 1 0 011-1z"/>
            </svg>
        </button>
        @endif
    </div>

    <!-- Content -->
    <div class="w-14 h-14 flex items-center justify-center
                bg-indigo-100 text-indigo-600 
                rounded-xl mb-4">
        <!-- Icon -->
    </div>

    <h2 class="text-lg font-semibold text-gray-800 mb-1">
        {{ $colocation->name }}
    </h2>

    <p class="text-sm text-gray-400 mb-6">
        {{ $colocation->members->count() }} Membres
    </p>

    <div class="flex items-center justify-between border-t pt-4">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wide">
                Dépenses
            </p>
            <p class="text-base font-semibold text-gray-800">
                {{ $colocation->expenses->count() }}
            </p>
        </div>

        <a href="{{ route('colocations.show', $colocation)}}"
           class="w-10 h-10 flex items-center justify-center
                  bg-gray-900 text-white rounded-full
                  hover:scale-110 transition duration-200 shadow-md">
            →
        </a>
    </div>


    <!-- 🔥 Confirm Modal -->
    @if($colocation->owner_id == auth()->id())
    <div x-show="open"
         x-transition
         class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

        <div @click.away="open = false"
             class="bg-white rounded-2xl p-6 w-80 shadow-xl">

            <h3 class="text-lg font-semibold mb-3 text-gray-800">
                Supprimer la colocation ?
            </h3>

            <p class="text-sm text-gray-500 mb-6">
                Cette action est irréversible.
            </p>

            <div class="flex justify-end gap-3">

                <button @click="open = false"
                        class="px-4 py-2 text-sm rounded-lg
                               bg-gray-100 hover:bg-gray-200 transition">
                    Annuler
                </button>

                <form action="{{ route('colocations.destroy', $colocation) }}" 
                      method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="px-4 py-2 text-sm rounded-lg
                                   bg-red-600 text-white
                                   hover:bg-red-700 transition">
                        Oui, supprimer
                    </button>
                </form>

            </div>

        </div>
    </div>
    @endif

</div>

@endforeach