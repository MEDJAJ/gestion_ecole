<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération | Smart École</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .transition-all-custom { transition: all 1.2s ease; }
        .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="h-screen w-full overflow-hidden font-sans bg-white">

    <div class="flex h-full w-full">
        
        <div class="hidden md:block md:w-1/2 lg:w-3/5 relative overflow-hidden border-r border-slate-100">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&q=80&w=1600" 
                 class="absolute inset-0 w-full h-full object-cover" alt="Bibliothèque École">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/40 to-slate-900/80"></div>
            
            <div class="absolute bottom-10 left-10 right-10 text-white">
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 max-w-lg">
                    <h2 class="text-2xl font-bold mb-2">Pas d'inquiétude.</h2>
                    <p class="text-sm text-blue-100/90">Nous allons vous aider à retrouver l'accès à votre espace Smart École en quelques secondes.</p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-2/5 flex items-center justify-center bg-white p-6 md:p-12">
            <div class="w-full max-w-sm fade-in-up">
                
                <div class="flex items-center space-x-2 mb-10">
                    <div id="logo-icon" class="bg-blue-600 p-2 rounded-xl text-white transition-all-custom shadow-lg">
                        <i class="fas fa-graduation-cap text-lg"></i>
                    </div>
                    <h2 class="text-xl font-bold text-slate-800 tracking-tight">Smart <span id="logo-text" class="text-blue-600 transition-all-custom">École</span></h2>
                </div>

               

                <form action="#" class="space-y-6">
                    <div>
                        <label for="email" class="block text-xs font-bold text-slate-600 mb-1.5 ml-1 uppercase tracking-wider">Adresse e-mail</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                <i class="fas fa-envelope text-sm"></i>
                            </span>
                            <input type="email" id="email" name="email" required placeholder="Entrez votre adresse e-mail" 
                                   class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 focus:bg-white transition-all text-sm">
                        </div>
                    </div>

                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg shadow-blue-500/20 transform hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-300 btn-dynamic flex justify-center items-center text-sm group">
                        <span>Envoyer le lien</span>
                        <i class="fas fa-paper-plane ml-2 text-xs group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </button>
                </form>

                <div class="mt-10 text-center">
                    <a href="login.html" class="inline-flex items-center text-xs font-bold text-slate-500 hover:text-blue-600 transition-colors group">
                        <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Retour à la connexion
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const themes = [
            { primary: '#2563eb', light: '#eff6ff' }, 
            { primary: '#0891b2', light: '#ecfeff' }, 
            { primary: '#4f46e5', light: '#eef2ff' }, 
            { primary: '#059669', light: '#ecfdf5' }
        ];
        let themeIndex = 0;
        function updateTheme() {
            const theme = themes[themeIndex];
            document.querySelectorAll('.btn-dynamic').forEach(el => el.style.backgroundColor = theme.primary);
            document.querySelectorAll('.btn-dynamic-text').forEach(el => el.style.color = theme.primary);
            document.querySelectorAll('.btn-dynamic-bg-light').forEach(el => el.style.backgroundColor = theme.light);
            document.getElementById('logo-icon').style.backgroundColor = theme.primary;
            document.getElementById('logo-text').style.color = theme.primary;
            themeIndex = (themeIndex + 1) % themes.length;
        }
        setInterval(updateTheme, 5000);
        updateTheme();
    </script>
</body>
</html>