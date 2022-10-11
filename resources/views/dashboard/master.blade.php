<!DOCTYPE html>
<html lang="en">
@include('dashboard.header')
<body>
	<div class="wrapper">
		<div class="main-header">
            @include('dashboard.logo_header')
		    @include('dashboard.navbar')
		</div>
		@include('dashboard.sidebar')
		<div class="main-panel">
			<div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
			</div>
			@include('dashboard.footer')
		</div>

    </div>
@include('dashboard.scripts')
</body>
</html>
