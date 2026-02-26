<x-guest-layout>
       <main
            class="flex-1 flex items-center justify-center p-6 bg-gradient-to-br from-background-light to-primary/5 dark:from-background-dark dark:to-primary/10">
            <div class="w-full max-w-[480px]">

       <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-xl shadow-primary/5 border border-slate-200 dark:border-slate-800 p-8 md:p-10">
                    <div class="mb-8">
                        <h2
                            class="text-slate-900 dark:text-white text-3xl font-bold tracking-tight mb-2">Create
                            your account</h2>
                        <p
                            class="text-slate-500 dark:text-slate-400 text-base">Start
                            managing your flatshare effortlessly today.</p>
                    <!-- </div>
                    <div
                        class="mb-6 flex items-start gap-3 p-4 bg-red-50 dark:bg-red-900/20 border border-red-100 dark:border-red-800 rounded-lg text-red-600 dark:text-red-400 text-sm">
                        <span
                            class="material-symbols-outlined text-lg shrink-0">error</span>
                        <p>Please ensure all fields are filled correctly before
                            proceeding.</p>
                    </div> -->
                    <form class="space-y-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-2">
                            <label
                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300" :value="__('name')">Full
                                Name</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                                    placeholder="John Doe" name="name" type="text" :value="old('name')" autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300" :value="__('email')">Email
                                Address</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                                    placeholder="name@example.com"
                                    type="email" name="email" :value="old('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300" :value="__('password')" >Password</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                                <input
                                    class="w-full pl-12 pr-12 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                                    placeholder="••••••••" name="password" type="password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300" :value="__('password_confirmation')">Confirm
                                Password</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock_reset</span>
                                <input
                                    class="w-full pl-12 pr-12 py-3 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                                    placeholder="••••••••" type="password" name="password_confirmation" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>
                        </div>
                          <button
                            class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 mt-4"
                            type="submit">
                            Create Account
                            <span
                                class="material-symbols-outlined">arrow_forward</span>
                        </button>
                     
                    </form>
                    <div
                        class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 text-center">
                        <p class="text-slate-500 dark:text-slate-400 text-sm">
                            Already have an account?
                            <a
                                class="text-primary font-semibold hover:underline decoration-2 underline-offset-4"
                                href="{{ route('login') }}">Log in</a>
                        </p>
                    </div>
                </div>
                <div
                    class="mt-8 flex flex-wrap justify-center gap-x-8 gap-y-4 opacity-50 grayscale hover:opacity-80 transition-opacity duration-300">
                    <div class="flex items-center gap-2">
                        <span
                            class="material-symbols-outlined text-sm">verified_user</span>
                        <span
                            class="text-xs font-bold uppercase tracking-widest">Secure
                            Payments</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span
                            class="material-symbols-outlined text-sm">gpp_good</span>
                        <span
                            class="text-xs font-bold uppercase tracking-widest">Data
                            Protection</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span
                            class="material-symbols-outlined text-sm">group</span>
                        <span
                            class="text-xs font-bold uppercase tracking-widest">Coloc
                            Ready</span>
                    </div>
                </div>
</div>
</main>
</x-guest-layout>
