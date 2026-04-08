<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du Temps | Smart Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background: rgba(79, 70, 229, 0.08); color: #4f46e5; }
        .sidebar-link.active { background: #4f46e5; color: white; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2); }
        
        .download-btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .download-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 20px -5px rgba(79, 70, 229, 0.15);
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
                <a href="/emploi" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-all text-xs">
                    <i class="fas fa-calendar-alt w-4"></i> <span class="font-semibold text-[11px]">Emploi du temps</span>
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
                    <span class="font-bold uppercase tracking-tight">Quitter</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 flex flex-col p-4 lg:p-8">
            <header class="mb-6 lg:mb-10 text-center lg:text-left">
                <h1 class="text-xl lg:text-2xl font-black text-slate-900 tracking-tight uppercase">Emploi du temps</h1>
                <p class="text-[11px] lg:text-xs text-slate-500 font-medium">Téléchargez votre planning du S2.</p>
            </header>

            <div class="flex-1 flex items-center justify-center p-4">
                <div class="text-center bg-white p-8 lg:p-12 rounded-[2.5rem] border border-slate-100 shadow-sm w-full max-w-sm">
                    <div class="mb-6 inline-flex items-center justify-center w-16 h-16 bg-indigo-50 text-indigo-600 rounded-3xl animate-bounce">
                        <i class="fas fa-file-pdf text-2xl"></i>
                    </div>
                    
                    <h2 class="text-lg lg:text-xl font-bold text-slate-800 mb-1">Document prêt</h2>
                    <p class="text-[11px] lg:text-xs text-slate-500 mb-8 max-w-[220px] mx-auto leading-relaxed">
                        Planning PDF complet incluant les horaires, salles et modules.
                    </p>
                    
                    <button class="download-btn w-full bg-indigo-600 text-white px-8 py-4 rounded-2xl font-bold text-sm flex items-center justify-center space-x-3 shadow-lg shadow-indigo-100">
                        <i class="fas fa-cloud-download-alt text-base"></i>
                        <span>Télécharger</span>
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