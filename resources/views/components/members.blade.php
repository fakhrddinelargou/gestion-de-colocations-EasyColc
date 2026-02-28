  <div class="bg-gradient-to-br from-slate-800 to-slate-950 rounded-xl shadow-xl p-5 text-white">
                        <div class="flex items-center justify-between mb-5">
                            <h3
                                class="text-sm font-black uppercase tracking-wider">Membres
                                de la coloc</h3>
                            <span
                                class="bg-emerald-500/20 text-emerald-400 text-[10px] font-black px-2 py-0.5 rounded border border-emerald-500/30 uppercase tracking-tighter">Actifs</span>
                        </div>
                        <div class="space-y-4">
                            @foreach($members as $member)
                            <div
                            class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <div
                                class="size-8 rounded-lg bg-white/10 flex items-center justify-center font-bold text-xs">{{ $member->role == 'owner' ? 'OR' : 'MR' }}</div>
                                
                                <div>
                                    <p
                                    class="text-xs font-bold">{{ $member->user->name }}</p>
                                    @if($member->role == 'owner')
                                        <span
                                        class="text-[9px] font-black bg-amber-400 text-amber-950 px-1 rounded">OWNER</span>
                                        @endif
                                    </div>
                                </div>
                                <span
                                    class="text-xs font-bold text-emerald-400">0€</span>
                            </div>
                            
                            
                           
                            
                            @endforeach
                          
                        </div>
                        
                        @if($isOwner)
                        <x-invite-member :colocation='$colocation'>
                            <button
                            @click="open = true"
                            class="w-full mt-6 py-3 bg-white/5 border border-white/10 rounded-xl text-xs font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                            <span
                            class="material-symbols-outlined text-sm">person_add</span>
                            Inviter un membre
                        </button>
                        </x-invite-member>
                        @endif

                    </div>