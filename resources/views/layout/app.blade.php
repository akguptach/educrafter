<x-layout.header title="{{@$title}}" meta_description="{{@$meta_description}}" />
<main class="flex-shrink-0">
    @yield('content')
</main>
<x-layout.footer />
<x-layout.login />
<x-layout.forget-password />
<x-layout.signup />
<x-layout.feedback />