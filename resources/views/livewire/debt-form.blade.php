@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-8 offest-2 ">
<div class="card">
    <div class="card-header bg-primary text-center text-white "><h3>Debt Management Module</h3></div>
    <div class="card-body">
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="rentAmount">Rent Amount</label>
                <input type="number" class="form-control" id="rentAmount" aria-describedby="rentHelp"
                    placeholder="Enter rent amount" wire:model="rentAmount">
                <small id="rentHelp" class="form-text text-muted">Enter the amount of rent you owe.</small>
            </div>
            <div class="form-group">
                <label for="utilityAmount">Utility Amount</label>
                <input type="number" class="form-control" id="utilityAmount" aria-describedby="utilityHelp"
                    placeholder="Enter utility amount" wire:model="utilityAmount">
                <small id="utilityHelp" class="form-text text-muted">Enter the amount of utility bill you owe.</small>
            </div>
            <div class="form-group">
                <label for="creditCardAmount">Credit Card Amount</label>
                <input type="number" class="form-control" id="creditCardAmount" aria-describedby="creditCardHelp"
                    placeholder="Enter credit card amount" wire:model="creditCardAmount">
                <small id="creditCardHelp" class="form-text text-muted">Enter the amount of credit card debt you
                    owe.</small>
            </div>
            <div class="form-group">
                <label for="loanAmount">Loan Amount</label>
                <input type="number" class="form-control" id="loanAmount" aria-describedby="loanHelp"
                    placeholder="Enter loan amount" wire:model="loanAmount">
                <small id="loanHelp" class="form-text text-muted">Enter the amount of loan debt you owe.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>
    </div>
    </div>
</div>
@endsection
