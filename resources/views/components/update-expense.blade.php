<div x-data="{ openUp: false }">
<div>
    
  
</div>
  <div>
    {{ $slot }}
  </div>
    <!-- Overlay -->
    <div 
        x-show="openUp"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50"
        x-transition
    >

        <!-- Modal -->
        <div 
            @click.away="openUp = false"
            class="bg-white w-full max-w-2xl rounded-2xl shadow-xl p-8"
        >
            <h2 class="text-2xl font-semibold mb-6">
                Nouvelle dépense
            </h2>

            <form class="space-y-6" action="{{ route('expenses.update') }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
                <!-- Titre -->
                <div>
                    <label class="block text-sm font-medium mb-2">
                        Titre
                    </label>
                    <input 
                        type="text"
                        name='title'
                        value="{{ $expense->title }}"
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
                            name='amount'
                        value="{{ $expense->amount }}"

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
                            name="expense_date"
                        value="{{ $expense->expense_date }}"

                            class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Payé par
                        </label>
                        <select name="payer_id" required class="w-full rounded-xl border border-slate-300 px-4 py-3">
                            @foreach($colocation->members as $member)
                            <option value='{{ $member->user_id }}'   {{ $member->id == $expense->payer_id ? 'selected' : '' }}>{{ $member->role == 'owner' ? 'Admin' : $member->user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Catégorie
                        </label>
                        <select name="category_id"  required class="w-full rounded-xl border border-slate-300 px-4 py-3">
                            @foreach($colocation->categories as $category)
                            <option  value="{{ $category->id}}" {{ $category->id == $expense->category_id ? 'selected' : '' }} >{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>

                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-4">
                    <button 
                        type="button"
                        @click="openUp = false"
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