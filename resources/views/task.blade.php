<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
			@foreach($articles as $article)
                <li class="first">
                    <h3>{{$article->title}}</h3>
<h4>{{$article->body}}</h4>
@endforeach
				</div>
                </div>
                <p>	
			</p>
		</div>