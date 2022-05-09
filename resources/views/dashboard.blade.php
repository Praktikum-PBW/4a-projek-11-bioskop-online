@extends('layouts.sidebar')

@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="background-color: rgb(152, 171, 236);">
                <div class="card-body">
                    <h1>Film</h1>
                    <h4>20</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="background-color: rgb(152, 171, 236);">
                <div class="card-body">
                    <h1>Ticket</h1>
                    <h4>100</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="background-color: rgb(152, 171, 236);">
                <div class="card-body">
                    <h1>Transaction</h1>
                    <h4>30</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
            </svg>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Customers</h1>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anisa Fitdianida</td>
                        <td>Anisaftr</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dede Fitriyani</td>
                        <td>Dede</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Anisa Nur Hasanah</td>
                        <td>AnisaNH</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
            </svg>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Data Payment</h1>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anisa Fitdianida</td>
                        <td>Anisaftr</td>
                        <td><button class="btn btn-success">Paid</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dede Fitriyani</td>
                        <td>Dede</td>
                        <td><button class="btn btn-danger">Unpaid</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Anisa Nur Hasanah</td>
                        <td>AnisaNH</td>
                        <td><button class="btn btn-warning">Waiting</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
