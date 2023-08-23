<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Agregar</title>
</head>

<body>
    <section class="flex flex-col justify-center items-center h-screen content-center " >
        <div class="flex justify-between h-6 w-[800px] m-9 items-center">
            <h1>Agregar Usuario</h1>
            <div>
                <button class="w-64 bg-[rgba(0,79,110,255)] text-white h-10 rounded">Volver al Listado</button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center  ">
            <form class="w-auto h-auto" action="api/registrar" method="POST">
                <div class="flex gap-6">
                    <div>
                        <label for="">Nombre</label><br>
                        <input class="w-64 border h-10 pl-2" type="text" name="nombre" placeholder="Ingrese el Nombre" required><br>
                    </div>
                    <div>
                        <label for="">Apellido</label><br>
                        <input class="w-64 border h-10" type="text" name="apellido" placeholder="Ingrese el apellido" required>
    
                    </div>
    
                    <br>
                </div>
                <div class="flex flex-col justify-start">
                    <label for="">E-mail</label>
                    <input class="w-96 border h-10 pl-2" type="email" name="correo" placeholder="Ingrese el E-mail" required>
                    <label for="">Contraseña</label>
                    <input class="w-64 border h-10 pl-2" type="text" name="contra" placeholder="Ingrese una Contraseña" required>
                </div>
                <div>
                    <button class="w-64 rounded bg-[rgba(0,79,110,255)] text-white m-14 h-8" type="submit">Guardar</button>
                </div>
            </form>
    
        </div>

    </section>
</body>

</html>
