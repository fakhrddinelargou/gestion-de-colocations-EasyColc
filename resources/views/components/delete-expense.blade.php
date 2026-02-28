<div x-data="{ open: false }">

    <!-- Delete Button -->
   <div>
    {{$slot}}
   </div>

    <!-- Overlay -->
    <div 
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">

        <!-- Modal Card -->
        <div 
            @click.away="open = false"
            x-transition.scale
            class="bg-white w-96 rounded-2xl shadow-xl p-6 space-y-5">

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 flex items-center justify-center 
                            bg-red-100 text-red-600 rounded-xl">
                    ⚠
                </div>

                <h2 class="text-lg font-semibold text-gray-800">
                    Delete Expense
                </h2>
            </div>

            <p class="text-sm text-gray-500">
                Are you sure you want to delete this expense?  
                This action cannot be undone.
            </p>

            <div class="flex justify-end gap-3">

                <!-- Cancel -->
                <button 
                    @click="open = false"
                    class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-xl transition">
                    Cancel
                </button>

                <!-- Confirm Delete -->
                <form method="POST" action="{{ route('expenses.delete', $expense->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        class="px-4 py-2 text-sm bg-red-500 hover:bg-red-600 text-white rounded-xl transition">
                        Yes, Delete
                    </button>
                </form>

            </div>

        </div>
    </div>

</div>