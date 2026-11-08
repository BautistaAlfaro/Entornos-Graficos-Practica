# UTN FRRO - Cátedra de Entornos Gráficos
## Práctica N° 8: Accesibilidad y Usabilidad Web, Internacionalización e Independencia de Dispositivos

**Bibliografía y Referencias:** W3C / WAI, Pautas WCAG 2.0, Material Dra. Ma. Inés Laitano, Ley Nacional N° 26.653 de Accesibilidad Web (Argentina / ONTI), y Diapositivas de la Cátedra (Prof. Ing. Daniela Díaz / Prof. Ing. Julián Butti).

---

## 1. Cuestionario Teórico

### 1. ¿Qué es la Accesibilidad Web?
La **Accesibilidad Web** (o e-Accesibilidad) es la condición y grado en el cual los sitios, herramientas, aplicaciones y contenidos de la Web están diseñados y codificados de modo tal que **todas las personas puedan percibirlos, comprenderlos, navegar e interactuar con ellos**, independientemente de sus capacidades físicas, sensoriales, cognitivas, técnicas, edad, contexto de uso o tecnologías de asistencia empleadas.  
Como definió Tim Berners-Lee (creador de la World Wide Web): *"El poder de la Web está en su universalidad. El acceso de cualquier persona, independientemente de su discapacidad, es un aspecto esencial"*.

---

### 2. ¿Qué es la WAI?
La **WAI (Web Accessibility Initiative o Iniciativa para la Accesibilidad Web)** es una rama técnica especializada del consorcio internacional **W3C (World Wide Web Consortium)**.  
Su misión es promover y asegurar la accesibilidad de la Web mediante el desarrollo de estándares internacionales de consenso, pautas de diseño, recursos educativos y especificaciones técnicas para creadores de contenido, navegadores y herramientas de desarrollo.

---

### 3. ¿Cuáles son los Componentes esenciales de Accesibilidad Web?
La accesibilidad web no depende de un único actor, sino de la interrelación armónica de **7 componentes esenciales**:
1. **Contenido:** La información de una página web (texto, imágenes, sonidos, formularios, código HTML/CSS).
2. **Navegadores web y reproductores multimedia:** Software que interpreta el contenido.
3. **Tecnologías de Asistencia (TA / Assistive Technologies):** Lectores de pantalla (ej. NVDA, JAWS), lupas/magnificadores, líneas braille, conmutadores y reconocimiento por voz.
4. **Usuarios y sus destrezas:** Los conocimientos, expectativas y estrategias de navegación de las personas.
5. **Desarrolladores y diseñadores:** Programadores, diseñadores gráficos, redactores y especialistas de UX.
6. **Herramientas de Autor (Authoring Tools - ATAG):** Software empleado para crear sitios (CMS como WordPress, editores de código, procesadores de texto).
7. **Herramientas de Evaluación:** Aplicaciones automáticas y semiautomáticas (como TAW, WAVE, axe-core) para auditar la conformidad con las pautas.

---

### 4. ¿Qué son las Pautas de Accesibilidad al Contenido en la Web (WCAG)?
Las **WCAG (Web Content Accessibility Guidelines)** son el estándar técnico internacional de referencia publicado por el W3C/WAI que establece cómo crear contenido web accesible.  
En su versión **WCAG 2.0**, se fundamenta en **4 principios fundamentales (acrónimo POUR)**:
1. **Perceptible:** La información y los componentes de la interfaz deben presentarse a los usuarios de manera que puedan percibirlos mediante sus sentidos (ofrecer alternativas textuales `alt`, subtítulos, suficiente contraste de color).
2. **Operable:** Los componentes de navegación y de la interfaz deben ser interactuables (operable 100% mediante teclado sin requerir ratón, tiempo suficiente para leer, sin contenido que provoque convulsiones).
3. **Comprensible:** La información y el manejo de la interfaz deben ser claros, predecibles y asistir al usuario para evitar y corregir errores.
4. **Robusto:** El contenido debe ser lo suficientemente estándar e interoperable como para ser interpretado con fiabilidad por una amplia variedad de agentes de usuario, incluidas las tecnologías de asistencia presentes y futuras.

---

### 5. ¿Cuáles son los niveles de prioridad establecidos por las pautas?
Las pautas clasifican los puntos de verificación según su impacto crítico sobre la navegación:
- **Prioridad 1:** Puntos que el desarrollador **tiene que** satisfacer obligatoriamente. Si no se cumplen, uno o más grupos de usuarios encontrarán una barrera insalvable que les imposibilitará por completo acceder a la información.
- **Prioridad 2:** Puntos que el desarrollador **debe** satisfacer. Si no se cumplen, resultará muy difícil acceder a la información a ciertos grupos de usuarios.
- **Prioridad 3:** Puntos que el desarrollador **puede** satisfacer para mejorar notablemente la experiencia de navegación de personas con limitaciones.

---

### 6. ¿Cuáles son los niveles de conformidad?
Los niveles de conformidad expresan el grado formal de cumplimiento alcanzado por una página web respecto a las pautas WCAG:
- **Nivel A (Mínimo):** Se satisfacen todos los criterios de éxito de Prioridad 1. (En Argentina, la Ley 26.653 y la ONTI exigen como piso el cumplimiento de los criterios de Nivel A con al menos 80 puntos de verificación).
- **Nivel AA / Doble A (Recomendado):** Se satisfacen todos los criterios de éxito de Prioridad 1 y Prioridad 2. Es el estándar legal y técnico internacional adoptado por la mayoría de las legislaciones mundiales y organismos públicos.
- **Nivel AAA / Triple A (Máximo):** Se satisfacen todos los criterios de Prioridad 1, 2 y 3. Brinda la máxima accesibilidad posible en todo el contenido digital.

---

### 7. ¿Qué es TAW?
**TAW (Test de Accesibilidad Web)** es una herramienta automática y semiautomática desarrollada por la Fundación CTIC (Centro Tecnológico de la Información y la Comunicación de Asturias, España) para el análisis, diagnóstico y auditoría de la accesibilidad de sitios web en base a las pautas WAI/WCAG del W3C. Permite generar reportes exhaustivos indicando problemas clasificados por prioridad y nivel de conformidad alcanzado.

---

### 8. ¿En qué consiste la Usabilidad Web?
La **Usabilidad Web** es el grado de eficacia, eficiencia, facilidad de aprendizaje y satisfacción subjetiva con el que usuarios específicos pueden lograr objetivos determinados en un entorno web.  
Un sitio es usable cuando es intuitivo, no genera fricción cognitiva, permite completar tareas con rapidez, previene equivocaciones y deja una experiencia positiva en el usuario.

---

### 9. ¿A qué se refieren los conceptos de buscabilidad y visibilidad de un sitio web?
- **Visibilidad:** Es el grado en que un sitio web logra captar la atención y presencia en Internet a través de motores de búsqueda (SEO), enlaces entrantes desde otros sitios, directorios y redes sociales. Determina la probabilidad de que un usuario que no conoce la URL directa pueda descubrir el sitio.
- **Buscabilidad (*Findability*):** Es la facilidad con la que un usuario, una vez dentro del sitio web o a través de motores externos, puede **localizar un contenido, documento o servicio específico**. Involucra una taxonomía clara, un buscador interno eficaz, metadatos estructurados y migas de pan.

---

### 10. ¿A qué se refiere el concepto de fidelidad en relación a un sitio web?
La **fidelidad** (o *retención / lealtad de usuarios*) es la capacidad que tiene un sitio web de lograr que sus visitantes regresen de forma recurrente y continúen utilizando sus servicios a lo largo del tiempo.  
Se consigue a través de una alta usabilidad, contenido actualizado y confiable, velocidad de carga, respeto por la privacidad y un diseño coherente que genere confianza en el visitante.

---

### 11. ¿Qué técnicas se utilizan para evaluar la usabilidad de un sistema?
1. **Evaluación Heurística:** Expertos en usabilidad inspeccionan la interfaz contrastándola contra principios reconocidos (como las 10 heurísticas de Jakob Nielsen).
2. **Pruebas con Usuarios Reales (*User Testing*):** Observación directa de usuarios mientras realizan tareas predefinidas en el sitio, registrando tiempos de finalización, dudas y errores.
3. **Técnica del Pensamiento en Voz Alta (*Think Aloud Protocol*):** El usuario narra en voz alta lo que piensa y siente a medida que interactúa con la interfaz.
4. **Seguimiento Ocular (*Eye Tracking*):** Grabación del movimiento ocular para mapear zonas de interés y patrones de lectura (patrón en F).
5. **Analítica Web y Mapas de Calor (*Heatmaps*):** Registro masivo de clics, desplazamientos de scroll y embudos de conversión (funnels).
6. **Card Sorting:** Técnica para validar la arquitectura de información pidiéndole a los usuarios que agrupen tarjetas temáticas según su propia lógica mental.

---

### 12. ¿Qué es la Independencia de Dispositivos y cuáles son sus ventajas desde los puntos de vista del usuario y del desarrollador?
La **Independencia de Dispositivos (Device Independence - DIP)** es la propiedad de diseño y desarrollo web que asegura que un usuario pueda acceder a la misma información y funcionalidad web desde cualquier dispositivo (computadora de escritorio, notebook, teléfono inteligente, tablet, televisor inteligente o lector braille), sin requerir hardware o software propietario específico.
- **Ventajas para el usuario:**
  - Libertad total de elección de dispositivo y navegador.
  - Experiencia fluida y consistente en cualquier lugar y momento.
  - Inclusión para personas con equipamiento informático de bajos recursos o conexiones limitadas.
- **Ventajas para el desarrollador:**
  - Código unificado y reducción de costos: una sola base de código responsive (HTML5/CSS3) en lugar de mantener aplicaciones o sitios duplicados (como el antiguo subdominio `m.sitio.com`).
  - Mantenimiento ágil y compatibilidad a futuro con nuevos dispositivos del mercado.
  - Mejor posicionamiento SEO al no dispersar las URLs.

---

### 13. ¿Qué es la Internacionalización y cómo funciona?
La **Internacionalización (i18n)** es el proceso de diseñar y estructurar la arquitectura de una aplicación o sitio web para que pueda adaptarse fácilmente a **diferentes idiomas, regiones geográficas y culturas** sin necesidad de alterar el código fuente ni la lógica interna del software.  
**Cómo funciona:**
- Separación de textos del código: Los textos de la interfaz se externalizan en archivos de recursos o diccionarios (archivos `.json`, `.po` o matrices asociativas de PHP).
- Uso de codificación universal de caracteres: Empleo estricto de **UTF-8** en cabeceras HTTP, HTML y bases de datos.
- Soporte para formatos locales: Manejo dinámico de fechas, horas, números, monedas y sistemas de medición según la configuración regional (*locale*) del visitante.
- Flexibilidad de diseño: Contenedores CSS con ancho adaptable para absorber variaciones en la longitud de las palabras entre distintos idiomas (por ejemplo, el alemán suele ocupar hasta un 30% más de espacio que el inglés).

---

### 14. ¿Cuáles son los conceptos clave para el diseño web internacional?
1. **Codificación de Caracteres (Charset):** Declaración explícita de UTF-8 (`<meta charset="UTF-8">`).
2. **Atributo de Idioma (`lang`):** Declarar el idioma base en el documento (`<html lang="es">`) y en fragmentos de texto en otros idiomas.
3. **Direccionalidad del Texto:** Soporte para idiomas de izquierda a derecha (LTR) y de derecha a izquierda (RTL como árabe o hebreo) mediante el atributo `dir="rtl"`.
4. **Formatos Numéricos y de Fechas:** Evitar concatenaciones rígidas de fechas (ej. `DD/MM/AAAA` vs `MM/DD/AAAA`) utilizando bibliotecas de localización.
5. **Sensibilidad Cultural y Simbólica:** Elección cuidadosa de imágenes, gestos con las manos, colores y metáforas visuales que pueden tener connotaciones ofensivas o diferentes en otras culturas.

---

### 15. ¿Cuáles son las diferencias entre localización e internacionalización?
- **Internacionalización (i18n):** Es la etapa **arquitectónica y de ingeniería previa**. Prepara el sistema a nivel de infraestructura para que sea técnicamente capaz de soportar múltiples idiomas y culturas sin romper el código. Se realiza una sola vez durante el diseño del software.
- **Localización (l10n):** Es el proceso de **adaptación específica de la aplicación a un mercado, país o comunidad concreta**. Incluye la traducción idiomática de los textos, adaptación de modismos locales, monedas (`$` vs `€`), leyes tributarias, imágenes culturales y días festivos. Se realiza tantas veces como idiomas o regiones se deseen incorporar.

---

## 2. Clasificación del Checklist de Análisis Web (Usabilidad vs Accesibilidad)

A continuación se clasifica cada una de las preguntas de la lista de comprobación de la cátedra, justificando técnicamente su categorización en **Usabilidad (U)** o **Accesibilidad (A)**:

| Aspecto | Pregunta / Criterio de Comprobación | Clasificación (U / A) | Justificación Técnica |
| :--- | :--- | :---: | :--- |
| **Aspectos Generales** | ¿Cumple el sitio con sus objetivos? ¿Está diseñado para darle a los usuarios lo que ellos quieren? | **U** (Usabilidad) | Evalúa la efectividad de la arquitectura de información para satisfacer las necesidades del usuario. |
| | ¿Es eficiente? | **U** (Usabilidad) | Mide el tiempo y esfuerzo cognitivo requerido para completar una tarea. |
| | ¿Es intuitivo? | **U** (Usabilidad) | Refiere a la facilidad de uso y curva de aprendizaje natural sin requerir manuales. |
| | ¿Mantiene una consistencia tanto en su funcionamiento como en su apariencia? | **U** (Usabilidad) | Principio heurístico de coherencia visual e interactiva en la interfaz. |
| | ¿Facilita que el usuario se sienta cómodo y con el control del sitio? | **U** (Usabilidad) | Sensación de libertad y control del usuario sobre el flujo de navegación. |
| **Navegación** | ¿Aparece la navegación en un lugar prominente, donde se vea fácilmente? | **U** (Usabilidad) | Jerarquía visual y prominencia de los elementos de menú para rápida localización. |
| | ¿Los enlaces que son imágenes tienen su atributo ALT escrito? | **A** (Accesibilidad) | **Criterio de Éxito 1.1.1 WCAG (Nivel A):** Esencial para que los lectores de pantalla vocalicen el destino del hipervínculo a personas no videntes. |
| | Si ha usado JavaScript para la navegación ¿ha preparado también una navegación en modo texto? | **A** (Accesibilidad) | **Independencia de tecnología y degradado elegante:** Asegura acceso si el usuario no ejecuta JavaScript o utiliza agentes de usuario en modo texto. |
| | ¿Existen enlaces rotos o que no conducen a ningún sitio? | **U** (Usabilidad) | Afecta la confiabilidad, frustración del usuario y navegación fluida (cuidado de errores 404). |
| | ¿Tiene el sitio un site map o un buscador para quienes quieren acceder directamente sin navegar? | **U** (Usabilidad) | Mecanismos complementarios de buscabilidad transversal (*Criterio 2.4.5 WCAG también lo pondera, pero como herramienta de usabilidad general*). |
| | ¿Se mantiene una navegación consistente y coherente a lo largo del site? | **U** (Usabilidad) | Coherencia arquitectónica que reduce la carga mental del visitante. |
| | ¿Existen elementos que permitan al usuario saber exactamente dónde se encuentra y cómo volver (migas de pan)? | **U** (Usabilidad) | Navegación contextual para evitar la desorientación espacial en árboles profundos. |
| | ¿Indican los enlaces claramente hacia dónde apuntan? ¿Está claro lo que encontrará detrás de cada uno? | **U / A** (Mixto: U principal, A crítico) | Enlaces descriptivos. En Usabilidad previene clics fallidos; en Accesibilidad (**Criterio 2.4.4 WCAG**) evita enlaces ambiguos como "haga clic aquí" cuando se navega con lista de enlaces en lectores de pantalla. |
| **Animaciones** | Evite las animaciones cíclicas (gif animados continuos), use animaciones Flash sólo si es necesario. | **A** (Accesibilidad) | **Criterios 2.2.2 y 2.3.1 WCAG:** El movimiento constante distrae a usuarios con déficit de atención (TDAH) y parpadeos de más de 3 Hz pueden inducir ataques epilépticos fotosensibles. |
| **Tecnología** | ¿La tecnología utilizada en el site es compatible con el software y hardware de los usuarios? ¿Sin plug-ins? | **A** (Accesibilidad) | **Principio de Robustez e Independencia de Dispositivos:** Evita barreras tecnológicas arbitrarias en sistemas adaptados. |
| | Si requiere descarga de plug-ins, ¿se le informa al usuario y se le explica la importancia? | **U** (Usabilidad) | Asistencia informativa y transparencia en los requerimientos del sistema. |
| **Feedback** | ¿Se han previsto respuestas del sistema frente a interacciones del usuario? | **U** (Usabilidad) | Visibilidad del estado del sistema (Heurística 1 de Nielsen): confirmaciones y mensajes de estado. |
| | ¿Puede el usuario ponerse en contacto para hacer sugerencias o comentarios? | **U** (Usabilidad) | Canales de comunicación bidireccional y retroalimentación institucional. |
