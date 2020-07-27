@extends('layouts.menu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container  pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa text-dark"></i> Challenges Progress
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <table class="table table-dark m-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">challenge name</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>
                        <input type="text" name="status" id="status">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-info mb-2">Save</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
        @endsection
