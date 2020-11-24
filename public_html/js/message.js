
function stringToarray(str) {//Функция преобразования текста в массив

    return str.trim().split(" ");

}

function MessageHandler(arr, str) {//Функция обработки текста
    var ks = [];
    for (var value of arr) {
        ks[value] = (ks[value] || 0) + 1;
    }

    for (var i in arr) {
        if (ks[arr[i]] > 1) {//Если есть повторяющиеся элементы 
            var str = str.split(arr[i]);
            str = str.join("<b>" + arr[i] + "</b > ");//Выделения повторяющихся значений жирным
            ks[arr[i]] = 0;
        }
    }
    return str;
}

function openMessage(id, mesanger) { //Функция отвечающая за отображения текста
    var display = document.getElementById(id).style.display;
    // объявления переменных с значением ссылка на объекты 
    var Message = document.getElementById(mesanger);
    var block = document.getElementById(id);
    var post = document.getElementById('past');
    //
    if (display == 'none') {
        var text = Message.value;//Извлечения данных из элемента area
        var arr = stringToarray(text);//Преобразования данных в массив
        var string = MessageHandler(arr, text);//Обработка данных
        post.value = 'Закрыть';//изменения названия кнопки
        block.style.display = 'block';//изменения состояния значения контейнера
        block.innerHTML = string;//Запись в элемент

    } else {
        block.style.display = 'none';
        post.value = 'Добавить';
    }
}

