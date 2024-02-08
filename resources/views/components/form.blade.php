@props([
    'message',
    'action',
    'method'
])

<div class="col-md-6">
    <h1 class="text-3xl mb-10">{{ $message }}</h1>
    <form
        method="{{ $method }}"
        action="{{ $action }}"
        class="w-full"  >
        @csrf
        {{ $slot }}
    </form>
</div>
