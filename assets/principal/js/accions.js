document.getElementById('SI').addEventListener('click', function(e) {
    document.getElementById('matricula').disabled = false;
});
document.getElementById('NO').addEventListener('click', function(e) {
    document.getElementById('matricula').disabled = true;
    document.getElementById('matricula').value = '';
});