@extends("layouts.app")




@section("content")



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NUmber</th>
        <th scope="col">Address</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $contacts_number as $contact )
        <tr>
          <th scope="row"></th>
          <td>{{$contact->mobile_num}}</td>
          <td>{{$contact->address}}</td>

          <td><a href="{{route('contact.edit' , $contact->mobile_num )}}" class="btn  btn-primary">Update</a></td>

          {!! Form::open(['route' => ['contact.destroy' , $contact->mobile_num ]  , "class" => "btn  btn-danger" , "method" => "delete"]) !!}

          <td><button  class="btn  btn-danger">Delete</button></td>

          {!! Form::close() !!}


        </tr>


        @endforeach

    </tbody>
  </table>


    @endsection
