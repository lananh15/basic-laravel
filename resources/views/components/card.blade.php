@props(['highlight' => false])

{{-- 
    @class([
        'ten-class' => điều_kiện,
        'class-luôn-có',
    ])
--}}

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View Details</a>
</div>