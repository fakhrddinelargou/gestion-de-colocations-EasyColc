<x-app-layout>
    <div class="flex flex-1 overflow-hidden">
                <main class="flex-1 p-8 overflow-y-auto">
                    <div class="max-w-4xl mx-auto">
                        <div class="flex items-center justify-between mb-8">
                            <h2
                                class="text-2xl font-black text-slate-900">Dépenses
                                récentes</h2>
                       <div class="flex items-center gap-3">
                        <x-left-colocation :colocation="$colocation">
                            <button
                            @click="open=true"
                            class="group relative inline-flex items-center justify-center gap-2
                            px-3.5 py-2.5
                            bg-rose-600 text-white font-medium
                            rounded-xl
                            shadow-md
                            transition-all duration-200 ease-out
                            hover:bg-rose-700
                            hover:shadow-lg
                            hover:-translate-y-0.5
                            active:scale-95">
                            
                            <span class="material-symbols-outlined text-sm transition-transform duration-300 group-hover:-rotate-12">
                                logout
                            </span>
                        </button>
</x-left-colocation>

@if(auth()->id() == $colocation->owner_id)
<x-categories :id="$colocation->id" >
    <!-- Add Category -->
    <button
    @click="openCategory = true"
        class="group relative inline-flex items-center gap-2
               px-5 py-2.5
               bg-indigo-600 text-white font-medium
               rounded-xl
               shadow-md
               transition-all duration-200 ease-out
               hover:bg-indigo-700
               hover:shadow-lg
               hover:-translate-y-0.5
               active:scale-95">

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 transition-transform duration-300 group-hover:rotate-90"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 4v16m8-8H4" />
        </svg>

        Add Category
    </button>

</x-categories >
@endif

    <!-- Nouvelle dépense -->
    <x-creat-depense :members="$members" :colocation="$colocation">
        <button
            @click="open = true"
            class="group inline-flex items-center gap-2
                   px-5 py-2.5
                   bg-indigo-600 text-white font-medium
                   rounded-xl
                   shadow-md
                   transition-all duration-200 ease-out
                   hover:bg-indigo-700
                   hover:shadow-lg
                   hover:-translate-y-0.5
                   active:scale-95">

            <span class="material-symbols-outlined text-sm transition-transform duration-300 group-hover:rotate-90">
                add
            </span>

            Nouvelle dépense
        </button>
    </x-creat-depense>

</div>

                        </div>
                        <div class="mb-6">
                            <label
                                class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-2">Filtrer
                                par mois</label>
                            <select
                                class="bg-white border border-slate-200 rounded-xl px-4 py-2 text-sm font-medium focus:ring-primary focus:border-primary outline-none">
                                <option>Tous les mois</option>
                                <option>Octobre 2023</option>
                                <option>Septembre 2023</option>
                            </select>
                        </div>

                    <!-- expenses table -->
                     <x-expense-table :colocation="$colocation"  />






                    </div>
                </main>
                <aside
                    class="w-80 bg-slate-50 border-l border-slate-200 p-6 flex flex-col gap-6 overflow-y-auto">
<!-- settlement -->
@include('components/settlement')
<!-- Members -->
            @include('components/members')      
                </aside>
            </div>
        
</x-app-layout>
