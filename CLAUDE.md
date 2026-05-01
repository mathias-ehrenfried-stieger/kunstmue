# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress theme for the Kunstmue Festival website (free alternative festival in Bad Goisern am Hallstättersee, Austria). Source files live in `src/`, and the build pipeline compiles them into the WordPress theme at `public/wp-content/themes/kunstmue/`.

## Commands

```bash
npm install          # Install dependencies
./build.sh           # Incremental build (SASS → CSS, esbuild JS, copy PHP + assets)
./clean-build.sh     # Full rebuild from scratch (removes theme dir first)
npx browser-sync dist -w  # Dev server with live reload
```

Deployment is automatic via Netlify on push to `main`.

## Architecture

**Build pipeline:** `build.sh` runs `npx sass` on `src/sass/style.scss`, bundles `src/js/main.js` via `npx esbuild`, and copies all PHP templates and assets to `public/wp-content/themes/kunstmue/`. Never edit files directly in `public/wp-content/themes/kunstmue/` — they are overwritten on every build.

**Source structure:**
- `src/*.php` — WordPress page templates (one per page: `front-page.php`, `page-line-up.php`, `page-facts.php`, etc.)
- `src/php/functions.php` — Block-parsing helpers (`getHeadersFromBlocks()`, `getParagraphsFromBlocks()`, `getImageFromBlocks()`, `getListsFromBlocks()`) used by templates to extract Gutenberg block content
- `src/sass/` — SCSS with `style.scss` as entry point; layout and page styles split into separate files
- `src/js/` — JavaScript entry at `main.js`; currently minimal

**Content model:** Content is managed via WordPress Gutenberg blocks. Templates call the block-parsing helpers in `src/php/functions.php` to extract headings, paragraphs, images, and lists from blocks, rather than using `the_content()` directly. Understanding these helpers is essential for modifying any page template.
