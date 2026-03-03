<!-- <form action="{{ route('colocations.leave'  , $member) }}"  method="POST" >
                                    @csrf
                                    @method('PATCH')
                                    <div
                                    
                                    class="size-8 rounded-lg bg-white/10 flex items-center justify-center font-bold text-xs">{{ $member->role == 'owner' ? 'OR' : 'MR' }}</div>
                                    
                                </form> -->

                                <div x-data="{ open: false }" class="relative">

    <!-- Retirer Button -->
 <div>
    {{$slot}}
 </div>

    <!-- Overlay -->
    <div 
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 flex items-center justify-center z-50"
        style="display: none;"
    >

        <!-- Modal -->
        <div 
            @click.away="open = false"
            x-transition.scale
            class="bg-white dark:bg-slate-900 w-full max-w-md rounded-2xl shadow-xl p-6"
        >

            <!-- Title -->
            <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100 mb-3">
                Confirmer le retrait
            </h2>

            <!-- Message -->
            <p class="text-sm text-slate-500 mb-6">
                Êtes-vous sûr de vouloir retirer 
                <span class="font-bold text-slate-800 dark:text-white">
                    {{ $member->user->name }}
                </span>
                de cette colocation ?
            </p>

            <!-- Actions -->
            <div class="flex justify-end gap-3">

                <!-- Cancel -->
                <button 
                    @click="open = false"
                    class="px-4 py-2 text-sm rounded-lg bg-slate-100 
                           hover:bg-slate-200 text-slate-600">
                    Annuler
                </button>

                <!-- Confirm -->
                <form 
                    action="{{ route('members.remove', $member->id) }}" 
                    method="POST">
                    @csrf
                    @method('PATCH')

                    <button 
                        type="submit"
                        class="px-4 py-2 text-sm rounded-lg bg-red-600 
                               hover:bg-red-700 text-white font-semibold">
                        Confirmer
                    </button>
                </form>

            </div>

        </div>
    </div>

</div>