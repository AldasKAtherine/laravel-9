import './bootstrap';

import Alpine from 'alpinejs';
import '../css/app.css';
import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);
window.Alpine = Alpine;

Alpine.start();
