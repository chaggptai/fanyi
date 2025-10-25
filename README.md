# Translation System Skeleton

This repository provides a simple PHP-based example of a translation system. It demonstrates a minimal UI with light/dark themes, automatic translation on paste, and a placeholder API call for actual translation logic.

**Note**: Real machine translation requires external services or libraries. This project only includes placeholders for those API calls.

## Files

- `index.php` – main UI.
- `translate.php` – endpoint that performs the translation (placeholder implementation).
- `assets/style.css` – basic CSS with theme support.
- `assets/script.js` – frontend logic for automatic translation and theme switching.

## Running locally

1. Ensure PHP 7.0+ is installed.
2. Start the PHP built-in server for testing:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser.

For deployment on environments such as BT panel (宝塔), place the repository contents in your site directory and configure PHP accordingly. The project does not use any frameworks.

## Placeholder translation logic

The backend script `translate.php` currently contains a `TODO` section where an actual machine translation API should be integrated. Insert your API keys and logic according to the provider's documentation.
