<div class="comment">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="comment__wrapper">
                    <div class="comment-author d-flex align-items-center">
                        <div class="comment-author__image-wrapper">
                            <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/00/0032047ebe6bad7a6914fabddce8e054fa651fb8_full.jpg" alt="" class="comment-author__image w-100 h-100 object-fit-cover">
                        </div>
                        <div class="comment-author__data">
                            <div class="comment-author__name">{{ $comment->author->name }}</div>
                        </div>
                    </div>
                    <div class="comment-content">
                        <div class="comment-content__text">{{ $comment->content }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
