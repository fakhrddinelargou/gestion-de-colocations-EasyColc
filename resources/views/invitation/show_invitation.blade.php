<!DOCTYPE html>

<html lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7f13ec",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191022",
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
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display transition-colors duration-300">
<div class="flex-1 flex flex-col items-center justify-center p-6 @container">
<!-- Header / Logo Section -->
<div class="mb-8 flex flex-col items-center gap-3">
<div class="flex items-center justify-center w-12 h-12 bg-primary rounded-xl text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-3xl">share</span>
</div>
<h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 tracking-tight">EasyColoc</h1>
</div>
<!-- Main Invitation Card -->
<div class="w-full max-w-md bg-white dark:bg-slate-900 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 dark:border-slate-800 p-8 flex flex-col items-center text-center">
<!-- Icon & Status -->
<div class="mb-6">
<div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 dark:bg-primary/20 rounded-xl text-primary mb-4">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">mail</span>
</div>
<h2 class="text-xl font-bold text-slate-900 dark:text-slate-100">Invitation colocation</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">Vous êtes invité à rejoindre</p>
</div>
<!-- Colocation Name Display -->
<div class="w-full py-4 px-6 bg-background-light dark:bg-slate-800 rounded-lg mb-8 border border-slate-50 dark:border-slate-700">
<span class="text-lg font-bold text-primary">{{ $invitation->colocation->name}}</span>
</div>
<!-- Actions -->
<div class="w-full space-y-4">
    <form action="{{ route('invitation.accept' , $invitation->token) }}" method="POST">
        @csrf 
        @method('PATCH')

        <button type="submit" class="w-full flex items-center justify-center h-12 bg-primary hover:bg-primary/90 text-white font-semibold rounded-lg transition-all shadow-md shadow-primary/20">
            Accepter l'invitation
        </button>
    </form>
 
        <form action="{{ route('invitation.decliner'  ,  $invitation->token) }}" method="POST">
             @csrf 
        @method('PATCH')

            <button type="submit" class="w-full h-10 flex items-center justify-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 text-sm font-medium transition-colors">
                Décliner
            </button>
        </form>
</div>
</div>
<!-- Illustration / Background Detail (Optional subtle image) -->
<div class="mt-12 opacity-40">
<div class="w-64 h-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent rounded-full"></div>
</div>
</div>
<!-- Footer -->
<footer class="w-full py-8 px-6 flex flex-col items-center gap-4">
<div class="flex flex-wrap justify-center gap-x-8 gap-y-2">
<a class="text-sm text-slate-400 hover:text-primary transition-colors" href="#">Conditions d'utilisation</a>
<a class="text-sm text-slate-400 hover:text-primary transition-colors" href="#">Confidentialité</a>
<a class="text-sm text-slate-400 hover:text-primary transition-colors" href="#">Aide</a>
</div>
<p class="text-xs text-slate-400">© 2024 EasyColoc. Tous droits réservés.</p>
</footer>
<!-- Decorative background elements -->
<div class="fixed top-0 left-0 -z-10 w-full h-full overflow-hidden pointer-events-none">
<div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px]"></div>
<div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px]"></div>
</div>
</body></html>