<! DOCTYPE html>
<html>

<head>
    <title>Sistema de Gestion Odontológica</title>
    @vite(['resources/css/estilosPlantilla.css'])
    @vite(['resources/css/estilos.css'])
</head>
<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestion Odontologica</h1>
        </div>
        <ul id="menu">
            <li><a href="{{ route('iniciarsesion') }}">Iniciar sesión</a></li>
            <li><a href="">Inicio</a></li>
            <li><a href="">Asignar</a></li>
            <li><a href="">Consultar Cita</a></li>
            <li><a href="">Cancelar Cita</a></li>
        </ul>
        <div id="contenido">
            <h2>Informacion General</h2>
            <p>El Sistema de Gestion Odontologica permite administrar la informacion de los pacientes, tratamientos y citas a traves de una interfaz web .</p>
            <p>El sistema cuenta con las siguientes secciones:
            <ul>
                <li>Asignar cita</li>
                <li>Consultar cita</li>
             <li>Cancelar cita</li>
            </ul>
            </p>
        </div>
    </div>
</body>

</html>