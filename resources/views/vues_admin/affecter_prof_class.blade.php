<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affectation Professeurs | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.2s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
        .sidebar-link.active-link { background: #2563eb; color: white; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2); }
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
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
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-4 text-[9px] text-blue-500"></i> 
                        <span class="text-[11px] font-semibold">Associer Matières</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link active-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg transition-custom">
                        <i class="fas fa-user-plus w-4 text-[9px]"></i> 
                        <span class="text-[11px] font-bold">Affecter Professeurs</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link flex items-center space-x-2 px-2.5 py-1.5 rounded-lg text-slate-600 transition-custom">
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
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-4 text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span class="font-bold text-[12px]">Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-8 overflow-y-auto">
            <div class="max-w-4xl mx-auto">
                
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <h1 class="text-xl font-black text-slate-800 tracking-tight uppercase">Affectations Enseignants</h1>
                        <p class="text-slate-500 text-[11px] mt-0.5 italic">Attribuez chaque professeur à sa classe et sa matière.</p>
                    </div>
                    <div class="hidden md:block bg-white px-3 py-1.5 rounded-xl border border-slate-200 shadow-sm">
                        <div class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Scolaire 2025-2026</div>
                    </div>
                </div>

                <div class="bg-white rounded-[1.5rem] border border-slate-200 shadow-lg shadow-slate-200/40 overflow-hidden mb-6">
                    <div class="p-5 lg:p-6">
                        <form action="#" class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                            <div class="space-y-1.5">
                                <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest ml-1">Professeur</label>
                                <div class="relative group">
                                    <select class="w-full bg-slate-50 border border-slate-200 text-slate-700 font-bold py-2.5 pl-10 pr-4 rounded-xl focus:border-blue-500 focus:bg-white outline-none transition-all appearance-none text-xs">
                                        <option value="">Choisir un prof...</option>
                                        <option>M. Ahmed Alami (Maths)</option>
                                        <option>Mme. Sarah Idrisi (Français)</option>
                                    </select>
                                    <i class="fas fa-chalkboard-teacher absolute left-3.5 top-1/2 -translate-y-1/2 text-blue-500 text-[10px]"></i>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest ml-1">Classe de destination</label>
                                <div class="relative group">
                                    <select class="w-full bg-slate-50 border border-slate-200 text-slate-700 font-bold py-2.5 pl-10 pr-4 rounded-xl focus:border-blue-500 focus:bg-white outline-none transition-all appearance-none text-xs">
                                        <option value="">Choisir la classe...</option>
                                        <option>2ème BAC SMA</option>
                                        <option>3ème Année Collège B</option>
                                    </select>
                                    <i class="fas fa-school absolute left-3.5 top-1/2 -translate-y-1/2 text-blue-500 text-[10px]"></i>
                                </div>
                            </div>

                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 rounded-xl shadow-md shadow-blue-100 transition-all active:scale-[0.98] flex items-center justify-center space-x-2">
                                <i class="fas fa-plus-circle text-xs"></i>
                                <span class="uppercase text-[10px] tracking-widest">Assigner</span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-[1.2rem] border border-slate-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-3 border-b border-slate-100 flex items-center justify-between bg-slate-50/40">
                        <h3 class="font-bold text-slate-700 text-[12px]">Affectations Actives</h3>
                        <span class="bg-blue-100 text-blue-600 text-[9px] font-black px-2 py-0.5 rounded-md uppercase">12 Total</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-[9px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-50">
                                    <th class="px-6 py-3">Enseignant</th>
                                    <th class="px-6 py-3">Classe</th>
                                    <th class="px-6 py-3">Discipline</th>
                                    <th class="px-6 py-3 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center space-x-2.5">
                                            <div class="w-6 h-6 bg-blue-600 text-white rounded flex items-center justify-center text-[9px] font-bold">AA</div>
                                            <span class="font-bold text-slate-700">Ahmed Alami</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-slate-600 font-medium">2ème BAC SMA</td>
                                    <td class="px-6 py-3">
                                        <span class="text-[9px] font-bold px-2 py-0.5 bg-emerald-50 text-emerald-600 rounded uppercase">Mathématiques</span>
                                    </td>
                                    <td class="px-6 py-3 text-right">
                                        <button class="text-red-300 hover:text-red-500 transition-colors"><i class="fas fa-trash-alt text-[11px]"></i></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center space-x-2.5">
                                            <div class="w-6 h-6 bg-purple-600 text-white rounded flex items-center justify-center text-[9px] font-bold">SI</div>
                                            <span class="font-bold text-slate-700">Sarah Idrisi</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-slate-600 font-medium">3ème Année B</td>
                                    <td class="px-6 py-3">
                                        <span class="text-[9px] font-bold px-2 py-0.5 bg-purple-50 text-purple-600 rounded uppercase">Français</span>
                                    </td>
                                    <td class="px-6 py-3 text-right">
                                        <button class="text-red-300 hover:text-red-500 transition-colors"><i class="fas fa-trash-alt text-[11px]"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>