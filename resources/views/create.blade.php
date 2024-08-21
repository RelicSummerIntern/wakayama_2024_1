<x-app-layout>
  @push('styles')
  <link rel="stylesheet" href="{{ asset('css/create.css') }}">
  @endpush

  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" required>
    </div>
    <!-- Add other article fields here -->
    <button type="submit">Submit</button>
  </form>

  <div class="post">
    <div class="frame-image frame-child10">
      <img
        class="vector-icon"
        loading="lazy"
        alt=""
        src="{{ asset('images/vector1.svg') }}" />
    </div>
    <div class="textarea">
      <input class="value" placeholder="コメント" type="text" />
    </div>
    <div class="flex category" id="categoryContainer">
      <div class="tag-wrapper">
        <img
          class="tag-icon"
          loading="lazy"
          alt=""
          src="{{ asset('images/tag.svg') }}" />
      </div>
      <div class="wrapper">
        <div class="div2">カテゴリを追加</div>
      </div>
      <div class="vector-wrapper">
        <img
          class="vector-icon1"
          loading="lazy"
          alt=""
          src="{{ asset('images/vector-1.svg') }}" />
      </div>
    </div>
    <div class="flex place">
      <div class="map">
        <img
          class="map-icon"
          loading="lazy"
          alt=""
          src="{{ asset('images/map.svg') }}" />
      </div>
      <div class="div3">場所を追加</div>
      <div class="add-icon-wrapper">
        <img
          class="add-icon"
          loading="lazy"
          alt=""
          src="{{ asset('images/vector-2.svg') }}" />
      </div>
    </div>
    <div class="toukou-container">
      <button class="flex toukou1" id="toukou">
        <div class="post-icon">
          <img
            class="add-icon"
            loading="lazy"
            alt=""
            src="{{ asset('images/vector-2.svg') }}" />
        </div>
        <div class="div4">投稿</div>
      </button>
    </div>
  </div>

  <head>
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
  </head>

  <body>
    <div id="categoryPopup" class="popup-overlay" style="display: none">
      <div class="category1">
        <div class="frame">
          <a class="a4">カテゴリの追加</a>
        </div>
        <div class="category-inner">
          <div class="frame-parent1">
            <div class="search-wrapper">
              <img
                class="search-icon"
                loading="lazy"
                alt=""
                src="{{ asset('images/search.svg') }}" />
            </div>
            <div class="search">
              <input class="value1" placeholder="Value" type="text" />

              <img class="x-icon" alt="" src="{{ asset('images/x.svg') }}" />
            </div>
          </div>
        </div>
        <main class="parent">
          <div class="div6">ジャンル</div>
          <section class="frame-section">
            <div class="frame-wrapper">
              <div class="people-checkboxes-parent">
                <input class="people-checkboxes" type="checkbox" />

                <input class="people-checkboxes1" type="checkbox" />

                <input class="people-checkboxes2" type="checkbox" />

                <div class="single-checkboxes-wrapper">
                  <div class="single-checkboxes">
                    <input class="checkbox" type="checkbox" />

                    <input class="checkbox1" type="checkbox" />
                  </div>
                </div>
                <div class="price-checkboxes-wrapper">
                  <div class="price-checkboxes">
                    <div class="price-options">
                      <div class="div7">人数</div>
                      <input class="people-count-checkbox" type="checkbox" />
                    </div>
                    <input class="checkbox2" type="checkbox" />
                  </div>
                </div>
                <div class="feature-checkboxes-parent">
                  <div class="feature-checkboxes">
                    <div class="div8">価格</div>
                    <input class="price-checkbox" type="checkbox" />
                  </div>
                  <input class="second-feature-checkbox" type="checkbox" />
                </div>
                <div class="third-feature-checkboxes-wrapper">
                  <div class="third-feature-checkboxes">
                    <div class="div9">特徴</div>
                    <input class="fourth-feature-checkbox" type="checkbox" />
                  </div>
                </div>
                <input class="people-checkboxes3" type="checkbox" />
              </div>
            </div>
            <div class="frame-parent2">
              <div class="cuisine-options-wrapper">
                <div class="cuisine-options">
                  <div class="div10">中華</div>
                  <div class="div11">和食</div>
                  <div class="div12">麺類</div>
                  <div class="div13">焼肉</div>
                  <div class="div14">その他</div>
                </div>
              </div>
              <div class="people-values">
                <div class="people-options-values">
                  <div class="div15">１人</div>
                  <div class="div16">２人</div>
                </div>
              </div>
              <div class="people-values1">
                <div class="group">
                  <div class="div17">0～1000円</div>
                  <div class="div18">1000～2000円</div>
                </div>
              </div>
              <div class="parent1">
                <div class="div19">店主</div>
                <div class="div20">料理の提供が早い</div>
              </div>
            </div>
            <div class="button-checkboxes-wrapper">
              <div class="button-checkboxes">
                <div class="four-checkboxes-wrapper">
                  <div class="four-checkboxes">
                    <input class="checkbox3" type="checkbox" />

                    <input class="checkbox4" type="checkbox" />

                    <input class="checkbox5" type="checkbox" />

                    <input class="checkbox6" type="checkbox" />
                  </div>
                </div>
                <div class="button-checkbox-options-wrapper">
                  <div class="button-checkbox-options">
                    <input class="checkbox7" type="checkbox" />

                    <input class="button-options-two" type="checkbox" />
                  </div>
                </div>
                <div class="button-checkboxes-inner">
                  <div class="checkbox-parent">
                    <input class="checkbox8" type="checkbox" />

                    <input class="frame-input" type="checkbox" />
                  </div>
                </div>
                <div class="single-checkbox-two">
                  <input class="checkbox9" type="checkbox" />

                  <input class="frame-input1" type="checkbox" />
                </div>
              </div>
            </div>
            <div class="frame-wrapper1">
              <div class="frame-parent3">
                <div class="frame-wrapper2">
                  <div class="parent2">
                    <div class="div21">カフェ</div>
                    <div class="time-options">
                      <div class="div22">モーニング</div>
                      <div class="div23">ランチ</div>
                      <div class="div24">ディナー</div>
                    </div>
                  </div>
                </div>
                <div class="people-count-two">
                  <div class="people-options-two">
                    <div class="div25">４人以下</div>
                    <div class="wrapper1">
                      <div class="div26">５人以上</div>
                    </div>
                  </div>
                </div>
                <div class="cafe-price-options-wrapper">
                  <div class="cafe-price-options">
                    <div class="div27">2000～3000円</div>
                    <div class="wrapper2">
                      <div class="div28">4000～円</div>
                    </div>
                  </div>
                </div>
                <div class="cafe-attributes">
                  <div class="div29">店員が優しい</div>
                  <div class="wrapper3">
                    <div class="div30">人が少なく静か</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </body>

  <script>
    var text3 = document.getElementById("text3");
    if (text3) {
      text3.addEventListener("click", function(e) {
        window.location.href = "./top1.html";
      });
    }

    var title = document.getElementById("title");
    if (title) {
      title.addEventListener("click", function(e) {
        window.location.href = "./top1.html";
      });
    }

    var categoryContainer = document.getElementById("categoryContainer");
    if (categoryContainer) {
      categoryContainer.addEventListener("click", function() {
        var popup = document.getElementById("categoryPopup");
        if (!popup) return;
        var popupStyle = popup.style;
        if (popupStyle) {
          popupStyle.display = "flex";
          popupStyle.zIndex = 100;
          popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
          popupStyle.alignItems = "center";
          popupStyle.justifyContent = "center";
        }
        popup.setAttribute("closable", "");

        var onClick =
          popup.onClick ||
          function(e) {
            if (e.target === popup && popup.hasAttribute("closable")) {
              popupStyle.display = "none";
            }
          };
        popup.addEventListener("click", onClick);
      });
    }

    var toukou = document.getElementById("toukou");
    if (toukou) {
      toukou.addEventListener("click", function(e) {
        // Please sync "proflie（たぶんいらない）" to the project
      });
    }
  </script>
</x-app-layout>