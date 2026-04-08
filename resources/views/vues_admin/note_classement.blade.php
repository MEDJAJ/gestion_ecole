<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes & Classement | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.3s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.1); color: #2563eb; }
        .sidebar-link.active-link { background: #2563eb; color: white; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3); }
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        
        .tab-content { display: none; animation: slideUp 0.4s ease-out; }
        .tab-content.active { display: block; }
        @keyframes slideUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
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
                <a href="/note_classement" class="sidebar-link active-link flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-custom">
                    <i class="fas fa-chart-bar w-5 text-xs"></i> <span class="text-sm font-medium">Notes & Classement</span>
                </a>
                <a href="/emplois_temps" class="sidebar-link flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 transition-custom">
                    <i class="fas fa-calendar-alt w-5 text-xs"></i> <span class="text-sm font-medium">Emploi du temps</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-100">
                <button class="w-full flex items-center space-x-3 px-3 py-3 rounded-xl text-red-500 hover:bg-red-50 transition-custom group">
                    <i class="fas fa-sign-out-alt w-5 group-hover:-translate-x-1 transition-transform"></i> 
                    <span class="text-sm font-bold">Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-8 lg:p-10 overflow-y-auto">
            <div class="max-w-6xl mx-auto">
                
                <div class="mb-8">
                    <h1 class="text-3xl font-black text-slate-800 tracking-tight">Performances Académiques</h1>
                    <p class="text-slate-500 text-sm mt-1">Analyse des résultats, moyennes et classements annuels.</p>
                </div>

                <div class="flex space-x-2 mb-8 bg-slate-200/50 p-1.5 rounded-2xl w-fit">
                    <button onclick="switchTab('consultation')" id="btn-consultation" class="tab-btn px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-widest transition-all bg-white shadow-sm text-blue-600">
                        Consultation
                    </button>
                    <button onclick="switchTab('classement')" id="btn-classement" class="tab-btn px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-widest transition-all text-slate-500 hover:text-slate-700">
                        Classement Général
                    </button>
                    <button onclick="switchTab('majors')" id="btn-majors" class="tab-btn px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-widest transition-all text-slate-500 hover:text-slate-700">
                        Meilleurs Élèves
                    </button>
                </div>

                <div id="consultation" class="tab-content active">
                    <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 shadow-sm">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                            <select class="bg-slate-50 border-none p-4 rounded-2xl text-sm font-bold outline-none focus:ring-2 focus:ring-blue-500/20">
                                <option>Choisir une Classe</option>
                                <option>2ème BAC SMA</option>
                            </select>
                            <select class="bg-slate-50 border-none p-4 rounded-2xl text-sm font-bold outline-none focus:ring-2 focus:ring-blue-500/20">
                                <option>Choisir une Matière</option>
                                <option>Mathématiques</option>
                            </select>
                            <button class="bg-blue-600 text-white font-bold rounded-2xl py-4 hover:bg-blue-700 shadow-lg shadow-blue-100 transition-all">
                                Afficher les Notes
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                        <th class="px-4 py-4">Élève</th>
                                        <th class="px-4 py-4 text-center">Note 1</th>
                                        <th class="px-4 py-4 text-center">Note 2</th>
                                        <th class="px-4 py-4 text-center">Examen</th>
                                        <th class="px-4 py-4 text-center">Moyenne</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50">
                                    <tr>
                                        <td class="py-4 font-bold text-slate-700">Yassine Mansouri</td>
                                        <td class="py-4 text-center font-medium">16.5</td>
                                        <td class="py-4 text-center font-medium">18.0</td>
                                        <td class="py-4 text-center font-medium">15.0</td>
                                        <td class="py-4 text-center"><span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-lg font-black">16.15</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="classement" class="tab-content">
                    <div class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-sm">
                        <div class="p-8 border-b border-slate-50 flex justify-between items-center">
                            <h3 class="font-black text-slate-800 uppercase text-xs tracking-widest">Classement : 2ème BAC SMA</h3>
                            <button class="text-blue-600 font-bold text-xs"><i class="fas fa-file-export mr-2"></i>Exporter PDF</button>
                        </div>
                        <table class="w-full text-left">
                            <thead class="bg-slate-50/50">
                                <tr class="text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    <th class="px-8 py-4">Rang</th>
                                    <th class="px-8 py-4">Élève</th>
                                    <th class="px-8 py-4">Moyenne Générale</th>
                                    <th class="px-8 py-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-8 py-5"><span class="w-8 h-8 rounded-full bg-yellow-400 text-white flex items-center justify-center font-black text-xs">1</span></td>
                                    <td class="px-8 py-5 font-bold text-slate-700">Soufiane Amrani</td>
                                    <td class="px-8 py-5 font-black text-blue-600 text-lg">18.42</td>
                                    <td class="px-8 py-5 text-xs font-bold text-emerald-500 uppercase">Excellent</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-8 py-5"><span class="w-8 h-8 rounded-full bg-slate-300 text-white flex items-center justify-center font-black text-xs">2</span></td>
                                    <td class="px-8 py-5 font-bold text-slate-700">Noura Jaber</td>
                                    <td class="px-8 py-5 font-black text-slate-600 text-lg">17.95</td>
                                    <td class="px-8 py-5 text-xs font-bold text-emerald-500 uppercase">Très Bien</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="majors" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-gradient-to-br from-blue-600 to-blue-800 rounded-[2.5rem] p-8 text-white shadow-xl shadow-blue-200 relative overflow-hidden group">
                            <i class="fas fa-trophy absolute -right-4 -bottom-4 text-8xl text-white/10 group-hover:scale-110 transition-transform"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-200 mb-4">Major de Promotion</p>
                            <h4 class="text-xs font-bold bg-white/20 w-fit px-3 py-1 rounded-full mb-6">2ème BAC SMA</h4>
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-md flex items-center justify-center text-2xl font-black">SA</div>
                                <div>
                                    <p class="text-xl font-black">Soufiane Amrani</p>
                                    <p class="text-blue-100 font-bold text-lg italic">18.42/20</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-slate-200 rounded-[2.5rem] p-8 shadow-sm relative overflow-hidden">
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-4">Major de Promotion</p>
                            <h4 class="text-xs font-bold bg-slate-100 text-slate-600 w-fit px-3 py-1 rounded-full mb-6">3ème Année B</h4>
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center text-2xl font-black text-slate-400">KI</div>
                                <div>
                                    <p class="text-xl font-black text-slate-800">Kenzi Idrissi</p>
                                    <p class="text-blue-600 font-black text-lg italic">17.10/20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>
        function switchTab(tabId) {
            // Cacher tous les contenus
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            // Désactiver tous les boutons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-white', 'shadow-sm', 'text-blue-600');
                btn.classList.add('text-slate-500');
            });

            // Activer le bon contenu et bouton
            document.getElementById(tabId).classList.add('active');
            const activeBtn = document.getElementById('btn-' + tabId);
            activeBtn.classList.add('bg-white', 'shadow-sm', 'text-blue-600');
            activeBtn.classList.remove('text-slate-500');
        }
    </script>
</body>
</html>