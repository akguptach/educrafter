
<x-layout.header title="{{@$title}}" seo_description="{{@$seo_description}}" />
<main class="flex-shrink-0" style="margin-top: 60px;background: #e7eefd;">
    @yield('content')
</main>
<x-layout.footer />
<x-layout.login />
<x-layout.forget-password />
<x-layout.signup />
<x-layout.feedback />