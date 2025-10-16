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
                    Documentación personal de actividades, ponencias y proyectos. Explora el resumen del Día 1 con fotografías y observaciones clave.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#dia1" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 bg-accent/20 text-accent border border-accent/30 hover:bg-accent/30 transition">
                        Ver Día 1
                    </a>
                    <a href="/public/#visitas" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 border border-slate-700 hover:border-accent hover:text-accent transition">
                        Registrar visita
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Agenda por Días -->
    <section id="dia1" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-6">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Resumen <span class="text-accent">Dia 1:</span></h1>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Ponencia</span>
                        <span class="text-xs text-slate-400">#1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="/public/dia1" class="group-hover:text-accent transition">El ABC de Bitcoin</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 13/10/2025</span>
                        <span>🕘 9:00 a. m.</span>
                        <span>📍 Auditorio 1</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La ponencia “El ABC de Bitcoin”, impartida por <b>Luis Contreras</b>, introdujo conceptos esenciales
                        de criptomonedas y blockchain, su impacto en la economía digital y oportunidades de futuro. Una charla
                        clara y dinámica que abrió la Semana de Sistemas 2025 con visión de transformación.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/ABCbitcoin.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/bitcoit-imagen1.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <section id="dias" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-2 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Ponencia</span>
                        <span class="text-xs text-slate-400">#2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="/public/dia1" class="group-hover:text-accent transition">Inteligencia Artificial Generativa — de la idea a la acción</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 13/10/2025</span>
                        <span>🕚 11:00 a. m.</span>
                        <span>📍 Auditorio 1</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Se mostraron casos prácticos de generación de texto, imágenes y código con modelos avanzados,
                        explicando cómo convertir ideas en soluciones reales. Una charla inspiradora sobre el poder
                        transformador de la IA en innovación y productividad.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/8n8.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/ponencia2-imagen1.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/ponencia2-imagen2.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <section id="dias" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-2 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-emerald-400/15 text-emerald-300 px-3 py-1 text-xs font-semibold border border-emerald-300/20">Hackathon</span>
                        <span class="text-xs text-slate-400">C# — SDS25</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="/public/dia1" class="group-hover:text-emerald-300 transition">Proyectos y equipo ganador</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 13/10/2025</span>
                        <span>🕐 1:00 p. m.</span>
                        <span>📍 Auditorio 1</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Estudiantes desarrollaron soluciones en C# destacando originalidad y funcionalidad. El primer lugar
                        fue para un proyecto de bingo, reconocido por su diseño y ejecución sobresaliente.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/ganadores.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>
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