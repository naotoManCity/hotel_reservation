@extends('layouts.users')

@section('content')
<div class="container w-50">
    <div class="row justify-content-center">
        <div class="fs-1 text-center">
            お問合わせ
        </div>
        <form method="post" action="{{ route('contacts.send') }}">
            @csrf
            <div class="mb-3">
                <label for="InputName" class="form-label">お名前<span class="text-white bg-danger rounded px-2 mx-1">必須</span></label>
                <input name="name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="姓名" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">メールアドレス<span class="text-white bg-danger rounded px-2 mx-1">必須</span></label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="このメールアドレスにご返信します" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">メールアドレス確認<span class="text-white bg-danger rounded px-2 mx-1">必須</span></label>
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="もう一度入力してください">
            </div>
            <div class="mb-3">
                <label for="inputContent" class="form-label">お問合わせ内容<span class="text-white bg-danger rounded px-2 mx-1">必須</span></label>
                <textarea name="content" id="content" class="form-control" placeholder="お問合わせ内容をご記入ください" rows="8">{{ old('content') }}</textarea>
                @error('content')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection