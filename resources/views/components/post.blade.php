@props(['post' => $post])

<!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
<div class="mb-4">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

    <p class="mb-2">{{ $post->body }}</p>

    {{-- Delete Button --}}
    
    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE') 
            <button type="submit" class="text-red-500">Delete</button>
        </form>
    @endcan
    

    <div class="flex items-center">
        {{-- Show the Posts --}}
        @auth
            @if(!$post->likedBy(auth()->user()))
            {{-- Like Button --}}
            <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
                @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
            @else
            {{-- Unlike Button --}}
            <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
                @csrf
                @method('DELETE')   
                <button type="submit" class="text-blue-500">Unlike</button>
            </form>
            @endif
        @endauth
        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>

</div>

