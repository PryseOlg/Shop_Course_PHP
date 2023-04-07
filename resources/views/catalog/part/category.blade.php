<div class="col-md-4 mb-4">
    <div class="card list-item">
        <div class="card-header">
            <h3 class="mb-0">{{ $category->name }}</h3>
        </div>
        <div class="card-body p-0">
            @if ($category->image)
                @php $url = url('storage/catalog/category/thumb/' . $category->image) @endphp
                <img src="{{ $url }}" class="img-fluid" alt="">
            @else
                <img src="https://via.placeholder.com/300x150" class="img-fluid" alt="">
            @endif
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="{{ route('catalog.category', [$category->slug]) }}"
               class="btn btn-outline-secondary w-100">Товары раздела</a>
        </div>
    </div>
</div>
