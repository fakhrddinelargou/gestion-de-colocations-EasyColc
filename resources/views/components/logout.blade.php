<div x-data="{ open: false }">

    <!-- Profile Logout Button -->
   <div>
    {{$slot}}
   </div>

    <!-- Overlay -->
    <div 
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">

        <!-- Card -->
        <div 
            @click.away="open = false"
            x-transition
            class="bg-white w-80 rounded-2xl shadow-xl p-6 space-y-4">

            <h2 class="text-lg font-semibold text-gray-800">
                Confirm Logout
            </h2>

            <p class="text-sm text-gray-500">
                Are you sure you want to logout?
            </p>

            <div class="flex justify-end gap-3">

                <!-- Cancel -->
                <button 
                    @click="open = false"
                    class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-xl transition">
                    Cancel
                </button>

                <!-- Confirm Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 text-sm bg-red-500 hover:bg-red-600 text-white rounded-xl transition">
                        Yes, Logout
                    </button>
                </form>

            </div>
        </div>
    </div>

</div>