<div x-data="{ open: false }">

    <div @click="open = true">
        {{ $slot }}
    </div>

    <!-- Overlay -->
    <div 
        x-show="open"
        x-transition
        class="fixed inset-0 z-50 flex items-center justify-center"
    >

        <!-- Background -->
        <div 
            class="absolute inset-0 bg-black/40 backdrop-blur-sm"
            @click="open = false"
        ></div>

        <!-- Modal -->
        <div 
            class="relative w-full max-w-2xl bg-white rounded-2xl shadow-xl p-8"
        >

            <h2 class="text-2xl font-semibold mb-6">
                Nouvelle colocation
            </h2>

            <form action="{{ route('colocations.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm mb-2">
                        Nom de la colocation
                    </label>
                    <input 
                    required
                        type="text"
                        name="name"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                    >
                </div>

                <div>
                    <label class="block text-sm mb-2">
                        Description
                    </label>
                    <textarea 
                        name="description"
                        rows="4"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                    ></textarea>
                </div>

                <div class="flex gap-4 pt-4">
                    <button 
                        type="submit"
                        class="px-6 py-2.5 bg-indigo-600 text-white rounded-xl">
                        Créer
                    </button>

                    <button 
                        type="button"
                        @click="open = false"
                        class="text-slate-500">
                        Annuler
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>