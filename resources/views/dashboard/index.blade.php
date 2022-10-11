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
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Directcore Admin Dashboard</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<!-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a> -->
								<a href="/" class="btn btn-secondary btn-round">Visit Directcore Website</a>
							</div>
						</div>
					</div>
                </div>
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
