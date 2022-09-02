@extends('layouts.main')

@section('title')
    User Management | Pursell Admin Panel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">User Management table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-primary text-xxxxs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Name</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Email</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            PhoneNo.</th>
                                        <th class="text-primary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $key){?>
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <?php echo $key->id; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->name; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->email; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->phoneno; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <button type="submit" class="btn btn-danger my-2 me-3">BLOCK</button>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <span>
                        {{ $users->links() }}
                    </span>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
