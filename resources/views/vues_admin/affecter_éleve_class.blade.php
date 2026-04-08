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
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-4 text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span class="font-bold text-[12px]">Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-5 lg:p-6 overflow-y-auto">
            <div class="max-w-5xl mx-auto">
                
                <div class="bg-white rounded-[1.5rem] p-5 shadow-sm border border-slate-200 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-xl font-black text-slate-800 tracking-tight">AFFECTATION DE MASSE</h1>
                            <p class="text-slate-500 text-[11px] mt-0.5 italic">Déplacez vos élèves vers une nouvelle classe en un clic.</p>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <div class="relative min-w-[180px]">
                                <select class="w-full bg-slate-50 border border-slate-200 py-2 pl-3 pr-8 rounded-xl font-bold text-slate-700 outline-none focus:ring-2 focus:ring-blue-500/10 appearance-none cursor-pointer text-[12px]">
                                    <option>Choisir Classe Destination</option>
                                    <option>1ère Année Bac A</option>
                                    <option>2ème Année Bac B</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[10px]"></i>
                            </div>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl font-bold text-[12px] shadow-lg shadow-blue-100 transition-all flex items-center space-x-2 active:scale-95">
                                <i class="fas fa-exchange-alt"></i>
                                <span>Affecter</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[1.2rem] border border-slate-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-3.5 border-b border-slate-100 flex items-center justify-between bg-slate-50/30">
                        <div class="relative w-64">
                            <input type="text" placeholder="Rechercher un élève..." class="w-full bg-white border border-slate-200 py-1.5 pl-9 pr-4 rounded-lg text-[11px] focus:ring-2 focus:ring-blue-500/10 outline-none">
                            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-300 text-[10px]"></i>
                        </div>
                        <span class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Liste des élèves disponibles</span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50/50">
                                <tr class="text-[9px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-50">
                                    <th class="px-6 py-3 w-10">
                                        <input type="checkbox" class="w-3.5 h-3.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500 transition-all cursor-pointer">
                                    </th>
                                    <th class="px-3 py-3">Nom de l'élève</th>
                                    <th class="px-6 py-3 text-center">Classe Actuelle</th>
                                    <th class="px-6 py-3 text-center">Sexe</th>
                                    <th class="px-6 py-3 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                <tr class="hover:bg-blue-50/20 transition-colors group">
                                    <td class="px-6 py-2.5">
                                        <input type="checkbox" class="w-3.5 h-3.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
                                    </td>
                                    <td class="px-3 py-2.5">
                                        <div class="flex items-center">
                                            <div class="w-7 h-7 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 font-bold text-[9px] mr-2.5 border border-slate-200">OM</div>
                                            <span class="font-bold text-slate-700 text-[12px]">Omar Mouline</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-2.5 text-center">
                                        <span class="text-[9px] font-bold text-orange-500 bg-orange-50 px-2 py-0.5 rounded-md italic border border-orange-100">Non-assigné</span>
                                    </td>
                                    <td class="px-6 py-2.5 text-center text-[11px] text-slate-500">Masculin</td>
                                    <td class="px-6 py-2.5 text-right">
                                        <button class="text-blue-500 opacity-0 group-hover:opacity-100 font-bold text-[10px] transition-opacity uppercase tracking-tighter hover:underline">Voir dossier</button>
                                    </td>
                                </tr>

                                <tr class="hover:bg-blue-50/20 transition-colors group">
                                    <td class="px-6 py-2.5">
                                        <input type="checkbox" class="w-3.5 h-3.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500 cursor-pointer">
                                    </td>
                                    <td class="px-3 py-2.5">
                                        <div class="flex items-center">
                                            <div class="w-7 h-7 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 font-bold text-[9px] mr-2.5 border border-slate-200">LB</div>
                                            <span class="font-bold text-slate-700 text-[12px]">Layla Bennani</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-2.5 text-center">
                                        <span class="text-[9px] font-bold text-slate-400 bg-slate-100 px-2 py-0.5 rounded-md border border-slate-200">6ème Année C</span>
                                    </td>
                                    <td class="px-6 py-2.5 text-center text-[11px] text-slate-500">Féminin</td>
                                    <td class="px-6 py-2.5 text-right">
                                        <button class="text-blue-500 opacity-0 group-hover:opacity-100 font-bold text-[10px] transition-opacity uppercase tracking-tighter hover:underline">Voir dossier</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-3 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center">
                        <p class="text-[10px] text-slate-400 font-medium italic italic">Sélectionnez plusieurs élèves pour une action groupée.</p>
                        <div class="flex space-x-1">
                            <button class="w-7 h-7 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-400 hover:text-blue-600 transition-all shadow-sm"><i class="fas fa-chevron-left text-[8px]"></i></button>
                            <button class="w-7 h-7 flex items-center justify-center rounded-lg bg-blue-600 text-white font-bold text-[10px] shadow-md shadow-blue-200">1</button>
                            <button class="w-7 h-7 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-400 hover:text-blue-600 transition-all shadow-sm"><i class="fas fa-chevron-right text-[8px]"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>