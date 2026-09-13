# RBU TBI WordPress Theme - Installation Guide

## 📦 Package Overview

This is a custom WordPress theme for the RBU Technology Business Incubator website, converted from static HTML/CSS.

## ✅ What's Included

### Core Theme Files:
- `style.css` - Theme header (required by WordPress)
- `functions.php` - Theme functionality and asset loading
- `header.php` - Navigation header
- `footer.php` - Site footer
- `index.php` - Fallback template

### Page Templates:
- `front-page.php` - Homepage
- `page-about.php` - About Us page
- `page-ecell.php` - E-Cell page  
- `page-contact.php` - Contact page
- `page-services.php` - Services page
- `page-startups.php` - Incubated Startups page

### Assets Folder:
- `assets/css/` - CSS files (needs to be populated)
- `assets/js/` - JavaScript files (optional)
- `assets/images/` - Image files (needs to be populated)

---

## 🚀 Installation Steps

### Step 1: Complete the Theme Package

Before uploading, you need to copy your assets into the theme folder:

```powershell
# Navigate to your project directory
cd c:\Users\tilak\Downloads\tbi\tbi

# Copy CSS files
Copy-Item style.css, services.css, incubated-startups.css -Destination tbi-theme\assets\css\

# Copy images
Copy-Item "tbi-building.jpg", "tbi banner.jpeg" -Destination tbi-theme\assets\images\

# Copy any additional image files you have (tejas.jpg, yash.jpg, sonal.jpg, etc.)
```

### Step 2: Create a ZIP File

```powershell
# Create a zip file of the theme
Compress-Archive -Path tbi-theme\* -DestinationPath tbi-theme.zip
```

### Step 3: Upload to WordPress

1. **Access WordPress Admin**
   - Go to `yourdomain.com/wp-admin`
   - Login with your credentials

2. **Navigate to Themes**
   - Click `Appearance` → `Themes`

3. **Add New Theme**
   - Click `Add New` button
   - Click `Upload Theme`
   - Choose your `tbi-theme.zip` file
   - Click `Install Now`

4. **Activate Theme**
   - After installation completes, click `Activate`

### Step 4: Create WordPress Pages

1. **Go to Pages → Add New** and create these pages:

   - **Home**
     - Title: "Home"
     - Template: Front Page
     - Publish
   
   - **About Us**
     - Title: "About Us"
     - Template: About Us
     - Publish
   
   - **E-Cell**
     - Title: "E-Cell"
     - Template: E-Cell
     - Publish
   
   - **Contact**
     - Title: "Contact"
     - Template: Contact
     - Publish
   
   - **Services**
     - Title: "Services"
     - Template: Services
     - Publish
   
   - **Incubated Startups**
     - Title: "Incubated Startups"
     - Template: Incubated Startups
     - Publish

### Step 5: Set Front Page

1. Go to `Settings` → `Reading`
2. Under "Your homepage displays", select `A static page`
3. Homepage: Select "Home"
4. Click `Save Changes`

### Step 6: Create Navigation Menu

1. Go to `Appearance` → `Menus`
2. Create a new menu called "Primary Menu"
3. Add all your pages in this order:
   - Home
   - About Us
   - E-Cell
   - Contact
   - Services
   - Incubated Startups
4. Add a custom link:
   - URL: #
   - Link Text: JOIN US
5. Under "Menu Settings", check "Primary Menu"
6. Click `Save Menu`

---

## 🔧 Post-Installation Configuration

### Recommended Plugins

Install these plugins for better functionality:

1. **Contact Form 7**
   - For contact page forms
   - Go to `Plugins` → `Add New`
   - Search "Contact Form 7"
   - Install and Activate

2. **Advanced Custom Fields (ACF) - Free** (Optional)
   - For easier content management
   - Allows you to add custom fields to pages

3. **Yoast SEO** (Optional)
   - For search engine optimization
   
4. **WP Super Cache** (Optional)
   - For performance optimization

### Permalinks Setup

1. Go to `Settings` → `Permalinks`
2. Select "Post name" structure
3. Click `Save Changes`

This will make your URLs look like:
- `yourdomain.com/about-us/`
- `yourdomain.com/contact/`

---

## 📝 Important Notes

### Page Slugs

When creating pages, WordPress will automatically create URL slugs. Make sure they match these:
- Home → `home` (won't show in URL as it's the front page)
- About Us → `about-us`
- E-Cell → `e-cell`
- Contact → `contact`
- Services → `services`
- Incubated Startups → `incubated-startups`

### Image Paths

The theme uses `get_template_directory_uri()` for asset paths, which automatically points to:
`wp-content/themes/tbi-theme/assets/`

### Adding Content to Templates

Some templates (E-Cell, Services, Startups) are placeholders. To add the full content:

1. Open the corresponding HTML file (e.g., `services.html`)
2. Copy the content sections  
3. Paste into the WordPress template file in `tbi-theme/`
4. Replace image paths with WordPress functions:
   ```php
   <?php echo get_template_directory_uri(); ?>/assets/images/image-name.jpg
   ```

---

## 🐛 Troubleshooting

### Theme Not Appearing

If the theme doesn't show up in WordPress:
- Make sure `style.css` has the theme header comment
- Check that all files are in `wp-content/themes/tbi-theme/`

### Styles Not Loading

If styles aren't loading:
1. Check that CSS files are in `tbi-theme/assets/css/`
2. Clear browser cache (Ctrl+Shift+Del)
3. Check WordPress Admin → check if theme is activated
4. Try deactivating and reactivating the theme

### Images Not Showing

If images don't appear:
1. Verify images are in `tbi-theme/assets/images/`
2. Check file names match exactly (case-sensitive)
3. Clear cache and hard refresh (Ctrl+F5)

### Navigation Menu Issues

If the menu doesn't appear:
1. Make sure you assigned the menu to "Primary Menu" location
2. Check that the theme is activated
3. Try creating the menu again

---

## 📞 Support & Updates

### Updating Content

To update content on any page:
1. Go to `Pages` → `All Pages`
2. Click `Edit` on the page you want to change
3. Modify the content
4. Click `Update`

### Updating Template Files

If you need to update a template:
1. Edit the file in `wp-content/themes/tbi-theme/`
2. Save the file
3. Refresh your website (may need hard refresh)

### Database Backup

**Always backup before making changes:**
- Use UpdraftPlus plugin for automatic backups
- Or use your hosting control panel backup feature

---

## 📄 File Structure

```
tbi-theme/
├── style.css (theme header)
├── functions.php (theme setup)
├── header.php (navbar)
├── footer.php (footer)
├── index.php (fallback)
├── front-page.php (homepage)
├── page-about.php
├── page-ecell.php
├── page-contact.php
├── page-services.php
├── page-startups.php
└── assets/
    ├── css/
    │   ├── style.css
    │   ├── services.css
    │   └── incubated-startups.css
    ├── js/
    └── images/
        ├── tbi-building.jpg
        └── tbi banner.jpeg
```

---

## ✅ Checklist

Before going live, make sure:
- [ ] All CSS files copied to theme
- [ ] All images copied to theme
- [ ] Theme uploaded and activated
- [ ] All 6 pages created with correct templates
- [ ] Front page set to "Home"
- [ ] Navigation menu created and assigned
- [ ] Permalinks set to "Post name"
- [ ] All pages tested and working
- [ ] Contact information updated
- [ ] Site tested on mobile devices

---

**Your WordPress theme is ready to use!** 🎉
