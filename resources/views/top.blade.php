<!DOCTYPE html>

<html lang="en">
<head>
@push('styles')
        <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Yomogi:wght@400&display=swap"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
        />
    @endpush
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Click Event</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>
    
</head>
<body>
  

    <div class="top">
        <header class="title">
            <div class="title-child"></div>
            <a class="a">和歌山うちわ飯</a>
        </header>
        <section class="location">
 
            <div id="map" style="height: 500px;
            width: 100%;"></div>
            <div id="location-info"></div>
            <div class="googlemap-parent">
                

                <img
                    class="kensaku-icon"
                    loading="lazy"
                    alt=""
                    src="{{ asset('images/kensaku.svg') }}"
                    id="kensaku"
                />
            </div>
        </section>
        <section class="content">
            <div class="toukou" id="toukouContainer">
                <div class="toukou-child"></div>
                <div class="toukou-wrapper">
                    <img class="toukou-icon" alt="" src="{{ asset('images/toukou.svg') }}" />
                </div>
                <div class="div">投稿</div>
            </div>
        </section>
        <section class="content1">
            <div class="mypage" id="mypageContainer">
                <div class="profile-picture"></div>
                <img
                    class="profile-icon"
                    loading="lazy"
                    alt=""
                    src="{{ asset('images/vector.svg') }}" />
                <div class="my-page-label">
                    <div class="div1">マイページ</div>
                </div>
            </div>
        </section>
    </div>

   <script>
        document.addEventListener('DOMContentLoaded', function () {
                var googlemapImage = document.getElementById("googlemapImage");
                if (googlemapImage) {
                    googlemapImage.addEventListener("click", function (e) {
                        window.location.href = "{{ url('list') }}";
                    });
                }
                
                var kensaku = document.getElementById("kensaku");
                if (kensaku) {
                    kensaku.addEventListener("click", function (e) {
                        // Please sync "searchcategory" to the project
                    });
                }
                
                var toukouContainer = document.getElementById("toukouContainer");
                if (toukouContainer) {
                    toukouContainer.addEventListener("click", function (e) {
                        window.location.href = "{{ url('post') }}";
                    });
                }
                
                var mypageContainer = document.getElementById("mypageContainer");
                if (mypageContainer) {
                    mypageContainer.addEventListener("click", function (e) {
                        // Please sync "proflie（たぶんいらない）" to the project
                    });
                }
            });
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 35.6804, lng: 139.7690 }, // 東京を中心に設定
                zoom: 12,
            });

            map.addListener("click", (event) => {
                getAddress(event.latLng);
            });
        }

        function getAddress(latLng) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: latLng }, (results, status) => {
                if (status === "OK" && results[0]) {
                    const cityInfo = results[0].address_components.find(component => component.types.includes("locality"));
                    const municipality = cityInfo ? cityInfo.long_name : "市町村情報が見つかりませんでした。";
                    document.getElementById("location-info").innerText = "市町村: " + municipality;
                } else {
                    document.getElementById("location-info").innerText = "位置情報の取得に失敗しました。";
                }
            });
        }
    </script>
 
</body>

</html>
