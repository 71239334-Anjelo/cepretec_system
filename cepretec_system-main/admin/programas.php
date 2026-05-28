<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/programas.css">
</head>
<body>

<div class="dashboard-container">

    <aside class="sidebar">
        <h2>CEPRETEC</h2>
        <ul>
            <li><a href="dashboard.php">📊 Dashboard</a></li>
            <li><a href="alumnos.php">👥 Alumnos</a></li>
            <li><a href="matriculas.php">📝 Matrículas</a></li>
            <li><a href="asistencia.php">✅ Asistencia</a></li>
            <li><a href="notas.php">⭐ Notas</a></li>
            <li><a href="ranking.php">🏆 Ranking</a></li>
            <li><a href="programas.php">🎓 Programas</a></li>
            <li><a href="reportes.php">📄 Reportes</a></li>
            <li><a href="../logout.php">🚪 Cerrar Sesión</a></li>
        </ul>
    </aside>

    <main class="content">
        <div class="top-bar">
            <h1>🎓 Programas de Estudio</h1>
            <button class="btn-agregar-programa">+ Nuevo Programa</button>
        </div>

        <div class="programs-grid">
            
            <!-- Farmacia Técnica -->
            <div class="program-card">
                <div class="program-header">
                    <h3>💊 Farmacia Técnica</h3>
                    <span class="duracion">📅 Duración: 3 años</span>
                </div>
                <div class="program-body">
                    <p>Formación especializada en atención farmacéutica, dispensación de medicamentos y gestión de botiquines.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">42</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">2</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">8</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Arquitectura de Plataformas y Servicios de TI -->
            <div class="program-card">
                <div class="program-header">
                    <h3>🖥️ Arquitectura de Plataformas y Servicios de TI</h3>
                    <span class="duracion">📅 Duración: 3 años</span>
                </div>
                <div class="program-body">
                    <p>Especialistas en infraestructura tecnológica, cloud computing y administración de servidores.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">38</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">2</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">6</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Electrónica Industrial -->
            <div class="program-card">
                <div class="program-header">
                    <h3>⚡ Electrónica Industrial</h3>
                    <span class="duracion">📅 Duración: 3 años</span>
                </div>
                <div class="program-body">
                    <p>Mantenimiento y diseño de sistemas electrónicos industriales, automatización y control.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">35</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">2</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">7</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Enfermería Técnica -->
            <div class="program-card">
                <div class="program-header">
                    <h3>🏥 Enfermería Técnica</h3>
                    <span class="duracion">📅 Duración: 3 años</span>
                </div>
                <div class="program-body">
                    <p>Auxiliares en cuidados de salud, primeros auxilios y atención hospitalaria especializada.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">45</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">3</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">9</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Asistencia Administrativa -->
            <div class="program-card">
                <div class="program-header">
                    <h3>📋 Asistencia Administrativa</h3>
                    <span class="duracion">📅 Duración: 2 años</span>
                </div>
                <div class="program-body">
                    <p>Gestión documentaria, atención al cliente y organización de oficinas empresariales.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">40</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">2</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">5</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Guía Oficial de Turismo -->
            <div class="program-card">
                <div class="program-header">
                    <h3>✈️ Guía Oficial de Turismo</h3>
                    <span class="duracion">📅 Duración: 2 años</span>
                </div>
                <div class="program-body">
                    <p>Especialistas en turismo, patrimonio cultural, idiomas y atención a visitantes.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">28</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">1</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">4</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>

            <!-- Mecatrónica Automotriz -->
            <div class="program-card">
                <div class="program-header">
                    <h3>🔧 Mecatrónica Automotriz</h3>
                    <span class="duracion">📅 Duración: 3 años</span>
                </div>
                <div class="program-body">
                    <p>Diagnóstico y reparación de sistemas electrónicos y mecánicos automotrices.</p>
                    <div class="program-stats">
                        <div class="stat"><span class="numero">32</span><span class="label">Alumnos</span></div>
                        <div class="stat"><span class="numero">2</span><span class="label">Secciones</span></div>
                        <div class="stat"><span class="numero">6</span><span class="label">Docentes</span></div>
                    </div>
                    <button class="btn-programa">Ver detalles</button>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>