# Changes to CSS
Mainly Bootstrap4 with adjustments in ```web\assets\css\site.css```.
- back copy site.css
- replace with minimal

Plus correction to alert messages on forms where text is too small
```css
/* Invalid feedback fix */

.invalid-feedback {
    font-size: 100% !important;
}

small, .text-muted {
    font-size: 100% !important;
    color: #0f0f0f !important;
}
```
