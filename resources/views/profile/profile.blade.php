<x-app-layout>

<main class="flex-1 overflow-y-auto p-8">
<div class="max-w-4xl mx-auto space-y-8">
<!-- Section 1: Personal Info -->
<section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-8">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">badge</span>
<h3 class="text-lg font-bold">Informations personnelles</h3>
</div>
<form class="space-y-6" action="{{ route('profile.update') }}"  method='POST'>
    @csrf
    @method('PATCH')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Nom complet</label>
<input class="w-full rounded-xl border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary px-4 py-3" placeholder="Ex: Jean Dupont" type="text" name="name" value="{{ $user->name }}"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Adresse Email</label>
<input class="w-full rounded-xl border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary px-4 py-3" placeholder="jean@example.com" type="email" name="email" value="{{ $user->email }}"/>
</div>
</div>
<div class="flex justify-end pt-2">
<button type='submit' class="bg-primary hover:bg-primary/90 text-white font-bold px-8 py-3 rounded-xl transition-all shadow-lg shadow-primary/20" type="button">
                                    Mettre à jour
                                </button>
</div>
</form>
</section>
<!-- Section 2: Security -->
<section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-8">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">security</span>
<h3 class="text-lg font-bold">Sécurité du compte</h3>
</div>
<div class="flex flex-col md:flex-row items-start md:items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-800 gap-4">
<div class="flex items-center gap-4">
<div class="p-3 bg-amber-100 dark:bg-amber-900/30 text-amber-600 rounded-full">
<span class="material-symbols-outlined">mail_lock</span>
</div>
<div>
<p class="text-sm font-bold">Vérification de l'email</p>
<div class="flex items-center gap-2 mt-1">
<span class="text-xs px-2 py-0.5 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 rounded-full font-medium">Non vérifié</span>
<p class="text-xs text-slate-500">Sécurisez votre compte pour accéder à toutes les fonctionnalités.</p>
</div>
</div>
</div>
<button class="w-full md:w-auto px-6 py-2 border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold rounded-xl transition-all text-sm">
                                Vérifier mon email
                            </button>
</div>
</section>
<!-- Section 3: Danger Zone -->
<section class="bg-red-50 dark:bg-red-950/20 rounded-xl shadow-sm border border-red-100 dark:border-red-900/30 p-8">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-red-600">warning</span>
<h3 class="text-lg font-bold text-red-700 dark:text-red-400">Zone dangereuse</h3>
</div>
<div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
<div class="max-w-md">
<p class="text-sm text-red-800 dark:text-red-300 font-medium">La suppression de votre compte est définitive.</p>
<p class="text-xs text-red-600 dark:text-red-400/70 mt-1">Toutes vos données de colocation, dépenses et historiques seront supprimés sans possibilité de récupération.</p>
</div>
<button class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-3 rounded-xl transition-all shadow-md">
                                Supprimer mon compte
                            </button>
</div>
</section>
<div class="w-full  flex items-center justify-end">

<x-logout>
   <button 
        @click="open = true"
        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-xl transition">
        Logout
    </button>
</x-logout>


</div>
</div>
</main>
</x-app-layout>