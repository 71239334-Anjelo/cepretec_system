<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/alumnos.css">
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
            <h1>👥 Gestión de Alumnos</h1>
            <button class="btn-nuevo">+ Nuevo Alumno</button>
        </div>

        <div class="search-box">
            <input type="text" placeholder="🔍 Buscar por DNI, nombres o apellidos...">
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Alumno</th>
                        <th>Programa</th>
                        <th>Etapa</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345678</td>
                        <td><strong>Juan Pérez</strong></td>
                        <td>Arquitectura de Plataformas y Servicios de TI</td>
                        <td>Cepre I - 2026</td>
                        <td><span class="badge-activo">✓ Activo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>87654321</td>
                        <td><strong>María López</strong></td>
                        <td>Farmacia Técnica</td>
                        <td>Cepre II - 2026</td>
                        <td><span class="badge-activo">✓ Activo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>98765432</td>
                        <td><strong>Carlos Ruiz</strong></td>
                        <td>Electrónica Industrial</td>
                        <td>Cepre I - 2026</td>
                        <td><span class="badge-inactivo">⏳ Inactivo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>54321678</td>
                        <td><strong>Ana Torres</strong></td>
                        <td>Enfermería Técnica</td>
                        <td>Cepre II - 2026</td>
                        <td><span class="badge-activo">✓ Activo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>11223344</td>
                        <td><strong>Luis Fernández</strong></td>
                        <td>Asistencia Administrativa</td>
                        <td>Cepre I - 2026</td>
                        <td><span class="badge-activo">✓ Activo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>55667788</td>
                        <td><strong>Carmen Rojas</strong></td>
                        <td>Guía Oficial de Turismo</td>
                        <td>Cepre II - 2026</td>
                        <td><span class="badge-graduado">🎓 Graduado</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>99887766</td>
                        <td><strong>Roberto Sánchez</strong></td>
                        <td>Mecatrónica Automotriz</td>
                        <td>Cepre I - 2026</td>
                        <td><span class="badge-activo">✓ Activo</span></td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>