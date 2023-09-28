

Requisitos previos:
- Servidor web (por ejemplo, Apache o Nginx) con soporte para PHP.
- PHP 5.6 o superior.
- MySQL o MariaDB para la base de datos.
- Acceso SSH o FTP al servidor.

Instrucciones para instalar App:

 Configura tu servidor web:

   Asegúrate de que tu servidor web esté configurado correctamente y que esté ejecutando PHP. Si estás utilizando Apache, asegúrate de tener el módulo `mod_rewrite` habilitado.

Copiar los archivos de la app:

   Copia todos los archivos y carpetas de la app en el directorio raíz de tu servidor web o bien clona el repositorio con el comando git clone https://github.com/cmonsivaisb/blog.git. Esto suele ser la carpeta `public_html` o `www` en Apache.

 Configurar la base de datos:

   - Crea una base de datos MySQL o MariaDB en tu servidor llamada blog y ejecuta el comando
mysql -u username -p database blog < blog.sql

   - Abre el archivo `application/config/database.php` en tu proyecto CodeIgniter y configura los detalles de conexión a tu base de datos (hostname, usuario, contraseña y nombre de la base de datos).


 Configurar la URL base:

   Abre el archivo `application/config/config.php` y configura la URL base de tu sitio web. Esto se hace en la siguiente línea:

   ```php
   $config['base_url'] = 'http://tudominio.com/';
   ```

   Reemplaza `'http://tudominio.com/'` con la URL de tu sitio web.

 Verificar la instalación:

   Abre un navegador web y accede a la URL de tu sitio web. Deberías ver la página de inicio predeterminada de CodeIgniter. Esto confirma que la instalación ha sido exitosa.



