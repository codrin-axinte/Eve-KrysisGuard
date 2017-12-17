<app-sidebar right sticky>
    <div class="nk-gap-4"></div>
    <app-widget title="Recent Posts">
        @foreach($recent_posts as $recent_post)
            <div class="nk-widget-post">
                <a href="{{ $recent_post->path }}"
                   class="nk-image-box-1 nk-post-image">
                    <img src="{{ $recent_post->image }}" alt="{{ $recent_post->title }}">
                </a>
                <h3 class="nk-post-title"><a href="{{ $recent_post->path }}">{{ $recent_post->title }}</a></h3>
                <div class="nk-post-meta-date">{{ $recent_post->date }}</div>
            </div>
        @endforeach
    </app-widget>
    <app-widget title="Categories">
        <ul class="nk-widget-categories">
            @foreach($categories as $category)
                <li><a href="{{ $category->path }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </app-widget>
    <div class="nk-gap-4"></div>
</app-sidebar>