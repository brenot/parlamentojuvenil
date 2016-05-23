<!DOCTYPE html>
<html lang="{!! $html_lang or 'en' !!}"> <!--<![endif]-->
	<head>
		<meta charset="{!! $html_charset or 'utf-8' !!}" />

        @if (isset($html_title))
            <title>{{ $html_title }}</title>
        @endif

		<meta name="keywords" content="{!! $html_keywords or '' !!}" />
		<meta name="description" content="{!! $html_description or '' !!}" />
		<meta name="Author" content="{!! $html_author or '' !!}" />

		@if (isset($html_meta_tags))
		    @foreach ($html_meta_tags as $meta)
		        {!! $meta !!}
		    @endforeach
		@endif

        @if (isset($html_viewport))
		    <!-- mobile settings -->
		    <meta name="viewport" content="{!! $html_viewport !!}" />
		@endif

		@yield('html.head')
	</head>

	<body>

		@yield('html.body')

		@yield('html.footer')

	</body>
</html>
