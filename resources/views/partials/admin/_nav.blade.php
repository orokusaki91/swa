<ul class="admin-navbar text-uppercase">
	<li>
		<i class="fas fa-file mr-2"></i>
		<a data-toggle="collapse" href="#collapse-navbar" role="button" aria-expanded="false" aria-controls="collapse-navbar">Pages<i class="fas fa-caret-down ml-1"></i></a>
	</li>
	<ul class="collapse" id="collapse-navbar">
		@foreach($pages as $page)
		<li>
			<a href="{{ url('admin/pages/' . $page->slug) }}">{{ $page->name }}</a>
		</li>
		@endforeach
	</ul>
	<li>
		<i class="fas fa-cogs mr-2"></i>
		<a href="/">
			Settings
		</a>
	</li>
</ul>