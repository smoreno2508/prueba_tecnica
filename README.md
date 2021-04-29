# Notas:

```
La aplicación esta bajo el puerto 8080 y por defecto el proyecto en CI4 comienza 
en public siendo esta la raiz http://localhost:8080/public/ 
phpmyadmin bajo puerto 8000 http://localhost:8000

Base de datos:
- usuario: usuario
- contraseña: root
- bd: prueba_tecnica

comando para levantar: docker-compose up 

los datos de la BD estan en el archivo .env, 
que se usa en conjunto con el archivo docker-compose.yml que también esta comentado

Preguntas de la prueba técnica

¿Cómo levantaste tu ambiente de desarrollo local? 
    R.- Levante un contenedor de docker con docker-compose, 
        con imágenes de php 7.4, mysql, phpmyadmin y comencé a desarrollar.

Si tuviste dificultades allevantar el ambiente de desarrollo ¿Cuáles fueron las dificultades?
    R.- Tuve bastantes problemas al crear el contenedor de docker 
        primero me daba errores por algunas librerías necesarias para CI4, 
        solucionado esto me daba un error genérico de conexión a la base de datos.

¿cómo las solucionaste?  
    R.- Principalmente gracias a stackoverflow, 
        gracias a lo que averigue incluí dentro del archivo Dockerfile y docker-compose.yml 
        las configuraciones necesarias para desarrollar y probar sin problemas.

¿Qué procedimiento utilizaste para subir tu proyecto a Github u otro?  
    R.- Lo hice a través de línea de comandos.
```
