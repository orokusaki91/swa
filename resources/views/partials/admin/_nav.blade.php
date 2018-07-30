<ul class="admin-navbar text-uppercase">
	<li>
		<a data-toggle="collapse" href="#collapse-navbar" role="button" aria-expanded="false" aria-controls="collapse-navbar">
			<i class="fas fa-file mr-2"></i>Pages<i class="fas fa-caret-down ml-1"></i>
		</a>
	</li>
	<ul class="collapse" id="collapse-navbar">
		@foreach($pages as $page)
		<li>
			<a href="{{ url('admin/pages/' . $page->slug) }}">{{ $page->name }}</a>
		</li>
		@endforeach
	</ul>
	<li>
		<a href="/">
			<i class="fas fa-cogs mr-2"></i>Settings
		</a>
	</li>
</ul>