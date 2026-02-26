<div x-data="{ open: false }">

  <div>
    {{ $slot }}
  </div>
    <!-- Overlay -->
    <div 
        x-show="open"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50"
        x-transition
    >

        <!-- Modal -->
        <div 
            @click.away="open = false"
            class="bg-white w-full max-w-2xl rounded-2xl shadow-xl p-8"
        >
            <h2 class="text-2xl font-semibold mb-6">
                Nouvelle dépense
            </h2>

            <form class="space-y-6">

                <!-- Titre -->
                <div>
                    <label class="block text-sm font-medium mb-2">
                        Titre
                    </label>
                    <input 
                        type="text"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                        placeholder="Ex: Courses"
                    >
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Montant (€)
                        </label>
                        <input 
                            type="number"
                            step="0.01"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Date
                        </label>
                        <input 
                            type="date"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Payé par
                        </label>
                        <select class="w-full rounded-xl border border-slate-300 px-4 py-3">
                            <option>Admin</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Catégorie
                        </label>
                        <select class="w-full rounded-xl border border-slate-300 px-4 py-3">
                            <option>Général</option>
                        </select>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-4">
                    <button 
                        type="button"
                        @click="open = false"
                        class="px-5 py-2 rounded-xl border border-slate-300">
                        Annuler
                    </button>

                    <button 
                        type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-xl shadow">
                        Enregistrer la dépense
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>