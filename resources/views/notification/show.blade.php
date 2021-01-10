@extends('layouts.app')

@section('content')

    @forelse($notifications as $notification)
      <li>  @if($notification->type =='App\Notifications\PaymentNotify')
            we have recieved a notification $ {{$notification->data['amount']/100}} from you
            @endif
      </li>
    @empty
        <div class="box"> you don't have unread notifications </div>
    @endforelse

@endsection
