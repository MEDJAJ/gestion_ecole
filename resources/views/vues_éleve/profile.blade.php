<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Profil | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2); }
        .form-input { 
            background: #f8fafc; 
            border: 1px solid #e2e8f0; 
            transition: all 0.2s ease; 
        }
        .form-input:focus { 
            background: #fff; 
            border-color: #4f46e5; 
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.08); 
            outline: none;
        }

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
                <a href="/profile_éleve" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-all text-xs">
                    <i class="fas fa-user-cog w-4"></i> <span class="font-semibold">Modifier Profil</span>
                </a>
                <a href="/langue" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-all text-xs">
                    <i class="fas fa-globe w-4"></i> <span class="font-medium">Langue du site</span>
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
                <h1 class="text-xl lg:text-2xl font-black text-slate-900 tracking-tight uppercase">Paramètres du profil</h1>
                <p class="text-[11px] lg:text-xs text-slate-500 font-medium italic">Gérez vos informations personnelles et vos préférences.</p>
            </header>

            <div class="max-w-3xl mx-auto lg:mx-0">
                <form class="space-y-6">
                    
                    <div class="bg-white p-5 lg:p-8 rounded-[2rem] shadow-sm border border-slate-200">
                        <div class="flex items-center space-x-2 mb-6">
                            <i class="fas fa-id-card text-indigo-600 text-xs"></i>
                            <h3 class="text-[10px] lg:text-[11px] font-black text-slate-800 uppercase tracking-widest">Informations Personnelles</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Nom complet</label>
                                <input type="text" value="Mohammed Amine" class="w-full px-4 py-3 rounded-xl form-input text-xs font-semibold text-slate-700">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Email académique</label>
                                <input type="email" value="m.amine@student.ma" class="w-full px-4 py-3 rounded-xl form-input text-xs font-semibold text-slate-700">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Téléphone</label>
                                <input type="text" placeholder="+212 600 000 000" class="w-full px-4 py-3 rounded-xl form-input text-xs font-semibold text-slate-700">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Date de naissance</label>
                                <input type="date" class="w-full px-4 py-3 rounded-xl form-input text-xs font-semibold text-slate-700">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-5 lg:p-8 rounded-[2rem] shadow-sm border border-slate-200">
                        <div class="flex items-center space-x-2 mb-6">
                            <i class="fas fa-shield-alt text-indigo-600 text-xs"></i>
                            <h3 class="text-[10px] lg:text-[11px] font-black text-slate-800 uppercase tracking-widest">Sécurité</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Ancien mot de passe</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl form-input text-xs">
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-[9px] lg:text-[10px] font-bold text-slate-400 ml-1 uppercase">Nouveau mot de passe</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl form-input text-xs">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col-reverse md:flex-row items-center justify-end gap-3 pt-2">
                        <button type="button" class="w-full md:w-auto px-6 py-3 text-slate-400 font-bold text-xs hover:text-slate-600 transition-colors uppercase">
                            Annuler
                        </button>
                        <button type="submit" class="w-full md:w-auto px-10 py-4 bg-indigo-600 text-white rounded-xl font-bold text-xs shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all active:scale-95 uppercase tracking-widest">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
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