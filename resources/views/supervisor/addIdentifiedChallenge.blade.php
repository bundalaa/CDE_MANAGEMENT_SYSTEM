@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\Challenge;
    use App\IdentifiedChallenge;
@endphp
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fa-folder-open text-dark"></i> Add Sub Challenge
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
<div class="container">
    <br>
<h2>Add Sub Challenge To:
@php
    $challenged = Challenge::where('id',$id)->first();
    $challenges = IdentifiedChallenge::where('id',$challenged['identified_challenge_id'])->first();
@endphp
   <b style="text-transform:uppercase;font-size: 15px" class="text-info">{{$challenged['name']}}</b>
</h2>
<form action="{{route('addidentifiedchallenges')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="challenge_id" value="{{$id}}" hidden>
        <div class="form-group">
            <label for="Sub Challenge Title"></label>
            <div class="input-group">
                <div class="input-group-append">
                    <button class="btn btn-info">
                        <i class="fas fa-folder-open"></i>
                    </button>
                </div>
                <input type="text" name="name" id="title" class="form-control p-4"
                    placeholder="Title" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Sub Challenge Description"></label>
            <div class="input-group">
                <div class="input-group-append">
                    <button class="btn btn-info">
                        <i class="fas fa-folder-open"></i>
                    </button>
                </div>
                <input type="text" name="description" id="description" class="form-control p-4"
                    placeholder="Description" required>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" id="submit"
                class="form-control btn-secondary"><i class="fas fa-check-circle"></i>
                Save
                Sub Challenge
            </button>
        </div>
        </form>
                 </div>
                    </div>
       @endsection
