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
                        surface: '#1e293b',
                        text: '#f1f5f9',
                        accent: '#6366f1',
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
                <a href="#inicio" class="font-extrabold tracking-tight text-xl text-accent">Semana de <span class="text-white">Sistemas 2025</span></a>
                <nav class="hidden md:flex gap-6 text-sm font-medium">
                    <a href="#sobre" class="hover:text-accent transition">Sobre</a>
                    <a href="#dias" class="hover:text-accent transition">Días</a>
                    <a href="#mi-info" class="hover:text-accent transition">Mi información</a>
                    <a href="#visitas" class="hover:text-accent transition">Registrar visita</a>
                </nav>
                <a href="#visitas" class="md:hidden inline-flex items-center rounded-xl border px-3 py-2 text-sm border-slate-600 hover:border-accent hover:text-accent">Visitas</a>
            </div>
        </div>
    </header>

    <!-- Hero / Bienvenida -->
    <section id="inicio" class="relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-10 items-center py-16">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">¡Bienvenidos al blog de la <span class="text-accent">Semana de Sistemas 2025</span>!</h1>
                    <p class="mt-4 text-lg text-slate-300">Aquí encontrarás el resumen de cada día, con fotos, videos y notas sobre las ponencias y talleres.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="#dias" class="inline-flex items-center rounded-xl bg-accent px-5 py-3 text-white font-semibold shadow hover:bg-indigo-700">Ver Agenda por Días</a>
                        <a href="#sobre" class="inline-flex items-center rounded-xl border px-5 py-3 font-semibold border-slate-600 hover:border-accent hover:text-accent">Saber más</a>
                    </div>
                </div>
                <div class="rounded-2xl border border-dashed border-slate-700 bg-surface p-4 shadow-sm">
                    <div class="w-full rounded-xl bg-slate-800 grid place-content-center text-slate-500 text-sm">
                        <!-- Imagen de portada -->
                        <img src="images/SDS25.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre el proyecto / evento -->
    <section id="sobre" class="py-14 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-bold text-white">¿En qué consiste el proyecto y el evento?</h2>
                    <p class="mt-4 text-slate-300">La Semana de Sistemas 2025 es un evento académico y tecnológico que reúne ponencias, talleres, demostraciones y actividades colaborativas. En este blog se documenta cada jornada con evidencias multimedia y descripciones de las temáticas abordadas.</p>
                    <ul class="mt-4 list-disc pl-6 text-slate-300">
                        <li>Divulgación de conocimientos y tendencias en TI.</li>
                        <li>Espacios de networking y aprendizaje práctico.</li>
                        <li>Registro de visitantes y participantes.</li>
                    </ul>
                </div>
                <aside class="space-y-4">
                    <div class="rounded-2xl border border-slate-700 p-5 bg-background shadow-sm">
                        <h3 class="font-semibold text-white">Enlaces rápidos</h3>
                        <ul class="mt-3 space-y-2 text-sm">
                            <li><a class="hover:text-accent" href="#dias">Agenda por días</a></li>
                            <li><a class="hover:text-accent" href="#mi-info">Mi información</a></li>
                            <li><a class="hover:text-accent" href="#visitas">Registrar visita</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Agenda por Días -->
    <section id="dias" class="py-16 bg-background">
        <div class="flex items-end justify-between gap-6">
            <h2 class="p-5 text-3xl font-bold text-white">Agenda y resumen por día</h2>
        </div>

        <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6 bg-surface border border-slate-700 shadow-sm overflow-hidden p-5">

            <!-- dia 1 -->
            <div class="rounded-xl p-3">
                <article class="rounded-2xl bg-surface border border-slate-700 shadow-sm overflow-hidden p-5 space-y-4">
                    <h3 class="text-lg font-semibold text-white"><a href="/public/dia1">Día 1 - Lunes</a></h3>
                    <p class="text-slate-400">Fecha: 13/10/2025</p>
                    <!-- <p class="text-slate-300">Breve resumen de las actividades del día.</p> -->
                    <div class="rounded-xl border border-dashed border-slate-700 p-3">
                        <div class="aspect-video rounded-lg bg-slate-800 grid place-content-center text-xs text-slate-500">
                            <!-- Imagen de portada -->
                            <img src="images/escenario.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </article>
            </div>

            <!-- dia 2 -->
            <div class="rounded-xl p-3">
                <article class="rounded-2xl bg-surface border border-slate-700 shadow-sm overflow-hidden p-5 space-y-4">
                    <h3 class="text-lg font-semibold text-white"><a href="/public/dia2">Día 2 - Martes</a></h3>
                    <p class="text-slate-400">Fecha: 14/10/2025</p>
                    <!-- <p class="text-slate-300">Breve resumen de las actividades del día.</p> -->
                    <div class="rounded-xl border border-dashed border-slate-700 p-3">
                        <div class="aspect-video rounded-lg bg-slate-800 grid place-content-center text-xs text-slate-500">
                            <!-- Imagen de portada -->
                            <img src="images/dia2.png" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </article>
            </div>

            <!-- dia 3 -->
            <div class="rounded-xl p-3">
                <article class="rounded-2xl bg-surface border border-slate-700 shadow-sm overflow-hidden p-5 space-y-4">
                    <h3 class="text-lg font-semibold text-white"><a href="">Día 3 - Miercoles</a></h3>
                    <p class="text-slate-400">Fecha: 15/10/2025</p>
                    <!-- <p class="text-slate-300">Breve resumen de las actividades del día.</p> -->
                    <div class="rounded-xl border border-dashed border-slate-700 p-3">
                        <div class="aspect-video rounded-lg bg-slate-800 grid place-content-center text-xs text-slate-500">
                            <!-- Imagen de portada -->
                            <img src="images/dia3.jpg" alt="imagen" class="w-full h-full object-contain opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </article>
            </div>

            <!-- dia 4 -->
            <div class="rounded-xl p-3">
                <article class="rounded-2xl bg-surface border border-slate-700 shadow-sm overflow-hidden p-5 space-y-4">
                    <h3 class="text-lg font-semibold text-white"><a href="/public/dia4">Día 4 - Jueves</a></h3>
                    <p class="text-slate-400">Fecha: 16/10/2025</p>
                    <!-- <p class="text-slate-300">Breve resumen de las actividades del día.</p> -->
                    <div class="rounded-xl border border-dashed border-slate-700 p-3">
                        <div class="aspect-video rounded-lg bg-slate-800 grid place-content-center text-xs text-slate-500">
                            <!-- Imagen de portada -->
                            <img src="images/escenario.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </article>
            </div>

            <!-- dia 5 -->
            <div class="rounded-xl p-3">
                <article class="rounded-2xl bg-surface border border-slate-700 shadow-sm overflow-hidden p-5 space-y-4">
                    <h3 class="text-lg font-semibold text-white"><a href="/public/dia5">Día 5 - Viernes</a></h3>
                    <p class="text-slate-400">Fecha: 17/10/2025</p>
                    <!-- <p class="text-slate-300">Breve resumen de las actividades del día.</p> -->
                    <div class="rounded-xl border border-dashed border-slate-700 p-3">
                        <div class="aspect-video rounded-lg bg-slate-800 grid place-content-center text-xs text-slate-500">
                            <!-- Imagen de portada -->
                            <img src="images/escenario.jpg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <!-- Mi información -->
    <section id="mi-info" class="py-16 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white">Mi información</h2>
            <div class="mt-6 grid md:grid-cols-5 gap-8 items-start">
                <div class="sm:col-span-1">
                    <div class="rounded-2xl border border-dashed border-slate-700 bg-background p-4 shadow-sm">
                        <div class="rounded-xl border border-dashed border-slate-700 p-3">
                            <img src=" images/descarga.jpeg" alt="imagen" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition" />
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="rounded-2xl bg-background border border-slate-700 p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-white">Datos personales</h3>
                        <ul class="mt-4 space-y-2 text-slate-300">
                            <li><span class="font-medium text-white">Nombre:</span> David Elias Romero Claros</li>
                            <li><span class="font-medium text-white">Carrera:</span> Ingeniería de Sistemas Informaticos</li>
                            <li><span class="font-medium text-white">Institución:</span> UES</li>
                            <li><span class="font-medium text-white">Contacto:</span> rc23030@ues.edu.sv</li>
                            <li><span class="font-medium text-white">Github:</span> luxoritur </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario -->
    <section id="visitas" class="py-16 bg-background">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold text-white">Registrar visita</h2>
                <form class="mt-6 grid gap-4 rounded-xl border border-dashed border-slate-700 p-5" onsubmit="event.preventDefault(); alert('¡Gracias por visitarnos! (Demo)');">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-slate-300">Nombre completo</label>
                        <input id="nombre" name="nombre" type="text" required class="p-4 mt-1 w-full rounded-xl border-slate-700 bg-slate-800 text-white focus:border-accent focus:ring-accent" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300">Correo electrónico</label>
                        <input id="email" name="email" type="email" required class="p-4 mt-1 w-full rounded-xl border-slate-700 bg-slate-800 text-white focus:border-accent focus:ring-accent" />
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-slate-300">Comentario</label>
                        <textarea id="mensaje" name="mensaje" rows="4" class="p-4 mt-1 w-full rounded-xl border-slate-700 bg-slate-800 text-white focus:border-accent focus:ring-accent"></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-accent px-5 py-3 text-white font-semibold shadow hover:bg-indigo-700">Guardar visita</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-700 py-8 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-500">© 2025 Semana de Sistemas — Blog personal de documentación</p>
            <div class="flex gap-4 text-sm">
                <a href="#inicio" class="hover:text-accent">Inicio</a>
                <a href="#dias" class="hover:text-accent">Días</a>
                <a href="#mi-info" class="hover:text-accent">Mi información</a>
                <a href="#visitas" class="hover:text-accent">Visitas</a>
            </div>
        </div>
    </footer>
</body>

</html>