
function openbox(id) {
    var display = document.getElementById(id).style.display;

    if (display == 'none') {
        document.getElementById(id).style.display = 'block';
        document.getElementById('past').value = 'Закрыть';
    } else {
        document.getElementById(id).style.display = 'none';
        document.getElementById('past').value = 'Добавить';
    }
}
