<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Smart École</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-custom { transition: all 0.2s ease; }
        .sidebar-link:hover { background: rgba(59, 130, 246, 0.08); color: #2563eb; }
        .sidebar-link.active { background: #2563eb; color: white; box-shadow: 0 4px 10px rgba(37, 99, 235, 0.2); }
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in-up {
    animation: fadeInUp 0.3s ease-out;
}
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased">

    <div class="flex min-h-screen">
        <aside class="w-52 bg-white border-r border-slate-200 hidden lg:flex flex-col sticky top-0 h-screen z-40">
            <div class="p-4 flex items-center space-x-2">
                <div class="bg-blue-600 p-1.5 rounded-lg text-white shadow-md">
                    <i class="fas fa-graduation-cap text-xs"></i>
                </div>
                <span class="text-lg font-bold text-slate-800 tracking-tight">Smart <span class="text-blue-600">Admin</span></span>
            </div>

            <nav class="flex-1 px-3 space-y-0.5 overflow-y-auto sidebar-scroll">
                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mb-1 tracking-widest">Main Menu</p>
                <a href="/admin" class="sidebar-link active flex items-center space-x-2.5 px-3 py-2 rounded-lg transition-custom text-xs">
                    <i class="fas fa-th-large w-4"></i> <span class="font-semibold">Tableau de bord</span>
                </a>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-4 mb-1 tracking-widest">Gestion Pédagogique</p>
                
                <div class="space-y-0.5 mb-3">
                    <a href="/class" class="sidebar-link flex items-center space-x-2.5 px-3 py-1.5 rounded-lg text-slate-600 transition-custom text-xs">
                        <i class="fas fa-school w-4 text-[10px]"></i> <span class="font-medium">Classes</span>
                    </a>
                    <a href="/matiére" class="sidebar-link flex items-center space-x-2.5 px-3 py-1.5 rounded-lg text-slate-600 transition-custom text-xs">
                        <i class="fas fa-book w-4 text-[10px]"></i> <span class="font-medium">Matières</span>
                    </a>
                    <a href="/prof" class="sidebar-link flex items-center space-x-2.5 px-3 py-1.5 rounded-lg text-slate-600 transition-custom text-xs">
                        <i class="fas fa-chalkboard-teacher w-4 text-[10px]"></i> <span class="font-medium">Professeurs</span>
                    </a>
                    <a href="/éleve" class="sidebar-link flex items-center space-x-2.5 px-3 py-1.5 rounded-lg text-slate-600 transition-custom text-xs">
                        <i class="fas fa-user-graduate w-4 text-[10px]"></i> <span class="font-medium">Élèves</span>
                    </a>
                </div>

                <div class="bg-slate-50/80 rounded-xl p-1.5 space-y-0.5 border border-slate-100">
                    <p class="text-[8px] font-bold text-blue-500 uppercase px-2 mb-1 tracking-tighter italic">Liaisons & Affectations</p>
                    <a href="#" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom text-[11px]">
                        <i class="fas fa-layer-group w-3 text-[9px] text-blue-500"></i> 
                        <span class="font-semibold leading-tight">Associer Matières</span>
                    </a>
                    <a href="#" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom text-[11px]">
                        <i class="fas fa-user-plus w-3 text-[9px] text-blue-500"></i> 
                        <span class="font-semibold leading-tight">Affecter Profs</span>
                    </a>
                    <a href="#" class="sidebar-link flex items-center space-x-2 px-2 py-1.5 rounded-lg text-slate-600 transition-custom text-[11px]">
                        <i class="fas fa-users-cog w-3 text-[9px] text-blue-500"></i> 
                        <span class="font-semibold leading-tight">Affecter Élèves</span>
                    </a>
                </div>

                <p class="text-[9px] font-bold text-slate-400 uppercase px-3 mt-4 mb-1 tracking-widest">Suivi & Planning</p>
                <a href="#" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom text-xs">
                    <i class="fas fa-chart-bar w-4 text-[10px]"></i> <span class="font-medium">Notes</span>
                </a>
                <a href="#" class="sidebar-link flex items-center space-x-2.5 px-3 py-2 rounded-lg text-slate-600 transition-custom text-xs">
                    <i class="fas fa-calendar-alt w-4 text-[10px]"></i> <span class="font-medium">Emploi du temps</span>
                </a>
            </nav>

            <div class="p-3 border-t border-slate-100">
           <div class="p-3 border-t border-slate-100 relative">
    <div id="profileMenu" class="hidden absolute bottom-full left-3 right-3 mb-2 bg-white rounded-2xl border border-slate-100 shadow-xl z-50 overflow-hidden animate-fade-in-up">
        <div class="p-2 space-y-1">
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl hover:bg-blue-50 text-slate-700 transition-colors group">
                <i class="fas fa-user-edit text-[10px] text-blue-500"></i>
                <span class="text-[12px] font-bold">Modifier profil</span>
            </a>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl hover:bg-blue-50 text-slate-700 transition-colors group">
                <i class="fas fa-language text-[10px] text-indigo-500"></i>
                <span class="text-[12px] font-bold">Changer langue</span>
            </a>
        </div>
    </div>

    <button id="profileBtn" class="w-full flex items-center justify-between px-4 py-3 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-100 hover:bg-blue-50/40 transition-all duration-300 group active:scale-[0.98]">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                <i class="fas fa-user text-[11px]"></i>
            </div>
            <span class="font-bold text-slate-700 group-hover:text-blue-700 transition-colors text-[12px]">Mon Profil</span>
        </div>
        <i id="profileArrow" class="fas fa-chevron-up text-[8px] text-slate-300 transition-transform duration-300"></i>
    </button>
</div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <header class="bg-white border-b border-slate-200 h-14 flex items-center justify-between px-6 sticky top-0 z-30">
                <div class="relative w-72">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <i class="fas fa-search text-xs"></i>
                    </span>
                    <input type="text" placeholder="Rechercher..." 
                           class="w-full pl-9 pr-4 py-1.5 bg-slate-50 border border-transparent rounded-lg text-xs focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                </div>

                <div class="flex items-center space-x-4">
                    
                    
                    <div class="flex items-center space-x-2 cursor-pointer group">
                        <div class="text-right">
                            <p class="text-[11px] font-bold text-slate-800 leading-none">Admin Smart</p>
                            <p class="text-[9px] text-slate-400 font-medium">Super Admin</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Admin+Smart&background=2563eb&color=fff" 
                             class="h-8 w-8 rounded-lg border border-slate-100" alt="Avatar">
                    </div>
                </div>
            </header>

            <div class="p-6 overflow-y-auto">
                <div class="mb-6">
                    <h1 class="text-xl font-black text-slate-900 tracking-tight uppercase">Tableau de Bord</h1>
                    <p class="text-slate-500 text-[11px] font-medium uppercase tracking-wide">Gestion de l'établissement</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-slate-400 text-[9px] font-bold uppercase mb-1">Total Élèves</p>
                            <h3 class="text-xl font-black text-slate-800">1,240</h3>
                        </div>
                        <div class="h-10 w-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 text-sm">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-slate-400 text-[9px] font-bold uppercase mb-1">Professeurs</p>
                            <h3 class="text-xl font-black text-slate-800">82</h3>
                        </div>
                        <div class="h-10 w-10 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 text-sm">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-slate-400 text-[9px] font-bold uppercase mb-1">Classes</p>
                            <h3 class="text-xl font-black text-slate-800">45</h3>
                        </div>
                        <div class="h-10 w-10 bg-orange-50 rounded-xl flex items-center justify-center text-orange-600 text-sm">
                            <i class="fas fa-school"></i>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-slate-400 text-[9px] font-bold uppercase mb-1">Succès</p>
                            <h3 class="text-xl font-black text-slate-800">94%</h3>
                        </div>
                        <div class="h-10 w-10 bg-purple-50 rounded-xl flex items-center justify-center text-purple-600 text-sm">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-2 border-dashed border-slate-200 rounded-[2rem] h-64 flex flex-col items-center justify-center text-slate-400 px-6 text-center">
                    <div class="w-12 h-12 bg-slate-50 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-plus-circle text-xl text-slate-200"></i>
                    </div>
                    <p class="text-slate-800 font-black text-sm mb-1 uppercase tracking-tight">Prêt à organiser ?</p>
                    <p class="text-slate-400 text-[10px] max-w-xs leading-relaxed font-medium">
                        Sélectionnez une option dans la sidebar pour commencer les affectations.
                    </p>
                </div>
            </div>
        </main>
    </div>




    <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');
    const profileArrow = document.getElementById('profileArrow');

   
    profileBtn.addEventListener('click', (e) => {
        e.stopPropagation(); 
        const isHidden = profileMenu.classList.contains('hidden');
        
        if (isHidden) {
            profileMenu.classList.remove('hidden');
            profileArrow.style.transform = 'rotate(180deg)';
        } else {
            profileMenu.classList.add('hidden');
            profileArrow.style.transform = 'rotate(0deg)';
        }
    });

    
    document.addEventListener('click', (e) => {
        if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
            profileMenu.classList.add('hidden');
            profileArrow.style.transform = 'rotate(0deg)';
        }
    });
</script>
</body>
</html>