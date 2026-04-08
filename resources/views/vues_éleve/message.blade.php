<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2); }
        
        /* Dynamic height for chat */
        .chat-container { height: calc(100vh - 160px); }
        @media (max-width: 1024px) {
            .chat-container { height: calc(100vh - 180px); }
        }

        .custom-scrollbar::-webkit-scrollbar { width: 3px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }

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
                <a href="/message_éleve" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-all text-xs">
                    <i class="fas fa-envelope w-4"></i> <span class="font-semibold">Messages</span>
                </a>
                
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-5 mb-1 tracking-widest">Paramètres</p>
                <a href="/profile_éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-user-cog w-4"></i> <span class="font-medium">Modifier Profil</span>
                </a>
                <a href="/langue" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-globe w-4"></i> <span class="font-medium">Langue du site</span>
                </a>
            </nav>

            <div class="p-3 border-t border-slate-100">
                <button class="w-full flex items-center space-x-2.5 px-3 py-2 rounded-lg text-red-500 hover:bg-red-50 transition-all group text-xs font-bold">
                    <i class="fas fa-sign-out-alt w-4 group-hover:-translate-x-0.5 transition-transform"></i> 
                    <span>Déconnexion</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 p-3 lg:p-6 flex flex-col">
            <header class="mb-4">
                <h1 class="text-xl font-black text-slate-900 tracking-tight uppercase">Messages</h1>
                <p class="text-[11px] text-slate-500 font-medium italic">Échangez مع الزملاء والأساتذة.</p>
            </header>

            <div class="flex bg-white rounded-2xl lg:rounded-3xl shadow-sm border border-slate-200 overflow-hidden chat-container">
                
                <div class="flex-1 flex flex-col bg-slate-50/20">
                    <div class="px-4 py-3 bg-white border-b border-slate-100 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Prof+Alaoui&background=4f46e5&color=fff" class="w-8 h-8 rounded-lg shadow-sm" alt="">
                            <div>
                                <p class="text-xs font-black text-slate-800">Prof. Alaoui</p>
                                <p class="text-[9px] text-emerald-500 font-bold uppercase tracking-tighter flex items-center">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-1"></span> En ligne
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 p-4 overflow-y-auto space-y-4 custom-scrollbar">
                        <div class="flex items-start space-x-2">
                            <div class="bg-white p-3 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 max-w-[85%] lg:max-w-[75%]">
                                <p class="text-[12px] text-slate-700 leading-relaxed">Bonjour Mohammed, j'ai bien reçu ton travail. Ton projet Flutter est excellent !</p>
                                <p class="text-[8px] text-slate-400 mt-1 text-right italic">14:15</p>
                            </div>
                        </div>

                        <div class="flex items-start justify-end space-x-2">
                            <div class="bg-indigo-600 text-white p-3 rounded-2xl rounded-tr-none shadow-md max-w-[85%] lg:max-w-[75%]">
                                <p class="text-[12px] leading-relaxed">Merci beaucoup Monsieur ! Est-ce que je peux encore améliorer la partie authentification ?</p>
                                <p class="text-[8px] text-indigo-200 mt-1 text-right italic">14:20</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 lg:p-4 bg-white border-t border-slate-100">
                        <div class="relative flex items-center">
                            <input type="text" placeholder="Répondre..." class="w-full pl-4 pr-12 py-3 bg-slate-50 border-none rounded-xl text-xs focus:ring-1 focus:ring-indigo-500/30 outline-none">
                            <button class="absolute right-1.5 bg-indigo-600 text-white p-2.5 rounded-lg hover:bg-indigo-700 transition shadow-sm">
                                <i class="fas fa-paper-plane text-[10px]"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-64 lg:w-72 border-l border-slate-100 flex flex-col bg-white hidden lg:flex">
                    <div class="p-4 border-b border-slate-50">
                        <h2 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Contacts</h2>
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-2.5 text-slate-400 text-[9px]"></i>
                            <input type="text" placeholder="Rechercher..." class="w-full pl-8 pr-3 py-2 bg-slate-50 border-none rounded-lg text-[10px] outline-none">
                        </div>
                    </div>

                    <div class="flex-1 overflow-y-auto custom-scrollbar">
                        <p class="px-4 py-2 text-[9px] font-bold text-slate-400 uppercase bg-slate-50/50">Professeurs</p>
                        
                        <div class="px-3 py-3 flex items-center space-x-3 bg-indigo-50/50 border-r-4 border-indigo-600 cursor-pointer">
                            <img src="https://ui-avatars.com/api/?name=Prof+Alaoui&background=4f46e5&color=fff" class="w-8 h-8 rounded-lg" alt="">
                            <div class="flex-1 min-w-0">
                                <p class="text-[11px] font-bold text-slate-800 truncate">Prof. Alaoui</p>
                                <p class="text-[9px] text-indigo-600">Développement</p>
                            </div>
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                        </div>

                        <div class="px-3 py-3 flex items-center space-x-3 hover:bg-slate-50 cursor-pointer transition-all border-b border-slate-50">
                            <img src="https://ui-avatars.com/api/?name=Mme+Bennani&background=f59e0b&color=fff" class="w-8 h-8 rounded-lg" alt="">
                            <div class="flex-1 min-w-0">
                                <p class="text-[11px] font-bold text-slate-800 truncate">Mme. Bennani</p>
                                <p class="text-[9px] text-slate-400">Mathématiques</p>
                            </div>
                        </div>
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