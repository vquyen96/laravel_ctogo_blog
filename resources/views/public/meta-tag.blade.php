<title>@yield('title')</title>
<meta name = "description" content = "@yield('description')" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="{{env('FACEBOOK_APP_ID')}}" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="{{trim(URL::current())}}" />
<meta property="og:image" content="@yield('image')" />