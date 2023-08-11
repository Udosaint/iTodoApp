import './bootstrap';


import "flatpickr/dist/flatpickr.min.css";

import flatpickr from "flatpickr";

import Alpine from 'alpinejs';

window.Alpine = Alpine
Alpine.start()


// Init flatpickr
flatpickr(".datepicker", {
    //mode: "range",
    //static: true,
    //monthSelectorType: "static",
    //dateFormat: "M j, Y",
    //defaultDate: "Y-m-d",
    defaultDate: [new Date()],
    prevArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',

});


// Init flatpickr
flatpickr(".datetimepicker", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    prevArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
        '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',

});

// Document Loaded
document.addEventListener("DOMContentLoaded", () => {

});

