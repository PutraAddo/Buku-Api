@extends('layouts.main')

@section('title', 'Setting')

@section('konten')
<div class="container mt-4">
    <h1>Settings Page</h1>
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <form action="/settings/save" method="post">
        @csrf
        <div class="form-group">
            <label for="theme">Theme</label>
            <select class="form-control" id="theme" name="theme" required>
                <option value="light" {{ (session('settings.theme') == 'light') ? 'selected' : '' }}>Light</option>
                <option value="dark" {{ (session('settings.theme') == 'dark') ? 'selected' : '' }}>Dark</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection
