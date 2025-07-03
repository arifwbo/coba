# Modern Theme for CMS Sekolahku

Dokumentasi untuk tema modern CMS Sekolahku yang telah diperbarui dengan desain yang lebih clean, responsif, dan user-friendly.

## 🎨 Fitur Tema Modern

### Perubahan Visual
- **Bootstrap 5** - Framework CSS modern dan responsif
- **Bootstrap Icons** - Icon set yang konsisten dan modern
- **Google Fonts** - Typography yang clean dengan font Inter
- **Dark Mode** - Toggle mode gelap/terang dengan penyimpanan di localStorage
- **Responsive Design** - Optimasi untuk desktop, tablet, dan mobile
- **Modern Color Scheme** - Palet warna yang lebih modern dan professional

### Komponen yang Diperbarui
- ✅ **Header/Navbar** - Design flat dengan navigation yang lebih intuitive
- ✅ **Sidebar** - Menu collapsible dengan icon Bootstrap yang konsisten
- ✅ **Dashboard** - Cards dan info boxes dengan shadow dan spacing modern
- ✅ **Tables** - Style Bootstrap 5 dengan hover effects
- ✅ **Forms** - Input fields yang lebih besar dengan better focus states
- ✅ **Buttons** - Design modern dengan hover animations
- ✅ **Modals** - Bootstrap 5 modal components
- ✅ **Alerts** - Improved alert styling dengan icons

## 🚀 Cara Menggunakan Tema Modern

### 1. Aktivasi Tema Modern

Untuk menggunakan tema modern, update file controller yang memuat backend layout untuk menggunakan file layout baru:

```php
// Ganti dari:
$this->load->view('backend/index', $data);

// Menjadi:
$this->load->view('backend/modern_index', $data);
```

### 2. Update Dashboard

Untuk menggunakan dashboard modern:

```php
// Ganti dari:
$data['content'] = 'dashboard';

// Menjadi:
$data['content'] = 'modern_dashboard';
```

### 3. File yang Ditambahkan

#### CSS Files:
- `assets/css/modern-theme.css` - CSS utama tema modern

#### JavaScript Files:
- `assets/js/modern-theme.js` - JavaScript untuk functionality tema modern

#### View Files:
- `views/backend/modern_index.php` - Layout utama tema modern
- `views/backend/modern_sidebar.php` - Sidebar tema modern
- `views/modern_dashboard.php` - Dashboard tema modern

## 🎛️ Konfigurasi

### Dark Mode

Dark mode tersimpan secara otomatis di localStorage browser. User dapat toggle dengan:
- Klik tombol moon/sun icon di header
- Setting tersimpan antar session

### Responsive Sidebar

- **Desktop (>1024px)**: Sidebar collapse/expand
- **Mobile (≤1024px)**: Sidebar overlay dengan backdrop

### Customization

Untuk mengubah warna atau style, edit variabel CSS di `assets/css/modern-theme.css`:

```css
:root {
  --primary-color: #2563eb;    /* Warna utama */
  --secondary-color: #64748b;  /* Warna sekunder */
  --success-color: #059669;    /* Warna sukses */
  /* ... variabel lainnya */
}
```

## 🔄 Cara Kembali ke Tema Lama

Jika ingin kembali ke tema lama, cukup kembalikan penggunaan file view original:

### 1. Kembalikan Layout
```php
// Kembalikan ke:
$this->load->view('backend/index', $data);
```

### 2. Kembalikan Dashboard
```php
// Kembalikan ke:
$data['content'] = 'dashboard';
```

### 3. Nonaktifkan CSS Modern (Opsional)
Comment atau hapus line ini di layout file:
```php
// <?=link_tag('assets/css/modern-theme.css');?>
```

## 📱 Kompatibilitas

### Browser Support
- ✅ Chrome 60+
- ✅ Firefox 60+
- ✅ Safari 12+
- ✅ Edge 79+

### Framework Compatibility
- ✅ Bootstrap 5.3.0
- ✅ Bootstrap Icons 1.11.0
- ✅ CodeIgniter 3.x
- ✅ AdminLTE (backward compatibility)

## 🛠️ Pengembangan Lanjutan

### Menambah Komponen Modern

Untuk membuat komponen modern baru:

1. **Gunakan CSS Variables**
```css
.my-component {
  background: var(--bg-primary);
  color: var(--text-primary);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-md);
}
```

2. **Gunakan Classes Modern**
```html
<div class="modern-card">
  <div class="modern-card-header">
    <h5 class="modern-card-title">Title</h5>
  </div>
  <div class="modern-card-body">
    Content
  </div>
</div>
```

3. **Implementasi Dark Mode**
```css
/* Otomatis support dark mode dengan CSS variables */
[data-theme="dark"] .my-component {
  /* Override untuk dark mode jika perlu */
}
```

### Utility Classes

Tema modern menyediakan utility classes untuk development cepat:

```html
<!-- Layout -->
<div class="d-flex justify-content-between align-items-center">
<div class="modern-grid modern-grid-cols-3">

<!-- Spacing -->
<div class="mb-4 mt-3 p-2">

<!-- Text -->
<p class="text-center text-muted">
```

## 📞 Support

Jika ada masalah atau pertanyaan:

1. **Backup** - Selalu backup file original sebelum menggunakan tema modern
2. **Testing** - Test semua functionality setelah implementasi
3. **Browser Console** - Check console untuk error JavaScript
4. **CSS Cache** - Clear browser cache jika styling tidak muncul

## 📄 Changelog

### Version 1.0.0
- Initial release tema modern
- Bootstrap 5 integration
- Dark mode support
- Responsive design
- Modern components (cards, tables, forms, etc.)
- Backward compatibility dengan tema lama

---

**Catatan**: Tema modern ini dirancang untuk tetap mempertahankan semua functionality existing CMS Sekolahku sambil memberikan tampilan yang lebih modern dan user-friendly.