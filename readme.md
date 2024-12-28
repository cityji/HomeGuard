To use these enhanced animations in your HTML, here are some examples:

### For magnetic effect:

```html
<button class="magnetic">Hover me</button>
```

### For parallax scrolling:

```html
<div data-parallax="0.2">
    This content will scroll at a different speed
</div>
```

### For text reveal:

```html
<p class="text-reveal">
    This text will animate in when scrolled into view
</p>
```

### For interactive background:

```html
<div class="interactive-bg">
    Your content here
</div>
```

### Using Tailwind animations:

```html
<div class="animate-float">Floating element</div>
<div class="animate-bounce-subtle">Subtle bouncing</div>
<div class="animate-scale-up">Scales up on appear</div>
<div class="animate-rotate-in">Rotates in</div>
<div class="animate-blur-in">Blurs in</div>
<div class="animate-swing">Swinging element</div>
<div class="animate-shake">Shakes on hover</div>
<div class="animate-pulse-ring">Pulsing ring effect</div>
```

### To implement these in your pages:

```php
<?php
define('SECURE_ACCESS', true);
require_once 'path/to/anchor.php';

loadHeaderDependencies();
?>
<body>
    <!-- Your content here -->
    
    <?php initInteractiveEffects(); ?>
</body>
</html>
```

### For magnetic elements:

```html
<div class="magnetic-container">
    <button class="magnetic">Hover me</button>
    <button class="magnetic">Hover me too</button>
</div>
```
### To use these new animations:

1. For magnetic elements:

```html
<div class="magnetic-target" data-magnetic-strength="0.3">Content</div>
```

2. For scroll reveal:

```html
<div class="scroll-reveal" data-delay="200">Content</div>
```

3. For parallax:

```html
<div data-parallax="0.5">Content</div>
```
