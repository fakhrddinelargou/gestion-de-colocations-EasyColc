<div x-data="{ openCategory: false }" class="flex items-center gap-3">

<div>
    {{$slot}}
</div>

    <!-- Modal -->
    <div
        x-show="openCategory"
        x-transition.opacity
        class="fixed inset-0 flex items-center justify-center bg-black/40 backdrop-blur-sm z-50">

        <div
            @click.away="openCategory = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6">

            <h2 class="text-lg font-semibold mb-4">
                Add New Category
            </h2>
<form action="{{ route('category.store') }}" method="POST">
@csrf
<input name="colocation_id" type="hidden" value="{{$id}}">
    <input type="text"
    name="name"
    placeholder="Category name"
    class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none">
    
    <div class="flex justify-end gap-3 mt-6">
        
        <button
        @click="openCategory = false"
        class="px-4 py-2 text-gray-500 hover:text-gray-700">
        Cancel
    </button>
    
    <button type='submit'
    class="px-4 py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
    Save
</button>
</form>

            </div>

        </div>
    </div>

</div>