<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langue du site | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2); }
        
        .custom-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1rem;
            transition: all 0.2s ease;
        }
        
        .custom-select:focus {
            background-color: #fff;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.08);
            outline: none;
        }

        /* Mobile Sidebar Logic */
        @media (max-width: 1024px) {
            #sidebar { transform: translateX(-100%); transition: transform 0.3s ease-in-out; }
            #sidebar.open { transform: translateX(0); }
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
                <a href="/notes_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-file-invoice w-4"></i> <span class="font-medium">Mes Notes</span>
                </a>
                <a href="/emploi" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-calendar-alt w-4"></i> <span class="font-medium">Emploi du temps</span>
                </a>
                <a href="/message_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-envelope w-4"></i> <span class="font-medium">Messages</span>
                </a>
                
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-5 mb-1 tracking-widest">Paramètres</p>
                <a href="/profile_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-user-cog w-4"></i> <span class="font-medium">Modifier Profil</span>
                </a>
                <a href="/langue" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-all text-xs">
                    <i class="fas fa-globe w-4"></i> <span class="font-semibold">Langue du site</span>
                </a>
            </nav>

            <div class="p-3 border-t border-slate-100">
                <button class="w-full flex items-center space-x-2.5 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-all group text-xs font-bold uppercase">
                    <i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-4 lg:p-8">
            <header class="mb-8 text-center lg:text-left">
                <h1 class="text-xl lg:text-2xl font-black text-slate-900 tracking-tight uppercase">Configuration</h1>
                <p class="text-[11px] lg:text-xs text-slate-500 font-medium italic">Définissez la langue par défaut de votre interface.</p>
            </header>

            <div class="max-w-2xl mx-auto lg:mx-0 space-y-6">
                
                <div class="bg-white p-6 lg:p-10 rounded-[2rem] shadow-sm border border-slate-200">
                    <div class="flex items-center space-x-3 mb-8">
                        <div class="bg-indigo-50 p-2 rounded-xl text-indigo-600 text-sm">
                            <i class="fas fa-language"></i>
                        </div>
                        <h3 class="text-[10px] lg:text-[11px] font-black text-slate-800 uppercase tracking-widest">Langage du site actuel</h3>
                    </div>

                    <div class="space-y-6">
                        <div class="relative max-w-sm">
                            <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 block mb-3 ml-1 uppercase">Choisir une langue</label>
                            <select class="w-full custom-select px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs lg:text-sm font-bold text-slate-700 cursor-pointer focus:bg-white transition-all">
                                <option value="fr">🇫🇷 &nbsp; Français (Par défaut)</option>
                                <option value="en">🇺🇸 &nbsp; English (Anglais)</option>
                                <option value="ar">🇲🇦 &nbsp; العربية (Arabe)</option>
                            </select>
                        </div>
                        
                        <div class="p-4 lg:p-5 bg-amber-50 rounded-2xl border border-amber-100 flex items-start space-x-3.5">
                            <i class="fas fa-info-circle text-amber-500 text-xs mt-1"></i>
                            <p class="text-[10px] lg:text-[11px] text-amber-800 leading-relaxed font-semibold">
                                Le changement de langue rechargera la page pour appliquer les nouvelles traductions à l'ensemble du tableau de bord.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col-reverse sm:flex-row items-center justify-end gap-3 pt-2">
                    <button class="w-full sm:w-auto text-slate-400 font-bold text-xs hover:text-slate-600 px-6 py-3 transition-colors uppercase tracking-wide">
                        Réinitialiser
                    </button>
                    <button class="w-full sm:w-auto bg-indigo-600 text-white font-bold text-[11px] uppercase tracking-widest px-10 py-4 rounded-xl shadow-lg shadow-indigo-100 hover:bg-indigo-700 transform active:scale-95 transition-all">
                        Sauvegarder
                    </button>
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