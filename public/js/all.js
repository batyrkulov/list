function add() {
    let text = $('#text').val();
    if (text.length>0) {
        $.post('/add', '_token='+$('meta[name="csrf-token"]').attr('content')+'&text='+encodeURIComponent(text), function(data) {
            let js = $.parseJSON(data);
            $('#list').append('<li class="list-group-item"><a href="/'+js.id+'">'+text+'</a></li>');
        }, 'text');
    }
}

function find() {
    let sText =  $('#search').val();
    let searchTmp = $('#search-tmp');
    if (sText.length>0) {
        $.post('/find', '_token='+$('meta[name="csrf-token"]').attr('content')+'&stext='+encodeURIComponent(sText), function(data) {
            let records = $.parseJSON(data);
            if (records.data.length>0) {
                searchTmp.html('');
                records.data.forEach(el => {
                    searchTmp.append('<li class="list-group-item"><a href="/'+el.id+'">'+el.text.substr(0,20)+'...</a></li>');
                });
            } else {
                searchTmp.html('No results');
            }
        }, 'text');
    } else searchTmp.html('');
}
