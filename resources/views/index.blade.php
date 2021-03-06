<x-layout>
	<x-slot name="title">
		My BBS
	</x-slot>
	<h1>
		My BBS
		<a href="{{ route('posts.create') }}">[Add]</a>
	</h1>
	<ul>
		{{-- @foreach ($posts as $post)
			<li>{{ $post }}</li>
		@endforeach --}}
		
		@forelse ($posts as $post)
			<li>
				{{-- <a href="./posts/{{ $index }}"> --}}
				<a href="{{ route('posts.show', $post) }}">
					{{ $post->title }}
				</a>
			</li>
		@empty
			<li>No posts yet!</li>
		@endforelse
	</ul>
</x-layout>