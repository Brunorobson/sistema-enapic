import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import mask from '@alpinejs/mask';
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.plugin(mask);

Alpine.start();
