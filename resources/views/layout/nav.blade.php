<header class="main-header">
        <nav class="navbar header-nav navbar-expand-lg bg-white shadow-sm fixed-top">
            <div class="container">
                <!-- NAVBAR LOGO -->
                <a class="navbar-brand fw-bold fs-3" href="#">
                    <div class="format-logo">
                        <div class="logo-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="52" viewBox="0 0 95 92"
                                fill="none">
                                <path
                                    d="M95 46C95 71.4051 71.0685 92 45.7831 92C20.4978 92 0 71.4051 0 46C0 20.5949 20.4978 0 45.7831 0C71.0685 0 95 20.5949 95 46Z"
                                    fill="#756AB6" />
                                <path
                                    d="M46.7902 58.2271L46.7902 31.7715C46.7902 31.7715 53.0525 24.1016 62.098 22.6839C71.1435 21.2662 76.71 30.4844 76.71 30.4844C76.71 30.4844 79.6274 36.04 76.71 44.5146C73.7925 52.9892 46.7902 78 46.7902 78V58.2271Z"
                                    fill="#F8F9FF" />
                                <path
                                    d="M47.2098 58.2589L47.2098 31.8033C47.2098 31.8033 40.9475 24.1335 31.902 22.7157C22.8565 21.298 17.2901 30.5162 17.2901 30.5162C17.2901 30.5162 14.3727 36.0719 17.2901 44.5464C20.2075 53.021 47.2098 78.0319 47.2098 78.0319V58.2589Z"
                                    fill="#FDFDFF" />
                            </svg>
                        </div>
                        <div class="name-port">WI<span class="text-primary">DII</span></div>
                    </div>
                </a>

                <!-- RESPONSIVE BUTTON -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MANU NAVBAR -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home#home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home#about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home#skills') }}">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home#projects') }}">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

