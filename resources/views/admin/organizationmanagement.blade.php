@extends('layouts.main')

@section('title')
    Organization Management | Pursell Admin Panel
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control border" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image:</label><br>
                            <input type="text" name="image" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Telephone:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Location:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Street:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Website:</label>
                            <input type="text" class="form-control border" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Organization Management table &nbsp;
                                <button type="button" class="btn btn-white float-end me-3" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">ADD</button>
                                {{-- <button type="button" class="btn btn-white float-end me-3">Add</button> --}}
                            </h6>

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
                                            Description</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Image</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Telephone</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Location</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Street</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Email</th>
                                        <th class="text-primary text-xxxxs font-weight-bolder opacity-7 ps-2">
                                            Website</th>
                                        <th class="text-primary opacity-7"></th>
                                        <th class="text-primary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($organizations as $key){?>
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <?php echo $key->id; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->name; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->description; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->image; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->telephone; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->location; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->street; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->email; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <?php echo $key->website; ?>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <button type="submit" class="btn btn-success my-2">Edit</button>
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
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection