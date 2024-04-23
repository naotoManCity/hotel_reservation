@extends('layouts.admins')

@section('content')
<div class="container w-50">
    <div class="row justify-content-center">
        <div class="fs-1 text-center">
            お問合わせ一覧
        </div>
        <div class="card-body">
            {{-- @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif --}}
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">名前</th>
                <th scope="col">お問合わせ内容</th>
                <th scope="col">作成日</th>
                <th scope="col">対応状況</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->content}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td>{{ $contact->status === 0 ? '未対応' : '対応済み' }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
