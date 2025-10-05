# Entrust Advice - Business Landing Page

A modern, responsive landing page implementation based on the provided design screenshot. Built with HTML5, CSS3 (Sass), JavaScript, and Bootstrap for optimal performance and user experience.

## 🚀 Features

- **Pixel-perfect design implementation** matching the original screenshot
- **Fully responsive** across all devices (mobile, tablet, desktop)
- **Modern CSS with Sass/SCSS** for maintainable styling
- **Bootstrap integration** for responsive grid and components
- **Interactive elements** with smooth animations and hover effects
- **Performance optimized** with efficient CSS and JavaScript
- **Accessibility focused** with semantic HTML and ARIA support

## 📁 File Structure

```
kiwibridge/
├── index.html          # Main HTML file
├── styles.scss         # Main Sass stylesheet (source)
├── styles.css          # Compiled CSS (generated)
├── script.js           # JavaScript interactions
└── README.md          # This file
```

## 🎨 Design Elements Implemented

### Visual Components
- **Header Navigation**: Fixed header with logo, menu items, and CTA button
- **Hero Section**: Large headline with gradient background
- **Professional Image**: Businessman with geometric shape overlays
- **Statistics Section**: Dark bottom section with key metrics
- **Award Badges**: "We Are The Best" section with three awards

### Color Palette
- **Primary Purple**: #6366F1 (main gradient start)
- **Secondary Purple**: #8B5CF6 (gradient middle)
- **Accent Green**: #10B981 (CTA button, geometric shapes)
- **Accent Yellow**: #F59E0B (Discover More button, statistics)
- **Accent Blue**: #06B6D4 (geometric shapes)
- **Dark Background**: #1F2937 (statistics section)

### Typography
- **Font Family**: Inter (Google Fonts)
- **Hero Title**: 3.5rem, 800 weight
- **Body Text**: 1.1rem, regular weight
- **Statistics**: 2.5rem, 800 weight

## 🛠 Development Setup

### Prerequisites
- Node.js (for Sass compilation)
- Modern web browser
- Code editor

### Installation
1. Clone or download the files
2. Navigate to the project directory
3. Install Sass globally (if not already installed):
   ```bash
   npm install -g sass
   ```

### Development Workflow
1. **Edit Sass files**: Make changes to `styles.scss`
2. **Compile CSS**: Run the compilation command
   ```bash
   sass styles.scss styles.css --watch
   ```
3. **View changes**: Open `index.html` in your browser

### Manual Compilation
```bash
sass styles.scss styles.css
```

## 📱 Responsive Breakpoints

- **Mobile**: < 576px
- **Tablet**: 576px - 992px  
- **Desktop**: > 992px

## ⚡ Performance Features

- **CSS Grid & Flexbox** for efficient layouts
- **CSS Custom Properties** for consistent theming
- **Optimized animations** using transform and opacity
- **Lazy loading considerations** for images
- **Minimal JavaScript** for core interactions

## 🎯 Interactive Elements

- **Smooth scrolling** navigation
- **Hover effects** on buttons and links
- **Counter animations** for statistics
- **Parallax effects** on geometric shapes
- **Mobile-friendly** navigation menu
- **Loading animations** for page entry

## 🔧 Customization

### Colors
Edit the CSS custom properties in `styles.scss`:
```scss
:root {
  --primary-purple: #6366F1;
  --secondary-purple: #8B5CF6;
  --accent-green: #10B981;
  // ... other colors
}
```

### Typography
Modify font sizes and weights in the respective selectors:
```scss
.hero-title {
  font-size: 3.5rem;
  font-weight: 800;
}
```

### Layout
Adjust Bootstrap grid classes and custom spacing in the HTML and CSS files.

## 📊 Browser Support

- **Modern browsers**: Chrome, Firefox, Safari, Edge (latest versions)
- **Mobile browsers**: iOS Safari, Chrome Mobile
- **Fallbacks included** for older browser compatibility

## 🚀 Deployment

1. **Compile Sass to CSS**:
   ```bash
   sass styles.scss styles.css --style=compressed
   ```

2. **Upload files** to your web server:
   - `index.html`
   - `styles.css` (compiled)
   - `script.js`

3. **Ensure CDN resources** are accessible:
   - Bootstrap CSS/JS
   - Google Fonts (Inter)
   - Font Awesome icons

## 📄 License

This implementation is based on the provided design screenshot and created for development purposes.

---

**Created with pixel-perfect attention to detail** ✨