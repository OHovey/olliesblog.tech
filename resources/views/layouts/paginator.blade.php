    <nav>

        <ul class="pagination">

            @if ($requests != '')

                @if ($page_no == 1 && $page_count >= 3)

                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 2 }}" class="page-link">{{ $page_no + 2 }}</a></li>

                @elseif ($page_count == 1 && $page_count == 2)

                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>

                @elseif ($page_no == 2)

                <li class="page-item"><a href="?page={{ $page_no - 1 }}" class="page-link">{{ $page_no - 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 2 }}" class="page-link">{{ $page_no + 2 }}</a></li>

                @elseif ($page_no == $page_count - 1 && $page_no > 2)

                <li class="page-item"><a href="?page={{ $page_no - 2 }}" class="page-link">{{ $page_no - 2 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no - 1 }}" class="page-link">{{ $page_no - 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>

                @elseif ($page_no == $page_count && $page_no > 2)

                <li class="page-item"><a href="?page={{ $page_no - 2 }}" class="page-link">{{ $page_no - 2 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no - 1 }}" class="page-link">{{ $page_no - 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>

                @else 

                <li class="page-item"><a href="?page={{ $page_no - 2 }}" class="page-link">{{ $page_no - 2 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no - 1 }}" class="page-link">{{ $page_no - 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no }}" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 2 }}" class="page-link">{{ $page_no + 2 }}</a></li>

                @endif


            @else 

                @if ($blog_num < 20)

                @else

                <li class="page-item"><a style="color: black;" href="" class="page-link">{{ $page_no }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 1 }}" class="page-link">{{ $page_no + 1 }}</a></li>
                <li class="page-item"><a href="?page={{ $page_no + 2 }}" class="page-link">{{ $page_no + 2 }}</a></li>

                @endif
            @endif

        </ul>

    </nav>

