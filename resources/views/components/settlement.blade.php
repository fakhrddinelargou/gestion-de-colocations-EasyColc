                    <div
                        class="bg-white rounded-xl shadow-sm border border-slate-200 p-5">
                        
                        <h3
                            class="text-sm font-black text-slate-900 mb-4 uppercase tracking-wider">Qui
                            doit à qui ?</h3>
                        <div class="space-y-4">
                            @foreach($settlement as $settl)
                            <div
                                class="flex flex-col gap-3 p-3 bg-slate-50 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <span
                                            class="text-xs font-bold text-slate-700">{{ $settl->creditor_id == auth()->id() ? "Moi" : $settl->creditor->name }}</span>
                                        <span
                                            class="material-symbols-outlined text-xs text-slate-400">arrow_forward</span>
                                        <span
                                            class="text-xs font-bold text-slate-700">{{ $settl->debtor_id == auth()->id() ? "Moi" : $settl->debtor->name }}</span>
                                    </div>
                                    <span
                                        class="text-sm font-black {{ $settl->status === 'paid'
    ? 'text-gray-400'
    : ($settl->debtor_id === auth()->id()
        ? 'text-red-600'
        : 'text-emerald-600') }}">{{ $settl->amount }}€</span>
                                </div>
                                @if($settl->status === 'pending' && $settl->debtor_id === auth()->id())

<form action="{{ route('settlements.pay', $settl) }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit" class="w-full py-2 bg-white border border-slate-200 text-[11px] font-bold text-slate-500 rounded hover:bg-slate-100 transition-colors uppercase">Marquer payé</button>
</form>

@endif
                               
                            </div>
                            @endforeach

                            <!-- <div
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
                            </div> -->
                        </div>
                    </div>