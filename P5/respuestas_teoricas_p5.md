# UTN FRRO - Cátedra de Entornos Gráficos
## Práctica N° 5: Envío de Emails y Variables de Sesión en PHP

---

## 1. Función `mail()` en PHP

### Firma y Parámetros
```php
bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
```
1. **`$to` (Destinatario):** Dirección o direcciones de correo receptoras separadas por coma (`"usuario1@dominio.com, usuario2@dominio.com"`).
2. **`$subject` (Asunto):** Cadena con el título o asunto del correo.
3. **`$message` (Cuerpo):** Mensaje a transmitir. En texto plano se emplean saltos de línea `\n` o `\r\n`. En formato HTML, incluye etiquetas `<p>`, `<h1>`, `<table>`, etc.
4. **`$additional_headers` (Cabeceras opcionales):** Cadena delimitada por `\r\n` con metadatos clave:
   - `From:` Dirección remitente (crucial para evitar caer en spam).
   - `Reply-To:` Dirección de respuesta alterna.
   - `Cc:` Copia pública a otros destinatarios.
   - `Bcc:` Copia oculta (*Blind Carbon Copy*).
   - `MIME-Version: 1.0` y `Content-type: text/html; charset=UTF-8` para correos formateados en HTML.
5. **`$additional_parameters`:** Parámetros adicionales para el binario `sendmail` del sistema operativo (ej. `-f remitente@dominio.com`).

### Codificación y Formato HTML
- Por defecto, HTTP y los protocolos de correo asumían `ISO-8859-1`. En la actualidad se especifica `charset=UTF-8` en la cabecera `Content-type` para garantizar caracteres como tildes, eñes y caracteres especiales.
- Protocolo SMTP (*Simple Mail Transfer Protocol*): Protocolo de capa de aplicación basado en texto que transmite los mensajes de servidor a servidor.

---

## 2. Variables de Sesión en PHP

### Concepto y Ventajas
- A diferencia del protocolo HTTP que es inherentemente **sin estado (*stateless*)**, las sesiones permiten mantener un estado persistente de los datos de un usuario a lo largo de múltiples peticiones sucesivas.
- **Seguridad:** Los datos de la sesión se almacenan físicamente en el servidor (en el directorio `/tmp` o ruta configurada en `session.save_path`), siendo inaccesibles e inmodificables de forma directa por el cliente.
- El cliente únicamente almacena una referencia: una cookie con el identificador único de sesión (`PHPSESSID`), o dicho ID se propaga como parámetro GET en la URL (`SID`).

### Ciclo de Vida y Métodos Clave
1. **`session_start()`:**
   - Debe invocarse **antes de enviar cualquier salida HTML o espacio en blanco** al navegador, ya que internamente envía cabeceras HTTP (`Set-Cookie: PHPSESSID=...`).
   - Si no existe sesión previa para el cliente, genera un ID criptográfico y crea el archivo en el servidor. Si ya existe, carga los datos existentes al superglobal `$_SESSION`.
2. **`$_SESSION`:**
   - Array asociativo superglobal disponible en todo el script.
   - Permite lectura y escritura inmediata: `$_SESSION['usuario'] = 'Bautista';`.
3. **`session_destroy()`:**
   - Destruye la información persistida en el servidor para la sesión actual.
   - **Nota técnica de cátedra:** No elimina automáticamente las variables en la memoria del script actual (se recomienda `$_SESSION = array();`) ni expira la cookie del cliente de forma automática a menos que se invoque `setcookie(session_name(), '', time() - 3600)`.
