# Proyecto Biblioteca

Este proyecto es una aplicación web para gestionar una biblioteca. Incluye las siguientes funcionalidades:
- Listar, añadir, editar y borrar libros.
- Gestión de preferencias del usuario.
- Servicio SOAP para obtener información de libros.

## Configuración de la base de datos
1. Conéctese al servidor MySQL usando los siguientes datos:
   - **Host:** 148.113.202.164
   - **Usuario:** biblioteca
   - **Contraseña:** biblioteca123
2. Ejecute el script `db/script_inicial.sql` para crear la base de datos y los datos de ejemplo.

## Instalación
1. Asegúrese de tener PHP y Composer instalados.
2. Ejecute `composer install` en la raíz del proyecto para instalar las dependencias.

## Estructura del Proyecto
- **public/**: Archivos accesibles desde el navegador.
- **src/**: Clases PHP.
- **db/**: Archivos relacionados con la base de datos.
- **vendor/**: Dependencias gestionadas por Composer.

## Uso
Abra el archivo `public/listado.php` en su navegador para comenzar.
