@extends('layouts.app')

@section('content')

    <div class="tw-flex tw-justify-center tw-h-screen">
        <div class="tw-pt-5 tw-pt-20" style=" width: 100%; max-width: 350px;">
            <q-card flat bordered>
                <q-card-section>
                    <div class="text-h6">OakHouse Technology</div>
                    <div class="text-subtitle2">Log in to OakHouse Technology</div>
                </q-card-section>
            
                <q-card-section class="q-pt-none" >
                    <login-form></login-form>
                </q-card-section>
                <q-card-actions>
                </q-card-actions>
            </q-card>
        </div>
    </div>
@endsection
