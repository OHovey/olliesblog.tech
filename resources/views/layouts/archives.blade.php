<h6>Archives</h6>

    <ul class="list-group">

        @foreach ($archives as $archive)

            <li class="list-group-item"><a href="?month={{ $archive['month'] }}&year={{ $archive['year'] }}">{{ $archive['month'] }} {{ $archive['year'] }}</a></li>

        @endforeach

    </ul>