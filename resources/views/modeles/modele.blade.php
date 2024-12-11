@include('modeles.entete')


<body class="index-page">
  @include('modeles.menu')
  <main class="main">
    <!-- Content -->
    @yield('content')
  </main>

  @include('modeles.pied')
</body>

</html>