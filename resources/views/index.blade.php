<x-layout>
	<x-slot name="title">
		My BBS
	</x-slot>
	<h1>My BBS</h1>
	<ul>
		{{-- @foreach ($posts as $post)
			<li>{{ $post }}</li>
		@endforeach --}}
		
		@forelse ($posts as $post)
			<li>
				{{-- <a href="./posts/{{ $index }}"> --}}
				<a href="{{ route('posts.show', $post->id) }}">
					{{ $post->title }}
				</a>
			</li>
		@empty
			<li>No posts yet!</li>
		@endforelse
	</ul>
</x-layout>