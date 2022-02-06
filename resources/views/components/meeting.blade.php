<div class="meeting">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="meeting__wrapper">
                    <div class="meeting-author d-flex align-items-center">
                        <div class="meeting-author__image-wrapper">
                            <img
                                src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/00/0032047ebe6bad7a6914fabddce8e054fa651fb8_full.jpg"
                                alt="" class="meeting-author__image w-100 h-100 object-fit-cover">
                        </div>
                        <div class="meeting-author__data">
                            <div class="meeting-author__name">Rosy Rose</div>
                            <div class="meeting-author__date">16 Feb at 19:56</div>
                        </div>
                    </div>
                        <div class="meeting-content">
                            <h2 class="meeting-content__title">{{ $title }}</h2>
                            <div class="meeting-content__text">{{ $short_description }}</div>
                        </div>
                    <img
                        src="https://image.shutterstock.com/image-photo/deskdecorative-table-lamp-loft-style-600w-1920224057.jpg"
                        class="meeting-image w-100">
                    <div class="meeting-bar d-flex align-items-center justify-content-end">
                        <div class="meeting-bar__icon d-flex align-items-center">
                            <i class="fas fa-heart d-flex align-items-center"></i>
                            3
                        </div>
                        <div class="meeting-bar__icon d-flex align-items-center">
                            <i class="fas fa-comment d-flex align-items-center"></i>
                            5
                        </div>
                    </div>
                    <section class="p-4">
                        <h3>O wydarzeniu</h3>
                        <div>
                            {{ $description }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
