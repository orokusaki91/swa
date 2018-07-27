<ul>
	@foreach($pages as $page)
		<li>
			<a href="{{ url('admin/pages/' . $page->slug) }}">{{ $page->name }}</a>
		</li>
	@endforeach
</ul>
