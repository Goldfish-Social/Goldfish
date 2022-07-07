var postId = 0;

$('.like').on('click', function(event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, postId: postId, _token: token}
    })
        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'LIKE' ? 'LIKED!' : 'LIKE' : event.target.innerText == 'HEART' ? 'HEARTED!' : 'HEART';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'HEART';
            } else {
                event.target.previousElementSibling.innerText = 'LIKE';
            }
        });
});

$('.action-follow').click(function() {
    let user_id = $(this).data('id');
    let object = $(this);

    $.ajax({
        type: 'POST',
        url: urlFollow,
        data: { user_id: user_id, _token: token },
        dataType: 'json',
        success: function(data) {
            console.log(data.success);
        },
    });
});