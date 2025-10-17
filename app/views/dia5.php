<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Semana de Sistemas 2025 — Home</title>
    <meta name="description" content="Blog de la Semana de Sistemas 2025: agenda, actividades, ponencias, talleres y registro de visitas." />
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#0f172a',
                        surface: '#111827',
                        /* un poco más oscuro para contraste */
                        surface2: '#1f2937',
                        text: '#f1f5f9',
                        accent: '#6366f1',
                        accent2: '#22d3ee'
                    },
                    boxShadow: {
                        glow: '0 0 0 1px rgb(99 102 241 / 0.25), 0 8px 24px -8px rgb(99 102 241 / 0.35)'
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-background text-text">
    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 backdrop-blur bg-surface/80 border-b border-slate-700">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/public/#inicio" class="font-extrabold tracking-tight text-xl text-accent">Semana de <span class="text-white">Sistemas 2025</span></a>
                <nav class="hidden md:flex gap-6 text-sm font-medium">
                    <a href="/public/#sobre" class="hover:text-accent transition">Sobre</a>
                    <a href="/public/#dias" class="hover:text-accent transition">Días</a>
                    <a href="/public/#mi-info" class="hover:text-accent transition">Mi información</a>
                    <a href="/public/#visitas" class="hover:text-accent transition">Registrar visita</a>
                </nav>
                <a href="#visitas" class="md:hidden inline-flex items-center rounded-xl border px-3 py-2 text-sm border-slate-600 hover:border-accent hover:text-accent">Visitas</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section id="inicio" class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-accent/10 via-transparent to-transparent pointer-events-none"></div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">
                    Semana de <span class="bg-clip-text text-transparent bg-gradient-to-r from-accent to-accent2">Sistemas 2025</span>
                </h1>
                <p class="mt-4 text-slate-300">
                    Documentación personal de actividades, ponencias y proyectos. Explora el resumen del Día 5 con fotografías y observaciones clave.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#dia5" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 bg-accent/20 text-accent border border-accent/30 hover:bg-accent/30 transition">
                        Ver Día 5
                    </a>
                    <a href="/public/#visitas" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 border border-slate-700 hover:border-accent hover:text-accent transition">
                        Registrar visita
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Agenda por Días -->

    <!-- BINGO -->
    <section id="dia5" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-6">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Resumen <span class="text-accent">Dia 5:</span></h1>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">BINGO</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        BINGO
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 17/10/2025</span>
                        <span>🕘 09:00 AM</span>
                        <span>📍Auditorio 1</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Durante la Semana de Sistemas se realizó un divertido Bingo Tecnológico, que reunió a estudiantes e ingenieros en un ambiente de alegría y convivencia. Lo más destacado del evento fue que el programa utilizado para el juego fue una página web desarrollada por los alumnos de tercer año en la asignatura Herramientas de Productividad, demostrando su creatividad y habilidades en desarrollo web.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo1.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo2.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo3.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo4.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo5.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo6.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia5/bingo7.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- JUEGO -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Torneo de Videojuegos</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Torneo de Videojuegos
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 17/10/2025</span>
                        <span>🕘 01:00 PM</span>
                        <span>📍Computos</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Como parte de las actividades recreativas de la Semana de Sistemas 2025, se llevó a cabo el esperado Torneo de Clash Royale, organizado por la ASEIS en el Centro de Cómputo A. El evento se desarrolló bajo un sistema de doble eliminación (Winners & Losers Bracket), lo que permitió partidas emocionantes y llenas de estrategia.

                        <br><br>Los participantes demostraron su habilidad, reflejos y dominio del juego, creando un ambiente de sana competencia y compañerismo. Se entregaron premios al primer y segundo lugar, reconociendo el talento y la dedicación de los jugadores más destacados.

                        <br><br>El torneo no solo promovió la diversión, sino también el trabajo en equipo y la integración entre estudiantes apasionados por la tecnología y los videojuegos.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/dia5/torneo.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- FIESTA -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">FIESTA</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        FIESTA
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 17/10/2025</span>
                        <span>🕘 09:00 PM</span>
                        <span>📍Ibiza Social Club</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La Semana de Sistemas 2025 culminó con una animada fiesta en el Ibiza Social Club a partir de las 9:00 p.m. Este evento marcó el cierre de una semana llena de actividades académicas, tecnológicas y recreativas. Los fondos recaudados durante la fiesta serán destinados a apoyar y fortalecer las futuras iniciativas de la carrera de Ingeniería de Sistemas Informáticos.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-700 py-8 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-500">© 2025 Semana de Sistemas — Blog personal de documentación</p>
            <div class="flex gap-4 text-sm">
                <a href="/public/#inicio" class="hover:text-accent">Inicio</a>
                <a href="/public/#dias" class="hover:text-accent">Días</a>
                <a href="/public/#mi-info" class="hover:text-accent">Mi información</a>
                <a href="/public/#visitas" class="hover:text-accent">Visitas</a>
            </div>
        </div>
    </footer>
</body>

</html>