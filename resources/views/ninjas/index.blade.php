{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body> --}}
<x-layout title="Ninjas">
    <h2>Currently Available Ninjas</h2>
    
    @if($greeting == "Hello")
        <p>{{ $greeting }} from inside the if statement</p>
    @endif

    <ul>
    @foreach($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninjas.show', $ninja->id )}}" :highlight="$ninja['skill'] > 70">
                <div>
                    <h3>{{ $ninja->name }}</h3>
                    <p>{{ $ninja->dojo->name }}</p>
                </div>
            </x-card>
        </li>
    @endforeach
        
    </ul>

    {{ $ninjas->links() }}
</x-layout>
{{-- </body>
</html> --}}