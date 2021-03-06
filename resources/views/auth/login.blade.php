@extends('layouts.app')

@section('content')
    <div class="tw-flex tw-justify-center tw-h-screen">
        <div class="tw-pt-20" style=" width: 100%; max-width: 350px;">
            <q-card flat bordered>
                <q-card-section>
                    <div class="text-subtitle1">Log in to OakHouse Technology</div>
                </q-card-section>
            
                <q-card-section class="q-pt-md" >
                    <login-form></login-form>
                </q-card-section>
                <q-card-actions>
                </q-card-actions>
            </q-card>
        </div>
    </div>
@endsection
