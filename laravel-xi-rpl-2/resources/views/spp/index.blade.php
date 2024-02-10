@extends('index')
@section('contentindex')
@forelse ($spp as $key => $value)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <br>
                <td>
                  {{ $value->tahun }}
                  {{ $value->nominal }}
                </td>
                <br>
                <td>
                  <br>
                  <a href="{{ route('spp.edit', $value->tahun) }}" class="btn btn-sm btn-warning">
                    Edit
                  </a>
                  <form action="{{ route('spp.destroy', $value->tahun)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button value="delete">Delete</button>
                  </form>
                </td>
                <br>
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
@endsection