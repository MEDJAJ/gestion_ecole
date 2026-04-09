<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning Scolaire | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.3s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
        .sidebar-link.active { background: #2563eb; color: white; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3); }
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        
        .timetable-cell { height: 110px; border: 1px solid #f1f5f9; min-width: 140px; vertical-align: top; padding: 8px; }
        .subject-card { height: 100%; border-radius: 10px; padding: 10px; display: flex; flex-direction: column; justify-content: center; border-left-width: 4px; }
        
        input, select { border: 1px solid #e2e8f0 !important; }
        input:focus, select:focus { border-color: #3b82f6 !important; outline: none; }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-slate-200 hidden lg:flex flex-col sticky top-0 h-screen z-40">
            <div class="p-6 flex items-center space-x-3">
                <div class="bg-blue-600 p-2 rounded-xl text-white shadow-lg">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="text-xl font-bold text-slate-800">Smart <span class="text-blue-600">Admin</span></span>
            </div>

            <nav class="flex-1 px-4 space-y-1 overflow-y-auto sidebar-scroll">
                <p class="text-[10px] font-bold text-slate-400 uppercase px-3 mb-2 tracking-widest">Main Menu</p>
                <a href="/admin" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                    <i class="fas fa-th-large w-5"></i> <span class="text-sm font-semibold">Tableau de bord</span>
                </a>

                <p class="text-[10px] font-bold text-slate-400 uppercase px-3 mt-6 mb-2 tracking-widest">Gestion Pédagogique</p>
                
                <div class="space-y-1 mb-4">
                    <a href="/class" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-school w-5 text-xs"></i> <span class="text-sm font-medium">Classes</span>
                    </a>
                    <a href="/matiére" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-book w-5 text-xs"></i> <span class="text-sm font-medium">Matières</span>
                    </a>
                    <a href="/prof" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-chalkboard-teacher w-5 text-xs"></i> <span class="text-sm font-medium">Professeurs</span>
                    </a>
                    <a href="/éleve" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-user-graduate w-5 text-xs"></i> <span class="text-sm font-medium">Élèves</span>
                    </a>
                </div>

                <div class="bg-slate-50/50 rounded-2xl p-2 space-y-1 border border-slate-100">
                    <p class="text-[9px] font-bold text-blue-500 uppercase px-2 mb-2 tracking-tighter italic">Liaisons & Affectations</p>
                    <a href="/associer_matiére" class="sidebar-link flex items-center space-x-3 px-3 py-2 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-layer-group w-5 text-[10px] text-blue-500"></i> <span class="text-[13px] font-semibold">Associer Matières aux Classes</span>
                    </a>
                    <a href="/affecter_prof_class" class="sidebar-link flex items-center space-x-3 px-3 py-2 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-user-plus w-5 text-[10px] text-blue-500"></i> <span class="text-[13px] font-semibold">Affecter Professeurs aux Classes</span>
                    </a>
                    <a href="/affecter_éleve_class" class="sidebar-link flex items-center space-x-3 px-3 py-2 rounded-xl text-slate-600 transition-custom">
                        <i class="fas fa-users-cog w-5 text-[10px] text-blue-500"></i> <span class="text-[13px] font-semibold">Affecter Élèves aux Classes</span>
                    </a>
                </div>

                <p class="text-[10px] font-bold text-slate-400 uppercase px-3 mt-6 mb-2 tracking-widest">Suivi & Planning</p>
                <a href="/note_classement" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                    <i class="fas fa-chart-bar w-5 text-xs"></i> <span class="text-sm font-medium">Notes & Classement</span>
                </a>
                <a href="/emplois_temps" class="sidebar-link active flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-custom">
                    <i class="fas fa-calendar-alt w-5 text-xs"></i> <span class="text-sm font-medium">Emploi du temps</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-100">
                <button class="w-full flex items-center space-x-3 px-3 py-3 rounded-xl text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-5 group-hover:-translate-x-1 transition-transform"></i> 
                    <span class="text-sm font-bold">Mon Profil</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-10">
            <div class="max-w-7xl mx-auto">
                
                <div class="bg-white rounded-[2rem] p-8 border border-slate-200 shadow-sm mb-10">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h2 class="text-lg font-black text-slate-800">Ajouter une séance</h2>
                    </div>

                    <form class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 items-end">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 ml-1">Jour</label>
                            <select class="w-full bg-slate-50 rounded-xl py-3 px-4 text-sm font-bold text-slate-700">
                                <option>Lundi</option><option>Mardi</option><option>Mercredi</option>
                                <option>Jeudi</option><option>Vendredi</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 ml-1">Heure</label>
                            <select class="w-full bg-slate-50 rounded-xl py-3 px-4 text-sm font-bold text-slate-700">
                                <option>08:00 - 09:00</option><option>09:00 - 10:00</option>
                                <option>10:00 - 11:00</option><option>11:00 - 12:00</option>
                                <option>14:00 - 15:00</option><option>15:00 - 16:00</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 ml-1">Classe</label>
                            <select class="w-full bg-slate-50 rounded-xl py-3 px-4 text-sm font-bold text-slate-700">
                                <option>2ème BAC SMA</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2 ml-1">Professeur</label>
                            <select class="w-full bg-slate-50 rounded-xl py-3 px-4 text-sm font-bold text-slate-700">
                                <option>M. Ahmed Alami</option>
                            </select>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white h-[46px] rounded-xl font-bold shadow-lg transition-all">
                            Valider
                        </button>
                    </form>
                </div>

                <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex flex-wrap justify-between items-center gap-4 bg-white">
                        <button class="bg-blue-50 text-blue-600 px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-100 transition-all">
                            <i class="fas fa-eye mr-2"></i> Consulter toutes les emplois
                        </button>
                        
                        <div class="flex items-center space-x-4">
                            <h2 class="font-black text-slate-800 uppercase tracking-tight italic">Planning Hebdomadaire</h2>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg text-xs font-bold hover:bg-red-600 shadow-sm transition-all">
                                <i class="fas fa-trash-alt mr-2"></i> Supprimer cet emploi
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full table-fixed border-collapse">
                            <thead>
                                <tr class="bg-slate-50/50">
                                    <th class="w-28 p-4 border-b border-r border-slate-100 text-[10px] font-black text-slate-400 uppercase">Jour / Heure</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">08h - 09h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">09h - 10h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">10h - 11h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">11h - 12h</th>
                                    <th class="w-10 border-b bg-slate-100"></th> <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">14h - 15h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">15h - 16h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">16h - 17h</th>
                                    <th class="p-4 border-b border-slate-100 text-[11px] font-black text-slate-700 uppercase">17h - 18h</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-4 border-r border-slate-100 text-center font-black text-xs text-blue-600 bg-slate-50/30 uppercase tracking-widest">Lundi</td>
                                    <td class="timetable-cell">
                                        <div class="subject-card bg-blue-50 border-blue-400">
                                            <p class="text-[10px] font-black text-blue-800 uppercase leading-none">Maths</p>
                                            <p class="text-[8px] font-bold text-blue-500 mt-1 italic text-right">Alami</p>
                                        </div>
                                    </td>
                                    <td class="timetable-cell">
                                        <div class="subject-card bg-blue-50 border-blue-400">
                                            <p class="text-[10px] font-black text-blue-800 uppercase leading-none">Maths</p>
                                            <p class="text-[8px] font-bold text-blue-500 mt-1 italic text-right">Alami</p>
                                        </div>
                                    </td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="bg-slate-100/30"></td>
                                    <td class="timetable-cell">
                                        <div class="subject-card bg-emerald-50 border-emerald-400">
                                            <p class="text-[10px] font-black text-emerald-800 uppercase leading-none">Physique</p>
                                            <p class="text-[8px] font-bold text-emerald-500 mt-1 italic text-right">Sarah</p>
                                        </div>
                                    </td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                </tr>
                                <tr>
                                    <td class="p-4 border-r border-slate-100 text-center font-black text-xs text-blue-600 bg-slate-50/30 uppercase tracking-widest">Mardi</td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell">
                                        <div class="subject-card bg-purple-50 border-purple-400">
                                            <p class="text-[10px] font-black text-purple-800 uppercase leading-none">Philo</p>
                                            <p class="text-[8px] font-bold text-purple-500 mt-1 italic text-right">Tazi</p>
                                        </div>
                                    </td>
                                    <td class="timetable-cell"></td>
                                    <td class="bg-slate-100/30"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
                                    <td class="timetable-cell"></td>
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