<x-layout>
    <aritcle>
        <h1>
            {!! $post->title !!}
        </h1>

        <p>
            By <a href="#">Mark Julius</a> in <a href="/categories/{{ $post->category->slug }}">{{
            $post->category->name }}</a>
        </p>

        <div>
            <p>
                {!! $post->body !!}
            </p>
        </div>

        <a href="/">Go Back</a>
    </aritcle>
</x-layout>

