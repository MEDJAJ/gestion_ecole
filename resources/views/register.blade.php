<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart École | Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <script>
        tailwind.config = { theme: { extend: { colors: { primary: '#0040a1' }, fontFamily: { head: 'Manrope', body: 'Inter' } } } }
    </script>
</head>
<body class="font-body text-slate-900">

    <main class="relative min-h-screen flex items-center justify-center bg-slate-100">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1920&q=80">
            <div class="absolute inset-0 bg-primary/25 backdrop-blur-sm"></div>
        </div>

        <div class="relative z-10 w-full max-w-md bg-white p-8 rounded-2xl shadow-2xl border border-white/20">
            
            <header class="mb-6 text-center">
                <h1 class="font-head text-3xl font-extrabold text-primary uppercase tracking-tight">Smart École</h1>
                <p class="text-slate-500 text-sm mt-1">Créez votre compte en un clic.</p>
            </header>

            <form class="space-y-4" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-3">
                    <input type="text" placeholder="Prénom" name="prenom"
                        class="w-full bg-white border border-slate-200 rounded-lg p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                    <input type="text" placeholder="Nom" name="nom"
                        class="w-full bg-white border border-slate-200 rounded-lg p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                </div>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-3 text-slate-400 text-lg">mail</span>
                    <input type="email" placeholder="Email professionnel" name="email"
                        class="w-full bg-white border border-slate-200 rounded-lg pl-10 p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                </div>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-3 text-slate-400 text-lg">call</span>
                    <input type="tel" placeholder="Téléphone" name="telephone"
                        class="w-full bg-white border border-slate-200 rounded-lg pl-10 p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                </div>

                <div class="grid grid-cols-3 gap-2">
                    @if(!$hasAdmin)
                    <label class="cursor-pointer">
                        <input type="radio" name="role" value="ADMIN" class="peer sr-only">
                        <div class="p-2 text-center rounded-lg border border-slate-200 bg-white peer-checked:border-primary peer-checked:bg-primary/5 text-[10px] font-bold text-slate-500 peer-checked:text-primary transition-all">ADMIN</div>
                    </label>
                    @endif
                    <label class="cursor-pointer">
                        <input type="radio" name="role" value="ELEVE" checked class="peer sr-only">
                        <div class="p-2 text-center rounded-lg border border-slate-200 bg-white peer-checked:border-primary peer-checked:bg-primary/5 text-[10px] font-bold text-slate-500 peer-checked:text-primary transition-all">ÉLÈVE</div>
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio" name="role" value="PROF" class="peer sr-only">
                        <div class="p-2 text-center rounded-lg border border-slate-200 bg-white peer-checked:border-primary peer-checked:bg-primary/5 text-[10px] font-bold text-slate-500 peer-checked:text-primary transition-all">PROF</div>
                    </label>
                </div>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-3 text-slate-400 text-lg">lock</span>
                    <input type="password" placeholder="Mot de passe" name="password"
                        class="w-full bg-white border border-slate-200 rounded-lg pl-10 p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                </div>

                <button type="submit" 
                    class="w-full bg-primary text-white font-bold py-3.5 rounded-lg hover:bg-primary-dark shadow-lg shadow-primary/20 transition-all active:scale-[0.98] text-sm uppercase tracking-wider">
                    S'inscrire maintenant
                </button>

                <p class="text-center text-slate-500 text-[11px]">
                    Déjà membre ? <a href="/login" class="text-primary font-bold hover:underline">Se connecter</a>
                </p>
            </form>
        </div>
    </main>

</body>
</html>