@extends('layouts.main')

@section('title')
    Review Management | Pursell Admin Panel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-2">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #E60000">
                            <h6 class="text-white text-capitalize ps-3">Review Management table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead style="color: #E60000">
                                    <tr>
                                        <th class="text-center text-xxxxs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th class="text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Rating</th>
                                        <th class="text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Review</th>
                                        <th class="text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Reviewer Name</th>
                                        <th class="text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            User Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $data)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $data->id }}
                                            </td>
                                            <td class="align-middle text-sm">
                                                {{ $data->rating }}

                                                {{-- @php $ratenum = number_format($rating_value) @endphp
                                                <div class="rating p-0">
                                                    @for ($i = 1; $i <= $ratenum; $i++)
                                                        <i class="bi bi-star-fill checked"></i>
                                                    @endfor
                                                    @for ($j = $ratenum + 1; $j <= 5; $j++)
                                                        <i class="bi bi-star-fill" style="color: lightgray;"></i>
                                                    @endfor
                                                </div> --}}

                                            </td>
                                            <td class="align-middle text-sm">
                                                {{ $data->review }}
                                            </td>
                                            <td class="align-middle text-sm">
                                                {{ $data->reviewer->name }}
                                            </td>
                                            <td class="align-middle text-sm">
                                                {{ $data->user->name }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <span>
                        {{ $users->links() }}
                    </span> --}}
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
