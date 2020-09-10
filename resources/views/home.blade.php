@extends('layouts.app')

@section('title','Home')

@section('content')
{{-- Page Title --}}

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">test</div>
                    </div>

                    <div class="card-body">
                        <x-form.input label="input pertama" type="text" name="nama"/>
                        <x-form.input label="ini coba ke 2" type="number" name="test"/>
                        <x-form.input label="tanggal" type="date" name="date"/>
                        <x-form.select label="buah" name="buah" :data="$data" />
                        <x-form.area label="alamat" name="alamat"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
