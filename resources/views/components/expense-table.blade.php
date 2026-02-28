
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    
    <!-- Table -->
    <table class="min-w-full text-sm text-left">
        
        <!-- Header -->
        <thead class="bg-gray-50 text-gray-500 uppercase text-xs tracking-wider">
            <tr>
                <th class="px-6 py-4">Titre / Catégorie</th>
                <th class="px-6 py-4">Payeur</th>
                <th class="px-6 py-4">Montant</th>
                <th class="px-6 py-4 text-right">Action</th>
            </tr>
        </thead>

        <!-- Body -->
        <tbody class="divide-y divide-gray-100">

            @forelse($colocation->expenses as $expense)
            <tr class="hover:bg-gray-50 transition">
                
                <!-- Title -->
                <td class="px-6 py-4">
                    <div class="font-medium text-gray-800">
                        {{ $expense->title }}
                    </div>
                    <div class="text-xs text-gray-400">
                        {{ $expense->category->name ?? 'Sans catégorie' }} 
                    </div>
                </td>

                <!-- Payeur -->
                <td class="px-6 py-4 text-gray-600">
                    {{ $expense->user->name ?? '—' }}
                </td>

                <!-- Amount -->
                <td class="px-6 py-4 font-semibold text-gray-800">
                    {{ number_format($expense->amount, 2) }} €
                </td>

                <!-- Actions -->
                <td class="px-6 py-4 text-right space-x-2 flex items-center justify-end">
                    <x-update-expense :expense="$expense" :colocation="$colocation">
                        <buttom @click="openUp = true"  class="text-blue-500 hover:underline text-sm">Edit</buttom>
                </x-update-expense>
                <x-delete-expense :expense="$expense">
                    <button @click="open = true" class="text-red-500 hover:underline text-sm">Delete</button>
                </x-delete-expense>
                </td>

            </tr>

            @empty
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
            @endforelse

        </tbody>
    </table>
</div>

