<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | Admin</title>

  @include('admin.backend.layouts.include')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('admin.backend.layouts.navbar')
      <div class="main-sidebar sidebar-style-2">
        @include('admin.backend.layouts.aside')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('top')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      @include('admin.backend.layouts.footer')
    </div>
  </div>

  @include('admin.backend.layouts.script')
</body>
</html>
