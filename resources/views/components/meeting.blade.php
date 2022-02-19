<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<style>
    #map {
        height: 250px;
        margin: 20px 0;
    }
</style>
<div class="meeting">
    <div class="container">
        <div class="meeting__wrapper">
            <div class="row py-2">
                <div class="col-5">
                    <img
                        height="250"
                        style="object-fit: cover"
                        src="https://picsum.photos/500/250?{{ $id }}"
                        class="meeting-image w-100 ms-2 rounded-3 mt-0">
                </div>
                <div class="col-7">
                    <div class="ps-3 h-100 d-flex flex-column justify-content-between">

                        <a class="text-black text-decoration-none"
                           href="{{ route('meeting.show', ['meeting' => $id]) }}">
                            <h2 class="meeting-content__title">{{ $title }}</h2>
                            <div class="meeting-content__text">{{ $description }}</div>
                        </a>

                        <div class="meeting-bar d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="meeting-author__image-wrapper">
                                    <img
                                        src="https://picsum.photos/200?avatar={{ $id }}"
                                        alt="" class="meeting-author__image w-100 h-100 object-fit-cover">
                                </div>
                                <div class="meeting-author__data">
                                    <div class="meeting-author__name">by Rosy Rose</div>
                                    <div class="meeting-author__date">16 Feb at 19:56</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="meeting-bar__icon d-flex align-items-center">
                                    <i class="fas fa-heart d-flex align-items-center"></i>
                                    3
                                </div>
                                <div class="meeting-bar__icon d-flex align-items-center">
                                    <i class="fas fa-comment d-flex align-items-center"></i>
                                    5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map"></div>
<script>
    const map = L.map('map').setView([{{$lat}} , {{$lng}}], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFuaWVsNTEyIiwiYSI6ImNrenU2dzdmODRzdDMyd25yODNxdDkwdjYifQ.Ov_YAbWRqdh7XKfJ6GbHNw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
</script>
