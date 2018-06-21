<header class="top-nav">
        <nav>
            <ul>
                <li {{Request::is('admin')? 'class=active' : '' }}><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li {{Request::is('admin/lecture*')? 'class=active' : '' }}><a href="{{ route('admin.system.index') }}">Lectures</a></li>
                <li {{Request::is('admin/course*') || Request::is('admin/system/courses*') ? 'class=active' : '' }}><a href="{{ route('admin.system.courses') }}">Courses</a></li>
                <li {{Request::is('admin/post*') || Request::is('admin/system/posts*') ? 'class=active' : '' }}><a href="{{ route('admin.system.posts') }}">Posts</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
            </ul>
        </nav>
</header>