var span = document.getElementById('demo'),
    text = span.innerHTML.split(/(\W+)/)
        .map(function(currValue, i, array) {
        if (i == array.indexOf(currValue) || i % 2)
            return currValue;
        return '';
    }).join('');

span.innerHTML = text;