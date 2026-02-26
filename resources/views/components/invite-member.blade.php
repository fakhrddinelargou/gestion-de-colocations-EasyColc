<div x-data="{ open: false }">

    <!-- Trigger Button -->
    <div>
        {{ $slot }}
    </div>

    <!-- Overlay -->
    <div 
        x-show="open"
        x-transition
        class="fixed inset-0 z-50 flex items-center justify-center"
    >

        <!-- Background -->
        <div 
            class="absolute inset-0 bg-black/40 backdrop-blur-sm"
            @click="open = false"
        ></div>

        <!-- Modal -->
        <div 
            class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl p-8"
        >

            <!-- Title -->
            <h2 class="text-2xl font-semibold text-slate-800 mb-6">
                Inviter un membre
            </h2>

            <form action="#" method="POST" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">
                        Email du membre
                    </label>

                    <input 
                        type="email"
                        name="email"
                        placeholder="exemple@email.com"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 
                               focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 
                               outline-none transition"
                    >

                    <p class="text-sm text-slate-400 mt-2">
                        Un email sera envoyé avec un lien d’invitation.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-4">

                    <button 
                        type="button"
                        @click="open = false"
                        class="px-5 py-2 rounded-xl border border-slate-300 text-slate-600 hover:bg-slate-50 transition"
                    >
                        Annuler
                    </button>

                    <button 
                        type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-xl shadow-md hover:bg-indigo-700 transition"
                    >
                        Envoyer l'invitation
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>