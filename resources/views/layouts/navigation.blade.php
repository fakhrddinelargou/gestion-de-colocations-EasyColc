<!--  -->

<!-- <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form> -->

  <aside
          x-data="{ open: false }"  class="w-64 fixed inset-y-0 left-0 bg-white border-r border-slate-200 flex flex-col p-6 z-50">
            <div class="flex items-center gap-3 text-primary mb-10 px-2">
                <span
                    class="material-symbols-outlined text-3xl font-bold">house</span>
                <h1 class="text-xl font-extrabold tracking-tight">EasyColoc</h1>
            </div>
            <nav class="flex-1 space-y-2">
                <a
                    class="flex items-center gap-3 px-4 py-3  rounded-xl transition-colors font-medium {{ request()->routeIs('dashboard') ?   'bg-primary/10 text-primary ' : 'text-slate-600 hover:bg-slate-50'  }}"
                    href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
                <a
                    class="flex items-center gap-3 px-4 py-3 transition-colors  rounded-xl  font-semibold {{ request()->routeIs('colocations') ?   'bg-primary/10 text-primary ' : 'text-slate-600 hover:bg-slate-50'  }}"
                    href="{{ route('colocations') }}">
                    <span class="material-symbols-outlined">group</span>
                    Colocations
                </a>
                <a
                    class="flex items-center gap-3 px-4 py-3  rounded-xl transition-colors font-medium {{ request()->routeIs('profile') ?   'bg-primary/10 text-primary ' : 'text-slate-600 hover:bg-slate-50'  }}"
                    href="{{ route('profile.edit') }}">
                    <span class="material-symbols-outlined">person</span>
                    Profile
                
                </a>
            </nav>
            <div
                class="mt-auto p-4 bg-slate-50 border border-slate-100 rounded-xl">
                <div class="flex justify-between items-center mb-2">
                    <span
                        class="text-xs font-bold text-slate-500 uppercase tracking-wider">Votre
                        réputation</span>
                    <span class="text-xs font-bold text-primary">+0
                        Points</span>
                </div>
                <div
                    class="w-full bg-slate-200 h-1.5 rounded-full overflow-hidden">
                    <div class="bg-primary h-full w-[10%]"></div>
                </div>
            </div>
        </aside>