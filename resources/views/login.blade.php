<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Smart École</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <script>
        tailwind.config = { 
            theme: { 
                extend: { 
                    colors: { primary: '#0040a1' }, 
                    fontFamily: { head: 'Manrope', body: 'Inter' } 
                } 
            } 
        }
    </script>
    <style>
        .fade-in { animation: fadeIn 0.6s ease-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-body text-slate-900 bg-white overflow-hidden">

    <div class="flex h-screen w-full">
        
        <div class="hidden md:block md:w-1/2 lg:w-3/5 relative">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=1600" 
                 class="absolute inset-0 w-full h-full object-cover" alt="Éducation">
            <div class="absolute inset-0 bg-primary/30 backdrop-blur-[2px]"></div>
            
            <div class="absolute bottom-12 left-12 right-12">
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 max-w-lg">
                    <h2 class="text-3xl font-head font-extrabold text-white mb-3 uppercase tracking-tight">Smart École</h2>
                    <p class="text-blue-50/90 leading-relaxed text-sm">Accédez à votre espace personnel pour gérer vos cours, vos notes et votre progression académique.</p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-2/5 flex items-center justify-center p-8 md:p-16 bg-white">
            <div class="w-full max-w-sm fade-in">
                @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-xl flex items-start space-x-3 fade-in">
        <span class="material-symbols-outlined text-emerald-500">check_circle</span>
        <p class="text-emerald-700 text-xs font-medium leading-relaxed">
            {{ session('success') }}
        </p>
    </div>
@endif
@if($errors->has('email'))
    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl flex items-start space-x-3 fade-in">
        <span class="material-symbols-outlined text-red-500">error</span>
        <p class="text-red-700 text-xs font-medium leading-relaxed">
            {{ $errors->first('email') }}
        </p>
    </div>
@endif
                <header class="mb-10 text-center md:text-left">
                    <h1 class="font-head text-3xl font-extrabold text-primary mb-2">Bon retour !</h1>
                    <p class="text-slate-500 text-sm">Veuillez entrer vos identifiants pour continuer.</p>
                </header>

                <form action="{{route('loginn')}}" class="space-y-5" method="POST">
                    @csrf
                    <div class="space-y-1.5">
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Adresse Email</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-3 text-slate-400 text-lg group-focus-within:text-primary transition-colors">mail</span>
                            <input type="email" placeholder="nom@ecole.com"  name="email"
                                   class="w-full bg-white border border-slate-200 rounded-xl pl-10 p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Mot de passe</label>
                            <a href="#" class="text-[10px] font-bold text-primary hover:underline">Oublié ?</a>
                        </div>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-3 text-slate-400 text-lg group-focus-within:text-primary transition-colors">lock</span>
                            <input type="password" placeholder="••••••••"  name="password"
                                   class="w-full bg-white border border-slate-200 rounded-xl pl-10 p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                        </div>
                        @error('password')
        <p class="text-[10px] text-red-500 font-bold ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                                class="w-full bg-primary text-white font-bold py-3.5 rounded-xl shadow-lg shadow-primary/20 hover:shadow-primary/30 transform transition-all active:scale-[0.98] text-sm uppercase tracking-wider">
                            Se connecter
                        </button>
                    </div>
                </form>

                <div class="mt-12 space-y-4 text-center">
                    <p class="text-slate-400 text-xs">
                        Pas encore de compte ? 
                        <a href="/register" class="text-primary font-bold hover:underline">Créer un compte</a>
                    </p>
                    
                    <a href="/" class="inline-flex items-center text-[10px] font-bold text-slate-400 hover:text-primary uppercase tracking-tighter transition-colors group">
                        <span class="material-symbols-outlined text-sm mr-1 group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Retour à l'accueil
                    </a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>