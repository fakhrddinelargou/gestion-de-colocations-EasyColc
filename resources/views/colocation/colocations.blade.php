<x-app-layout>

            <div class="flex flex-1 overflow-hidden">
                <main class="flex-1 p-8 overflow-y-auto">
                    <div class="max-w-4xl mx-auto">
                        <div class="flex items-center justify-between mb-8">
                            <h2
                                class="text-2xl font-black text-slate-900">Dépenses
                                récentes</h2>
                                     <x-creat-depense >
                            <button
                            @click="open = true"
                                class="bg-primary text-white px-5 py-2.5 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-primary/25 hover:brightness-110 transition-all">
                                <span
                                    class="material-symbols-outlined text-sm">add</span> Nouvelle dépense
                            </button>
</x-creat-depense>

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
                        <div
                            class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                            <table class="w-full text-left">
                                <thead
                                    class="bg-slate-50 border-b border-slate-100">
                                    <tr>
                                        <th
                                            class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Titre
                                            / Catégorie</th>
                                        <th
                                            class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Payeur</th>
                                        <th
                                            class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest">Montant</th>
                                        <th
                                            class="px-6 py-4 text-[11px] font-black text-slate-400 uppercase tracking-widest text-right">Action</th>
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
                                                    dépense pour le moment.</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <aside
                    class="w-80 bg-slate-50 border-l border-slate-200 p-6 flex flex-col gap-6 overflow-y-auto">
                    <div
                        class="bg-white rounded-xl shadow-sm border border-slate-200 p-5">
                        <h3
                            class="text-sm font-black text-slate-900 mb-4 uppercase tracking-wider">Qui
                            doit à qui ?</h3>
                        <div class="space-y-4">
                            <div
                                class="flex flex-col gap-3 p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-xs font-bold text-slate-700">Sarah</span>
                                        <span
                                            class="material-symbols-outlined text-xs text-slate-400">arrow_forward</span>
                                        <span
                                            class="text-xs font-bold text-slate-700">Moi</span>
                                    </div>
                                    <span
                                        class="text-sm font-black text-emerald-600">120.00€</span>
                                </div>
                                <button
                                    class="w-full py-2 bg-white border border-slate-200 text-[11px] font-bold text-slate-500 rounded hover:bg-slate-100 transition-colors uppercase">Marquer
                                    payé</button>
                            </div>
                            <div
                                class="flex flex-col gap-3 p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-xs font-bold text-slate-700">Moi</span>
                                        <span
                                            class="material-symbols-outlined text-xs text-slate-400">arrow_forward</span>
                                        <span
                                            class="text-xs font-bold text-slate-700">James</span>
                                    </div>
                                    <span
                                        class="text-sm font-black text-rose-500">45.00€</span>
                                </div>
                                <button
                                    class="w-full py-2 bg-white border border-slate-200 text-[11px] font-bold text-slate-500 rounded hover:bg-slate-100 transition-colors uppercase">Marquer
                                    payé</button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-br from-slate-800 to-slate-950 rounded-xl shadow-xl p-5 text-white">
                        <div class="flex items-center justify-between mb-5">
                            <h3
                                class="text-sm font-black uppercase tracking-wider">Membres
                                de la coloc</h3>
                            <span
                                class="bg-emerald-500/20 text-emerald-400 text-[10px] font-black px-2 py-0.5 rounded border border-emerald-500/30 uppercase tracking-tighter">Actifs</span>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded-lg bg-white/10 flex items-center justify-center font-bold text-xs">AL</div>
                                    <div>
                                        <p
                                            class="text-xs font-bold">Alexandre</p>
                                        <span
                                            class="text-[9px] font-black bg-amber-400 text-amber-950 px-1 rounded">OWNER</span>
                                    </div>
                                </div>
                                <span
                                    class="text-xs font-bold text-emerald-400">0€</span>
                            </div>
                            <div
                                class="flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded-lg bg-white/10 flex items-center justify-center font-bold text-xs">SM</div>
                                    <p class="text-xs font-bold">Sarah M.</p>
                                </div>
                                <span
                                    class="text-xs font-bold text-emerald-400">0€</span>
                            </div>
                            <div
                                class="flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-8 rounded-lg bg-white/10 flex items-center justify-center font-bold text-xs">JL</div>
                                    <p class="text-xs font-bold">James L.</p>
                                </div>
                                <span
                                    class="text-xs font-bold text-emerald-400">0€</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 py-3 bg-white/5 border border-white/10 rounded-xl text-xs font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                            <span
                                class="material-symbols-outlined text-sm">person_add</span>
                            Inviter un membre
                        </button>
                    </div>
                </aside>
            </div>
        
</x-app-layout>
