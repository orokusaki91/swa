<ul class="admin-navbar text-uppercase">
	<li class="pages" data-toggle="collapse" href="#collapse-navbar" role="button" aria-expanded="false" aria-controls="collapse-navbar">
		<i class="fas fa-file mr-2"></i>
		<a>Pages</a>
	</li>
	<ul class="collapse" id="collapse-navbar">
		@foreach($pages as $page)
		<li>
			<a href="{{ url('admin/pages/' . $page->slug) }}">{{ $page->name }}</a>
		</li>
		@endforeach
	</ul>
	<li class="pages" data-toggle="collapse" href="#collapse-navbar-settings" role="button" aria-expanded="false" aria-controls="collapse-navbar-settings">
		<i class="fas fa-cogs mr-2"></i>
		<a>Einstellungen</a>
	</li>
	<ul class="collapse" id="collapse-navbar-settings">
		<li>
			<a href="{{ url('admin/informationen') }}">Informationen</a>
		</li>
		<li>
			<a href="{{ url('admin/soziales-netzwerk') }}">Soziales Netzwerk</a>
		</li>
	</ul>
</ul>