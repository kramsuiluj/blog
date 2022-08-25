<x-layout>
    <aritcle>
        <h1>
            {!! $post->title !!}
        </h1>

        <div>
            <p>
                {!! $post->body !!}
            </p>
        </div>

        <a href="/">Go Back</a>
    </aritcle>
</x-layout>
