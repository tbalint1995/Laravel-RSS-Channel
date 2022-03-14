@extends('layouts.app')
 @section('content')

                    <h2 class="my-4"><a href="{{ route('rss.add') }}"><i class="fa fa-plus"></i></a> RSS csatornáim</h2>

                    @if( $rss->total()>0 )
                    <div class="row p-2">
                        <div class="col-md-4 text-bold">Név</div>
                        <div class="col-md-4">URL</div>
                        <div class="col-md-2">Létrehozva</div>
                        <div class="col-md-2 text-end"> Művelet </div>
                    </div>
                    @foreach ($rss as $item )
                    <div class="row  border border-secondary m-2 p-2">
                        <div class="col-md-4">{{$item->name}}</div>
                        <div class="col-md-4">{{$item->url}}</div>
                        <div class="col-md-2">{{$item->created_at}}</div>
                        <div class="col-md-2 text-end"> <form action="{{ route('rss.delete') }}" method="post"> @csrf <input type="hidden" name="delete" value="{{ $item->id }}"> <button class="btn btn-danger " ><i class="fa fa-times"></i></button> <a href="{{  route('rss.view') }}?url={{ urlencode($item->url) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>  </form>  </div>
                    </div>
                    @endforeach
                
                    <div class="row justify-content-center">

                    {{ $rss->links('vendor.pagination.bootstrap-4') }}

                    </div>
                    @else 
                        <p class="text-center">Még nincs létrehozva egyetlen csatorna sem!
                            <br><br>
                         <a href="{{ route('rss.add') }}"><i class="fa fa-plus fa-3x"></i></a>
                    </p>
                    @endif
@endsection            