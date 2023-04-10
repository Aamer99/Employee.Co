@extends('pageHeader')
@section('pageTitle','All Users')
@section('pageContent') 
      

    <table class="table table-white table-striped">
        <thead>
            <tr style="text-align: center">
              <th scope="col" >Title</th>
              <th scope="col">Status</th>
              <th scope="col">Created At </th>
              <th scope="col">Updateed At </th>
              
            
            </tr>
          </thead>
          <tbody>

            @foreach ($posts as $post)

            <tr style="text-align: center">
                <td>
                    <a href="/post/showPost/{{$post-> id}}">
                    {{$post-> title}}</td>
                    </a>
                <td>
                 @if ($post-> status == 0)
                 <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: orange; font-size:15px">●</span>  Biding</p>
                 @elseif($post-> status == 1)
                 <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: green; font-size:15px">●</span>  Published</p>
                 @else 
                 <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: red; font-size:15px">●</span>  Denied</p>
                 @endif
                
                </td>
                <td>{{$post-> created_at->format('d-m-Y')}}</td>
                <td>{{$post-> updated_at->format('d-m-Y')}}</td>
              </tr>     

            @endforeach
            
          </tbody>
      </table>
@endsection