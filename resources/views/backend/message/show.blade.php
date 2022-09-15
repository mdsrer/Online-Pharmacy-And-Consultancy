@extends('frontend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Patient Post</h5>
  <div class="card-body">
    @if($message)
        @if($message->photo)
        <img src="{{$message->photo}}" class="rounded-circle " style="margin-left:44%;">
        @else 
        <img src="{{asset('backend/img/avatar.png')}}" class="rounded-circle " style="margin-left:44%;">
        @endif
        <div class="py-4">Patient Info <br>
           Name : {{$message->name}}<br>
           Email : {{$message->email}}<br>
        </div>
        <hr/>
  <h5 class="text-center"><strong>Category : </strong> {{$message->subject}}</h5>
        <p class="py-5">{{$message->message}}</p>
    @endif

    <hr/>
    <h5 class="text-center"><strong>Prescription By Doctor</strong></h5>
        <p class="py-5">{{$message->phone}}</p>
  </div>
</div>

<!-- @php
	$messages=DB::table('messages')->get();
@endphp -->


<h1>Prescription Section<h1>
<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$message->id}}">
  <input type="text" name="phone" placeholder="Enter Prescription">
  <button type="submit">Prescribe</button>
</form>


<!-- <table>

<tr>
<td>
</td>
<td>
Comment:
</td>
</tr>


<tr>
<td>
</td>
<td>
<textarea cols="35" rows="6" id="comment_entered">
</textarea>
</td>
</tr>

<tr>
<td>
</td>
<td>
<input type="submit" value="Comment" onclick="submitcomment();"/>
</td>
</tr>

</table>

<br><br>
<div id="showcomments"></div> -->




@endsection