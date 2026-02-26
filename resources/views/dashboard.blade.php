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
                                        class="text-3xl font-black text-slate-900">0</p>
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
                                        Globales (Feb)</p>
                                    <p
                                        class="text-3xl font-black text-slate-900">0,00
                                        €</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <h2
                                    class="text-xl font-black text-slate-900 uppercase tracking-tight">Dépenses
                                    récentes</h2>
                                <a
                                    class="text-sm font-bold text-primary hover:underline"
                                    href="{{ route('colocations') }}">Voir tout</a>
                            </div>
                            <div
                                class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                                <table class="w-full text-left">
                                    <thead
                                        class="bg-slate-50 border-b border-slate-100">
                                        <tr>
                                            <th
                                                class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">TITRE
                                                / CATÉGORIE</th>
                                            <th
                                                class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">PAYEUR</th>
                                            <th
                                                class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">MONTANT</th>
                                            <th
                                                class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">COLOC.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-6 py-20 text-center"
                                                colspan="4">
                                                <div
                                                    class="flex flex-col items-center opacity-40">
                                                    <span
                                                        class="material-symbols-outlined text-5xl mb-3">receipt_long</span>
                                                    <p
                                                        class="text-slate-500 font-medium">Aucune
                                                        dépense récente.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class="w-80 p-8">
                    <div
                        class="bg-gradient-to-br from-slate-800 to-slate-950 rounded-xl shadow-xl p-6 text-white h-fit">
                        <div class="flex items-center justify-between mb-4">
                            <h3
                                class="text-sm font-black uppercase tracking-wider">Membres
                                de la coloc</h3>
                            <span
                                class="bg-slate-600/50 text-slate-300 text-[10px] font-black px-2 py-0.5 rounded border border-white/10 uppercase tracking-tighter">VIDE</span>
                        </div>
                        <div
                            class="py-10 flex flex-col items-center justify-center text-center">
                            <span
                                class="material-symbols-outlined text-slate-500 text-4xl mb-3">group_off</span>
                            <p class="text-xs font-bold text-slate-400">Aucune
                                colocation active.</p>
                        </div>
                    </div>
                </aside>
            </div>

            </div>
        
</x-app-layout>
