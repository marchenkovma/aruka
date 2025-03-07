import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Add local fonts
import.meta.glob([
    '../fonts/**',
]);
