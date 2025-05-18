1. Instalar laragon 6.0 
2. Actualizar php a la version mas reciente 8.4 
3. Actualizar apache 
4. Ejecutar comando 

```bash 
composer global require laravel/installer
laravel new nombre_proyecto
//Elegir el framework ( vue, react, liweri, none)
//Elejir el testeador 
//elegir base de datos 
//desea migrar la base de datos al instalar 
//desea ejecutar 
npm install && npm run build
cd example-app
composer run dev
```

5. Comando php artisan 
- php artisan // ver la lista de cfomandos 
- php artisan about// ver la informacion de mi proyecto
- php artisan make:view --help //permite ver las opciones que pueden acompañar a make:view
- php artisan make:view lista //crear un nueva vista llamada lista 
- php artisan make:controller lista //crear un controlador llamado lista 
- php artisan make:model lista // crear un modelo llamado lista 
- php artisan tinker //abre una consola para ejercutar comandos php o realizar consultas a la base de datos 
- App\Models\User::count() //contar la cantidad de datos en mi tabla 
- App\Models\User::factory(80)->create () // crea datos aleatorios en la tabla elegida 
- php artisan migrate // migracion de base de datos 

6. Ruteo 
