<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    @endpush
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Click Event</title> -->

    <x-slot name="header"></x-slot>

    <div class="top">
        <section class="location">
            <div id="map" style="height: 500px; width: 100%;"></div>
            <div id="location-info"></div>
            <div class="googlemap-parent">
                <img class="kensaku-icon" loading="lazy" alt="" src="{{ asset('images/kensaku.svg') }}" id="kensaku" />
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
                <img class="profile-icon" loading="lazy" alt="" src="{{ asset('images/vector.svg') }}" />
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
                    window.location.href = '{{ route("articles.create") }}';
                });
            }

            var mypageContainer = document.getElementById("mypageContainer");
            if (mypageContainer) {
                mypageContainer.addEventListener("click", function (e) {
                    // Please sync "profile（たぶんいらない）" to the project
                });
            }
        });

    </script>
    <script src="{{ asset('/js/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRXSG9YD09Kr9zE8j67ukkgNzpSMW7KKU&callback=initMap" async
        defer></script>
</x-app-layout>
