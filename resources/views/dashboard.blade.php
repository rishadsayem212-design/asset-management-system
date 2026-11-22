@extends('layouts.app')

@section('title', 'Overview Dashboard - Asset Management')

@section('content')
<div class="container-fluid">
    
    <!-- হেডার -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark mb-0">Overview Dashboard</h3>
            <p class="text-muted small">A concise overview of all the organization's assets and their status.</p>
        </div>
        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Add a new asset
        </a>
    </div>

    <!-- স্ট্যাটাস কার্ডস (Metrics) -->
    <div class="row g-4 mb-4">
        
        <!-- মোট অ্যাসেট -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small fw-semibold">Total Assets</span>
                        <h3 class="fw-bold text-dark mt-1 mb-0">0</h3>
                    </div>
                    <div class="bg-primary-subtle text-primary p-3 rounded-circle fs-4">
                        <i class="bi bi-boxes"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- ব্যবহৃত / অ্যাসাইনড অ্যাসেট -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small fw-semibold">Has been assigned</span>
                        <h3 class="fw-bold text-success mt-1 mb-0">0</h3>
                    </div>
                    <div class="bg-success-subtle text-success p-3 rounded-circle fs-4">
                        <i class="bi bi-person-check-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- ফাঁকা / Available অ্যাসেট -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small fw-semibold">Stock (Available)</span>
                        <h3 class="fw-bold text-info mt-1 mb-0">0</h3>
                    </div>
                    <div class="bg-info-subtle text-info p-3 rounded-circle fs-4">
                        <i class="bi bi-check2-circle"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- মেইনটেন্যান্স বা নষ্ট অ্যাসেট -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small fw-semibold">Under repair</span>
                        <h3 class="fw-bold text-warning mt-1 mb-0">0</h3>
                    </div>
                    <div class="bg-warning-subtle text-warning p-3 rounded-circle fs-4">
                        <i class="bi bi-tools"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- সাম্প্রতিক কার্যক্রম বক্স -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white py-3 border-0">
            <h5 class="fw-bold mb-0">Recently registered asset</h5>
        </div>
        <div class="card-body text-center py-5 text-muted">
            <i class="bi bi-folder-x fs-1 text-secondary mb-2 d-block"></i>
            <p class="mb-0">No assets have been added yet. We will add assets in the next step!</p>
        </div>
    </div>

</div>
@endsection