<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Professeurs | Smart École</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.2s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
        .sidebar-link.active { background: #2563eb; color: white; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); }
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        
        .modal-active { display: flex !important; animation: fadeIn 0.2s ease forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(-5px); } to { opacity: 1; transform: translateY(0); } }

    .transition-custom { transition: all 0.2s ease; }
    .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
    .sidebar-link.active { background: #2563eb; color: white; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); }
    .sidebar-scroll::-webkit-scrollbar { width: 3px; }
    .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    
    .modal-active { display: flex !important; animation: fadeIn 0.2s ease forwards; }
    
    @keyframes fadeIn { 
        from { opacity: 0; } 
        to { opacity: 1; } 
    }

    /* Animation pour le menu centré */
    .status-modal-animate {
        animation: zoomIn 0.2s ease-out forwards;
    }

    @keyframes zoomIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }

    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900 text-xs">

    <div class="flex min-h-screen">
        <aside class="w-56 bg-white border-r border-slate-200 hidden lg:flex flex-col sticky top-0 h-screen z-40">
            <div class="p-4 flex items-center space-x-2">
                <div class="bg-blue-600 p-1.5 rounded-lg text-white shadow-md">
                    <i class="fas fa-graduation-cap text-xs"></i>
                </div>
                <span class="text-lg font-bold text-slate-800 tracking-tight">Smart <span class="text-blue-600">Admin</span></span>
            </div>

            <nav class="flex-1 px-3 space-y-0.5 overflow-y-auto sidebar-scroll">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mb-1 mt-2 tracking-widest">Main Menu</p>
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
                    <a href="/prof" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-custom">
                        <i class="fas fa-chalkboard-teacher w-4 text-[10px]"></i> <span class="font-medium">Professeurs</span>
                    </a>
                    <a href="/éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-graduate w-4 text-[10px]"></i> <span class="font-medium">Élèves</span>
                    </a>
                </div>

                <div class="bg-slate-50/50 rounded-xl p-1.5 space-y-0.5 border border-slate-100">
                    <p class="text-[8px] font-bold text-blue-500 uppercase px-1.5 mb-1 tracking-tighter italic">Liaisons & Affectations</p>
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px] text-blue-500"></i> <span class="text-[11px] font-semibold">Associer Matières</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-plus w-4 text-[9px] text-blue-500"></i> <span class="text-[11px] font-semibold">Affecter Profs</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-users-cog w-4 text-[9px] text-blue-500"></i> <span class="text-[11px] font-semibold">Affecter Élèves</span>
                    </a>
                </div>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-2 mt-4 mb-1 tracking-widest">Suivi & Planning</p>
                <a href="/note_classement" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                    <i class="fas fa-chart-bar w-4 text-[10px]"></i> <span class="font-medium">Notes & Classement</span>
                </a>
                <a href="/emplois_temps" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom">
                    <i class="fas fa-calendar-alt w-4 text-[10px]"></i> <span class="font-medium">Emploi du temps</span>
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

        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <header class="bg-white border-b border-slate-200 h-12 flex items-center justify-between px-6 sticky top-0 z-30">
                <h2 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Corps Enseignant</h2>
                <img src="https://ui-avatars.com/api/?name=Admin+Smart&background=2563eb&color=fff" class="h-7 w-7 rounded-md" alt="Avatar">
            </header>

            <div class="p-6 overflow-y-auto">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mb-6">
                    <div>
                        <h1 class="text-xl font-black text-slate-900 tracking-tight">Gestion des Professeurs</h1>
                        <p class="text-slate-500 text-[11px]">Administrez les comptes et les spécialités.</p>
                    </div>
                    <button onclick="openModal('modalAddTeacher')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-[11px] font-bold shadow-md shadow-blue-100 flex items-center transition-all transform hover:-translate-y-0.5">
                        <i class="fas fa-user-plus mr-1.5"></i> Recruter un Professeur
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm">
 <table class="w-full text-left text-[12px]">
    <thead>
        <tr class="bg-slate-50 border-b border-slate-100">
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Identité & Contact</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Matières</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Status</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Date d'inscription</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-slate-50">
        @foreach($professeurs as $prof)
        <tr class="hover:bg-slate-50 transition-colors">
            <td class="px-6 py-3">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold mr-3 italic text-[10px]">
                        {{ strtoupper(substr($prof->nom, 0, 1)) }}{{ strtoupper(substr($prof->prenom, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-bold text-slate-700 leading-none">{{ $prof->nom }} {{ $prof->prenom }}</p>
                        <p class="text-[10px] text-slate-400 italic font-medium mt-1">{{ $prof->email }}</p>
                    </div>
                </div>
            </td>
            
            <td class="px-6 py-3">
                <div class="flex flex-wrap gap-1">
                    @forelse($prof->matieres as $matiere)
                        <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[9px] font-black rounded border border-blue-100 uppercase">
                            {{ $matiere->nom_matiere }}
                        </span>
                    @empty
                        <span class="text-slate-300 italic text-[10px]">Non assigné</span>
                    @endforelse
                </div>
            </td>

            <td class="px-6 py-3">
                <button type="button" onclick="toggleStatusMenu(event, '{{ $prof->id }}')"
                    class="flex items-center px-2 py-1 rounded-lg transition-all font-bold text-[9px] uppercase border
                    {{ strtolower($prof->statut) == 'approved' ? 'bg-emerald-50 text-emerald-600 border-emerald-100' : '' }}
                    {{ strtolower($prof->statut) == 'pending' ? 'bg-amber-50 text-amber-600 border-amber-100' : '' }}
                    {{ strtolower($prof->statut) == 'rejected' ? 'bg-red-50 text-red-600 border-red-100' : '' }}">
                    <i class="fas {{ strtolower($prof->statut) == 'approved' ? 'fa-check-circle' : (strtolower($prof->statut) == 'pending' ? 'fa-clock' : 'fa-times-circle') }} mr-1.5"></i>
                    {{ $prof->statut }}
                </button>

                <div id="status-menu-{{ $prof->id }}" class="hidden fixed inset-0 z-[150] items-center justify-center bg-slate-900/20 backdrop-blur-[2px]">
                    <div class="bg-white w-48 rounded-2xl shadow-2xl border border-slate-100 p-4">
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Statut</p>
                            <button type="button" onclick="toggleStatusMenu(event, '{{ $prof->id }}')" class="text-slate-300 hover:text-red-500">
                                <i class="fas fa-times text-[10px]"></i>
                            </button>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            @foreach(['approved', 'pending', 'rejected'] as $status)
                                @if(strtolower($prof->statut) !== $status)
                                    <form action="{{ route('professeurs.updateStatus', $prof->id) }}" method="POST" class="m-0">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="statut" value="{{ $status }}">
                                        <button type="submit" class="w-full text-left px-3 py-2 rounded-lg text-[10px] font-bold uppercase transition-all
                                            {{ $status == 'approved' ? 'bg-emerald-50 text-emerald-700' : ($status == 'pending' ? 'bg-amber-50 text-amber-700' : 'bg-red-50 text-red-700') }}">
                                            {{ $status }}
                                        </button>
                                    </form>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </td>

            <td class="px-6 py-3 text-[11px] text-slate-500 font-medium italic">
                {{ $prof->created_at->format('d M Y') }}
            </td>

            <td class="px-6 py-3 text-right">
                <div class="flex justify-end items-center space-x-1">
                   <a href="#" class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">
                        <i class="fas fa-eye text-[10px]"></i>
                    </a>

                <button type="button" onclick="openModal('modalEditTeacher-{{ $prof->id }}')" 
                        class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <i class="fas fa-edit text-[10px]"></i>
                    </button>

                  
                </div>

                <div id="modalEditTeacher-{{ $prof->id }}" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[200] p-4 text-left">
                    <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl p-6 transform transition-all">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-black text-slate-800 tracking-tight">Modifier Professeur</h3>
                            <button type="button" onclick="closeModal('modalEditTeacher-{{ $prof->id }}')" class="text-slate-400 hover:text-red-500">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        
                      <form action="{{ route('professeurs.update', $prof->id) }}" method="POST" class="space-y-3">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-2 gap-3">
        <div>
            <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1 ml-1">Nom</label>
            <input type="text" name="nom" value="{{ $prof->nom }}" required 
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] font-medium transition-all">
        </div>
        <div>
            <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1 ml-1">Prénom</label>
            <input type="text" name="prenom" value="{{ $prof->prenom }}" required 
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] font-medium transition-all">
        </div>
    </div>

    <div>
        <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1 ml-1">Email Professionnelle</label>
        <input type="email" name="email" value="{{ $prof->email }}" required 
            class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] font-medium transition-all">
    </div>

    <div>
        <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1 ml-1">Numéro de Téléphone</label>
        <div class="relative">
            <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                <i class="fas fa-phone text-[10px]"></i>
            </span>
            <input type="text" name="telephone" value="{{ $prof->telephone }}" 
                placeholder="06 00 00 00 00"
                class="w-full pl-8 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] font-medium transition-all">
        </div>
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow-lg shadow-blue-100 mt-2 uppercase text-[10px] tracking-widest transition-all transform active:scale-[0.98]">
        <i class="fas fa-save mr-2"></i> Mettre à jour les informations
    </button>
</form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
                </div>
            </div>
        </main>
    </div>

    

    <div id="modalAddTeacher" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
        <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl p-6 transform transition-all">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-2 text-blue-600">
                    <i class="fas fa-user-plus"></i>
                    <h3 class="text-lg font-black text-slate-800 tracking-tight">Nouveau Professeur</h3>
                </div>
                <button onclick="closeModal('modalAddTeacher')" class="text-slate-400 hover:text-red-500 transition-colors"><i class="fas fa-times text-xs"></i></button>
            </div>
            
            <form class="space-y-3">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Nom</label>
                        <input type="text" placeholder="Nom" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[13px] font-medium">
                    </div>
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Prénom</label>
                        <input type="text" placeholder="Prénom" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[13px] font-medium">
                    </div>
                </div>

                <div>
                    <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Email Professionnelle</label>
                    <input type="email" placeholder="prof@ecole.com" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[13px] font-medium">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Mot de passe</label>
                        <input type="password" placeholder="••••••••" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[13px] font-medium">
                    </div>
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Spécialité</label>
                        <select class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[13px] font-medium">
                            <option value="">Sélectionner...</option>
                            <option>Mathématiques</option>
                            <option>Français</option>
                            <option>Physique-Chimie</option>
                            <option>SVT</option>
                            <option>Anglais</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow-lg mt-2 uppercase text-[10px] tracking-widest transition-all">
                    Valider l'inscription
                </button>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).classList.add('modal-active'); }
        function closeModal(id) { document.getElementById(id).classList.remove('modal-active'); }
   function toggleStatusMenu(event, id) {
    event.stopPropagation();
    const menu = document.getElementById('status-menu-' + id);
    
   
    if(menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('flex');
    } else {
        menu.classList.add('hidden');
        menu.classList.remove('flex');
    }
}

function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.getElementById(id).classList.add('flex');
}

function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
    document.getElementById(id).classList.remove('flex');
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