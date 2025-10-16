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
                    Documentación personal de actividades, ponencias y proyectos. Explora el resumen del Día 2 con fotografías y observaciones clave.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#dia2" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 bg-accent/20 text-accent border border-accent/30 hover:bg-accent/30 transition">
                        Ver Día 2
                    </a>
                    <a href="/public/#visitas" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 border border-slate-700 hover:border-accent hover:text-accent transition">
                        Registrar visita
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Agenda por Días -->

    <!-- taller 1 -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-6">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Resumen <span class="text-accent">Dia 2:</span></h1>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Taller</span>
                        <span class="text-xs text-slate-400">#1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="https://1drv.ms/f/c/33c116399d75e598/Ekt-wgwKmVVIho0sPvuY1eQBG9Nnr0_9Bf_nOLT1XVEiuA?e=E5wBHk" class="group-hover:text-accent transition">Toma de decisiones estrategicas basadas en datos</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 14/10/2025</span>
                        <span>🕘 08:00 AM</span>
                        <span>📍 <a href="https://1drv.ms/f/c/33c116399d75e598/Ekt-wgwKmVVIho0sPvuY1eQBG9Nnr0_9Bf_nOLT1XVEiuA?e=E5wBHk">Virtual (CLICK PARA VER)</a></span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        El taller “Toma de decisiones estratégicas basadas en datos” ofreció una valiosa oportunidad para comprender cómo la información puede convertirse en una herramienta clave al momento de planificar, analizar y ejecutar estrategias dentro de cualquier organización.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller1-img1.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller1-img2.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller1-img3.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- taller 2 -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Taller</span>
                        <span class="text-xs text-slate-400">#2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="https://1drv.ms/f/c/33c116399d75e598/EuKTDgdPI3FGgWuqVx-rJOoBcsJHIDqZ4JvalgGI4mz8_w?e=YJ5P8Q" class="group-hover:text-accent transition">Developers 2.0:Entrenando la IA que Programa Contigo</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 14/10/2025</span>
                        <span>🕘 10:00 AM</span>
                        <span>📍 <a href="https://1drv.ms/f/c/33c116399d75e598/EuKTDgdPI3FGgWuqVx-rJOoBcsJHIDqZ4JvalgGI4mz8_w?e=YJ5P8Q">Virtual (CLICK PARA VER)</a></span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        El taller “Developers 2.0: Entrenando la IA que Programa Contigo” brindó a los participantes una mirada actual e inspiradora sobre el papel de la inteligencia artificial en el desarrollo de software moderno. A través de una combinación de teoría y práctica, se exploraron las herramientas y modelos de IA que hoy impulsan la automatización, la asistencia inteligente y la optimización del código en entornos de programación.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller2-img1.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller2-img2.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller2-img3.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- taller 3 -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Taller</span>
                        <span class="text-xs text-slate-400">#3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="https://1drv.ms/f/c/33c116399d75e598/El0FNsy1od5CpYtOLWJjumwBriIpQybePvsA0f3t4rmhXg?e=bmP3Q4" class="group-hover:text-accent transition">Construyendo un CRUD en minutos con Laravel y Filament</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 14/10/2025</span>
                        <span>🕘 10:00 AM</span>
                        <span>📍 <a href="https://1drv.ms/f/c/33c116399d75e598/El0FNsy1od5CpYtOLWJjumwBriIpQybePvsA0f3t4rmhXg?e=bmP3Q4">Virtual (CLICK PARA VER)</a></span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La charla-taller “Construyendo un CRUD en minutos con Laravel y Filament” mostró cómo levantar paneles administrativos ágiles sin sacrificar buenas prácticas.
                        Se explicó la instalación, scaffolding de modelos y recursos, y el uso de Forms y Tables para crear, leer, actualizar y eliminar datos.
                        En minutos, los asistentes vieron autenticación, validaciones y relaciones funcionando con una interfaz profesional.
                        Un recorrido práctico que demostró la potencia de Laravel + Filament para acelerar el desarrollo.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller3-img1.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller3-img2.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller3-img3.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- taller 4 -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Taller</span>
                        <span class="text-xs text-slate-400">#4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="https://1drv.ms/f/c/33c116399d75e598/EuKTDgdPI3FGgWuqVx-rJOoBcsJHIDqZ4JvalgGI4mz8_w?e=YJ5P8Q" class="group-hover:text-accent transition">Tecnicas de programacion</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 14/10/2025</span>
                        <span>🕘 13:00 PM</span>
                        <span>📍 <a href="https://1drv.ms/f/c/33c116399d75e598/EuKTDgdPI3FGgWuqVx-rJOoBcsJHIDqZ4JvalgGI4mz8_w?e=YJ5P8Q">Virtual (CLICK PARA VER)</a></span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La ponencia “Técnicas de Programación” ofreció una visión clara sobre las mejores prácticas para escribir código limpio, eficiente y mantenible.
                        Se abordaron conceptos clave como modularidad, reutilización, depuración y uso de estructuras de control.
                        Los asistentes aprendieron cómo aplicar metodologías que mejoran la calidad y rendimiento del software.
                        Una exposición formativa que fortaleció las bases de la lógica y el pensamiento computacional.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller4-img1.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>
            </div>
        </div>
    </section>

    <!-- taller 5 -->
    <section id="dia2" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Taller</span>
                        <span class="text-xs text-slate-400">#5</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        <a href="https://1drv.ms/f/c/33c116399d75e598/EvP1T7KIj9tDm5lLkdWFMHQBhQGbX9YimIuSXEE76ElpOQ?e=jUyFHw" class="group-hover:text-accent transition">IA MULTIMODAL: creando el futuro visual e inteligente con 8n8 - De texto a imagen que conectan y transforman</a>
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 14/10/2025</span>
                        <span>🕘 14:00 PM</span>
                        <span>📍 <a href="https://1drv.ms/f/c/33c116399d75e598/EvP1T7KIj9tDm5lLkdWFMHQBhQGbX9YimIuSXEE76ElpOQ?e=jUyFHw">Virtual (CLICK PARA VER)</a></span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La ponencia “IA Multimodal: creando el futuro visual e inteligente con 8n8” exploró cómo la inteligencia artificial combina texto e imagen para generar contenido innovador.
                        Se mostraron herramientas capaces de transformar descripciones en ilustraciones realistas y creativas en segundos.
                        Los asistentes conocieron el proceso de entrenamiento de modelos y su aplicación en diseño, educación y comunicación visual.
                        Una experiencia inspiradora que evidenció cómo la IA multimodal está conectando la imaginación con la tecnología.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller5-img1.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller5-img2.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/taller5-img3.png" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
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