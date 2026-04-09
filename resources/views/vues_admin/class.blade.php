<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Classes | Smart École</title>
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
                    <a href="/class" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-custom">
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
                    
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold leading-tight">Associer Matières</span>
                    </a>
                    
                    <a href="/prof" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-user-plus w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold leading-tight">Affecter Profs</span>
                    </a>
                    
                    <a href="/éleve" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-users-cog w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold leading-tight">Affecter Élèves</span>
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
                <div class="flex items-center text-slate-500 text-[11px]">
                    <span class="hover:text-blue-600 cursor-pointer">Pédagogie</span>
                    <i class="fas fa-chevron-right mx-2 text-[8px] opacity-50"></i>
                    <span class="font-bold text-slate-800">Classes</span>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name=Admin+Smart&background=2563eb&color=fff" class="h-7 w-7 rounded-md" alt="Avatar">
                </div>
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
                        <h1 class="text-xl font-black text-slate-900 tracking-tight">Gestion des Classes</h1>
                        <p class="text-slate-500 text-[11px]">Créez et organisez les sections.</p>
                    </div>
                    <button onclick="openModal('modalAdd')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-[11px] font-bold shadow-md shadow-blue-100 flex items-center transition-all transform hover:-translate-y-0.5">
                        <i class="fas fa-plus-circle mr-1.5"></i> Ajouter une classe
                    </button>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm">
                 <table class="w-full text-left">
    <thead>
        <tr class="bg-slate-50 border-b border-slate-100">
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Classe</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest">Niveau</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-center">Capacité</th>
            <th class="px-6 py-3 text-[9px] font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-slate-50 text-[13px]">
        @forelse($classes as $classe)
        <tr class="hover:bg-slate-50 transition-colors">
            <td class="px-6 py-3">
                <div class="flex items-center">
                 
                    <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold mr-3 text-[10px]">
                        {{ strtoupper(substr($classe->nom_classe, 0, 2)) }}
                    </div>
                    <div>
                        <span class="font-bold text-slate-700 block">{{ $classe->nom_classe }}</span>
                        <span class="text-[10px] text-slate-400">{{ $classe->annee_scolaire }}</span>
                    </div>
                </div>
            </td>
            <td class="px-6 py-3">
                @php
                   
                    $colorClass = match($classe->niveau) {
                        'Primaire' => 'bg-blue-50 text-blue-600 border-blue-100',
                        'Collège'  => 'bg-emerald-50 text-emerald-600 border-emerald-100',
                        'Lycée'    => 'bg-purple-50 text-purple-600 border-purple-100',
                        default    => 'bg-slate-50 text-slate-600 border-slate-100'
                    };
                @endphp
                <span class="px-2 py-0.5 {{ $colorClass }} text-[9px] font-black rounded border uppercase">
                    {{ $classe->niveau }}
                </span>
            </td>
            <td class="px-6 py-3 text-center font-semibold text-slate-600">
                {{ $classe->capacite ?? '--' }} <span class="text-[10px] text-slate-400">places</span>
            </td>
            <td class="px-6 py-3 text-right">
                <div class="flex justify-end space-x-1">
                         <a href="" class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">
                        <i class="fas fa-eye text-[10px]"></i>
                    </a>
                   
                    <button 
    onclick="prepareEdit(this)"
    data-classe='@json($classe)'
    class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
    <i class="fas fa-edit text-[10px]"></i>
</button>

                   
                    <form action="{{ route('classes.destroy', $classe->id) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer cette classe ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">
                            <i class="fas fa-trash text-[10px]"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic text-[11px]">
                <i class="fas fa-info-circle mr-1"></i> Aucune classe enregistrée.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
                </div>
            </div>
        </main>
    </div>

    <div id="modalAdd" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
        <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl p-6 transform transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-black text-slate-800 tracking-tight">Nouvelle Classe</h3>
                <button onclick="closeModal('modalAdd')" class="text-slate-400 hover:text-red-500"><i class="fas fa-times text-xs"></i></button>
            </div>
           <form action="{{ route('classes.store') }}" method="POST" class="space-y-3">
    @csrf

  
    <div>
        <label class="block text-slate-500 mb-1 ml-1 text-[11px] font-bold uppercase tracking-wide">Nom de la Classe</label>
        <input type="text" name="nom_classe" placeholder="Ex: 5ème B" required 
            class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
    </div>

   
    <div>
        <label class="block text-slate-500 mb-1 ml-1 text-[11px] font-bold uppercase tracking-wide">Niveau Scolaire</label>
        <select name="niveau" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 outline-none text-[13px] transition-all">
            <option value="Primaire">Primaire</option>
            <option value="Collège">Collège</option>
            <option value="Lycée">Lycée</option>
        </select>
    </div>

    <div class="grid grid-cols-2 gap-3">
       
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[11px] font-bold uppercase tracking-wide">Année</label>
            <input type="number" name="annee_scolaire" value="{{ date('Y') }}" placeholder="2026" required
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] transition-all">
        </div>

       
        <div>
            <label class="block text-slate-500 mb-1 ml-1 text-[11px] font-bold uppercase tracking-wide">Capacité</label>
            <input type="number" name="capacite" placeholder="Ex: 30"
                class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600/20 outline-none text-[13px] transition-all">
        </div>
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg mt-2 text-xs transition-all uppercase tracking-widest">
        Enregistrer la Classe
    </button>
</form>
        </div>
    </div>

<div id="modalEdit" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4">
    <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl p-6 transform transition-all border-t-4 border-blue-600">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-black text-slate-800 tracking-tight">Modifier la Classe</h3>
            <button onclick="closeModal('modalEdit')" class="text-slate-400 hover:text-red-500"><i class="fas fa-times text-xs"></i></button>
        </div>
        
        <form id="formEdit" method="POST" class="space-y-3">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-slate-500 mb-1 text-[11px] font-bold uppercase">Nom de la Classe</label>
                <input type="text" name="nom_classe" id="edit_nom" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl outline-none text-[13px]">
            </div>

            <div>
                <label class="block text-slate-500 mb-1 text-[11px] font-bold uppercase">Niveau Scolaire</label>
                <select name="niveau" id="edit_niveau" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px] outline-none">
                    <option value="Primaire">Primaire</option>
                    <option value="Collège">Collège</option>
                    <option value="Lycée">Lycée</option>
                </select>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-slate-500 mb-1 text-[11px] font-bold uppercase">Année</label>
                    <input type="number" name="annee_scolaire" id="edit_annee" required class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px] outline-none">
                </div>
                <div>
                    <label class="block text-slate-500 mb-1 text-[11px] font-bold uppercase">Capacité</label>
                    <input type="number" name="capacite" id="edit_capacite" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-[13px] outline-none">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg mt-2 text-xs uppercase tracking-widest transition-all">
                Enregistrer les modifications
            </button>
        </form>
    </div>
</div>

    <script>
        function openModal(id) { document.getElementById(id).classList.add('modal-active'); }
        function closeModal(id) { document.getElementById(id).classList.remove('modal-active'); }




        function prepareEdit(button) {
    
    const classe = JSON.parse(button.getAttribute('data-classe'));
    
    // 2. Cibler le formulaire et mettre à jour l'URL d'action dynamiquement
    const form = document.getElementById('formEdit');
    form.action = `/class/${classe.id}`;
    
    // 3. Remplir les champs du modal avec les valeurs actuelles
    document.getElementById('edit_nom').value = classe.nom_classe;
    document.getElementById('edit_niveau').value = classe.niveau;
    document.getElementById('edit_annee').value = classe.annee_scolaire;
    document.getElementById('edit_capacite').value = classe.capacite || '';
    
    // 4. Afficher le modal
    openModal('modalEdit');
}
    </script>
</body>
</html>