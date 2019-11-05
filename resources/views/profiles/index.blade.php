@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
           <img src="../images/logo2.png">
        </div>
        <div class="col-9 pt-5">
            @foreach ($users as $user)
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>37</strong>Posts</div>
                <div class="pr-3"><strong>4k</strong>Followers</div>
                <div class="pr-3"><strong>96</strong>Following</div>
            </div>
            <div class="pt-4 font-weith-bold"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="">{{ $user->profile->url }}</a></div>
            @endforeach
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6Bk8eP67PcjsNud0ORe6UC_L-yMa9jkNdOtl19oj373Y2qyPC" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIMiGQUVUS_idbIlijiMVEepNVcpkXfsSTdcY-IlJVd6pGB2v1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cms.prod.nypr.digital/images/25637/fill-661x496/" class="w-100">
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIeANC8yDG6g9bPvXTptUFbROLnkCZPSpWDEbjKYN-sQZCprkb" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i1.wp.com/tricksmaze.com/wp-content/uploads/2017/06/Cool-Instagram-Captions.jpg?resize=600%2C400&ssl=1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRJd3d6MVeJdXYHQ4MevP5Bf45TBBOPSutKRQIOkbIUnP1ZDL6m" class="w-100">
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT-iOWaZb2QM-FOGmW9rL9T1DdrCJ3JvtJ1LhEUh4QcS-FCSviy" class="w-100">
        </div>
        <div class="col-4">
            <img src="http://cdn.hoahoctro.vn/uploads/2018/06/5b177b888c255-20180606091005-be6e.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLY31p9BCiQomLEtzXDz_mU6hqaLGSAQ6me8QW-PiNoNL4YQrB" class="w-100">
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvfNnfrppFjf6-T-r7imtW4BpQbqyI_9KkDh5KvwwNnGd17KdW" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRLBK7U0faJcCXVPnsM_tmrybyRXgOAYqb1QF7WXLf1YdfsTEEz" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdLCasr2CuFi5lfvJmnERQHfjMUK6olFvkNN-niNQ1stbFjlhy" class="w-100">
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjRzE8XIOc1BNMzNNQpb9VT76BAtsonNhcktZl1q08K9DZWv4n" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSDd4RJp1ZOYFwMc4oc1WGdkeSXALAvAkyPEBMN2cCQF_MWLzDE" class="w-100">
        </div>
        <div class="col-4">
            <img src="http://cdn01.cdn.justjared.com/wp-content/uploads/2017/12/hadid-xmaseve/gigi-hadid-zayn-malik-families-celebrate-christmas-05.jpg" class="w-100">
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://imagesvc.timeincapp.com/v3/fan/image?url=https://houseofhouston.com/wp-content/uploads/getty-images/2017/07/1074693692.jpeg&" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQfIAb5OqpBNU6xNl2PgFeLOQXIl9Li7ZDhPVSZhKqCTkeMnFDE" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8WAIGBV0PrgQec40OWIADYK8MVcILl3tBq6a3ZpO790skHRqP" class="w-100">
        </div>
    </div>
</div>
@endsection
