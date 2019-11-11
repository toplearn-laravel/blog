<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    {{-- @if(true)
  {{ 'true' }}
    @elseif()
    {{ 'false' }}
    @else
    {{ 'else' }}
    @endif --}}
    {{-- ----------------- --}}
    {{-- @unless(false)
  {{ 'false' }}
    @endunless --}}

    {{-- ---------------- --}}

    {{-- @for ($i=0; $i < 10; $i++)
  {{ $i }}
    @endfor --}}
    {{-- -------------- --}}
    {{--
@foreach ($users as $user)
{{ $user }}
    @endforeach --}}

    {{-- --------- --}}
    {{-- @forelse ($users as $user)
  {{ $user }}
    @empty
    {{ 'no user' }}
    @endforelse --}}

    {{-- ---------- --}}

    {{-- @while (true)
{{ 'hi' }}
    @endwhile --}}

    {{-- ---------- --}}

    {{-- @foreach ($users as $user)
    @if($loop->first)
        this is the first iteration.
        @endif
        @if($loop->last)
            this is the last iteration.
            @endif
            <p>
                this is user {{ $loop->iteration }}
    </p>
    @endforeach --}}

    {{-- -------- --}}

    {{-- @php
    echo "hi";
    @endphp --}}
</body>

</html>
