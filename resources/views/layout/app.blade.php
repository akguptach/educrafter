
<x-layout.header title="{{@$title}}" seo_description="{{@$seo_description}}" />

    @yield('content')

<x-layout.footer />
<x-layout.login />
<x-layout.forget-password />
<x-layout.signup />
<x-layout.feedback />