@php
    use App\Models\Notification;

    // Ambil data notifikasi
    $notifications = Notification::where('user_id', auth()->id())
        ->with('user', 'discussion', 'answer', 'likedByUser')
        ->orderBy('created_at', 'desc')
        ->get();

    // Hitung jumlah notifikasi yang belum dibaca
    $unreadCount = $notifications->where('read', false)->count();
@endphp

<!-- NAVBAR -->
<nav class="navbar navbar-expand bg-white topbar static-top">
    <div class="container d-flex justify-content-between">
        <!-- Sidebar Toggle (Topbar) -->
        <button class="btn btn-link d-lg-none rounded-circle mr-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bars"></i>
        </button>
        <ul class="dropdown-menu">
            <li class="nav-item {{ request()->routeIs('discussions.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('discussions.index') }}">
                    <i class="fa-solid fa-comments {{ request()->routeIs('discussions.index') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">All Discussions</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('discussions.myDiscussions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('discussions.myDiscussions') }}">
                    <i class="fa-solid fa-comment {{ request()->routeIs('discussions.myDiscussions') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">My Discussions</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('discussions.myAnswers') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('discussions.myAnswers') }}">
                    <i class="fa-solid fa-comment-dots {{ request()->routeIs('discussions.myAnswers') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">My Answers</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('discussions.mySaves') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('discussions.mySaves') }}">
                    <i class="fa-solid fa-bookmark {{ request()->routeIs('discussions.mySaves') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">Bookmarks</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('discussions.tags') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('discussions.tags') }}">
                    <i class="fa-solid fa-tags {{ request()->routeIs('discussions.tags') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">Tags</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('profile.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile.index') }}">
                    <i class="fa-solid fa-user {{ request()->routeIs('profile.index') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">Profile</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('profile.settingShow') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile.settingShow') }}">
                    <i class="fa-solid fa-gear {{ request()->routeIs('profile.settingShow') ? 'text-blue' : 'text-muted' }}"></i>
                    <span style="margin-left: 10px;">Setting</span>
                </a>
            </li>
        </ul>        
        <!-- Sidebar - Brand - LG -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center d-lg-block" href="{{ route('home') }}">
            <div class="sidebar-brand-text mx-3">
                <img class="h-80px p-2 d-none d-md-block" src="{{ url('assets/img/logo.png') }}" alt="Logo Code Quorum">
            </div>
        </a>

        <!-- Sidebar - Brand - SM -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center d-md-none" href="{{ route('home') }}">
            <div class="sidebar-brand-text mx-3">
                <img class="h-60px p-2" src="{{ url('assets/img/logo_sm.png') }}" alt="Logo Code Quorum">
            </div>
        </a>

        <!-- Topbar Search -->
        <form action="{{ route('discussions.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                @if (request('tag'))
                    <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                @else
                    <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                @endif
                <div class="input-group-append">
                    <button class="btn btn-blue-main" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>                
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            @if (request('tag'))
                                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                            @else
                                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
                            @endif
                            <div class="input-group-append">
                                <button class="btn btn-blue-main" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>                
                        </div>
                    </form>
                </div>
            </li>

            <!-- Cek apakah pengguna sudah login -->
            @if (Auth::check())
                <!-- Tampilkan informasi pengguna dan notifikasi -->
                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">{{ $unreadCount }}</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in scrollable-dropdown"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header bg-blue-main">
                            Notification
                        </h6>
                        @foreach($notifications as $notification)
                            @if ($notification->discussion || $notification->answer)
                                @php
                                    $discussion = $notification->discussion ?? $notification->answer->discussion;
                                @endphp
                                <a class="dropdown-item d-flex align-items-center {{ $notification->read ? 'read' : '' }}" href="{{ route('discussions.show', $discussion->slug) }}" onclick="markNotificationAsRead('{{ $notification->id }}')">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle notification-image" src="{{ $notification->likedByUser && $notification->likedByUser->picture ? asset('storage/profiles/' . basename($notification->likedByUser->picture)) : url('assets/img/user.png') }}" alt="...">
                                        <div class="status-indicator {{ $notification->read ? 'bg-gray' : 'bg-primary' }}"></div>
                                    </div>
                                    <div class="font-weight-bold notification-content">
                                        <div class="text-truncate" style="font-size: 12px">{{ $notification->discussion ? $notification->discussion->title : $notification->answer->answer }}</div>
                                        <div class="small text-gray-900">{{ $notification->likedByUser->username }} {{ $notification->message }}</div>
                                        <div class="small text-gray-500" style="text-align: right">{{ $notification->created_at->diffForHumans() }}</div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="#">©CodeQuorum</a>
                    </div>
                </li>

                <div class="d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle"
                            src="{{ Auth::user()->picture ? asset('storage/profiles/' . basename(Auth::user()->picture)) : asset('assets/img/user.png') }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            @else
                <!-- Tampilkan tombol Login dan Register jika pengguna belum login -->
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('login') }}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-blue-main-color">Login</a>
                    <a href="{{ route('register') }}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-blue-main-color ms-1">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<script>
    function markNotificationAsRead(notificationId) {
        fetch(`/mark-notification-as-read/${notificationId}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelector(`[onclick="markNotificationAsRead('${notificationId}')"]`).classList.add('read');
            }
        });
    }
</script>

    