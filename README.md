# custom_prototype

Prototipo de sitio web WordPress con un tema personalizado de estilo Apple, desarrollado localmente con XAMPP.

## Stack

- **CMS:** WordPress 6.9.4
- **Idioma:** Español (es_ES)
- **Servidor local:** XAMPP (Apache + MySQL)
- **Tema:** `apple-style-theme` (custom)
- **Acceso remoto:** soporte para ngrok via `HTTP_X_FORWARDED_HOST`

## Tema: Apple Style Theme

Tema personalizado inspirado en el diseño de Apple. La página principal está compuesta por secciones modulares:

| Sección | Descripción |
|---|---|
| `hero` | Cabecera principal con CTA y texto gradiente |
| `split` | Sección de dos columnas con imagen y texto |
| `stats` | Métricas / cifras destacadas |
| `features` | Grid de características del producto |
| `showcase` | Galería o demostración visual |
| `testimonials` | Opiniones de usuarios |
| `cta` | Llamada a la acción final |

### Estructura del tema

```
wp-content/themes/apple-style-theme/
├── assets/
│   ├── css/main.css       # Estilos con variables CSS (Apple-like)
│   └── js/main.js         # Scripts de animaciones y UI
├── inc/
│   ├── setup.php          # Soporte del tema, menús
│   └── enqueue.php        # Carga de assets
├── template-parts/
│   └── components/        # Componentes de sección reutilizables
├── front-page.php         # Página principal
├── header.php / footer.php
└── style.css              # Metadatos del tema
```

## Instalación local

1. Clonar o copiar en `C:\xampp\htdocs\custom_prototype`
2. Importar la base de datos `custom_prototype` en MySQL (phpMyAdmin)
3. Ajustar credenciales en `wp-config.php` si es necesario
4. Acceder a `http://localhost/custom_prototype`

## Acceso admin

`http://localhost/custom_prototype/wp-admin`

---

*Autor: Alejandro — Prototipo de desarrollo, no apto para producción.*
