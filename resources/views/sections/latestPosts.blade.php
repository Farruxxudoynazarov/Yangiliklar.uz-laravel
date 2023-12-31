<section class="news">
    <div class="container">
      <div class="news__wrapper basic-flex">
        <div class="column-news">
          <h2 class="news__title">Последние новости</h2>
          <ul class="news__list basic-flex">

            @foreach ($latestPosts as $latestPost)
                
            <li class="news__item">
              <a href="#" class="basic-flex news__link">
                {{-- @dd($latestPost) --}}
                <div class="news-image-wrapper"><img src="/site/image/posts/{{ $latestPost->image }}" alt="fds"></div>
                <div class="news-box basic-flex">
                  <h4 class="news__title">{!! $latestPost['title_'.\App::getLocale()] !!}</h4>
                  <p class="news__description">
                    {!! \Str::limit($latestPost['body_'.\App::getLocale()]) !!}
                  </p>
                  <span class="news__date basic-flex">{{ $latestPost->created_at }}</span>
                </div>
              </a>
            </li>

            @endforeach
          </ul>
          <button type="button" class="btn load-more-btn">Больше новостей</button>
        </div>


      @include('sections.popularPosts')
      </div>
    </div> 
</section>


  <div class="apps-block container basic-flex">
    <div class="apps-block__image"></div>
    <div class="apps-block__content">
      <h4>Всегда будьте в курсе последних новостей!</h4>
      <p>Установите мобильное приложение NAMANGANLIKLAR24 и все новости в вашем кармане!</p>
    </div>
    <div class="apps-block__links basic-flex">
      <div class="links__item">
        <a href="#"><img src="img/googleplay.png" alt="googleplay"></a>
      </div>
      <div class="links__item">
        <a href="#"><img src="img/appstore.png" alt="googleplay"></a>
      </div>
    </div>
  </div>