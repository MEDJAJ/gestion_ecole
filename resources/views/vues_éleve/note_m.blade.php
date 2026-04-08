<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Notes | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.25); }
        .note-card { transition: all 0.2s ease; border: 1px solid #f1f5f9; }
        .note-card:hover { transform: translateY(-3px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05); border-color: #e2e8f0; }
        
        /* Mobile Sidebar Logic */
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
<body class="bg-slate-50 font-sans text-slate-900 antialiased">

    <div class="lg:hidden bg-white border-b border-slate-200 p-4 flex justify-between items-center sticky top-0 z-[60]">
        <div class="flex items-center space-x-2">
            <div class="bg-indigo-600 p-1.5 rounded-lg text-white shadow-md">
                <i class="fas fa-user-graduate text-xs"></i>
            </div>
            <span class="text-lg font-bold text-slate-800 tracking-tight">Smart <span class="text-indigo-600">Student</span></span>
        </div>
        <button id="burger-btn" class="text-slate-600 p-2 focus:outline-none">
            <i class="fas fa-bars text-2xl" id="burger-icon"></i>
        </button>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black/50 z-[55] hidden lg:hidden"></div>

    <div class="flex min-h-screen">
        <aside id="sidebar" class="w-64 bg-white border-r border-slate-200 fixed lg:sticky top-0 left-0 h-screen z-[60] flex flex-col lg:translate-x-0 transition-transform duration-300">
            <div class="p-5 flex items-center space-x-2">
                <div class="bg-indigo-600 p-1.5 rounded-lg text-white shadow-md">
                    <i class="fas fa-user-graduate text-xs"></i>
                </div>
                <span class="text-lg font-bold text-slate-800 tracking-tight">Smart <span class="text-indigo-600">Student</span></span>
            </div>

            <nav class="flex-1 px-3 space-y-1 overflow-y-auto">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mb-1 tracking-widest">Mon Espace</p>
                <a href="/home_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-th-large w-4"></i> <span class="font-medium">Dashboard</span>
                </a>
                <a href="/notes_éleve" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-all text-xs">
                    <i class="fas fa-file-invoice w-4"></i> <span class="font-semibold">Mes Notes</span>
                </a>
                <a href="/emploi" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-calendar-alt w-4"></i> <span class="font-medium">Emploi du temps</span>
                </a>
                <a href="/message_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-envelope w-4"></i> <span class="font-medium">Messages</span>
                </a>
                
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-5 mb-1 tracking-widest">Paramètres</p>
                <a href="/profile_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-user-cog w-4"></i> <span class="font-medium">Profil</span>
                </a>
                <a href="/langue" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-globe w-4"></i> <span class="font-medium">Langue</span>
                </a>
            </nav>

            <div class="p-3 border-t border-slate-100">
                <button class="w-full flex items-center space-x-2.5 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-all group text-xs">
                    <i class="fas fa-sign-out-alt w-4 group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span class="font-bold">Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-4 lg:p-8">
            <header class="mb-8">
                <h1 class="text-xl lg:text-2xl font-black text-slate-900 tracking-tight uppercase">Mes Notes</h1>
                <p class="text-[11px] lg:text-xs text-slate-500 font-medium">Consultez vos résultats détaillés par matière.</p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded-2xl note-card shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-blue-50 text-blue-600 w-9 h-9 rounded-xl flex items-center justify-center">
                            <i class="fas fa-code text-sm"></i>
                        </div>
                        <span class="bg-slate-100 text-slate-600 text-[8px] font-black px-2 py-0.5 rounded-full uppercase">Coef. 4</span>
                    </div>
                    <h3 class="text-xs font-bold text-slate-800 mb-0.5 truncate">Développement Mobile</h3>
                    <p class="text-[9px] text-slate-400 mb-3 italic">Prof. Alaoui</p>
                    <div class="flex items-end justify-between">
                        <span class="text-2xl font-black text-slate-800 tracking-tighter">19.00</span>
                        <span class="text-emerald-500 text-[8px] font-bold uppercase px-2 py-0.5 bg-emerald-50 rounded-md">Excellent</span>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-2xl note-card shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-orange-50 text-orange-600 w-9 h-9 rounded-xl flex items-center justify-center">
                            <i class="fas fa-square-root-alt text-sm"></i>
                        </div>
                        <span class="bg-slate-100 text-slate-600 text-[8px] font-black px-2 py-0.5 rounded-full uppercase">Coef. 7</span>
                    </div>
                    <h3 class="text-xs font-bold text-slate-800 mb-0.5 truncate">Mathématiques</h3>
                    <p class="text-[9px] text-slate-400 mb-3 italic">Prof. Bensalah</p>
                    <div class="flex items-end justify-between">
                        <span class="text-2xl font-black text-slate-800 tracking-tighter">14.50</span>
                        <span class="text-orange-500 text-[8px] font-bold uppercase px-2 py-0.5 bg-orange-50 rounded-md">Bien</span>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-2xl note-card shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-purple-50 text-purple-600 w-9 h-9 rounded-xl flex items-center justify-center">
                            <i class="fas fa-atom text-sm"></i>
                        </div>
                        <span class="bg-slate-100 text-slate-600 text-[8px] font-black px-2 py-0.5 rounded-full uppercase">Coef. 5</span>
                    </div>
                    <h3 class="text-xs font-bold text-slate-800 mb-0.5 truncate">Physique-Chimie</h3>
                    <p class="text-[9px] text-slate-400 mb-3 italic">Prof. Daoudi</p>
                    <div class="flex items-end justify-between">
                        <span class="text-2xl font-black text-slate-800 tracking-tighter">17.25</span>
                        <span class="text-emerald-500 text-[8px] font-bold uppercase px-2 py-0.5 bg-emerald-50 rounded-md">Très Bien</span>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-2xl note-card shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="bg-rose-50 text-rose-600 w-9 h-9 rounded-xl flex items-center justify-center">
                            <i class="fas fa-language text-sm"></i>
                        </div>
                        <span class="bg-slate-100 text-slate-600 text-[8px] font-black px-2 py-0.5 rounded-full uppercase">Coef. 3</span>
                    </div>
                    <h3 class="text-xs font-bold text-slate-800 mb-0.5 truncate">Anglais</h3>
                    <p class="text-[9px] text-slate-400 mb-3 italic">Prof. Smith</p>
                    <div class="flex items-end justify-between">
                        <span class="text-2xl font-black text-slate-800 tracking-tighter">15.00</span>
                        <span class="text-emerald-500 text-[8px] font-bold uppercase px-2 py-0.5 bg-emerald-50 rounded-md">Bien</span>
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