<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; letter-spacing: -0.02em; }
    </style>
</head>
<body class="bg-[#F8FAFC] antialiased">

    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        
        <div class="w-full max-w-xl mb-8 relative flex items-center justify-center">
            <a href="javascript:history.back()" class="absolute left-0 h-10 w-10 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-slate-400 hover:text-blue-600 hover:border-blue-100 transition-all shadow-sm">
                <i class="fas fa-chevron-left text-xs"></i>
            </a>
            
            <div class="text-center">
                <h1 class="text-xl font-extrabold text-slate-900 leading-tight">Mon Profil</h1>
            </div>
        </div>

        <div class="w-full max-w-xl bg-white rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-8 md:p-12">
            <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="text-[10px] font-bold text-slate-400 uppercase ml-1">Prénom</label>
                        <input type="text" name="prenom" value="{{ $user->prenom ?? '' }}" 
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-50 rounded-xl text-sm font-semibold text-slate-700 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/5 transition-all outline-none">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-[10px] font-bold text-slate-400 uppercase ml-1">Nom</label>
                        <input type="text" name="nom" value="{{ $user->nom ?? '' }}" 
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-50 rounded-xl text-sm font-semibold text-slate-700 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/5 transition-all outline-none">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold text-slate-400 uppercase ml-1">Email</label>
                    <div class="relative">
                        <input type="email" name="email" value="{{ $user->email ?? '' }}" 
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-50 rounded-xl text-sm font-semibold text-slate-700 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/5 transition-all outline-none">
                        <i class="fas fa-envelope absolute right-4 top-1/2 -translate-y-1/2 text-slate-300 text-xs"></i>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-[10px] font-bold text-slate-400 uppercase ml-1">Téléphone</label>
                    <div class="relative">
                        <input type="text" name="telephone" value="{{ $user->telephone ?? '' }}" 
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-50 rounded-xl text-sm font-semibold text-slate-700 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/5 transition-all outline-none">
                        <i class="fas fa-phone absolute right-4 top-1/2 -translate-y-1/2 text-slate-300 text-xs"></i>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-slate-900 hover:bg-blue-600 text-white py-4 rounded-2xl font-bold text-xs uppercase tracking-[0.15em] shadow-lg hover:shadow-blue-200 transition-all active:scale-[0.98]">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>

        @if(session('success'))
        <div class="fixed bottom-6 right-6 bg-emerald-500 text-white px-6 py-3 rounded-2xl shadow-lg shadow-emerald-200 flex items-center space-x-3">
            <i class="fas fa-check text-xs"></i>
            <span class="text-xs font-bold">Profil mis à jour</span>
        </div>
        @endif

    </div>

</body>
</html>