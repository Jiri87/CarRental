
document.getElementById('telefon').addEventListener('input', function(e) {
    if (!this.value.startsWith('+420')) {
        this.value = '+420' + this.value.replace(/^\+?[0-9]*/, '');
    }
});
