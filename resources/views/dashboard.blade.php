<x-app-layout>
    
           
         <div class="flex flex-1">
                <main class="flex-1 p-8 overflow-y-auto">
                    <div class="max-w-5xl mx-auto space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center gap-5">
                                <div
                                    class="size-14 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                                    <span
                                        class="material-symbols-outlined text-3xl">military_tech</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Mon
                                        score réputation</p>
                                    <p
                                        class="text-3xl font-black text-slate-900">{{ auth()->user()->reputation }}</p>
                                </div>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center gap-5">
                                <div
                                    class="size-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                    <span
                                        class="material-symbols-outlined text-3xl text-primary">shopping_cart</span>
                                </div>
                                <div>
                                    <p
                                        class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Dépenses
                                        Globales</p>
                                    <p
                                        class="text-3xl font-black text-slate-900">{{ $total }}
                                        €</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <h2
                                    class="text-xl font-black text-slate-900 uppercase tracking-tight">Dépenses
                                    récentes</h2>
                                    @if(auth()->user()->member  && auth()->user()->member->left_at == 'null' )
                                <a
                                    class="text-sm font-bold text-primary hover:underline"
                                    href="{{ route('colocations.show' , auth()->user()->member->colocation->id) }}">Voir tout</a>
                                    @endif

                            </div>
                     <div class="bg-white shadow-md rounded-xl overflow-hidden">

    <table class="w-full text-sm text-left text-gray-600">
        
        <thead class="bg-gray-50 text-gray-500 uppercase text-xs tracking-wider">
            <tr>
                <th class="px-6 py-4">Titre / Catégorie</th>
                <th class="px-6 py-4">Payeur</th>
                <th class="px-6 py-4 text-right">Montant</th>
                <th class="px-6 py-4 text-center">Coloc.</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">

            @forelse($lastExpenses as $expense)

                <tr class="hover:bg-gray-50 transition">
                    
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-800">
                            {{ $expense->title }}
                        </div>
                        <div class="text-xs text-gray-400">
                            {{ $expense->category->name ?? 'Sans catégorie' }}
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        {{ $expense->user->name }}
                    </td>

                    <td class="px-6 py-4 text-right font-semibold">
                        {{ number_format($expense->amount, 2) }} €
                    </td>

                    <td class="px-6 py-4 text-center">
                        {{ $expense->colocation->name ?? '-' }}
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="px-6 py-10 text-center text-gray-400">
                        Aucune dépense trouvée.
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>

</div>
                        </div>
                    </div>
                </main>
               
            </div>

            </div>
        
</x-app-layout>
