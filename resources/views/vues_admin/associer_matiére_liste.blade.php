<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Programmes | Smart Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-scroll::-webkit-scrollbar { width: 3px; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900 text-[13px]">

    <div class="flex min-h-screen">
     

        <main class="flex-1 p-6 lg:p-10 overflow-y-auto">
            <div class="max-w-6xl mx-auto">
                
                <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <div class="flex items-center space-x-2 text-blue-600 mb-2">
                            <i class="fas fa-layer-group text-xs"></i>
                            <span class="text-[10px] font-black uppercase tracking-[0.2em]">Vue d'ensemble</span>
                        </div>
                        <h1 class="text-2xl font-black text-slate-800 tracking-tight">Matières par Classe</h1>
                        <p class="text-slate-500 text-[11px] mt-1 italic">Consultez et gérez la répartition pédagogique de chaque niveau.</p>
                    </div>

                    <a href="{{ route('association.create') }}" class="group flex items-center space-x-3 bg-blue-600 text-white px-5 py-2.5 rounded-2xl shadow-lg shadow-blue-100 hover:bg-blue-700 transition-all active:scale-95">
                        <i class="fas fa-plus text-[10px]"></i>
                        <span class="text-[11px] font-bold uppercase tracking-wider">Nouvelle Association</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($classes as $classe)
                    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-300 overflow-hidden group">
                        <div class="p-5 border-b border-slate-50 bg-slate-50/30">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                        <i class="fas fa-chalkboard"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-black text-slate-800 text-sm tracking-tight">{{ $classe->nom_classe }}</h3>
                                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">{{ $classe->niveau }}</span>
                                    </div>
                                </div>
                                <span class="bg-blue-50 text-blue-600 text-[9px] font-black px-2 py-1 rounded-lg uppercase">
                                    {{ $classe->matieres->count() }} Matières
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex flex-wrap gap-2">
                                @forelse($classe->matieres as $matiere)
                                    <div class="flex items-center bg-slate-50 border border-slate-100 hover:border-blue-200 hover:bg-white transition-all pl-3 pr-1 py-1 rounded-xl group/tag">
                                        <div class="flex flex-col mr-3">
                                            <span class="text-[11px] font-bold text-slate-700">{{ $matiere->nom_matiere }}</span>
                                            <span class="text-[8px] font-black text-blue-500/70 uppercase tracking-widest">{{ $matiere->code_matiere }}</span>
                                        </div>
                                        <button class="w-6 h-6 rounded-lg flex items-center justify-center text-slate-300 hover:bg-red-50 hover:text-red-500 transition-colors">
                                            <i class="fas fa-times text-[8px]"></i>
                                        </button>
                                    </div>
                                @empty
                                    <div class="w-full py-4 flex flex-col items-center justify-center border-2 border-dashed border-slate-100 rounded-2xl">
                                        <i class="fas fa-folder-open text-slate-200 mb-2"></i>
                                        <p class="text-[10px] text-slate-400 font-medium italic">Aucune matière associée</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                      
                    </div>
                    @endforeach
                </div>

            </div>
        </main>
    </div>

</body>
</html>