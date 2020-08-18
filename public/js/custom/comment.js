function commentfunction(id){
    $('#comment'+id).css('display','unset');
    $('.open'+id).css('display', 'none');
    $('.close'+id).css('display', 'unset');

    // $('#open'+id).css('display','unset');


}


function commentClose(id){
    $('#comment'+id).css('display','none');
    $('.open'+id).css('display', 'unset');
    $('.close'+id).css('display', 'none');


}
