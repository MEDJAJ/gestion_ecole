<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link { transition: all 0.2s; border-radius: 8px; margin-bottom: 2px; }
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; }
        .section-content { display: none; animation: fadeIn 0.3s ease-out; }
        .section-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(4px); } to { opacity: 1; transform: translateY(0); } }
        /* Scrollbar compacte */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        
        /* Overlay for mobile */
        #sidebar-overlay { display: none; }
        #sidebar-overlay.active { display: block; }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">

    <div class="lg:hidden bg-white border-b border-slate-200 p-4 flex justify-between items-center sticky top-0 z-[60]">
        <div class="flex items-center space-x-2">
            <div class="bg-indigo-600 p-1.5 rounded-lg text-white"><i class="fas fa-chalkboard-teacher text-sm"></i></div>
            <span class="text-lg font-bold tracking-tight">Smart <span class="text-indigo-600">Prof</span></span>
        </div>
        <button id="burger-btn" class="text-slate-600 focus:outline-none p-2">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/50 z-40 lg:hidden" onclick="toggleSidebar()"></div>

    <div class="flex min-h-screen">
        <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-white border-r border-slate-200 flex flex-col z-50 transform -translate-x-full lg:translate-x-0 lg:static lg:w-56 transition-transform duration-300 ease-in-out h-screen">
            <div class="p-4 flex items-center space-x-2">
                <div class="bg-indigo-600 p-1.5 rounded-lg text-white"><i class="fas fa-chalkboard-teacher text-sm"></i></div>
                <span class="text-lg font-bold tracking-tight">Smart <span class="text-indigo-600">Prof</span></span>
            </div>

            <nav class="flex-1 px-3 overflow-y-auto">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mb-1 mt-4 tracking-widest">Menu</p>
                <a href="#dashboard" onclick="showSection('dashboard')" id="link-dashboard" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-th-large w-4"></i> <span>Dashboard</span>
                </a>
                <a href="#eleves" onclick="showSection('eleves')" id="link-eleves" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-user-graduate w-4"></i> <span>Élèves</span>
                </a>
                <a href="#notes" onclick="showSection('notes')" id="link-notes" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-pen-fancy w-4"></i> <span>Notes</span>
                </a>
                <a href="#moyennes" onclick="showSection('moyennes')" id="link-moyennes" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-chart-line w-4"></i> <span>Analyses</span>
                </a>
                <a href="#emploi" onclick="showSection('emploi')" id="link-emploi" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-calendar-alt w-4"></i> <span>Emploi</span>
                </a>
                <a href="#messages" onclick="showSection('messages')" id="link-messages" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-comment-dots w-4"></i> <span>Messages</span>
                </a>
                
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mb-1 mt-4 tracking-widest">Paramètres</p>
                <a href="#langue" onclick="showSection('langue')" id="link-langue" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-language w-4"></i> <span>Langue</span>
                </a>
                <a href="#profil" onclick="showSection('profil')" id="link-profil" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-user-circle w-4"></i> <span>Profil</span>
                </a>
            </nav>

            <div class="p-3 border-t">
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 text-xs font-bold transition-all">
                    <i class="fas fa-power-off"></i> <span>Quitter</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-5 overflow-y-auto w-full">
            
            <section id="dashboard" class="section-content active">
                <header class="mb-5">
                    <h1 class="text-xl font-bold text-slate-900">Salut, Ahmed 👋</h1>
                    <p class="text-xs text-slate-500">Résumé rapide de vos activités.</p>
                </header>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-3">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg"><i class="fas fa-users text-sm"></i></div>
                        <div><p class="text-[10px] font-bold text-slate-400 uppercase">Classes</p><p class="text-sm font-bold">4 Classes</p></div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-3">
                        <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg"><i class="fas fa-book text-sm"></i></div>
                        <div><p class="text-[10px] font-bold text-slate-400 uppercase">Matière</p><p class="text-sm font-bold">Mathématiques</p></div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-3">
                        <div class="p-2 bg-amber-50 text-amber-600 rounded-lg"><i class="fas fa-clock text-sm"></i></div>
                        <div><p class="text-[10px] font-bold text-slate-400 uppercase">Prochain</p><p class="text-sm font-bold">14:00 - 2BAC</p></div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                    <h3 class="text-[11px] font-bold text-slate-400 uppercase mb-4 tracking-wider">Actions Rapides</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <button onclick="showSection('notes')" class="p-3 bg-slate-50 rounded-xl hover:bg-indigo-50 transition-colors text-center border border-slate-100">
                            <i class="fas fa-plus-circle text-indigo-600 mb-1 text-sm"></i><br><span class="text-[10px] font-bold">Note</span>
                        </button>
                        <button onclick="showSection('eleves')" class="p-3 bg-slate-50 rounded-xl hover:bg-indigo-50 transition-colors text-center border border-slate-100">
                            <i class="fas fa-search text-indigo-600 mb-1 text-sm"></i><br><span class="text-[10px] font-bold">Élève</span>
                        </button>
                    </div>
                </div>
            </section>

            <section id="eleves" class="section-content">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-3">
                    <h1 class="text-lg font-bold">Mes Élèves</h1>
                    <input type="text" placeholder="Rechercher..." class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs w-full sm:w-48 outline-none focus:ring-2 focus:ring-indigo-100">
                </div>
                <div class="bg-white rounded-xl overflow-x-auto shadow-sm border border-slate-200">
                    <table class="w-full text-left text-xs min-w-[500px]">
                        <thead class="bg-slate-50 border-b border-slate-200 font-bold text-slate-500">
                            <tr>
                                <th class="px-4 py-2">Nom</th>
                                <th class="px-4 py-2">Classe</th>
                                <th class="px-4 py-2">Évolution</th>
                                <th class="px-4 py-2 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-2 font-semibold italic">Yassine El Amrani</td>
                                <td class="px-4 py-2 text-slate-500">2BAC PC</td>
                                <td class="px-4 py-2 text-emerald-500 font-bold">+1.5</td>
                                <td class="px-4 py-2 text-right"><button class="text-indigo-600 hover:underline">Voir</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="notes" class="section-content">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-lg font-bold">Saisie Rapide</h1>
                    <select class="bg-white border border-slate-200 rounded-lg px-2 py-1 text-xs font-bold outline-none">
                        <option>2BAC PC - G1</option>
                    </select>
                </div>
                <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm max-w-2xl">
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-100">
                        <span class="text-xs font-bold">Yassine El Amrani</span>
                        <div class="flex items-center space-x-2">
                            <input type="number" step="0.25" value="16.5" class="w-16 px-2 py-1 rounded border text-center font-bold text-indigo-600 text-sm outline-none">
                            <button class="text-slate-400 hover:text-emerald-500"><i class="fas fa-check-circle"></i></button>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-lg font-bold text-xs hover:bg-indigo-700 transition-all">Enregistrer</button>
                </div>
            </section>

            <section id="langue" class="section-content">
                <div class="max-w-md bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                            <i class="fas fa-globe text-sm"></i>
                        </div>
                        <h1 class="text-md font-bold text-slate-900">Préférences de Langue</h1>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Sélectionner la langue</label>
                            <select class="w-full mt-1.5 px-3 py-2 bg-slate-50 rounded-lg border border-slate-200 text-xs font-bold outline-none focus:ring-2 focus:ring-indigo-100 transition-all">
                                <option value="fr">Français</option>
                                <option value="ar">العربية (Arabe)</option>
                                <option value="en">English (Anglais)</option>
                            </select>
                            <p class="text-[10px] text-slate-500 mt-2 italic text-center">Cette modification s'appliquera à l'ensemble de l'interface.</p>
                        </div>
                        
                        <button class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-bold text-[10px] uppercase tracking-widest hover:bg-indigo-700 transition-all shadow-md shadow-indigo-100">
                            Enregistrer la langue
                        </button>
                    </div>
                </div>
            </section>

            <section id="moyennes" class="section-content">
                <h1 class="text-lg font-bold mb-4">Analyses</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
                    <div class="bg-white p-4 rounded-xl border border-slate-200">
                        <p class="text-[10px] font-bold text-slate-400 uppercase mb-2">Moyenne Classe</p>
                        <div class="text-2xl font-bold text-indigo-600">14.25 <span class="text-xs text-slate-300">/ 20</span></div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200">
                        <p class="text-[10px] font-bold text-slate-400 uppercase mb-1">Taux Réussite</p>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden mt-2">
                            <div class="bg-emerald-500 h-full w-[85%]"></div>
                        </div>
                        <p class="mt-1.5 text-[10px] font-bold text-emerald-600">85% des élèves</p>
                    </div>
                </div>
            </section>

            <section id="emploi" class="section-content">
                <div class="bg-white p-6 rounded-xl border border-slate-200 text-center max-w-sm mx-auto shadow-sm">
                    <i class="fas fa-calendar-alt text-indigo-200 text-3xl mb-3"></i>
                    <h2 class="text-sm font-bold mb-4">Mon emploi du temps</h2>
                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg font-bold text-xs hover:bg-indigo-700 transition-all w-full">
                        Télécharger (PDF)
                    </button>
                </div>
            </section>

            <section id="messages" class="section-content">
                <div class="max-w-4xl bg-white rounded-xl shadow-sm border border-slate-200 flex flex-col md:flex-row overflow-hidden h-auto md:h-[380px]">
                    <div class="w-full md:w-56 border-r p-3 bg-slate-50/50">
                        <h3 class="font-bold text-[9px] uppercase text-slate-400 mb-3 tracking-widest">Récent</h3>
                        <div class="p-2.5 bg-white rounded-lg border border-slate-200 shadow-xs cursor-pointer">
                            <p class="text-[11px] font-bold truncate">Sami Bensaid</p>
                            <p class="text-[9px] text-slate-400 truncate">Question sur le cours...</p>
                        </div>
                    </div>
                    <div class="flex-1 p-4 flex flex-col min-h-[250px]">
                        <div class="flex-1 flex items-center justify-center border-2 border-dashed border-slate-100 rounded-lg mb-3">
                            <p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest italic">Aucun message</p>
                        </div>
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Répondre..." class="flex-1 px-3 py-2 bg-slate-100 rounded-lg text-xs outline-none">
                            <button class="bg-indigo-600 text-white px-4 rounded-lg text-xs"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="profil" class="section-content">
                <div class="max-w-md bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
                    <h1 class="text-md font-bold mb-2">Mon Profil</h1>
                    <div>
                        <label class="text-[9px] font-bold text-slate-400 uppercase">Nom</label>
                        <input type="text" value="Ahmed Alami" class="w-full mt-1 px-3 py-1.5 bg-slate-50 rounded border border-slate-200 text-xs font-bold outline-none">
                    </div>
                    <div>
                        <label class="text-[9px] font-bold text-slate-400 uppercase">Email</label>
                        <input type="email" value="pr.ahmed@ecole.com" class="w-full mt-1 px-3 py-1.5 bg-slate-50 rounded border border-slate-200 text-xs font-bold outline-none">
                    </div>
                    <button class="w-full bg-slate-800 text-white py-2 rounded-lg font-bold text-[10px] uppercase tracking-widest hover:bg-slate-900 transition-all">Enregistrer</button>
                </div>
            </section>

        </main>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const burgerBtn = document.getElementById('burger-btn');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('active');
        }

        burgerBtn.addEventListener('click', toggleSidebar);

        function showSection(sectionId) {
           
            document.querySelectorAll('.section-content').forEach(s => s.classList.remove('active'));
         
            document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
            
            
            document.getElementById(sectionId).classList.add('active');
        
            const activeLink = document.getElementById('link-' + sectionId);
            if(activeLink) activeLink.classList.add('active');

        
            if (window.innerWidth < 1024) {
                const sidebarIsVisible = !sidebar.classList.contains('-translate-x-full');
                if(sidebarIsVisible) toggleSidebar();
            }
        }
    </script>
</body>
</html>