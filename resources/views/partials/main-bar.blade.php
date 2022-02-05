<div class="main-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-start align-items-start flex-shrink-1">
                <div class="main-bar__image-wrapper mt-2">
                    <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/00/0032047ebe6bad7a6914fabddce8e054fa651fb8_full.jpg" alt="" class="meeting-author__image w-100 h-100 object-fit-cover">
                </div>
                <form class="main-bar__form w-100" action="/meeting" method="post">
                    
                    @csrf

                    <div class="main-bar__input-wrapper ms-3 d-flex flex-column align-items-start justify-content-center">
                        <label class="mb-2" for="name">Tytuł wydarzenia</label>
                        <input class="main-bar__input flex-grow-1 w-100" name="title"  placeholder="Time to meet">
                    </div>
                    <div class="main-bar__other">
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Opis</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="description">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Krótki opis</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="short_description">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">URL Obrazu</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="image_url">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Data startu</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="start_date">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Koniec</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="end_date">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Opis lokacji</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="location_description">
                        </div>
                    
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Lat</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="lat">
                        </div>
                        <div class="main-bar__input-wrapper ms-3 pt-3 d-flex flex-column align-items-start justify-content-center">
                            <label class="mb-2" for="name">Lng</label>
                            <input class="main-bar__input flex-grow-1 w-100" name="lng">
                        </div>
                    
                        <input class="button ms-3 mt-3 text-white text-decoration-none" style="border-radius:8px;border:none;" type="submit">
                        <div class="main-bar__hidden button ms-3 mt-3 text-white text-decoration-none" style="border-radius:8px;cursor:pointer;">Hide</div>
                    </div>
                    <div class="d-none">
                        {{ $errors }}
                    </div>
                </form>
            </div>
            <script>
                
                let mainBarOther = document.querySelector('.main-bar__other');
                let mainBarForm = document.querySelector('.main-bar__form');
                let mainBarHideButton = document.querySelector('.main-bar__hidden');

                mainBarOther.setAttribute('data-height', mainBarOther.offsetHeight);
                mainBarOther.classList.add('main-bar__other--hidden');

                mainBarForm.addEventListener('click', _ => {
                    if(mainBarOther.offsetHeight == 0) {
                        mainBarOther.style.maxHeight = `${mainBarOther.getAttribute('data-height')}px`;
                        mainBarOther.classList.remove('main-bar__other--hidden');
                    }
                    
                });

                mainBarHideButton.addEventListener('click', _ => {
                    mainBarOther.style.maxHeight = 0;
                    mainBarOther.classList.add('main-bar__other--hidden');
                });


            </script>
            <div class="col-12">
                <div class="main-bar__category-wrapper d-flex justify-content-start align-items-center">
                    <div class="main-bar__single-category">Love</div>
                    <div class="main-bar__single-category">Travel</div>
                    <div class="main-bar__single-category">Food</div>
                    <div class="main-bar__single-category">Arts</div>
                    <div class="main-bar__filter"><i class="fas fa-filter"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>