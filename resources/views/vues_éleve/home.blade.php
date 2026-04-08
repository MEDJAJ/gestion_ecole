<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élève | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link { transition: all 0.2s; border-radius: 8px; margin-bottom: 2px; }
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 2px 8px rgba(79, 70, 229, 0.2); }
        .card-stat { transition: transform 0.2s ease; }
        .card-stat:hover { transform: translateY(-3px); }
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }

        /* Mobile Sidebar Transitions */
        @media (max-width: 1024px) {
            #sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            #sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">

    <div class="lg:hidden bg-white border-b border-slate-200 p-4 flex justify-between items-center sticky top-0 z-[60]">
        <div class="flex items-center space-x-2">
            <div class="bg-indigo-600 p-1.5 rounded-lg text-white">
                <i class="fas fa-user-graduate text-sm"></i>
            </div>
            <span class="text-lg font-bold tracking-tight">Smart <span class="text-indigo-600">Student</span></span>
        </div>
        <button id="burger-btn" class="text-slate-600 p-2 focus:outline-none">
            <i class="fas fa-bars text-2xl" id="burger-icon"></i>
        </button>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black/50 z-[55] hidden lg:hidden"></div>

    <div class="flex min-h-screen">
        <aside id="sidebar" class="w-64 bg-white border-r border-slate-200 fixed lg:sticky top-0 left-0 h-screen z-[60] flex flex-col lg:flex">
            <div class="p-4 flex items-center space-x-2">
                <div class="bg-indigo-600 p-1.5 rounded-lg text-white">
                    <i class="fas fa-user-graduate text-sm"></i>
                </div>
                <span class="text-lg font-bold tracking-tight">Smart <span class="text-indigo-600">Student</span></span>
            </div>

            <nav class="flex-1 px-3 mt-4 overflow-y-auto">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mb-2 tracking-widest">Mon Espace</p>
                <a href="/home_éleve" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold">
                    <i class="fas fa-th-large w-4"></i> <span>Dashboard</span>
                </a>
                <a href="/notes_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold text-slate-600">
                    <i class="fas fa-file-invoice w-4"></i> <span>Mes Notes</span>
                </a>
                <a href="/emploi" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold text-slate-600">
                    <i class="fas fa-calendar-alt w-4"></i> <span>Emploi du temps</span>
                </a>
                <a href="/message_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold text-slate-600">
                    <i class="fas fa-envelope w-4"></i> <span>Messages</span>
                </a>
                
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-6 mb-2 tracking-widest">Paramètres</p>
                <a href="/profile_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold text-slate-600">
                    <i class="fas fa-user-cog w-4"></i> <span>Profil</span>
                </a>
                <a href="/langue" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 text-xs font-semibold text-slate-600">
                    <i class="fas fa-language w-4"></i> <span>Langue</span>
                </a>
            </nav>

            <div class="p-3 border-t">
                <button class="w-full flex items-center space-x-2 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 text-xs font-bold transition-all">
                    <i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-4 lg:p-6 w-full overflow-x-hidden">
            
            <header class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-xl lg:text-2xl font-black text-slate-900 tracking-tight">Tableau de Bord</h1>
                    <p class="text-[11px] text-slate-500 font-medium">Tes statistiques en un coup d'œil.</p>
                </div>
                <div class="flex items-center space-x-3 bg-white p-1.5 pr-4 rounded-xl border border-slate-100 shadow-sm">
                    <img src="https://ui-avatars.com/api/?name=Mohammed+Jajaa&background=4f46e5&color=fff" class="h-8 w-8 rounded-lg shadow-sm" alt="Avatar">
                    <div class="hidden sm:block leading-none">
                        <p class="text-[11px] font-black text-slate-800">M. Jajaa</p>
                        <p class="text-[8px] text-indigo-600 font-bold uppercase tracking-tighter">Premium</p>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <div class="bg-white p-5 rounded-2xl border border-slate-200 card-stat shadow-sm flex flex-col items-center text-center">
                    <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-trophy text-sm"></i>
                    </div>
                    <p class="text-slate-400 text-[9px] font-bold uppercase tracking-widest mb-1">Classement</p>
                    <div class="flex items-baseline space-x-1">
                        <h3 class="text-3xl font-black text-slate-800">3<span class="text-sm">ème</span></h3>
                        <span class="text-slate-400 text-[10px] font-bold">/ 32</span>
                    </div>
                    <p class="text-emerald-500 text-[9px] font-bold mt-2">
                        <i class="fas fa-arrow-up mr-0.5"></i> +1 place ce mois
                    </p>
                </div>

                <div class="bg-indigo-600 p-5 rounded-2xl text-white card-stat shadow-lg shadow-indigo-100 flex flex-col items-center text-center relative overflow-hidden">
                    <div class="w-10 h-10 bg-white/20 text-white rounded-xl flex items-center justify-center mb-3 backdrop-blur-sm">
                        <i class="fas fa-chart-line text-sm"></i>
                    </div>
                    <p class="text-indigo-100 text-[9px] font-bold uppercase tracking-widest mb-1">Moyenne Générale</p>
                    <h3 class="text-3xl font-black italic">16.45</h3>
                    <div class="mt-2 text-[8px] bg-white/10 px-3 py-1 rounded-full font-bold uppercase tracking-tighter">
                        Mention Très Bien
                    </div>
                    <i class="fas fa-graduation-cap absolute -bottom-2 -right-2 text-5xl opacity-10 rotate-12"></i>
                </div>

                <div class="bg-slate-900 p-5 rounded-2xl text-white card-stat shadow-sm flex flex-col items-center text-center sm:col-span-2 lg:col-span-1">
                    <div class="w-10 h-10 bg-slate-800 text-yellow-400 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-crown text-sm"></i>
                    </div>
                    <p class="text-slate-400 text-[9px] font-bold uppercase tracking-widest mb-2">Major de classe</p>
                    <div class="flex items-center space-x-2 mb-1">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Yassini&background=10b981&color=fff" class="w-6 h-6 rounded-full border border-slate-700" alt="Sarah">
                        <span class="text-[11px] font-bold">Sarah Y.</span>
                    </div>
                    <p class="text-emerald-400 font-black text-lg">18.90</p>
                </div>

            </div>

            <div class="mt-8">
                <h2 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4">Dernières Notes</h2>
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm">
                    <div class="p-4 flex justify-between items-center border-b border-slate-50">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-slate-50 rounded flex items-center justify-center text-indigo-600 font-bold text-[10px]">MA</div>
                            <div>
                                <p class="text-xs font-bold">Mathématiques</p>
                                <p class="text-[9px] text-slate-400">Contrôle N°2</p>
                            </div>
                        </div>
                        <span class="text-xs font-black text-slate-800">17.50</span>
                    </div>
                    <div class="p-4 flex justify-between items-center bg-slate-50/30">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-slate-50 rounded flex items-center justify-center text-indigo-600 font-bold text-[10px]">PH</div>
                            <div>
                                <p class="text-xs font-bold">Physique</p>
                                <p class="text-[9px] text-slate-400">Contrôle N°1</p>
                            </div>
                        </div>
                        <span class="text-xs font-black text-slate-800">15.00</span>
                    </div>
                </div>
            </div>
            
        </main>
    </div>

    <script>
        const burgerBtn = document.getElementById('burger-btn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const burgerIcon = document.getElementById('burger-icon');

        function toggleMenu() {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('hidden');
            
            // Toggle icon bars <-> times
            if (sidebar.classList.contains('open')) {
                burgerIcon.classList.replace('fa-bars', 'fa-times');
            } else {
                burgerIcon.classList.replace('fa-times', 'fa-bars');
            }
        }

        burgerBtn.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    </script>

</body>
</html>