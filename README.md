# Webgency

French landing site for Webgency, a fictional web agency. It presents services, three projects, reviews, an FAQ, and a contact form.

The pages are built in Elementor. The styling I added on top of the theme is in `wp-content/webgency.css`.

## Stack

- WordPress, theme Hello Elementor
- Elementor, plus Header Footer Elementor for the header and footer
- Formidable Forms for the contact form
- Yoast SEO
- Local server: Laragon

## Run it locally

1. Put this folder in `C:\laragon\www\`.
2. Copy `wp-config-sample.php` to `wp-config.php` and point it at a MySQL database. On this machine the database is named `jamsession`, user `root`, with an empty password. `wp-config.php` stays out of git.
3. Import a database dump into that database. The pages, menus, form, and Elementor layout live in the database, not in the theme files.
4. Start Laragon and open `http://webgency.test`.

The folder on disk is still `jamsession`. Windows would not rename it while this editor had the folder open. The site URL in the database is already `http://webgency.test`.

## Where my code is

| Path | What it is |
| --- | --- |
| `wp-content/webgency.css` | Custom CSS: colors, buttons, reviews, mobile menu, section labels. Comments in the file say why each block exists. |
| `wp-content/mu-plugins/webgency.php` | Loads that CSS. It turns on by itself, so a theme update does not wipe it. |
| `wp-content/uploads/2026/02/` | Logo, icons, project images, and review avatars. |

Elementor widget classes such as `elementor-element-4cddc71` are ids from the editor. If a section is rebuilt, that id changes and the matching CSS rule stops applying.

## What is not in git

- `wp-config.php` (database name, user, and keys)
- `*.sql` database dumps
- `wp-content/uploads/elementor/css/` (Elementor regenerates this)
