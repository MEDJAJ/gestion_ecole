<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Matières | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.2s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
        .sidebar-link.active-link { background: #2563eb; color: white; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); }
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
       @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(20px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-fade-in-right { animation: fadeInRight 0.3s ease-out forwards; }
   
   
   </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900 text-[13px]">

    <div class="flex min-h-screen">
        <aside class="w-56 bg-white border-r border-slate-200 hidden lg:flex flex-col sticky top-0 h-screen z-40">
            <div class="p-4 flex items-center space-x-2">
                <div class="bg-blue-600 p-1.5 rounded-lg text-white shadow-md">
                    <i class="fas fa-graduation-cap text-xs"></i>
                </div>
                <span class="text-lg font-bold text-slate-800 tracking-tight">Smart <span class="text-blue-600">Admin</span></span>
            </div>

            <nav class="flex-1 px-3 space-y-0.5 overflow-y-auto sidebar-scroll">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mb-1 tracking-widest">Main Menu</p>
                <a href="/admin" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                    <i class="fas fa-th-large w-4 text-[10px]"></i> <span class="font-semibold">Tableau de bord</span>
                </a>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mt-4 mb-1 tracking-widest">Gestion Pédagogique</p>
                
                <div class="space-y-0.5 mb-3">
                    <a href="/class" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-school w-4 text-[10px]"></i> <span class="font-medium">Classes</span>
                    </a>
                    <a href="/matiére" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-book w-4 text-[10px]"></i> <span class="font-medium">Matières</span>
                    </a>
                    <a href="/prof" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-chalkboard-teacher w-4 text-[10px]"></i> <span class="font-medium">Professeurs</span>
                    </a>
                    <a href="/éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-graduate w-4 text-[10px]"></i> <span class="font-medium">Élèves</span>
                    </a>
                </div>

                <div class="bg-slate-50/50 rounded-xl p-1.5 space-y-0.5 border border-slate-100">
                    <p class="text-[8px] font-bold text-blue-500 uppercase px-1.5 mb-1 tracking-tighter italic">Liaisons & Affectations</p>
                    <a href="/associer_matiére" class="sidebar-link active-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px]"></i> 
                        <span class="text-[11px] font-bold">Associer Matières</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-plus w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Affecter Profs</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-users-cog w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Affecter Élèves</span>
                    </a>
                </div>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mt-4 mb-1 tracking-widest">Suivi & Planning</p>
                <a href="/note_classement" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                    <i class="fas fa-chart-bar w-4 text-[10px]"></i> <span class="font-medium text-[12px]">Notes & Classement</span>
                </a>
                <a href="/emplois_temps" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                    <i class="fas fa-calendar-alt w-4 text-[10px]"></i> <span class="font-medium text-[12px]">Emploi du temps</span>
                </a>
            </nav>

            <div class="p-3 border-t border-slate-100">
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-4 text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span class="font-bold text-[12px]">Mon Profil</span>
                </button>
            </div>
        </aside>

    <main class="flex-1 p-6 lg:p-8 overflow-y-auto relative">
    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <h1 class="text-xl font-black text-slate-800 tracking-tight">Configuration des Programmes</h1>
            <p class="text-[11px] text-slate-500 italic">Associez les matières aux classes pour définir le cursus.</p>
        </div>

        <div class="bg-white rounded-[1.5rem] shadow-md border border-slate-100 p-6 lg:p-8">
            <form action="{{ route('association.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-1.5">
                        <label class="flex items-center text-[9px] font-bold text-blue-600 uppercase tracking-widest ml-1">
                            <i class="fas fa-school mr-1.5"></i> Classe
                        </label>
                        <div class="relative group">
                            <select name="classe_id" required class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 font-semibold py-2.5 px-4 rounded-xl focus:bg-white focus:border-blue-500 outline-none transition-all cursor-pointer text-xs">
                                <option value="" disabled selected>Choisir une classe...</option>
                                @foreach($classes as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->nom_classe }} ({{ $classe->niveau }})</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                                <i class="fas fa-chevron-down text-[9px]"></i>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="flex items-center text-[9px] font-bold text-blue-600 uppercase tracking-widest ml-1">
                            <i class="fas fa-book-open mr-1.5"></i> Matière
                        </label>
                        <div class="relative group">
                            <select name="matiere_id" required class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 font-semibold py-2.5 px-4 rounded-xl focus:bg-white focus:border-blue-500 outline-none transition-all cursor-pointer text-xs">
                                <option value="" disabled selected>Choisir une matière...</option>
                                @foreach($matieres as $matiere)
                                    <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere }} [{{ $matiere->code_matiere }}]</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                                <i class="fas fa-chevron-down text-[9px]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow shadow-blue-100 active:scale-[0.98] transition-all flex items-center justify-center space-x-2 uppercase text-[10px] tracking-widest">
                        <span>Confirmer l'association</span>
                        <i class="fas fa-link"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="fixed bottom-6 right-6 z-40">
        <a href="{{ route('association.index') }}" class="flex items-center space-x-3 bg-slate-800 text-white px-5 py-3 rounded-2xl shadow-2xl hover:bg-blue-600 hover:-translate-y-1 transition-all duration-300 group">
            <div class="bg-white/10 group-hover:bg-white/20 p-2 rounded-xl">
                <i class="fas fa-list-ul text-xs"></i>
            </div>
            <div class="flex flex-col items-start">
                <span class="text-[9px] uppercase opacity-60 font-bold tracking-tighter text-blue-200">Consultation</span>
                <span class="text-[11px] font-bold whitespace-nowrap">Voir les classes avec les matières liées</span>
            </div>
        </a>
    </div>

   <div class="fixed bottom-24 right-6 z-50 flex flex-col gap-3 w-80">
    @if(session('success'))
        <div id="toast-success" class="flex items-center justify-between p-4 bg-white border-l-4 border-emerald-500 shadow-xl rounded-r-xl animate-fade-in-right">
            <div class="flex items-center">
                <div class="bg-emerald-100 p-2 rounded-full mr-3 text-emerald-600">
                    <i class="fas fa-check text-xs"></i>
                </div>
                <div class="text-[11px] font-bold text-slate-700">{{ session('success') }}</div>
            </div>
            <button onclick="document.getElementById('toast-success').remove()" class="text-slate-400 hover:text-slate-600 transition-colors ml-4">
                <i class="fas fa-times text-[10px]"></i>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div id="toast-error" class="flex items-center justify-between p-4 bg-white border-l-4 border-red-500 shadow-xl rounded-r-xl animate-fade-in-right">
            <div class="flex items-center">
                <div class="bg-red-100 p-2 rounded-full mr-3 text-red-600">
                    <i class="fas fa-exclamation-triangle text-xs"></i>
                </div>
                <div class="text-[11px] font-bold text-slate-700">{{ session('error') }}</div>
            </div>
            <button onclick="document.getElementById('toast-error').remove()" class="text-slate-400 hover:text-slate-600 transition-colors ml-4">
                <i class="fas fa-times text-[10px]"></i>
            </button>
        </div>
    @endif
</div>
</main>


    </div>

</body>
</html>