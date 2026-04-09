<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Matières | Smart École</title>
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
                    <a href="/matiére" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-custom">
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
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Associer Matières</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-plus w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Affecter Profs</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-users-cog w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Affecter Élèves</span>
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
                <div class="flex items-center text-slate-500 text-[11px]">
                    <span class="hover:text-blue-600 cursor-pointer">Pédagogie</span>
                    <i class="fas fa-chevron-right mx-2 text-[8px] opacity-50"></i>
                    <span class="font-bold text-slate-800">Matières</span>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin+Smart&background=2563eb&color=fff" class="h-7 w-7 rounded-md" alt="Avatar">
            </header>

            <div class="p-6 overflow-y-auto">
                @if(session('success'))
            <div class="mb-6 flex items-center p-4 bg-emerald-50 border border-emerald-100 rounded-2xl shadow-sm">
                <div class="flex-shrink-0 w-8 h-8 bg-emerald-500 text-white rounded-lg flex items-center justify-center shadow-md shadow-emerald-200">
                    <i class="fas fa-check-circle text-xs"></i>
                </div>
                <div class="ml-3 flex-1">
                    <p class="text-emerald-800 font-bold text-[11px] uppercase tracking-wider">Succès</p>
                    <p class="text-emerald-600 text-[12px] font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-600">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>
        @endif
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mb-6">
                    <div>
                        <h1 class="text-xl font-black text-slate-900 tracking-tight">Référentiel des Matières</h1>
                        <p class="text-slate-500 text-[11px]">Définissez les disciplines et coefficients.</p>
                    </div>
                    <button onclick="openModal('modalAddSubject')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-[11px] font-bold shadow-md shadow-blue-100 flex items-center transition-all transform hover:-translate-y-0.5">
                        <i class="fas fa-plus-circle mr-1.5"></i> Nouvelle Matière
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm">
      <table class="w-full text-left">
    <thead>
        <tr class="bg-slate-50 border-b border-slate-100">
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Matière</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest"> Niveau</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-center">Coeff.</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-slate-50 text-[13px]">
        @foreach($matieres as $matiere)
        <tr class="hover:bg-slate-50 transition-colors">
            <td class="px-6 py-3">
                <div class="flex items-center">
                
                    <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mr-3 font-bold text-[10px]">
                        {{ strtoupper(substr($matiere->nom_matiere, 0, 1)) }}
                    </div>
                    <div>
                        <span class="font-bold text-slate-700 block leading-none">{{ $matiere->nom_matiere }}</span>
                        <span class="text-[9px] text-slate-400 uppercase tracking-tighter">{{ $matiere->code_matiere }}</span>
                    </div>
                </div>
            </td>
            <td class="px-6 py-3">
                <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[9px] font-black rounded border border-slate-200 uppercase">
                    {{ $matiere->niveau ?? 'Non défini' }}
                </span>
            </td>
            <td class="px-6 py-3 text-center font-bold text-slate-600">
                {{ number_format($matiere->coefficient, 1) }}
            </td>
            <td class="px-6 py-3 text-right">
                <div class="flex justify-end space-x-1">
                   
                    <a href="" class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">
                        <i class="fas fa-eye text-[10px]"></i>
                    </a>

               
                  <button 
    onclick="prepareEditSubject(this)"
    data-subject='@json($matiere)'
    class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
    <i class="fas fa-edit text-[10px]"></i>
</button>
            
                    <form action="{{ route('matieres.destroy', $matiere->id) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer cette matière ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">
                            <i class="fas fa-trash text-[10px]"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

        @if($matieres->isEmpty())
        <tr>
            <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic text-[11px]">
                <i class="fas fa-info-circle mr-1"></i> Aucune matière trouvée dans la base de données.
            </td>
        </tr>
        @endif
    </tbody>
</table>
                </div>
            </div>
        </main>
    </div>

    <div id="modalAddSubject" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
        <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl p-6 transform transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-black text-slate-800 tracking-tight">Nouvelle Matière</h3>
                <button onclick="closeModal('modalAddSubject')" class="text-slate-400 hover:text-red-500"><i class="fas fa-times text-xs"></i></button>
            </div>
            <form action="{{ route('matieres.store') }}" method="POST" class="space-y-3">
    @csrf

    <div>
        <label class="block text-slate-500 mb-1 ml-1 text-[10px] font-bold uppercase tracking-widest">Nom de la Matière</label>
        <input type="text" name="nom_matiere" placeholder="Ex: Mathématiques" required
            class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
    </div>

    <div class="grid grid-cols-2 gap-3">
       
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[10px] font-bold uppercase tracking-widest">Code (Unique)</label>
            <input type="text" name="code_matiere" placeholder="Ex: MATH-01" required
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
        </div>

   
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[10px] font-bold uppercase tracking-widest">Niveau</label>
            <input type="text" name="niveau" placeholder="Ex: 3ème Année"
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-3">
      
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[10px] font-bold uppercase tracking-widest">Coefficient</label>
            <input type="number" name="coefficient" value="1.00" step="0.5" min="1"
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
        </div>

      
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[10px] font-bold uppercase tracking-widest">Description (Optionnel)</label>
            <input type="text" name="description" placeholder="Courte description..."
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
        </div>
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg mt-2 text-xs transition-all uppercase tracking-widest">
        Enregistrer la Matière
    </button>
</form>
        </div>
    </div>



    <div id="modalEditSubject" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
    <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl p-6 transform transition-all border-t-4 border-blue-600">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-black text-slate-800 tracking-tight">Modifier la Matière</h3>
            <button onclick="closeModal('modalEditSubject')" class="text-slate-400 hover:text-red-500"><i class="fas fa-times text-xs"></i></button>
        </div>
        
        <form id="formEditSubject" method="POST" class="space-y-3">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-slate-500 mb-1 text-[10px] font-bold uppercase tracking-widest">Nom de la Matière</label>
                <input type="text" name="nom_matiere" id="edit_nom" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-slate-500 mb-1 text-[10px] font-bold uppercase tracking-widest">Code</label>
                    <input type="text" name="code_matiere" id="edit_code" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
                </div>
                <div>
                    <label class="block text-slate-500 mb-1 text-[10px] font-bold uppercase tracking-widest">Niveau</label>
                    <input type="text" name="niveau" id="edit_niveau" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-slate-500 mb-1 text-[10px] font-bold uppercase tracking-widest">Coefficient</label>
                    <input type="number" name="coefficient" id="edit_coeff" step="0.5" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
                </div>
                <div>
                    <label class="block text-slate-500 mb-1 text-[10px] font-bold uppercase tracking-widest">Description</label>
                    <input type="text" name="description" id="edit_desc" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg mt-2 text-xs uppercase tracking-widest transition-all">
                Mettre à jour la matière
            </button>
        </form>
    </div>
</div>
    <script>
        function openModal(id) { document.getElementById(id).classList.add('modal-active'); }
        function closeModal(id) { document.getElementById(id).classList.remove('modal-active'); }


        function prepareEditSubject(button) {
    const subject = JSON.parse(button.getAttribute('data-subject'));
    const form = document.getElementById('formEditSubject');
    
    
    form.action = `/matiére/${subject.id}`; 
    
 
    document.getElementById('edit_nom').value = subject.nom_matiere;
    document.getElementById('edit_code').value = subject.code_matiere;
    document.getElementById('edit_niveau').value = subject.niveau || '';
    document.getElementById('edit_coeff').value = subject.coefficient;
    document.getElementById('edit_desc').value = subject.description || '';
    
    openModal('modalEditSubject');
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