import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const alertMessage = document.getElementById('alert-message');

alertMessage.style.opacity = 1;

setTimeout(function() {
    
    alertMessage.style.opacity = 0;
},2000);