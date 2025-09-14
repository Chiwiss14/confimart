<x-app-layout>
    <div class="container py-5">

        {{-- 🔍 Filters/Search Bar --}}
        <form method="GET" action="{{ route('property.list') }}" class="mb-6">
            <div class="row g-3 align-items-end">
                <div class="col-md-4 p-4">
                    <label for="search" class="form-label">Search</label>
                    <input type="text" id="search" name="search" class="form-control"
                        placeholder="Search by location or title" value="{{ request('search') }}">
                </div>
                <div class="col-md-3 p-4">
                    <label for="type" class="form-label">Property Type</label>
                    <select id="type" name="type" class="form-select">
                        <option value="">All Types</option>
                        <option value="apartment" {{ request('type') == 'apartment' ? 'selected' : '' }}>Apartment
                        </option>
                        <option value="house" {{ request('type') == 'house' ? 'selected' : '' }}>House</option>
                        <option value="land" {{ request('type') == 'land' ? 'selected' : '' }}>Land</option>
                    </select>
                </div>
                <div class="col-md-3 p-4">
                    <label for="price" class="form-label">Max Price</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="e.g. 5000000"
                        value="{{ request('price') }}">
                </div>
                <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        {{-- 🏡 Property Grid --}}
        <div class="row g-4">
            @forelse($properties as $property)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ route('property.single', $property->id) }}">
                            <img src="{{ asset($property->image) }}" class="card-img-top" alt="{{ $property->title }}"
                                style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text text-muted">
                                <i class="bi bi-geo-alt"></i> {{ $property->address }}, {{ $property->country }}
                            </p>
                            <h6 class="text-success fw-bold">₦{{ number_format($property->price, 2) }}</h6>
                            <ul class="list-inline small mt-2">
                                <li class="list-inline-item">{{ $property->type }}</li>
                                @if ($property->bedrooms)
                                    <li class="list-inline-item">{{ $property->bedrooms }} Beds</li>
                                @endif
                                @if ($property->bathrooms)
                                    <li class="list-inline-item">{{ $property->bathrooms }} Baths</li>
                                @endif
                            </ul>
                            <a href="{{ route('property.single', $property->id) }}"
                                class="btn btn-outline-primary btn-sm mt-3">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No properties found.</p>
            @endforelse
        </div>

        {{-- 📄 Pagination --}}
        <div class="mt-4">
            {{ $properties->links() }}
        </div>
    </div>
</x-app-layout>
