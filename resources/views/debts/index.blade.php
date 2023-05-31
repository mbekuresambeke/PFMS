@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-md-8 offeset-2">
                <h1>Debt Input Form</h1>
<table class="table table-striped table-responsive table-bordeless ">
    <tr>
        <th>Debtor Name</th>
        <th>Interest Rate</th>
        <th>Debt Amount</th>
        <th>Due Date</th>
        <th>Interest Rate Calculator</th>
    </tr>
    @foreach ($debts as $debt )
        <tr>
            <td>{{ $debt->debtor_name }}</td>
            <td>{{ $debt->interest_rate }}</td>
            <td>{{ $debt->amount }}</td>
            <td>{{ $debt->due_date }}</td>
            <td><a href="/debt/">Calculate Interest Rate</a></td>
        </tr>
    @endforeach
    <tr>

    </tr>
</table>
            </div>
        </div>
    </div>
@endsection
