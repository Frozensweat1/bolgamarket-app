{{-- Flash message outlet for future admin actions. --}}
@if (session('status'))
    <x-ui.alert type="success" class="mb-6">{{ session('status') }}</x-ui.alert>
@endif
