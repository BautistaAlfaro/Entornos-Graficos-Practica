
# Práctica 1 - HTML

## Ejercitación 1: Cuestionario

### 1. ¿Qué es HTML, cuándo fue creado, cuáles fueron sus versiones y cuál es la última?

HTML (*HyperText Markup Language*) es un lenguaje de marcado que permite estructurar el contenido de las páginas web mediante etiquetas. Fue creado por Tim Berners-Lee en 1991.

Sus principales versiones son HTML inicial, HTML 2.0, HTML 3.2, HTML 4.0, HTML 4.01 y HTML5. Actualmente, el estándar evoluciona continuamente mediante el HTML Living Standard.

### 2. ¿Cuáles son los principios básicos que recomienda el W3C para crear documentos HTML?

- Utilizar HTML para estructurar el contenido.
- Separar el contenido de la presentación mediante CSS.
- Separar el comportamiento mediante JavaScript.
- Respetar las especificaciones y la sintaxis del lenguaje.
- Favorecer la accesibilidad.
- Promover la compatibilidad entre navegadores y dispositivos.
- Utilizar cada elemento según su significado.

### 3. ¿Cuándo se considera desaprobado u obsoleto un elemento o atributo?

Un elemento o atributo desaprobado (*deprecated*) sigue definido en la especificación, pero se recomienda evitarlo porque existen alternativas mejores.

Un elemento o atributo obsoleto (*obsolete*) ya no forma parte de la especificación vigente correspondiente o dejó de admitirse en ella.

### 4. ¿Qué es el DTD y cuáles son los posibles DTD de HTML 4.01?

El DTD (*Document Type Definition*) es una definición que establece la estructura y los elementos permitidos en un documento.

HTML 4.01 contempla tres DTD:

- **Strict:** excluye los elementos y atributos desaprobados por motivos de presentación.
- **Transitional:** permite también determinados elementos y atributos desaprobados.
- **Frameset:** permite documentos que utilizan marcos o *frames*.

### 5. ¿Qué son los metadatos y cómo se especifican en HTML?

Los metadatos son datos que proporcionan información sobre el documento, como su autor, descripción, palabras clave o información relacionada con su contenido.

Se especifican principalmente dentro de la etiqueta `<head>`, utilizando el elemento `<meta>`.

Ejemplo:

    <head>
        <title>Mi página</title>
        <meta name="author" content="Juan Pérez">
        <meta name="description" content="Página de ejemplo">
        <meta name="keywords" content="HTML, web, programación">
    </head>

Los atributos más utilizados son `name`, que identifica el tipo de metadato, y `content`, que contiene su valor.
