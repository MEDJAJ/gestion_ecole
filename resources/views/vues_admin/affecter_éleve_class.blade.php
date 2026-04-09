<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affectation Élèves | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.2s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
        .sidebar-link.active-link { background: #2563eb; color: white; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); }
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        .custom-checkbox:checked { background-color: #2563eb; border-color: #2563eb; }
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
                <a href="/admin" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                    <i class="fas fa-th-large w-4 text-[10px]"></i> <span>Tableau de bord</span>
                </a>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mt-4 mb-1 tracking-widest">Gestion Pédagogique</p>
                
                <div class="space-y-0.5 mb-3">
                    <a href="/class" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                        <i class="fas fa-school w-4 text-[10px]"></i> <span>Classes</span>
                    </a>
                    <a href="/matiére" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                        <i class="fas fa-book w-4 text-[10px]"></i> <span>Matières</span>
                    </a>
                    <a href="/prof" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                        <i class="fas fa-chalkboard-teacher w-4 text-[10px]"></i> <span>Professeurs</span>
                    </a>
                    <a href="/éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                        <i class="fas fa-user-graduate w-4 text-[10px]"></i> <span>Élèves</span>
                    </a>
                </div>

                <div class="bg-slate-50/50 rounded-xl p-1.5 space-y-0.5 border border-slate-100">
                    <p class="text-[8px] font-bold text-blue-500 uppercase px-1.5 mb-1 tracking-tighter italic">Liaisons & Affectations</p>
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px] text-blue-500"></i> <span class="text-[11px] font-semibold">Associer Matières</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom font-semibold">
                        <i class="fas fa-user-plus w-4 text-[9px] text-blue-500"></i> <span class="text-[11px]">Affecter Professeurs</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link active-link flex items-center space-x-2 px-2 py-1.5 rounded-lg transition-custom font-bold">
                        <i class="fas fa-users-cog w-4 text-[9px]"></i> <span class="text-[11px]">Affecter Élèves</span>
                    </a>
                </div>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mt-4 mb-1 tracking-widest">Suivi & Planning</p>
                <a href="/note_classement" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                    <i class="fas fa-chart-bar w-4 text-[10px]"></i> <span>Notes & Classement</span>
                </a>
                <a href="/emplois_temps" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom font-medium">
                    <i class="fas fa-calendar-alt w-4 text-[10px]"></i> <span>Emploi du temps</span>
                </a>
            </nav>

           <div class="p-3 border-t border-slate-100">
           <div class="p-3 border-t border-slate-100 relative">
    <div id="profileMenu" class="hidden absolute bottom-full left-3 right-3 mb-2 bg-white rounded-2xl border border-slate-100 shadow-xl z-50 overflow-hidden animate-fade-in-up">
       <div class="p-2 space-y-1">
    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl hover:bg-blue-50 text-slate-700 transition-colors group">
        <i class="fas fa-user-edit text-[10px] text-blue-500 group-hover:scale-110 transition-transform"></i>
        <span class="text-[12px] font-bold">Modifier profil</span>
    </a>

    <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl hover:bg-blue-50 text-slate-700 transition-colors group">
        <i class="fas fa-language text-[10px] text-indigo-500"></i>
        <span class="text-[12px] font-bold">Changer langue</span>
    </a>

    <div class="my-1 border-t border-slate-100"></div>

    <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="flex items-center space-x-3 px-3 py-2.5 rounded-xl hover:bg-red-50 text-red-600 transition-colors group">
            <i class="fas fa-sign-out-alt text-[10px] group-hover:-translate-x-1 transition-transform"></i>
            <span class="text-[12px] font-bold">Déconnexion</span>
        </a>
    </form>
</div>
    </div>

    <button id="profileBtn" class="w-full flex items-center justify-between px-4 py-3 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-100 hover:bg-blue-50/40 transition-all duration-300 group active:scale-[0.98]">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                <i class="fas fa-user text-[11px]"></i>
            </div>
            <span class="font-bold text-slate-700 group-hover:text-blue-700 transition-colors text-[12px]">Mon Profil</span>
        </div>
        <i id="profileArrow" class="fas fa-chevron-up text-[8px] text-slate-300 transition-transform duration-300"></i>
    </button>
</div>
            </div>
        </aside>

       <main class="flex-1 p-5 lg:p-6 overflow-y-auto bg-slate-50">
    <div class="max-w-5xl mx-auto">
        
        <form action="{{ route('affectation.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded-[1.5rem] p-5 shadow-sm border border-slate-200 mb-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-xl font-black text-slate-800 tracking-tight uppercase">Affectation de Masse</h1>
                        <p class="text-slate-500 text-[11px] mt-0.5 italic">Sélectionnez les élèves et choisissez leur classe de destination.</p>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <div class="relative min-w-[220px]">
                            <select name="classe_id" required class="w-full bg-slate-50 border border-slate-200 py-2.5 pl-3 pr-8 rounded-xl font-bold text-slate-700 outline-none focus:ring-2 focus:ring-blue-500/10 appearance-none cursor-pointer text-[12px]">
                                <option value="">Choisir Classe Destination</option>
                                @foreach($classes as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->nom_classe }} ({{ $classe->niveau }})</option>
                                @endforeach
                            </select>
                            <i class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[10px]"></i>
                        </div>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-bold text-[12px] shadow-lg shadow-blue-100 transition-all flex items-center space-x-2 active:scale-95">
                            <i class="fas fa-user-plus"></i>
                            <span>Affecter la sélection</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[1.2rem] border border-slate-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50/30">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 text-blue-600 p-2 rounded-lg text-[10px]">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <span class="text-[10px] font-black text-slate-600 uppercase tracking-widest">Élèves en attente d'affectation</span>
                    </div>
                    <span class="bg-orange-100 text-orange-600 text-[9px] font-black px-2 py-1 rounded-md">
                        {{ $elevesSansClasse->count() }} DISPONIBLES
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50/50">
                            <tr class="text-[9px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-50">
                                <th class="px-6 py-4 w-10">
                                    <input type="checkbox" id="selectAll" class="w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500 transition-all cursor-pointer">
                                </th>
                                <th class="px-3 py-4">Nom Complet</th>
                                <th class="px-6 py-4 text-center">Identifiant</th>
                                <th class="px-6 py-4 text-center">Rôle</th>
                                <th class="px-6 py-4 text-right">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @forelse($elevesSansClasse as $eleve)
                            <tr class="hover:bg-blue-50/30 transition-all group">
                                <td class="px-6 py-3.5">
                                    <input type="checkbox" name="user_ids[]" value="{{ $eleve->id }}" class="eleve-checkbox w-4 h-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center text-slate-600 font-black text-[10px] mr-3 border border-white shadow-sm">
                                            {{ strtoupper(substr($eleve->nom, 0, 1)) }}{{ strtoupper(substr($eleve->prenom, 0, 1)) }}
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-bold text-slate-700 text-[13px] tracking-tight">{{ $eleve->nom }} {{ $eleve->prenom }}</span>
                                            <span class="text-[9px] text-slate-400 font-medium">{{ $eleve->email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-3.5 text-center">
                                    <span class="text-[10px] font-mono text-slate-400">#USR-{{ $eleve->id }}</span>
                                </td>
                                <td class="px-6 py-3.5 text-center">
                                    <span class="text-[9px] font-bold text-blue-500 bg-blue-50 px-2 py-0.5 rounded-md border border-blue-100 uppercase">{{ $eleve->role }}</span>
                                </td>
                                <td class="px-6 py-3.5 text-right">
                                    <span class="inline-flex items-center text-[9px] font-bold text-orange-500 bg-orange-50 px-2 py-1 rounded-lg border border-orange-100 italic">
                                        <span class="w-1 h-1 rounded-full bg-orange-400 mr-1.5 animate-pulse"></span>
                                        Non-assigné
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-20 text-center">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-check-circle text-emerald-200 text-4xl mb-4"></i>
                                        <p class="text-slate-400 font-bold text-[11px] uppercase tracking-[0.2em]">Tous les élèves sont assignés !</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center">
                    <p class="text-[10px] text-slate-400 font-medium italic">Astuce : Utilisez la case en haut pour tout sélectionner.</p>
                </div>
            </div>
        </form>
    </div>
</main>


    </div>

    <script>
    
    document.getElementById('selectAll').onclick = function() {
        let checkboxes = document.querySelectorAll('.eleve-checkbox');
        for (let checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
      const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');
    const profileArrow = document.getElementById('profileArrow');

   
    profileBtn.addEventListener('click', (e) => {
        e.stopPropagation(); 
        const isHidden = profileMenu.classList.contains('hidden');
        
        if (isHidden) {
            profileMenu.classList.remove('hidden');
            profileArrow.style.transform = 'rotate(180deg)';
        } else {
            profileMenu.classList.add('hidden');
            profileArrow.style.transform = 'rotate(0deg)';
        }
    });

    
    document.addEventListener('click', (e) => {
        if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
            profileMenu.classList.add('hidden');
            profileArrow.style.transform = 'rotate(0deg)';
        }
    });
</script>

</body>
</html>