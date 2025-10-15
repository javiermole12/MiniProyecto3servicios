Proyecto para la tarea "0.1 Mini-Proyecto Docker (3 servicios)" Por Javier M y Ioritz

El proyecto consiste en una pagina web en donde se puede iniciar sesion como cliente o administrador, y
mostrar datos de una base de datos almacenada en un contenedor de docker. Utiliza un proxy nginx.

-Como iniciar el servicio-

Descargando el proyecto de GitHub:

-Abrir Docker Desktop  
-Descargar el proyecto y decomprimirlo  
-En Visual Studio Code, abrir una terminal e introducir los siguientes comandos:  
    *   Desde la carpeta raiz "docker-compose up -d" (Tardara un rato)  
    *   "docker-compose exec app bash"   
    *   "composer install"  
    
Con esto se crean la imagen y contenedores, y se arrancan, y se instala composer para que la aplicacion pueda funcionar.
Se accede a la pagina web en "localhost:8080"

Las diferentes credenciales son: 
   EMPLEADOS
      - usuario1: titoamancio@inditex.com
      - usuario2: titofrancis@viscofan.com
      - contraseña: 123456
   CLIENTES
      - cliente1: zara@zara.com
      - cliente2: eroski@eroski.com
      - contraseña: 123456


