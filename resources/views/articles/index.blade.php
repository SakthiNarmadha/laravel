@extends ('layout')

@section ('content')
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class=""><a href="#" accesskey="1" title="">Homepage</a></li>
				<li class=""><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class=""><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class=""><a href="/articles" accesskey="4" title="">Articles</a></li>
				<li class=""><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
        @foreach($articles as $article)
					<h3>
					<a href="/articles/{{$article->id}}">{{$article->title}}
					</h3>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p><a href="#">{{$article->excerpt}}</a></p>
                    @endforeach
				</div>
                </div>
                </div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
                @endsection('content')
                    