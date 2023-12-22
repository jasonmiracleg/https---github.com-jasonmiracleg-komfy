{{-- <div x-data="{ show: false }" x-show="show" x-cloak>
    <div class="fixed inset-x-0 bottom-0 mb-4 px-4">
        <div x-show="type === 'success'" class="bg-green-500 text-white py-2 px-4 rounded">
            {{ $message }}
        </div>
        <div x-show="type === 'error'" class="bg-red-500 text-white py-2 px-4 rounded">
            {{ $message }}
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('showNotification', function() {
            setTimeout(function() {
                Livewire.emit('notify', '', 'success');
            }, 3000); // Auto-hide after 3 seconds
        });
    });
</script> --}}
