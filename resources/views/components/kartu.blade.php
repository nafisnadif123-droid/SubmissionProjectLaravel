<div class="kartu" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 5px;">
    @isset($judul)
        <h3>{{ $judul }}</h3>
    @endisset
    {{ $slot }}
</div>