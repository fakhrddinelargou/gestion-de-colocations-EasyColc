<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 
      <div
            class="relative flex min-h-screen w-full flex-col items-center justify-center p-4 md:p-10">
            <!-- Subtle Background Decoration -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <div
                    class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-3xl"></div>
                <div
                    class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-primary/10 rounded-full blur-3xl"></div>
            </div>
            <div class="z-10 w-full max-w-[480px]">
                <!-- Logo Section -->
                <div class="flex flex-col items-center mb-8">
                    <div class="flex items-center gap-3 text-primary mb-2">
                        <div
                            class="size-10 bg-primary text-white rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewbox="0 0 48 48"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h1
                            class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">ColocPay</h1>
                    </div>
                    <p
                        class="text-slate-500 dark:text-slate-400 font-medium text-center">Manage
                        your flatshare payments effortlessly</p>
                </div>
                <!-- Login Card -->
                <div
                    class="bg-white dark:bg-slate-900 shadow-xl shadow-primary/5 rounded-xl border border-slate-200 dark:border-slate-800 p-8 md:p-10">
                               <div class="mb-8">
                        <h2
                            class="text-2xl font-bold text-slate-900 dark:text-white">Welcome
                            back</h2>
                        <p
                            class="text-slate-500 dark:text-slate-400 text-sm mt-1">Please
                            enter your details to sign in.</p>
                    </div>
                    <form class="space-y-6" method='POST' action="{{ route('login') }}">
                        @csrf
                        <!-- Email Input -->
                        <div class="flex flex-col gap-2">
                            <label
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300">Email</label>
                            <div class="relative">
                                <input
                                    class="flex w-full rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-12 px-4 text-sm transition-all"
                                    placeholder="Enter your email address"
                                    required type="email" name='email' />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                        </div>
                        <!-- Password Input -->
                        <div class="flex flex-col gap-2">
                            <div class="flex justify-between items-center">
                                <label
                                    class="text-sm font-semibold text-slate-700 dark:text-slate-300">Password</label>
                                <a
                                    class="text-xs font-semibold text-primary hover:underline"
                                    href="#">Forgot password?</a>
                            </div>
                            <div class="relative flex items-center">
                                <input
                                    class="flex w-full rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-12 px-4 pr-12 text-sm transition-all"
                                    placeholder="Enter your password" required
                                    type="password" name='password' autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Remember Me -->
                        <div class="flex items-center gap-3">
                            <input
                                class="w-4 h-4 rounded border-slate-300 dark:border-slate-700 text-primary focus:ring-primary bg-white dark:bg-slate-800"
                                id="remember" type="checkbox" />
                            <label
                                class="text-sm font-medium text-slate-600 dark:text-slate-400 select-none"
                                for="remember">Remember me for 30 days</label>
                        </div>
                        <!-- CTA Button -->
                        <button
                            class="w-full flex items-center justify-center bg-primary hover:bg-primary/90 text-white rounded-lg h-12 text-sm font-bold tracking-wide transition-all shadow-lg shadow-primary/20"
                            type="submit">
                            Sign In
                        </button>
                    </form>

                </div>
                <!-- Footer Link -->
                <p
                class="mt-8 text-center text-sm text-slate-600 dark:text-slate-400">
                Don't have an account?
                    <a class="font-bold text-primary hover:underline"
                    href="{{ route('register') }}">Sign up for free</a>
                </p>
            </div>
        </div>
</div>


</x-guest-layout>
