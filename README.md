# NewsBing - Static HTML Website

## Overview

This is the complete static HTML/CSS/JavaScript version of the NewsBing news website, converted from the React application.

## Files Included

### HTML Pages
- **index.html** - Homepage with featured slider and latest news grid
- **article.html** - News article template page (works for all articles)
- **about.html** - About Us page
- **contact.html** - Contact page with working form
- **terms.html** - Terms & Conditions page
- **privacy.html** - Privacy Policy page

### CSS
- **css/style.css** - Complete standalone stylesheet (no external dependencies)

### JavaScript
- **js/main.js** - All interactive features including:
  - Mobile menu toggle
  - Hero slider functionality
  - Search functionality
  - Back to top button
  - Contact form handling
  - Social sharing functions
  - Dynamic news loading

## Features

✅ **Fully Responsive** - Mobile, tablet, and desktop optimized
✅ **SEO Optimized** - Meta tags, Open Graph, Twitter Cards
✅ **Google News Ready** - JSON-LD structured data on article pages
✅ **No Dependencies** - Pure HTML, CSS, and vanilla JavaScript
✅ **Fast Loading** - Optimized for performance
✅ **Accessible** - ARIA labels and semantic HTML
✅ **Social Sharing** - Facebook, Twitter, LinkedIn integration

## How to Use

### 1. Local Testing

Simply open `index.html` in your web browser, or use a local server:

```bash
# Using Python
python3 -m http.server 8000

# Using Node.js http-server
npx http-server

# Using PHP
php -S localhost:8000
```

Then visit `http://localhost:8000`

### 2. Deployment

Upload the entire `public-html` folder to any web hosting service:

#### Static Hosting (Recommended)
- **GitHub Pages**: Upload to GitHub repo, enable Pages
- **Netlify**: Drag and drop the folder
- **Vercel**: Deploy via Git or CLI
- **Cloudflare Pages**: Connect Git repository

#### Traditional Hosting
- **cPanel**: Upload via File Manager
- **FTP**: Upload all files maintaining folder structure
- **Shared Hosting**: Any provider works

### 3. Customization

#### Update News Articles
Edit `js/main.js` and modify the `loadNewsArticles()` function to add/update articles.

#### Change Colors
Edit `css/style.css` and update the CSS variables in the `:root` section:
```css
:root {
  --primary-red: #dc2626;
  --text-dark: #1f2937;
  /* etc... */
}
```

#### Update Contact Information
Edit the email and phone numbers in all HTML files:
- article@newsbing.in
- +1-380-284-8332

## Browser Support

- Chrome/Edge: Latest 2 versions
- Firefox: Latest 2 versions
- Safari: Latest 2 versions
- Mobile browsers: iOS Safari 12+, Chrome Android

## File Structure

```
public-html/
├── index.html              # Homepage
├── article.html            # Article template
├── about.html              # About page
├── contact.html            # Contact page
├── terms.html              # Terms page
├── privacy.html            # Privacy page
├── css/
│   └── style.css          # All styles
├── js/
│   └── main.js            # All JavaScript
└── README.md              # This file
```

## Converting More Articles

To create more article pages:

1. Duplicate `article.html`
2. Update the following in the new file:
   - `<title>` tag
   - Meta descriptions
   - Article header (title, excerpt, author, date)
   - Featured image URL
   - Article content
   - Breadcrumb navigation

OR use the article.html template and pass article data via URL parameters (requires additional JavaScript).

## Production Checklist

Before deploying to production:

- [ ] Update domain name in meta tags
- [ ] Replace placeholder contact information
- [ ] Add Google Analytics or tracking code
- [ ] Test all links and navigation
- [ ] Verify responsive design on real devices
- [ ] Check SEO with Google Search Console
- [ ] Test page load speed
- [ ] Validate HTML/CSS
- [ ] Set up HTTPS/SSL certificate

## Performance Tips

1. **Optimize Images**: Compress images before uploading
2. **Enable Caching**: Configure server cache headers
3. **Use CDN**: Serve static assets via CDN
4. **Minify Files**: Minify CSS and JavaScript for production
5. **Enable Compression**: Enable GZIP compression on server

## Support

For questions or issues:
- Email: article@newsbing.in
- Phone: +1-380-284-8332

## License

© 2026 NewsBing. All rights reserved.

---

**Note**: This is a static HTML version. For dynamic content updates, consider integrating with a Content Management System (CMS) or using the original React version with a backend API.
