<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Élèves | Smart École</title>
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
                    <a href="/éleve" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-custom">
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
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-4 text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span class="font-bold">Mon Profil</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <header class="bg-white border-b border-slate-200 h-12 flex items-center justify-between px-6 sticky top-0 z-30">
                <div class="flex items-center">
                    <span class="font-bold text-slate-800 uppercase tracking-widest text-[10px]">Annuaire des Élèves</span>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin+Smart&background=2563eb&color=fff" class="h-7 w-7 rounded-md" alt="Avatar">
            </header>

            <div class="p-6 overflow-y-auto">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mb-6">
                    <div>
                        <h1 class="text-xl font-black text-slate-900 tracking-tight">Gestion des Élèves</h1>
                        <p class="text-slate-500 text-[11px] italic">Inscrivez et suivez le parcours de vos apprenants.</p>
                    </div>
                    <button onclick="openModal('modalAddStudent')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-[11px] font-bold shadow-md shadow-blue-100 flex items-center transition-all transform hover:-translate-y-0.5">
                        <i class="fas fa-user-plus mr-1.5"></i> Nouvel Élève
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm">
     <table class="w-full text-left text-[12px]">
    <thead>
        <tr class="bg-slate-50/50 border-b border-slate-100">
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Élève</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Classe Actuelle</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Status</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Date d'inscription</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-slate-50">
        @foreach($eleves as $eleve)
        <tr class="hover:bg-slate-50/80 transition-colors">
            <td class="px-6 py-3">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-blue-700 text-white flex items-center justify-center font-bold mr-3 shadow-sm text-[10px]">
                        {{ strtoupper(substr($eleve->nom, 0, 1)) }}{{ strtoupper(substr($eleve->prenom, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-bold text-slate-700 leading-none">{{ $eleve->nom }} {{ $eleve->prenom }}</p>
                        <p class="text-[10px] text-slate-400 tracking-tight mt-1">{{ $eleve->email }}</p>
                    </div>
                </div>
            </td>

            <td class="px-6 py-3">
                @if($eleve->classe)
                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[9px] font-black rounded uppercase border border-slate-200">
                        {{ $eleve->classe->nom_classe }}
                    </span>
                @else
                    <span class="text-slate-300 italic text-[10px]">Non assigné</span>
                @endif
            </td>

            <td class="px-6 py-3">
                <button type="button" onclick="toggleStatusMenu(event, '{{ $eleve->id }}')"
                    class="flex items-center px-2 py-1 rounded-lg transition-all font-bold text-[9px] uppercase border
                    {{ strtolower($eleve->statut) == 'approved' ? 'bg-emerald-50 text-emerald-600 border-emerald-100' : '' }}
                    {{ strtolower($eleve->statut) == 'pending' ? 'bg-amber-50 text-amber-600 border-amber-100' : '' }}
                    {{ strtolower($eleve->statut) == 'rejected' ? 'bg-red-50 text-red-600 border-red-100' : '' }}">
                    
                    <i class="fas {{ strtolower($eleve->statut) == 'approved' ? 'fa-check-circle' : (strtolower($eleve->statut) == 'pending' ? 'fa-clock' : 'fa-times-circle') }} mr-1.5"></i>
                    {{ $eleve->statut }}
                </button>

                <div id="status-menu-{{ $eleve->id }}" class="hidden fixed inset-0 z-[150] items-center justify-center bg-slate-900/20 backdrop-blur-[2px]">
                    <div class="bg-white w-48 rounded-2xl shadow-2xl border border-slate-100 p-4" onclick="event.stopPropagation()">
                        <div class="flex justify-between items-center mb-3">
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Statut Élève</p>
                            <button type="button" onclick="toggleStatusMenu(event, '{{ $eleve->id }}')" class="text-slate-300 hover:text-red-500">
                                <i class="fas fa-times text-[10px]"></i>
                            </button>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            @foreach(['approved', 'pending', 'rejected'] as $status)
                                @if(strtolower($eleve->statut) !== $status)
                                    <form action="{{ route('eleves.updateStatus', $eleve->id) }}" method="POST" class="m-0">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="statut" value="{{ $status }}">
                                        <button type="submit" class="flex items-center w-full px-3 py-2 rounded-xl text-[10px] font-bold uppercase transition-all 
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
                {{ $eleve->created_at->format('d M Y') }}
            </td>

            <td class="px-6 py-3 text-right">
                <div class="flex justify-end items-center space-x-1">
                    <a href="#" class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">
                        <i class="fas fa-eye text-[10px]"></i>
                    </a>
                    
                    <button type="button" onclick="openModal('modalEditEleve-{{ $eleve->id }}')" 
                        class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <i class="fas fa-edit text-[10px]"></i>
                    </button>
                    
                 
                </div>

                <div id="modalEditEleve-{{ $eleve->id }}" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[200] p-4 text-left">
                    <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-black text-slate-800 tracking-tight">Modifier l'élève</h3>
                            <button type="button" onclick="closeModal('modalEditEleve-{{ $eleve->id }}')" class="text-slate-400 hover:text-red-500">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                        
                        <form action="{{ route('eleves.update', $eleve->id) }}" method="POST" class="space-y-3">
                            @csrf @method('PUT')
                            
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1">Nom</label>
                                    <input type="text" name="nom" value="{{ $eleve->nom }}" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px]">
                                </div>
                                <div>
                                    <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1">Prénom</label>
                                    <input type="text" name="prenom" value="{{ $eleve->prenom }}" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px]">
                                </div>
                            </div>

                            <div>
                                <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1">Email</label>
                                <input type="email" name="email" value="{{ $eleve->email }}" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px]">
                            </div>

                            <div>
                                <label class="block text-[9px] font-bold text-slate-400 uppercase mb-1">Téléphone</label>
                                <input type="text" name="telephone" value="{{ $eleve->telephone }}" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px]">
                            </div>

                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow-lg mt-2 uppercase text-[10px] tracking-widest transition-all">
                                Mettre à jour l'élève
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

    <div id="modalAddStudent" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
        <div class="bg-white w-full max-w-lg rounded-3xl shadow-2xl p-6 transform transition-all">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center text-xs">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-lg font-black text-slate-800 tracking-tight">Inscription Élève</h3>
                </div>
                <button onclick="closeModal('modalAddStudent')" class="text-slate-400 hover:text-red-500 transition-colors"><i class="fas fa-times text-xs"></i></button>
            </div>
            
            <form class="space-y-3">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Nom de famille</label>
                        <input type="text" placeholder="Mansouri" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[12px] font-medium">
                    </div>
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Prénom</label>
                        <input type="text" placeholder="Yassine" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[12px] font-medium">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Email</label>
                        <input type="email" placeholder="contact@email.com" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[12px] font-medium">
                    </div>
                    <div>
                        <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Date de Naissance</label>
                        <input type="date" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[12px] font-medium">
                    </div>
                </div>

                <div>
                    <label class="block text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1 ml-1">Affectation de Classe</label>
                    <select class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none transition-all text-[12px] font-medium">
                        <option value="">Choisir...</option>
                        <option>6ème A</option>
                        <option>5ème B</option>
                        <option>Terminale S1</option>
                    </select>
                </div>

                <div class="pt-3 flex space-x-2">
                    <button type="button" onclick="closeModal('modalAddStudent')" class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-3 rounded-xl transition-all uppercase text-[9px] tracking-widest border border-slate-200">
                        Annuler
                    </button>
                    <button type="submit" class="flex-[2] bg-blue-600 hover:bg-blue-700 text-white font-black py-3 rounded-xl shadow-md shadow-blue-100 transition-all uppercase text-[9px] tracking-widest">
                        Confirmer
                    </button>
                </div>
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
    const modal = document.getElementById(id);
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeModal(id) {
    const modal = document.getElementById(id);
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
    </script>
</body>
</html>