<div x-data="{ open: false }">

    <!-- Button -->
<div>
    {{$slot}}
</div>

    <!-- Modal -->
    <div x-show="open"
         x-transition.opacity
         class="fixed inset-0 flex items-center justify-center
                bg-black/40 backdrop-blur-sm z-50">

        <div @click.away="open = false"
             x-transition
             class="bg-white w-full max-w-md rounded-2xl
                    shadow-xl p-6 space-y-5">

            <h2 class="text-lg font-bold text-slate-900">
                Confirmer la sortie
            </h2>

            <p class="text-sm text-slate-500">
                Êtes-vous sûr de vouloir quitter cette colocation ?
                Cette action est irréversible.
            </p>

            <div class="flex justify-end gap-3">

                <!-- Cancel -->
                <button
                    @click="open = false"
                    class="px-4 py-2 text-sm font-medium
                           text-slate-600 bg-slate-100
                           rounded-lg hover:bg-slate-200">
                    Annuler
                </button>

                <!-- Confirm -->
                <form action="{{ route('colocations.leave', $colocation) }}"
                      method="POST">
                    @csrf
                    @method('PATCH')

                    <button type="submit"
                            class="px-4 py-2 text-sm font-semibold
                                   text-white bg-rose-600
                                   rounded-lg
                                   hover:bg-rose-700">
                        Oui, quitter
                    </button>
                </form>

            </div>
        </div>
    </div>

</div>