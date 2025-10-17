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
                    Documentación personal de actividades, ponencias y proyectos. Explora el resumen del Día 4 con fotografías y observaciones clave.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#dia4" class="inline-flex items-center gap-2 rounded-xl px-4 py-2 bg-accent/20 text-accent border border-accent/30 hover:bg-accent/30 transition">
                        Ver Día 4
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
    <section id="dia4" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-6">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Resumen <span class="text-accent">Dia 4:</span></h1>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="group rounded-2xl bg-surface2 border border-slate-800 hover:shadow-glow transition overflow-hidden p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Feria de logros</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Feria de logros 2025
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 16/10/2025</span>
                        <span>🕘 09:00 AM</span>
                        <span>📍Plaza Minerva</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        La Feria de Logros marcó uno de los momentos más significativos de la Semana de Sistemas 2025, convirtiéndose en un espacio donde los estudiantes de Ingeniería de Sistemas Informáticos demostraron todo su ingenio, esfuerzo y capacidad para transformar ideas en proyectos reales.

                        <br><br>Cada stand fue el reflejo de largas horas de trabajo, creatividad y compromiso. Los asistentes pudieron apreciar propuestas innovadoras que evidencian el potencial de la carrera para generar soluciones tecnológicas con impacto en el futuro.

                        <br><br>El evento no solo fue una exposición, sino una celebración del conocimiento y la perseverancia. Al cierre de la jornada, se premió al mejor stand, reconociendo el talento y la constancia de quienes destacaron por su originalidad y presentación. Sin duda, esta feria reafirma el espíritu de innovación que caracteriza a la comunidad universitaria y consolida a la Semana de Sistemas como una auténtica fiesta académica y tecnológica.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria1.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria2.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria3.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria4.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria5.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria6.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria7.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src="images/dia4/feria8.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
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
                        <span class="inline-flex items-center rounded-full bg-accent/15 text-accent px-3 py-1 text-xs font-semibold border border-accent/20">Pupuseada</span>
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Pupuseada
                    </h3>
                    <p class="text-slate-400 text-sm flex flex-wrap gap-x-4 gap-y-1">
                        <span>📅 16/10/2025</span>
                        <span>🕘 12:00 PM</span>
                        <span>📍Plaza Minerva</span>
                    </p>
                    <p class="text-slate-300 leading-relaxed">
                        Como parte de las actividades de la Semana de Sistemas 2025, se llevó a cabo la esperada Gran Pupuseada, un evento que combinó la gastronomía salvadoreña con el espíritu competitivo y alegre de la comunidad universitaria.

                        <br><br>Entre risas, aplausos y un ambiente lleno de camaradería, los concursantes se enfrentaron en esta prueba gastronómica que puso a prueba su velocidad y apetito. Tras una reñida competencia, el gran ganador fue el Ing. José Alexander Guandique Flores, quien se llevó los honores y el reconocimiento del público por su destacada participación.

                        <br><br>La actividad no solo permitió disfrutar de un momento de convivencia, sino que también reafirmó el valor de la cultura y la identidad salvadoreña dentro de la Semana de Sistemas, fusionando tradición y tecnología en un evento memorable.
                    </p>
                </article>
            </div>

            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">
                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/dia4/pupuseada1.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/dia4/pupuseada2.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <img src=" images/dia4/pupuseada3.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                </div>

                <div class="rounded-xl border border-dashed border-slate-700 p-3">
                    <div class="aspect-video rounded-lg bg-slate-800 overflow-hidden">
                        <video
                            src="images/dia4/video-pupuseada.mp4"
                            controls
                            class="w-full h-full object-cover rounded-lg">
                        </video>
                    </div>
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