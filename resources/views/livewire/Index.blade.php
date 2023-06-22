<div>
    <h1>Debt Management System</h1>

    <div class="form-group">
        <input type="text" class="form-control" wire:model="search" placeholder="Search...">
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Debt List</h4>
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addDebtModal">Add Debt</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debts as $debt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $debt->name }}</td>
                                <td>{{ $debt->amount }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" wire:click="edit({{ $debt->id }})" data-toggle="modal" data-target="#updateDebtModal">Edit</button>
                                    <button class="btn btn-danger btn-sm" wire:click="delete({{ $debt->id }})">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.add-debt-modal')
    @include('livewire.update-debt-modal')
</div>
