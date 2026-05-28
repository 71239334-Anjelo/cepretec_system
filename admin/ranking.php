<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking - CEPRETEC</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/ranking.css">
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
        <h1>🏆 Ranking Académico</h1>
        
        <div class="filtros-ranking">
            <select>
                <option>Todos los programas</option>
                <option>Farmacia Técnica</option>
                <option>Arquitectura de Plataformas y Servicios de TI</option>
                <option>Electrónica Industrial</option>
                <option>Enfermería Técnica</option>
                <option>Asistencia Administrativa</option>
                <option>Guía Oficial de Turismo</option>
                <option>Mecatrónica Automotriz</option>
            </select>
            <select><option>Cepre I - 2026</option><option>Cepre II - 2026</option></select>
            <button>🔍 Actualizar Ranking</button>
            <button>📊 Exportar Ranking</button>
        </div>
        
        <div class="top-alumnos">
            <div class="top-card position-2"><div class="medal">🥈</div><div class="nombre">María López</div><div class="programa">Farmacia Técnica</div><div class="promedio">18.2</div></div>
            <div class="top-card position-1"><div class="medal">🥇</div><div class="nombre">Ana Torres</div><div class="programa">Enfermería Técnica</div><div class="promedio">18.8</div></div>
            <div class="top-card position-3"><div class="medal">🥉</div><div class="nombre">Juan Pérez</div><div class="programa">Arquitectura de Plataformas y Servicios de TI</div><div class="promedio">17.5</div></div>
        </div>
        
        <div class="table-container">
            <table>
                <thead><tr><th>#</th><th>DNI</th><th>Alumno</th><th>Programa</th><th>Matemática</th><th>Comunicación</th><th>R. Verbal</th><th>R. Matemático</th><th>Ciencia</th><th>Promedio</th></tr></thead>
                <tbody>
                    <tr><td><span class="rank-1">🥇 1</span></td><td>54321678</td><td><strong>Ana Torres</strong></td><td>Enfermería Técnica</td><td>18</td><td>19</td><td>17</td><td>18</td><td>19</td><td><strong>18.8</strong></td></tr>
                    <tr><td><span class="rank-2">🥈 2</span></td><td>87654321</td><td><strong>María López</strong></td><td>Farmacia Técnica</td><td>17</td><td>18</td><td>18</td><td>19</td><td>18</td><td><strong>18.0</strong></td></tr>
                    <tr><td><span class="rank-3">🥉 3</span></td><td>12345678</td><td><strong>Juan Pérez</strong></td><td>Arquitectura de Plataformas y Servicios de TI</td><td>17</td><td>16</td><td>18</td><td>16</td><td>17</td><td><strong>16.8</strong></td></tr>
                    <tr><td>4</td><td>99887766</td><td><strong>Roberto Sánchez</strong></td><td>Mecatrónica Automotriz</td><td>14</td><td>15</td><td>14</td><td>15</td><td>14</td><td><strong>14.4</strong></td></tr>
                    <tr><td>5</td><td>55667788</td><td><strong>Carmen Rojas</strong></td><td>Guía Oficial de Turismo</td><td>13</td><td>14</td><td>15</td><td>14</td><td>16</td><td><strong>14.4</strong></td></tr>
                    <tr><td>6</td><td>11223344</td><td><strong>Luis Fernández</strong></td><td>Asistencia Administrativa</td><td>08</td><td>10</td><td>07</td><td>09</td><td>10</td><td><strong>8.8</strong></td></tr>
                </tbody>
            </table>
        </div>
        
        <br>
        <div style="background: #e0e7f0; padding: 15px; border-radius: 12px; margin-top: 20px;">
            <p style="color: #003366; text-align: center;">🏆 <strong>Consejo Académico:</strong> Los alumnos destacados recibirán becas para el siguiente ciclo.</p>
        </div>
    </main>
</div>

</body>
</html>