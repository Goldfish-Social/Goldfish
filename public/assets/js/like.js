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