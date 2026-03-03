<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EasyColoc Admin Supervision Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7f13ec",
                        "background-light": "#f8f9fc",
                        "background-dark": "#0f0a19",
                        "sidebar-dark": "#130b20",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .sidebar-active { background-color: rgba(127, 19, 236, 0.15); color: #7f13ec; border-right: 4px solid #7f13ec; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 bg-sidebar-dark text-slate-300 flex flex-col shrink-0 border-r border-slate-800/50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">group_work</span>
</div>
<div>
<h1 class="text-white text-xl font-bold leading-tight">EasyColoc</h1>
<p class="text-xs text-slate-500 font-medium tracking-wider uppercase">Admin Panel</p>
</div>
</div>
<nav class="flex-1 mt-6 px-3 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg sidebar-active transition-all group" href="#">
<span class="material-symbols-outlined text-[22px]">dashboard</span>
<span class="font-semibold text-sm">Statistiques</span>
</a>


</nav>
<div class="p-4 border-t border-slate-800">
<a href="{{ route('dashboard') }}" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-800/50 text-slate-300 hover:bg-slate-800 transition-all text-sm font-semibold" href="#">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
                    Retour app
                </a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- Header -->
<header class="h-16 bg-white dark:bg-background-dark/50 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-10 backdrop-blur-md">
<div class="flex-1 max-w-md">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-xl text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Rechercher un utilisateur, une dépense..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:border-slate-800 mx-2"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right hidden sm:block">
<p class="text-xs font-bold text-slate-900 dark:text-slate-100">Admin EasyColoc</p>
<p class="text-[10px] text-slate-500 font-medium uppercase tracking-tight">Super Admin</p>
</div>
<img class="w-10 h-10 rounded-xl object-cover ring-2 ring-primary/10" data-alt="Admin profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVDYwy-SgYQzlOtFnYZVOcD0DevDkf6VC0XRcB5mAB1ebh8mr3TTuHzYeB9YdDQKft7nsBL3KRVqWq3gTQ7fTibt_nWSxw_3axTA4fvCK2fGoBl2vBg6atP08eo_pKfNuSrUHFxFc-_U1ybLdkj046mHEMFuuL8cQvCkwkYlwxPTS0CwUOmHUbf_D_P4LXddtCCOOpfCywOaxN5yLfh99ApYbVHLNbhPHS3z7t3ID6JhqGAZo4kNeAMAX_3WrVA03495bW1kxugNo"/>
</div>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Page Title -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight uppercase">Supervision Globale</h2>
<p class="text-slate-500 font-medium mt-1">Aperçu en temps réel de l'activité de la plateforme.</p>
</div>
<button class="flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-primary/25 hover:bg-primary/90 transition-all">
<span class="material-symbols-outlined text-[20px]">download</span>
                        Exporter les données
                    </button>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="text-slate-500 font-semibold text-sm">Utilisateurs</p>
<span class="bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400 text-[11px] font-bold px-2 py-1 rounded-full">+12%</span>
</div>
<p class="text-3xl font-black text-slate-900 dark:text-slate-100 mt-2">{{ $usersCount }}</p>
<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 70%"></div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="text-slate-500 font-semibold text-sm">Colocations</p>
<span class="bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400 text-[11px] font-bold px-2 py-1 rounded-full">+5%</span>
</div>
<p class="text-3xl font-black text-slate-900 dark:text-slate-100 mt-2">{{ $colocationsCount }}</p>
<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 45%"></div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="text-slate-500 font-semibold text-sm">Dépenses</p>
<span class="bg-rose-100 text-rose-700 dark:bg-rose-500/10 dark:text-rose-400 text-[11px] font-bold px-2 py-1 rounded-full">-2%</span>
</div>
<p class="text-3xl font-black text-slate-900 dark:text-slate-100 mt-2">€{{ $expensesCount }}</p>
<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 85%"></div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start">
<p class="text-slate-500 font-semibold text-sm">Bannis</p>
<span class="bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400 text-[11px] font-bold px-2 py-1 rounded-full">0%</span>
</div>
<p class="text-3xl font-black text-slate-900 dark:text-slate-100 mt-2">12</p>
<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
<div class="bg-rose-500 h-full rounded-full" style="width: 5%"></div>
</div>
</div>
</div>
<!-- User Management Table -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">Gestion des Utilisateurs</h3>
<div class="flex items-center gap-2">
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
<span class="material-symbols-outlined text-slate-500">filter_list</span>
</button>
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
<span class="material-symbols-outlined text-slate-500">more_vert</span>
</button>
</div>
</div>
<div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800">

<table class="w-full text-left border-collapse">

<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-[11px] font-bold uppercase tracking-wider">
    <th class="px-6 py-4">ID</th>
    <th class="px-6 py-4">Utilisateur</th>
    <th class="px-6 py-4">Email</th>
    <th class="px-6 py-4">Rôle</th>
    <th class="px-6 py-4">Réputation</th>
    <th class="px-6 py-4">Status</th>
    <th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>

<tbody class="divide-y divide-slate-100 dark:divide-slate-800">

@forelse($users as $user)

<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">

    <!-- ID -->
    <td class="px-6 py-4 text-sm font-medium text-slate-400">
        #{{ $user->id }}
    </td>

    <!-- User -->
    <td class="px-6 py-4">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center font-bold text-xs">
                {{ strtoupper(substr($user->name,0,1)) }}
            </div>
            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">
                {{ $user->name }}
            </span>
        </div>
    </td>

    <!-- Email -->
    <td class="px-6 py-4 text-sm text-slate-500 font-medium">
        {{ $user->email }}
    </td>

    <!-- Role -->
    <td class="px-6 py-4">
        @if($user->role === 'admin')
            <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full uppercase">
                Admin
            </span>
        @else
            <span class="bg-slate-100 text-slate-600 text-xs font-bold px-3 py-1 rounded-full uppercase">
                User
            </span>
        @endif
    </td>

    <!-- Reputation -->
    <td class="px-6 py-4 text-sm font-bold 
        {{ $user->reputation >= 0 
            ? 'text-emerald-600 dark:text-emerald-400' 
            : 'text-red-600 dark:text-red-400' }}">

        {{ $user->reputation >= 3 ? 'Excellent' :
           ($user->reputation >= 0 ? 'Bon' : 'Faible') }}

        ({{ $user->reputation }})
    </td>

    <!-- Status -->
    <td class="px-6 py-4">
        @if($user->is_banned)
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                <span class="text-xs font-bold text-red-600 uppercase">
                    Banni
                </span>
            </div>
        @else
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                <span class="text-xs font-bold text-emerald-600 uppercase">
                    Actif
                </span>
            </div>
        @endif
    </td>

    <!-- Actions -->
    <td class="px-6 py-4 text-right">
        <div class="flex justify-end gap-2">

            @if(!$user->is_banned)
                <form action="{{ route('admin.users.ban', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="text-xs font-bold text-red-600 hover:underline">
                        Bannir
                    </button>
                </form>
            @else
                <form action="{{ route('admin.users.unban', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="text-xs font-bold text-emerald-600 hover:underline">
                        Débannir
                    </button>
                </form>
            @endif

        </div>
    </td>

</tr>

@empty

<tr>
    <td colspan="7" class="px-6 py-10 text-center text-slate-400">
        Aucun utilisateur trouvé.
    </td>
</tr>

@endforelse

</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</body></html>