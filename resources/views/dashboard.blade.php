@extends('admin.layouts.master')


@section('admin')
<style>
  .dashboard-card {
    background: #fff;
    border-radius: 16px;
    padding: 15px;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
}

.dashboard-card:hover {
    transform: translateY(-6px);
}

/* Title */
.card-title {
    font-size: 13px;
    color: #888;
    margin-bottom: 5px;
}

/* Count */
.card-count {
    font-size: 24px;
    font-weight: 700;
}

/* Icon */
.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
}

/* Footer */
.card-footer {
    display: block;
    padding-top: 10px;
    font-size: 13px;
    text-decoration: none;
    font-weight: 500;
}
</style>

{{-- @dd('Dashboard View', auth()->user(), auth()->user()->factory_id, session('current_factory_id'), auth()->user()->canAccessFactory(session('current_factory_id'))); --}}
    <div class="content-header">
    <div class="container-fluid">

        <!-- 🔔 Developing Marquee Alert -->
        <div class="alert alert-warning py-2 px-3 mb-3" style="overflow: hidden;">
            <marquee behavior="scroll" direction="left" scrollamount="6" style="font-size: large;">
                🚧 System is under development... Some features may not work properly | 
                🚀 New updates coming soon | 
                ⚙️ Maintenance & improvements in progress
            </marquee>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

    </div>
</div>
   <section class="content">
<div class="container-fluid">

    <div class="row g-3">

        @php
            $cards = [
                ['title' => 'Total Machines', 'count' => 150, 'icon' => 'fa-cogs', 'color' => 'primary'],
                ['title' => 'Machine Inventory', 'count' => '53%', 'icon' => 'fa-chart-line', 'color' => 'success'],
                ['title' => 'Rent Machines', 'count' => 44, 'icon' => 'fa-hand-holding', 'color' => 'warning'],
                ['title' => 'Machines in Use', 'count' => 65, 'icon' => 'fa-industry', 'color' => 'danger'],
                ['title' => 'Service To Do', 'count' => 65, 'icon' => 'fa-tools', 'color' => 'info'],
                ['title' => 'Service Done', 'count' => 65, 'icon' => 'fa-check-circle', 'color' => 'success'],
                ['title' => 'Machine Uses', 'count' => 65, 'icon' => 'fa-sync', 'color' => 'primary'],
                ['title' => 'Breakdowns', 'count' => 65, 'icon' => 'fa-exclamation-triangle', 'color' => 'danger'],
                ['title' => 'MTTR', 'count' => 65, 'icon' => 'fa-clock', 'color' => 'info'],
                ['title' => 'MTBF', 'count' => 65, 'icon' => 'fa-chart-bar', 'color' => 'success'],
                ['title' => 'Idle Machines', 'count' => 65, 'icon' => 'fa-pause-circle', 'color' => 'warning'],
                ['title' => 'Overdue Services', 'count' => 65, 'icon' => 'fa-bell', 'color' => 'danger'],
            ];
        @endphp

        @foreach($cards as $card)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="dashboard-card shadow-sm">

                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <!-- Left -->
                        <div>
                            <div class="card-title">{{ $card['title'] }}</div>
                            <div class="card-count text-{{ $card['color'] }}">
                                {{ $card['count'] }}
                            </div>
                        </div>

                        <!-- Icon -->
                        <div class="card-icon bg-{{ $card['color'] }}">
                            <i class="fas {{ $card['icon'] }}"></i>
                        </div>

                    </div>
                </div>

                <a href="#" class="card-footer text-{{ $card['color'] }}">
                    View Details <i class="fas fa-arrow-right ms-1"></i>
                </a>

            </div>
        </div>
        @endforeach

    </div>

</div>
</section>
    <!-- /.content -->
@endsection