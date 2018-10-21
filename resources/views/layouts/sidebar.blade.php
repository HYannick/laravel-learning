<aside>
    <div class="about">
        <h3>About me</h3>
        <div class="avatar">
            <img src="/images/44a8eef73f26d6b57c1be5fc06f13dc9.jpg" />
            <p><b>Ayhoni</b></p>
        </div>
        <p class="desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
    <h3>Archives</h3>
    <ul class="archives">
        @foreach ($archives as $archive)
            <li><a href="/?month={{$archive['month']}}&year={{$archive['year']}}">{{$archive['month'] .' '. $archive['year']}}</a> </li>
        @endforeach
    </ul>

    <h3>Tags</h3>
    <ul class="archives">
        @foreach ($tags as $tag)
            <li><a href="/posts/tags/{{$tag}}">{{$tag}}</a></li>
        @endforeach
    </ul>
</aside>