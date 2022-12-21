
### Hola ! 👋,Bienvenid@ a mi proyecto
[![Cover](https://github.com/Josbor/Josbor/blob/main/wepik-cover-para-github-2022616-202029.png)](https://github.com/Josbor)


## About the project
Esta es la api construida en laravel la cual es uno de los primeros proyectos del challenge, es necesaria para ejecutar el segundo proyecto.

## Requisitos

- 1 Tener Mysql Instalado en el ordenador y levantado ya sea con una version xampp o la version cummunity de Mysql .. sugeriblemente recomiendo la version de xampp

- 2 tener instalado Php en el Ordenado con composer para levantar el entorno de laravel.

## Pasos

1 - en el directorio `.env` se podra agregar las credenciales de acceso a la base de datos

```DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=apitaskmanager

DB_USERNAME=root

DB_PASSWORD=
```
En este caso solo deben colocar sus credenciales en lugar de las que estan en el ejemplo

- 2 Ejecutar en la ventana de comando teniendo estando dentro del proyecto el comando `php artisan migrate`

- 3 Ejecutar `php artisan serve` para levantar el servidor de la api
