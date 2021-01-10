@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">

                    <div class="card-content">

                     <form action="/notification" method="post">
                            @csrf
                         <div class="field">
                             <label for="content" class="label">Message</label>
                             <div class="control">
                                 <input class="input textarea" type="text" name="content" >
                             </div>
                         </div>
                         <div class="control">
                             <button  type="submit"  class="button is-link">create</button>
                         </div>
                            @if(session('message'))
                                <div class="box" style="color: #f80202;"><h3>{{session('message')}}</h3></div>
                            @endif
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
