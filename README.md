
### Hola ! 👋,Bienvenid@ a mi proyecto
[![Cover](https://github.com/Josbor/Josbor/blob/main/wepik-cover-para-github-2022616-202029.png)](https://github.com/Josbor)


## About the project
Esta es la api construida en laravel la cual es uno de los primeros proyectos del challenge, es necesaria para ejecutar el segundo proyecto.

## Requisitos

- 1 Tener Mysql Instalado en el ordenador y levantado ya sea con una version xampp o la version cummunity de Mysql .. sugeriblemente recomiendo la version de xampp

- 2 tener instalado Php en el Ordenador con composer para levantar el entorno de laravel.
- 3 tener instalado node
- 4 tener instalado Git

## Pasos
1- con la ventana de comando nos posicionamos dentro de la carpeta del proyecto y ejecutamos la siguiente linea `composer install` 

2- luego procedemos a ejecutar `npm install`

3 - en el directorio hay un archivo llamado `.env.example`, puede copiar el archivo y cambiar el nombre o cambiar el nombre de `env.example` por `env` luego dentro de este ,  se podra agregar las credenciales de acceso a la base de datos

```DB_CONNECTION=mysql

DB_HOST=127.0.0.1 //direccion donde esta la base de datos 

DB_PORT=3306 // puerto donde esta la base de datos mysql

DB_DATABASE=apitaskmanager // este no se cambia

DB_USERNAME=root // usuario para entrar en el entorno mysql

DB_PASSWORD=    // contraseña en caso que la tenga sino dejarlo vacio
```
En este caso solo deben colocar sus credenciales en lugar de las que estan en el ejemplo y adicionalmente crear una base de datos con el nombre de `apitaskmanager` en mysql 

- 4 Ejecutar en la ventana de comando teniendo estando dentro del proyecto el comando `php artisan migrate`

- 5 Ejecutar `php artisan serve` para levantar el servidor de la api

- 6 una vez levantado el servidor , copiar la direccion y puerto donde se levanta el serve e ir al siguiente enlace para levantar la app (proyecto frontend)

[proyecto FrontEnd](https://github.com/Josbor/task-mamanger)
