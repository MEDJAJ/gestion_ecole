<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart École | L'Excellence Connectée</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#0040a1', accent: '#3b82f6' },
                    fontFamily: { head: 'Manrope', body: 'Inter' }
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        .glass { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); }
        #particles-js { position: absolute; width: 100%; height: 100%; z-index: 1; }
        .hero-shape { clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%); }
        .hover-lift { transition: transform 0.3s ease, shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-10px); }
    </style>
</head>
<body class="font-body text-slate-900 bg-white">

    <nav class="fixed w-full z-50 glass border-b border-slate-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2 group cursor-pointer">
                <div class="bg-primary p-2 rounded-xl text-white transform group-hover:rotate-12 transition-transform">
                    <i class="fas fa-graduation-cap text-xl"></i>
                </div>
                <span class="text-2xl font-head font-extrabold text-primary tracking-tighter">Smart École</span>
            </div>
            
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <a href="#" class="hover:text-primary transition">Accueil</a>
                <a href="#about" class="hover:text-primary transition">Pourquoi nous ?</a>
                <a href="#stats" class="hover:text-primary transition">Chiffres</a>
                <a href="/login" class="bg-primary text-white px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/30 transition-all active:scale-95">Espace personnel</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center overflow-hidden bg-slate-900 hero-shape">
        <div id="particles-js"></div>
        <img src="https://images.unsplash.com/photo-1523050335102-c325068dd222?auto=format&fit=crop&q=80&w=1600" 
             class="absolute inset-0 w-full h-full object-cover opacity-40" alt="Background">
        
        <div class="container mx-auto px-6 relative z-10 pt-20">
            <div class="max-w-3xl reveal-left">

                <h1 class="text-5xl md:text-7xl font-head font-extrabold text-white mb-6 leading-tight">
                    L'excellence <span class="text-blue-400">éducative</span> à portée de main.
                </h1>
                <p class="text-lg md:text-xl mb-10 text-slate-300 leading-relaxed max-w-xl">
                    Une plateforme intelligente qui fusionne pédagogie moderne et technologie pour offrir le meilleur avenir à vos enfants.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-primary text-white px-10 py-4 rounded-xl font-bold shadow-2xl hover:bg-blue-700 transition-all transform hover:scale-105 active:scale-95">
                        Inscrire mon enfant
                    </button>
                    <button class="glass text-primary border border-primary/20 px-10 py-4 rounded-xl font-bold hover:bg-white transition-all">
                        Voir la démo
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section id="stats" class="py-24 bg-white relative z-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center reveal-bottom">
                <div class="space-y-2">
                    <p class="text-5xl font-head font-extrabold text-primary count" data-target="1200">0</p>
                    <p class="text-slate-500 font-medium">Élèves Heureux</p>
                </div>
                <div class="space-y-2">
                    <p class="text-5xl font-head font-extrabold text-primary count" data-target="85">0</p>
                    <p class="text-slate-500 font-medium">Experts Académiques</p>
                </div>
                <div class="space-y-2">
                    <p class="text-5xl font-head font-extrabold text-primary count" data-target="98">0</p>
                    <p class="text-slate-500 font-medium">% de Réussite</p>
                </div>
                <div class="space-y-2">
                    <p class="text-5xl font-head font-extrabold text-primary count" data-target="45">0</p>
                    <p class="text-slate-500 font-medium">Classes Modernes</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20 reveal-bottom">
                <h2 class="text-4xl font-head font-extrabold text-slate-900 mb-4">Pourquoi choisir Smart École ?</h2>
                <div class="w-24 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover-lift reveal-item">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-microchip text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">IA Pédagogique</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Nous utilisons l'intelligence artificielle pour identifier les forces et faiblesses de chaque élève.</p>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover-lift reveal-item">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-halved text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Environnement Sûr</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Un campus sécurisé et une plateforme numérique protégée pour une sérénité totale des parents.</p>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover-lift reveal-item">
                    <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-globe text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Vision Mondiale</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Nos programmes sont alignés sur les standards internationaux pour ouvrir les portes du monde.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-slate-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-8 text-slate-400">
                <a href="#" class="hover:text-primary transition text-xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-primary transition text-xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-primary transition text-xl"><i class="fab fa-linkedin"></i></a>
            </div>
            <p class="text-slate-500 text-sm">© 2026 <span class="font-bold text-primary">Smart École</span>. L'avenir s'écrit avec nous.</p>
        </div>
    </footer>

    <script>
        // 1. Initialisation des animations au scroll
        ScrollReveal().reveal('.reveal-left', { origin: 'left', distance: '100px', duration: 1200, delay: 200 });
        ScrollReveal().reveal('.reveal-bottom', { origin: 'bottom', distance: '50px', duration: 1000 });
        ScrollReveal().reveal('.reveal-item', { interval: 200, origin: 'bottom', distance: '30px' });

        // 2. Particules interactives en fond de Hero
        particlesJS('particles-js', {
            "particles": {
                "number": { "value": 80 },
                "color": { "value": "#ffffff" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.2 },
                "size": { "value": 3 },
                "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.2, "width": 1 },
                "move": { "enable": true, "speed": 2 }
            },
            "interactivity": {
                "events": { "onhover": { "enable": true, "mode": "grab" } }
            }
        });

        // 3. Animation des compteurs
        const counters = document.querySelectorAll('.count');
        const speed = 200;

        const startCount = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target + (target === 98 ? '%' : '+');
                    }
                };
                updateCount();
            });
        };

      
        let observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) startCount();
        }, { threshold: 0.5 });
        observer.observe(document.querySelector('#stats'));
    </script>
</body>
</html>