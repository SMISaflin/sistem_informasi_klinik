<div class="row g-4">
    @forelse($dokters as $dokter)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                @if($dokter->gambar)
                    <img src="{{ asset($dokter->gambar) }}" class="card-img-top" alt="{{ $dokter->nama }}">
                @else
                    <img src="{{ asset('images/default-doctor.png') }}" class="card-img-top" alt="Default Dokter">
                @endif
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">{{ $dokter->nama }}</h5>
                    <p class="text-muted small">{{ $dokter->spesialis }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p class="text-muted">Belum ada data dokter.</p>
        </div>
    @endforelse
</div>
