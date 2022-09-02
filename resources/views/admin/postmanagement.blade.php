@extends('layouts.main')

@section('title')
    Post Management | Pursell Admin Panel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Posts Management table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-primary text-xxxxs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Title</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Category</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Username</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Address</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Description</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Price</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            ExpiryDate</th>
                                        <th class="text-primary opacity-7">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($posts as $key){?>
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <?php echo $key->id; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->title; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->category->name; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->user->name; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->address; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->description; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->price; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->expirydate; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <button type="submit" class="btn btn-danger my-2 me-3">DELETE</button>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <span>
                        {{ $posts->links() }}
                    </span>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
